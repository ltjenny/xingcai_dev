///银行卡管理
(function ($, W) {
    var BankCards = function () {
        var bankCards = {};
        //初始化
        bankCards.init = function () {
            if (hasContact == 'True') {
                $('#phone_flag').css('display','');
            }
        }
        //输入验证
        bankCards.verify = function (div) {
            var inputs = $("input[data-verify]", div || document);
            for (var i = 0; i < inputs.length; i++) {
                var regex = $(inputs[i]).data("verify");
                if (regex == "" || regex == undefined)
                    continue;
                var params = regex.split('*|*');
                var value = $(inputs[i]).val();
                var reg = new RegExp(params[0]);
                if (reg.test(value) == false) {
                    bankCards.tip("填写错误", params[1]);
                    return false;
                }
            }
            var confirmEle = $("input[data-confirm]", div || document);
            for (var i = 0; i < confirmEle.length; i++) {
                var con = $(confirmEle[i]).data("confirm");
                if (con == "" || con == undefined)
                    continue;
                var params = con.split('*|*');
                if ($.trim($(params[0]).val()) != $(confirmEle[i]).val()) {
                    bankCards.tip("填写错误", params[1]);
                    return false;
                }
            }
            /*
            if (hasContact == 'True') {
                if (($('[name="fphone"]').val()).trim() === '') {
                    bankCards.tip("填写错误", '联系电话不能为空');
                    return false;
                }
            }
            */
            return true;
        }

        //显示填写内容
        bankCards.showInfor = function (div) {
            var elements = $("input,select", div || document);
            for (var i = 0; i < elements.length; i++) {
                var item = elements[i];
                var id = $(item).attr("name");
                var showEle = $("#" + id);
                if (item.tagName == "SELECT")
                    $(showEle).text($(item).find("option:selected").text());
                else //(item.tagName == "INPUT")
                    $(showEle).text($(item).val());
            }
        }
        //填写联系方式
        bankCards.userInfo = function(){
            $("#bind_email_btn").click(function () {
                var box = $(this.parentElement.parentElement);
                var param = { PhoneNo: $("#phone").val(), QQ: $("#qq").val() }
                if (!/^1\d{10}$/.test(param.PhoneNo)) {
                    utils.tip("联系电话格式错误,请重新输入", false, function () {
                        setTimeout(function () { box.find("._PhoneNo").focus() }, 30);
                    });
                    return false;
                } else if (param.QQ == "") {
                    utils.tip("请输入QQ号码", false, function () {
                        setTimeout(function () { box.find("._QQ").focus() }, 30);
                    });
                    return false;
                }
                $.post('/Withdrawal/UpdateUserContract', param, function (res) {
                    if (res.status) {
                        utils.confirm("保存成功是否继续添加？", function () {
                            bankCards.dialog.close();
                            bankCards.next();
                        }, function () {
                            bankCards.dialog.close();
                        });

                    } else {
                        utils.tip(res.info);
                    }
                });
            });
        }()
        //下一步
        bankCards.firstStep = function () {
            var status = bankCards.verify($("#firstStep"));
            if (status) {
                $.get('/Withdrawal/CheckHasUserContact?t=' + new Date().getTime(), function (res) {
                    if (!res.status) {
                        dialog({
                            title: "安全提示", content: "为了您的账户资金安全，本次出款需要您完善联系方式，否则将无法出款", okVal: "确定",
                            ok: function () {
                                bankCards.dialog = dialog({ title: "完善用户信息", skin: 'dialog-custom', content: $("#userInfo-Tpl") }).showModal();
                                bankCards.next = next;
                            }
                        }).showModal();
                    } else {
                        next();
                    }
                });

            }
            function next() {
                $("#firstStep").hide();
                $("#secondStep").show();
                bankCards.showInfor("#firstStep");
            }
        }
        //返回
        bankCards.back = function () {
            $("#firstStep").show();
            $("#secondStep").hide();
        }
        //提交地址
        bankCards.Url = "/UserCenter/AddBankCard";
        //提交表单
        bankCards.submit = function () {
            if (window["directSubmit"]) {
                var status = bankCards.verify($("#firstStep"));
                if (!status) {
                    return;
                }
            }
            var div = $("#firstStep");
            var params = {
                bankId: Number($("select[name='bank'] option:selected", div).val()),
                province: $.trim($("input[name='province']", div).val()),
                city: $.trim($("input[name='city']", div).val()),
                branch: $.trim($("input[name='branch']", div).val()),
                holder: $.trim($("input[name='holder']", div).val()),
                lastHolder: $.trim($("input[name='lastHolder']", div).val()),
                cardNO: $.trim($("input[name='cardNO']", div).val()),
                lastCardNO: $.trim($("input[name='lastCardNO']", div).val()),
                phone: $.trim($("input[name='fphone']", div).val()),
                qq: $.trim($("input[name='fQQ']", div).val())
            };
            $.ajax({
                url: "/UserCenter/AddBankCard", data: params, type: "post", success: function (data) {
                    bankCards.tip("提示", data.info, "关闭", function () {
                        if (data.status == true) {
                            window.location.href = "/UserCenter/CardsList";
                        }
                    });
                }
            });
        }

        //消息提示
        bankCards.tip = function (title, content, okVal, ok) {
            dialog({ title: title, content: content, ok: ok || function () { }, okValue: okVal || "关闭" }).showModal()
        }

        return bankCards;
    }

    W.BankCards = BankCards();
    W.BankCards.init();
})(jQuery, window);