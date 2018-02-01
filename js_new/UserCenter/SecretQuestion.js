'use strict';
!function () {
    var SecretQuestion = function () {
        if (this instanceof SecretQuestion) {
            this.init = function () {
                var $this = this;
                $this.eventBind();
            };
            this.$$ = function (id) {
                if (!id) return;
                return document.getElementById(id);
            };
            this.eventBind = function () {
                var _this = this;
                _this.tabelTitChange();
                //密保设定重置按钮
                $('#reset_one_btn').on('click', function () {
                    $('#answer_one,#answer_two').val('');
                    $($('#question_one,#question_two').children()[0]).attr('selected', 'selected');
                    $($('#question_two').children()[0]).attr('selected', 'selected');
                });
                //密码找回 重置
                $("#reset_two_btn").on("click", function () {
                    $("#answer_1,#answer_2").val("");
                });
                //绑定密保修改的按钮
                $('#modify_one_btn').on('click', function () {
                    _this.postQuestionOfAnswer();
                });
                //找回密码确定按钮
                $('#modify_two_btn').on('click', function () {
                    _this.findPwdSubmit();
                });
            };
            //table切换
            this.tabelTitChange = function () {
                var self = this;
                $('[name="seting"]').on('click', function () {
                    $(this).addClass('btn').removeClass('mbactive');
                    $(this).next().removeClass('btn').addClass('mbactive');
                    $('#password_seting').removeClass('dn');
                    $('#password_find').addClass('dn');
                });
                $('[name="find"]').on('click', function () {
                    $(this).addClass('btn').removeClass('mbactive');
                    $(this).prev().removeClass('btn').addClass('mbactive');
                    $('#password_seting').addClass('dn');
                    $('#password_find').removeClass('dn');
                    self.getQuestionAndAnswer();
                });
            };
            //验证两个问题是否一致
            this.checkSetingQuestion = function () {
                var $this = this;
                if ($('#question_one').val() === $('#question_two').val()) {
                    $this.tip('温馨提示！', '两次密保问题不能为同一问题！', '确定', function () { });
                    return false;
                } else if ($('#answer_one').val() === '' || $('#answer_two').val() === '') {
                    $this.tip('温馨提示！', '密保问题的答案不能为空！', '确定', function () {
                        setTimeout(function () {
                            if ($('#answer_one').val() === '') {
                                $('#answer_one').focus();
                            } else if ($('#answer_two').val() === '') {
                                $('#answer_two').focus();
                            }
                        }, 400);
                    });
                    return false;
                }
                return 1;
            };
            //提交密保问题
            this.postQuestionOfAnswer = function () {
                var _this = this
                    , isPost = _this.checkSetingQuestion()
                    , param = {
                        questionOne: $('#question_one').val()
                        , answerOne: $('#answer_one').val()
                        , questionTwo: $('#question_two').val()
                        , answerTwo: $('#answer_two').val()
                    };
                if (isPost) {
                    $.post('/UserCenter/AddSecretQuestion', param, function (data) {
                        var dt = (typeof data === 'string') ? eval('(' + data + ')') : data;
                        if(dt.status){
                            _this.tip('温馨提示！', '密保问题设定成功！', '确定', function () {});
                        } else {
                            _this.tip('温馨提示！', dt.infor, '确定', function () { });
                        }
                    });
                };
            };
            //获取密保问题和答案
            this.getQuestionAndAnswer = function () {
                var _this = this;
                $.get('/UserCenter/GetSecretQuestion', function (data){
                    var dt = (typeof data === 'string') ? eval('(' + data + ')') : data;
                    if(dt.status){
                        $('#question_1').html(dt.rows.QuestionOne);
                        $('#question_2').html(dt.rows.QuestionTwo);
                    } else {
                        _this.tip('温馨提示！', dt.infor, '确定', function () {
                            $('[name="seting"]').trigger('click');
                        });
                    }
                });
            };
            //找回密码提交按钮
            this.findPwdSubmit = function () {
                var _this = this;
                if ($('#answer_1').val() == '' || $('#answer_2').val() == '') {
                    _this.tip('温馨提示！', '验证问题的答案不能为空！', '确定', function () {
                        setTimeout(function () {
                            if ($('#answer_1').val() === '') {
                                $('#answer_1').focus();
                            } else if ($('#answer_2').val() === '') {
                                $('#answer_2').focus();
                            }
                        }, 400);
                    });
                } else {
                    $.get('/UserCenter/RequestSecuritySettingIsExists?answerOne=' + $('#answer_1').val() + '&answerTwo=' + $('#answer_2').val(), function (data) {
                        var dt = (typeof data === 'string') ? eval('(' + data + ')') : data;
                        if (dt.status) {
                            _this.tip('温馨提示！', dt.infor, '确定', function () {
                                window.location.href = 'SettingNewPwd?token=' + data.token;
                            });
                        } else {
                            _this.tip('温馨提示！', dt.infor, '确定', function () { });
                        }
                    });
                }
                
            }
            this.tip = function (title, content, okVal, ok) {
                dialog({ title: title, content: content, ok: ok || function () { }, okValue: okVal || "关闭" }).show()
            };
        } else {
            new SecretQuestion();
        }
    };
    var secretQuestion = new SecretQuestion();
    secretQuestion.init();
}();