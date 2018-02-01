
$(function () {
    var dialog = (window.dialog || $.dialog);
    var altType = !!(dialog) ? 'dialog' : !!window.layer ? 'layer' : 'alert';

    if (altType == 'alert') return alert('缺少dialog或者layer插件');
    var altUtil = {
        tip: function (msg, dom) {
            var callback = function () { setTimeout(function () { dom && dom.focus() }, 100) };
            if (altType == 'dialog') {
                var d = dialog({
                    skin: "dialog-forgot",
                    title: "温馨提示",
                    padding: '30px',
                    lock: true,
                    content: '<span class="' + status + '">' + msg + '</span>',
                    ok: callback
                });
                //art需要show或者showModal
                typeof d.showModal == 'function' && d.showModal(dom);
            } else {
                layer.tips(msg, dom, { title: "温馨提示" });
                callback();
            }
        },
        open: function (opt) {
            if (altType == 'dialog') {
                var d = dialog({
                    skin: "dialog-forgot",
                    title: opt.title || '温馨提示',
                    okValue: "确认",
                    cancelValue: "取消",
                    content: opt.content,
                    width: 400,
                    lock: true,
                    ok: opt.yes || $.noop,
                    init: opt.init || $.noop,
                    initialize: opt.init || $.noop,
                    onshow: opt.init || $.noop,
                    cancel: $.noop
                });
                //art需要show或者showModal
                typeof d.showModal == 'function' && d.showModal();
                return d;
            } else {
                var index = layer.open({
                    skin: "dialog-forgot",
                    title: opt.title,
                    content: opt.content,
                    area: '450px',
                    tipsMore: true,
                    btn: ['确定', '取消'],
                    success: opt.init || $.noop,
                    yes: opt.yes || $.noop,
                    fixed:false
                });
                return {
                    close: function () {
                        layer.close(index);
                    }
                }
            }
        }
    }
    //大厅中忘记密码
    var isSubmiting = false;
    $("#forgetBtn,[name=forgetBtn]").click(function () {
        $.get("/Home/ForgetPwd?20170619", function (data) {
            var d = data;
            currentDialog = altUtil.open({
                title: '忘记密码',
                content: data,
                yes: function () {
                    submitFP($("#forgetPwd")[0]);
                    return false;
                },
                init: function () {
                    $("#forgetPwd").on("submit", function (event) {
                        event.preventDefault();
                    });
                    change_zc_yzm(); /// 同步更新登录的验证码
                }
            });
        });
    });

    //去掉邮箱，增加真实姓名
    function submitFP(formEle) {
        var param = {}, domData = {};
        //_email
        $.map(["_username", "_realname", "_password", "_vlcodes"], function (item) {

            param[item.replace(/^_/, "")] = formEle.elements[item].value;
            domData[item.replace(/^_/, "")] = formEle.elements[item];
        });

        if ($.trim(param.username) == "") {
            altUtil.tip("用户名不可以为空！", domData["username"]);
            return false;
        }
        //else if (!(/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(param.email))) {
        //    altUtil.tip("邮箱地址不可以为空或邮箱地址不正确！", domData["email"]);
        //    return false;
        //} 
        else if ($.trim(param.realname) === '') {
            altUtil.tip("真实姓名不可以为空！", domData["realname"]);
            return false;
        } else if ($.trim(param.password) === '') {
            altUtil.tip("取款密码不可以为空！", domData["password"]);
            return false;
        } else if ($.trim(param.vlcodes) === '') {
            altUtil.tip("验证码不可以为空！", domData["vlcodes"]);
            return false;
        }
        isSubmiting = true;
        $.ajax({
            url: "/Home/GetPwd",
            type: "POST",
            dataType: "json",
            data: param,
            success: function (data) {
                var msg = data.infor, dom;
                if (data.status) {
                    currentDialog.close();
                    change_zc_yzm();
                    altUtil.tip(msg);
                } else {
                    if (data.infor.indexOf('会员') > -1) {
                        dom = domData.username;
                    }
                    //else if (data.infor.indexOf('邮箱') > -1) {
                    //    dom = domData.email;
                    //}
                    else if (data.infor.indexOf('真实姓名') > -1){
                        dom = domData.realname;
                    }
                    else if (data.infor.indexOf('密码') > -1) {
                        dom = domData.password;
                    } else if (data.infor.indexOf('验证码') > -1) {
                        dom = domData.vlcodes;
                    }
                    altUtil.tip(data.infor, dom);
                }
            },
            complete: function () {
                isSubmiting = false;
            }
        });
    }

    $(document.body).unbind('click').on('click', '#checkNum_img', function (e) {
        change_zc_yzm();
    });
    $(document.body).on('focus', '#vlcodes', function (e) {
        //console.log(e.target.tagName);
        if (this.value === '验证码') {
            this.value = '';
        };
        change_zc_yzm();
    });
    $(document.body).on('blur', '#vlcodes', function (e) {
        e.preventDefault();
        if (this.value === '') {
            this.value = '验证码';
        };
    });
    function change_zc_yzm() {
        var url = "/Home/ValidateCode?t=" + (new Date() - 0);
        $("img[src^='\/Home\/ValidateCode']").attr("src", url);
        $("#checkNum_img").attr("src", url);
    };
});
