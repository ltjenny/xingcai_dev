/// 代理注册
/// <reference path="../Common/knockout-3.4.0.debug.js" />
$(function () {
    if (!ko.bindingHandlers.placeholder) {
        ko.bindingHandlers.placeholder = {
            id: new Date() - 0,
            init: function (element, valueAccessor, allBindings, viewModel, bindingContext) {
                var value = valueAccessor(), $element = $(element);
                var arr = value.split('|');
                var css = arr.length > 1 ? ' class="' + arr[1] + '"' : '';
                var id = 'ph' + (++ko.bindingHandlers.placeholder.id);
                $element.attr("id", id).before('<label for="' + id + '"' + css + '>' + arr[0] + '</label>');
                $element.on({
                    focus: function () {
                        $(this).prev("label").hide();
                    },
                    blur: function () {
                        if (this.value.length === 0) {
                            $(this).prev("label").show();
                        }
                    }
                });
            }
        };
    }

    /// input中含有needed属性则属于必填字段
    function fieldsOptions(type) {
        var options = {
            account: {
                title: "账号",
                validation: [
                    {
                        validator: function (value) {
                            return !/^[\da-z]{3,15}$/i.test(value);
                        },
                        message: "账号只能是数字和字母，长度为3-15位"
                    }
                ]
            },
            password: {
                title: "登录密码",
                validation: [

                ]
            },
            repassword: {
                title: "确认密码",
                validation: [
                    {
                        equal: "password",
                        message: "两次密码不一致"
                    }
                ]
            },
            verifycode: {
                title: "验证码",
                validation: [
                    {
                        validator: function (value) {
                            return !/^[a-z\d]{4,6}$/i.test(value);
                        },
                        message: "验证码格式错误"
                    }
                ]
            },
            /// 真实姓名
            realname: {
                title: "真实姓名",
                validation: [
                    {
                        validator: function (value) {
                            return !/^.{2,20}$/.test($.trim(value));
                        },
                        message: "真实姓名过长或过短,长度为2-20位"
                    }
                ]
            },
            /// 手机号码
            phone: {
                title: "手机号码",
                validation: [
                    {
                        validator: function (value) {
                            return !/^\d{9,16}$/.test(value);  /// 考虑到国际号码，验证方法先这样写
                        },
                        message: "手机号码格式不正确,长度由9-16位的数字组成"
                    }
                ]
            },
            /// 邮箱
            email: {
                title: "邮箱",
                validation: [
                    {
                        validator: function (value) {
                            return !/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(value);
                        },
                        message: "邮箱格式不正确"
                    }
                ]
            },
            /// 微信
            wechat: {
                title: "微信",
                validation: [
                    {
                        validator: function (value) {
                            return !/^[a-z\d][\d\w\-]{5,12}$/i.test(value);
                        },
                        message: "微信格式不正确,长度由6-13位字母和数字组成"
                    }
                ]
            },
            /// QQ
            qq: {
                title: "QQ",
                validation: [
                    {
                        validator: function (value) {
                            return !/^[1-9]\d{5,11}$/i.test(value);
                        },
                        message: "QQ号格式不正确,长度为6-12位数字组成"
                    }
                ]
            },
            token: {

            }
        };
        /// pwd
        if (type === "LOGIN") {
            options.username = options.account;
            options.validateCode = options.verifycode;
            options.password.validation.push({
                validator: function (value) {
                    return false; //!(/^.{6,13}$/.test(value) && /^(\d*[A-Za-z]+\d+)+|(\d+[A-Za-z]+\d*)+$/.test(value));
                },
                message: "密码输入错误，密码为6-13位数字和字母组合"
            });
        } else if (type === "REG") {
            options.password.validation.push({
                validator: function (value) {
                    return !(/^.{6,13}$/.test(value) && /^(\d*[A-Za-z]+\d+)+|(\d+[A-Za-z]+\d*)+$/.test(value));
                },
                message: "登录密码必须为6-13位数字和字母组合"
            });
        }
        return options;
    }

    var datetime = new Date() - 0;
    var __vms = {};
    var CommonForm = function (type, fieldsArr) {
        var that = this;
        this.fields = {};
        this.fieldsArr = fieldsArr;
        this.type = type.toUpperCase();
        this.loginSuccessToLink = window['loginSuccessToLink'] || '/';
        this.registeSuccessToLink = window['registeSuccessToLink'] || '/';
        ko.utils.arrayForEach(this.fieldsArr, function (el) {
            that.fields[el.name] = ko.observable(el["default"] || "");
        });

        this.random = ko.observable(datetime); /// 验证码随机数（用于刷新验证码）
        this.agree = ko.observable(true); /// 是否同意协议（默认同意，有些页面没有该选项所以必须默认是同意）
        this.isSubmitting = ko.observable(false);

        this.submit = function (form) {
            if (that.isSubmitting()) return;

            /// 验证不通过
            if (!that.Check(data)) return;

            var data = {};
            ko.utils.arrayForEach(this.fieldsArr, function (el) {
                data[el.name] = that.fields[el.name]();
            });

            /// 登录密码加密
            if (that.type === "LOGIN" && $.md5) {
                data.password = $.md5($.md5(data.password) + data.validateCode);
            }

            that.isSubmitting(true);
            $.ajax({
                url: form.action,
                type: form.method,
                data: data,
                cache: false,
                success: function (json) {
                    if (json.status) {
                        if (that.type === "LOGIN") {
                            that.RemoveCache("oldMegDate");
                            location.href = that.loginSuccessToLink + "?" + (new Date() - 0);
                        } else {
                            that.Modal(json.info, function () {
                                location.href = that.registeSuccessToLink + "?" + (new Date() - 0);
                            });
                        }
                    } else {
                        that.fields.verifycode && that.fields.verifycode("");
                        that.fields.validateCode && that.fields.validateCode("");
                        that.refreshCode();
                        that.Modal(json.info ? json.info : "登录失败，请重新登录");
                    }
                },
                error: function () {
                    that.Modal("网络异常，请刷新页面");
                },
                complete: function () {
                    that.isSubmitting(false);
                }
            });
        }

        /// 刷新验证码
        this.refreshCode = function () {
            datetime = new Date() - 0;
            for (var key in __vms) {
                typeof __vms[key] == "object" && __vms[key].random(datetime);
            }
            //this.random(new Date() - 0);
        }

        /// 重置表单
        this.reset = function () {
            for (var key in this.fields) {
                this.fields[key]("");
            }
        }

        /// 查看开户协议等     
        this.infoModal = function ($dom, title) {
            that.Modal({
                title: title,
                content: $dom.html()
            });
        }

        /// 生成账号
        this.generateAccount = function () {
            $.get("/Home/GetAutoAccount?t=" + (new Date() - 1), function (data) {
                that.fields.account(data);
            });
        }

        /// 检查账号是否可用
        this.checkAccount = function () {
            var account = that.fields.account();

            var validate = ko.utils.arrayFilter(fields.account.validation, function (el) {
                return el.required ? account.length === 0 : el.validator(account);
            });
            if (validate.length > 0) return;

            $.ajax({
                url: "/Home/CheckMemberName",
                data: { username: account },
                cache: false,
                success: function (json) {
                    if (json.status == true) {
                        that.Modal('该账号已被注册,请更换账号');
                    }
                }
            });
        }
    }

    /// 验证表单
    CommonForm.prototype.Check = function () {
        if (!this.agree()) {
            this.Modal("需要同意协议才能注册");
            return false;
        }

        for (var i = 0, len1 = this.fieldsArr.length; i < len1; i++) {
            var fieldItem = this.fieldsArr[i];
            if (i === 0) {
                this.fields[fieldItem.name](this.fields[fieldItem.name]().trim());
            }
            var validation = fieldItem.validation;
            for (var j = 0, len2 = validation.length; j < len2; j++) {
                var value = this.fields[fieldItem.name]();
                var item = validation[j];

                /// 可以为空，则跳出该字段的验证
                if (!item.required && value.length === 0) {
                    break;
                }

                if (item.required) {
                    if (value.length === 0) {
                        this.Modal(fieldItem.title + "不能为空");
                        return false;
                    }
                    continue;
                }

                /// equal
                if (item.equal && this.fields[item.equal]() !== value) {
                    this.Modal(item.message);
                    return false
                }

                /// validation
                if (item.validator && item.validator(value)) {
                    this.Modal(item.message);
                    return false;
                }
            }
        }
        return true;
    };

    /// 整合兼容artdialog5.x/6.x 、 layer、alert
    CommonForm.prototype.Modal = function (info, callback) {
        var options = {
            id: "alert",
            skin: "dialog-custom",
            title: "操作提示",
            content: info,
            okValue: "确定",
            lock: true,
            fixed: true,
            beforeunload: callback || $.noop, //artDialog 5.x
            onclose: callback || $.noop, //dialog
            end: callback || $.noop, //layer
            ok: callback || $.noop
        };
        if (typeof info === "object") {
            ko.utils.extend(options, info);
        }


        /// artDialog 5.x
        if (window.artDialog) {
            return artDialog(options);
        }
        /// artDialog 6.x
        else if (window.dialog && dialog.create) {
            return dialog(options).showModal();
        }
        /// 手机版自定义的dialog
        else if (window.dialog) {
            return dialog(options);
        }
        /// layer
        else if (window.layer) {
            var index = layer.open(options);
            return {
                close: function () {
                    layer.close(index);
                }
            };
        } else {
            alert(info);
            options.ok();
        }
    }

    /// 删除cookie或LocalStorage
    CommonForm.prototype.RemoveCache = function (name) {
        if (window.sessionStorage) {
            sessionStorage.removeItem(name);
        } else {
            document.cookie = name + "=;expires=Thu,01-Jan-1970 00:00:01 GMT";
        }
        return this;
    }

    /// 启动表单
    /// @param {String} domId dom节点id
    /// @param {String} type 表单类型, REG / LOGIN
    window.bootstrapForm = function (domId, type) {
        var isDom = /html/i.test(Object.prototype.toString.call(domId));
        type = type.toUpperCase();
        var dom = isDom ? domId : document.getElementById(domId);
        if (dom) {
            var fieldsArr = [], fields = fieldsOptions(type);

            /// 在使用ko前 先用jQuery从form表单中得到需要的字段
            $(dom).find("form").find("[data-bind*='fields.']").each(function () {
                var $this = $(this);
                var name = $this.attr('data-bind').match(/fields\.(\w+)/)[1]

                if (fields[name]) {
                    fields[name].name = name;
                    if (!fields[name].validation) fields[name].validation = [];
                    if ($this.attr("needed") !== undefined) {
                        fields[name].validation.unshift({ required: true });
                    }

                    fieldsArr.push(fields[name]);
                } else {
                    window.console && console.error("fields对象没有对[name=%s]做配置", name);
                }
            });

            var vm = new CommonForm(type, fieldsArr);
            ko.applyBindings(vm, dom);
            if (isDom) __vms[type + (new Date() - 0)] = vm;
            return vm;
        }
    }

    /// 注册 和 登录
    ko.utils.arrayForEach(["REG-FORM", "LOGIN-FORM", "LOGIN-FORM01", "LOGIN-FORM02","REG-FORM01"], function (el) {
        __vms[el] = bootstrapForm(el, el.split('-')[0]);
    });
});