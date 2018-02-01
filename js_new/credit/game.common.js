/// 六 与 快彩 共用部分
/// <reference path="../Common/knockout-3.4.0.debug.js" />
/// <reference path="../Common/jquery-1.11.3.js" />
/// <reference path="utils.js" />
(function (undefined) {
    window.GAME = {};

    GAME.__CACHE = {}; /// 缓存数据

    /// 游戏规则
    GAME.viewRule = function () {
        if (GAME.__CACHE.RULE) {
            show(GAME.__CACHE.RULE);
        } else {
            var d = dialog('正在打开游戏规则中...').showModal();
            $.get("/rule/index", { _: new Date().format('yyMMdd') }, function (res) {
                d.remove();
                GAME.__CACHE.RULE = res;
                show(res);
            });
        }

        function show(res) {
            dialog({
                title: "规则说明",
                id: 'RULE',
                width: 850,
                padding: 0,
                content: res,
                onshow: function () {
                    var dom = this._$('content');
                    var nav = dom.find('[rule=nav]');
                    var content = dom.find("[rule=content]");
                    nav.delegate(">li", "click", function () {
                        $(this).addClass("curr").siblings('.curr').removeClass('curr');
                        var gameid = $(this).data("id");
                        content.children('[data-id=' + gameid + ']').show().siblings().hide();
                    });
                }
            }).showModal();
        }
    }

    /// 弹窗登录
    GAME.login = function () {
        var f = null;
        dialog({
            title: "登录账户",
            content: document.getElementById("tpl-login").innerHTML,
            okValue: '登录',
            ok: function () {
                this._$('content').find("form").submit();
                return false;
            },
            onshow: function () {
                var self = this;
                var $form = this._$('content').find("form");
                var $img = $form.find("img");
                if (document.body.style.textShadow === undefined) {
                    $form.addClass("login-show-label");
                    $form.delegate("input:text,input:password", {
                        focus: function () {
                            $(this).siblings("label").hide();
                        },
                        blur: function () {
                            var $this = $(this);
                            if ($this.val() === "") {
                                $this.siblings("label").show();
                            }
                        }
                    });
                }
                $img.on("click", function () {
                    changecode($(this));
                });

                $(document, 'body').on('keydown', function (e) {
                    if (e.keyCode === 13 && $(document.activeElement).parents("form")[0] === $form[0]) {
                        $form.submit();
                    }
                });

                /// 提交表单
                $form.on("submit", function () {
                    var username = $.trim($form.find("[name=username]").val());
                    var password = $.trim($form.find("[name=password]").val());
                    var code = $.trim($form.find("[name=code]").val());

                    if (username === "") {
                        return tip(self, "账号不能为空");
                    } else if (password === "") {
                        return tip(self, "密码不能为空");
                    } else if (password.length < 4) {
                        return tip(self, "密码似乎太短了");
                    } else if (code === "") {
                        return tip(self, "验证码不能为空");
                    } else if (code.length < 4) {
                        return tip(self, "验证码格式不正确");
                    }
                    self.statusbar("正在登录中...");
                    $.ajax({
                        url: "/Login",
                        type: "post",
                        data: { username: username, password: $.md5($.md5(password) + code), validateCode: code },
                        success: function (json) {
                            if (json.status) {
                                tip(self, '登录成功', '#3ABD3F');
                                location.reload();
                            } else {
                                changecode($img);
                                tip(self, json.info);
                            }
                        }
                    });
                    return false;
                });
            },
            cancel: $.noop
        }).showModal();

        function tip(d, msg, color) {
            color = color || '#DABAA6';
            clearTimeout(f);
            d.statusbar('<div style="color:' + color + ';">' + msg + '</div>');
            f = setTimeout(function () {
                d.statusbar('');
            }, 3000);
            return false;
        }

        function changecode(dom) {
            dom.attr("src", "/Home/ValidateCode?" + (new Date() - 0));
        }
    }
})();