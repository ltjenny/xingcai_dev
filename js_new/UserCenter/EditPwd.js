/// <reference path="../_reference.js" />
(function () {
    var _compress = LZString.compressToEncodedURIComponent;
    window.LZString = undefined;
    var EditPwdModel = function () {
        var that = this;
        that.showLoginPwd = ko.observable(true);
        that.oldLoginPwd = ko.observable('');
        that.newLoginPwd = ko.observable('');
        that.okNewLoginPwd = ko.observable('');
        that.showWithdrawalPwd = ko.observable(false);
        that.oldWithdrawalPwd = ko.observable('');
        that.newWithdrawalPwd = ko.observable('');
        that.okNewWithdrawalPwd = ko.observable('');

        this.isSubmitting = ko.observable(false);

        ///密码修改切换
        that.switchPwd = function (data, event) {
            var thisEle = event.currentTarget ? $(event.currentTarget) : event;
            var type = thisEle.data('type') || 1;
            that.showLoginPwd(type === 1);
            that.showWithdrawalPwd(type === 2);
            thisEle.removeClass("active").siblings(".btn").addClass("active");
            that.reset();
        };
        that.reset = function (data, event) {
            that.oldLoginPwd('');
            that.newLoginPwd('');
            that.okNewLoginPwd('');
            that.oldWithdrawalPwd('');
            that.newWithdrawalPwd('');
            that.okNewWithdrawalPwd('');
        };

        ////修改登录密码
        that.modifyLoginPwd = function (data, event) {
            if (that.isSubmitting()) return;
            if (!IsGeneralize) {
                if (that.oldLoginPwd() == "") {
                    utils.tip("请输入旧登录密码", '#ff0000', function () {
                        setTimeout(function () {
                            $('[name="oldLoginPwd"]').focus();
                        }, 400);
                    });
                    return false;
                }
            }
            if (that.newLoginPwd() == "") {
                utils.tip("请输入新登录密码", '#ff0000', function () {
                    setTimeout(function () {
                        $('[name="newLoginPwd"]').focus();
                    }, 400);
                });
                return false;
            }
            if (!(/^.{6,13}$/.test(that.newLoginPwd()) && /^(\d*[A-Za-z]+\d+)+|(\d+[A-Za-z]+\d*)+$/.test(that.newLoginPwd()))) {
                utils.tip('密码由数字和字母组成，长度在6-13位之间', '#ff0000', function () {
                    setTimeout(function () {
                        $('[name="newLoginPwd"]').focus();
                    }, 400);
                });
                return false;
            }
            if (/^\d+$/.test(that.newLoginPwd())) {
                utils.tip('登录密码不能是纯数字', '#ff0000', function () {
                    setTimeout(function () {
                        $('[name="newLoginPwd"]').focus();
                    }, 400);
                });
                return false;
            }
            if (/^[a-z]+$/i.test(that.newLoginPwd())) {
                utils.tip('登录密码不能是纯字母', '#ff0000', function () {
                    setTimeout(function () {
                        $('[name="newLoginPwd"]').focus();
                    }, 400);
                });
                return false;
            }
            if (!IsGeneralize) {
                if (that.oldLoginPwd() == that.newLoginPwd()) {
                    utils.tip("请勿输入和旧密码相同的新密码", '#ff0000', function () {
                        setTimeout(function () {
                            $('[name="newLoginPwd"]').focus();
                        }, 400);
                    });
                    return false;
                }
            }
            if (that.okNewLoginPwd() == "") {
                utils.tip("请确认新登录密码", '#ff0000', function () {
                    setTimeout(function () {
                        $('[name="okNewLoginPwd"]').focus();
                    }, 400);
                });
                return false;
            }
            if (that.newLoginPwd() != that.okNewLoginPwd()) {
                utils.tip("新密码和确认密码不匹配", '#ff0000', function () {
                    setTimeout(function () {
                        $('[name="newLoginPwd"]').focus();
                    }, 400);
                });
                return;
            }
            var params = {
                oldPwd: _compress(that.oldLoginPwd()),
                newPwd: _compress(that.newLoginPwd()),
                okPwd: _compress(that.okNewLoginPwd())
            };
            that.isSubmitting(true);
            $.ajax({
                url: "/AccountManager/UpdateLoginPwd",
                method: "post",
                data: params,
                success: function (data) {
                    if (data.status) {
                        utils.tip("修改成功，2秒后自动退出登录。", data.status);
                        setTimeout(function () { top.location.href = "/Home/Logout"; }, 2000);
                    } else {
                        utils.tip(data.info, '#ff0000');
                    }
                },
                complete: function () {
                    that.isSubmitting(false);
                }
            });
        };


        ////修改提款密码
        that.modifyWithdrawalPwd = function (data, event) {
            if (that.isSubmitting()) return;
            if (hasWithdrawalPwd == 'True') {
                if (that.oldWithdrawalPwd() == "") {
                    utils.tip("请输入旧提款密码", '#ff0000', function () {
                        setTimeout(function () {
                            $('[name="oldWithdrawalPwd"]').focus();
                        }, 400);
                    });
                    return false;
                }
            }
            if (that.newWithdrawalPwd() == "") {
                utils.tip("请输入新提款密码", '#ff0000', function () {
                    setTimeout(function () {
                        $('[name="newWithdrawalPwd"]').focus();
                    }, 400);
                });
                return false;
            }
            if (!/^.{4,6}$/.test(that.newWithdrawalPwd())) {
                utils.tip('新提款密码长度应该在4-6位之间', '#ff0000', function () {
                    setTimeout(function () {
                        $('[name="newWithdrawalPwd"]').focus();
                    }, 400);
                });
                return false;
            }
            if (!/^[a-z0-9]+$/i.test(that.newWithdrawalPwd())) {
                utils.tip('提款密码必须是字母，数字，或者字母和数字的组合', '#ff0000', function () {
                    setTimeout(function () {
                        $('[name="newWithdrawalPwd"]').focus();
                    }, 400);
                });
                return false;
            }
            if (hasWithdrawalPwd == 'True') {
                if (that.oldWithdrawalPwd() == that.newWithdrawalPwd()) {
                    utils.tip("请勿输入和旧密码相同的新密码", '#ff0000', function () {
                        setTimeout(function () {
                            $('[name="newWithdrawalPwd"]').focus();
                        }, 400);
                    });
                    return false;
                }
            }
            if (that.okNewWithdrawalPwd() == "") {
                utils.tip("请确认新提款密码", '#ff0000', function () {
                    setTimeout(function () {
                        $('[name="okNewWithdrawalPwd"]').focus();
                    }, 400);
                });
                return false;
            }
            if (that.newWithdrawalPwd() != that.okNewWithdrawalPwd()) {
                utils.tip("新密码和确认密码不匹配", '#ff0000', function () {
                    setTimeout(function () {
                        $('[name="okNewWithdrawalPwd"]').focus();
                    }, 400);
                });
                return;
            }
            var params = {
                oldPwd: _compress(that.oldWithdrawalPwd()),
                newPwd: _compress(that.newWithdrawalPwd()),
                okPwd: _compress(that.okNewWithdrawalPwd())
            };

            that.isSubmitting(true);
            $.ajax({
                type: "POST",
                url: "/AccountManager/UpdateWithdrawalPwd",
                data: params,
                success: function (data) {
                    if (data.status) {
                        that.reset();
                        utils.tip(data.info, '#ff0000', 0, function () {
                            if (hisUrl != '') {
                                window.location.href = hisUrl;
                            } else {
                                window.location.reload();
                            }
                        });
                    } else {
                        utils.tip(data.info, '#ff0000', function () { });
                    }

                },
                complete: function () {
                    that.isSubmitting(false);
                }
            });
        };

        that.init = function () {
            if (IsGeneralize == "True") {
                that.switchPwd(null, $("#loginPwd"));
            } else if (token && token === "withdrawal") {
                that.switchPwd(null, $("#withdrawalpwd"));
            }
        };

        that.init();
    };
    $(function () {
        var viewModel = new EditPwdModel();
        ko.applyBindings(viewModel, document.getElementById("ulMain"));
    });
})();