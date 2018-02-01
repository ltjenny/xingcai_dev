$(function () {
    if (window['errmsg']) {
        utils.tip(errmsg, false);
    }
    var form = $("#rechargeSubmitForm");
    var payTypeId = $('.js_pay_type:eq(0)').attr('data-id');
    function OnlinePaymentVM() {
        var that = this;
        that.needNumber = ko.observable(window['typeCode'] != 1);
        that.realNameTitle = ko.observable(that.needNumber() ? '附言码' : '存款人昵称');
        that.currentPayType = ko.observable(window['initPayType'] || payTypeId);   //当前支付类型, 默认微信支付1-5[网银充值, 微信, 支付宝, 财付通, QQ钱包]
        that.payList = ko.observableArray([]);     //当前可选第三方列表
        that.currentThreePay = ko.observable();   //客户当前所选第三方支付
        that.currentBank = ko.observable();   //当前客户所选的银行
        that.offlineAmountSaveConfig = null;   //存款优惠判断条件 -- 线下
        that.onlineAmountSaveConfig = null;   //存款优惠判断条件 -- 线上
        that.amount = ko.observable('').extend({ numeric: 2 });    //客户当前输入的金额
        that.choicePre = ko.observable(false); //存款送优惠
        that.hasPreDialog = false;
        that.orderNumber = ko.observable('');
        //offline
        that.offlinePayList = ko.observableArray();
        that.offRealName = ko.observable(that.needNumber() ? window['number'] : '');
        that.offAmount = ko.observable('').extend({ numeric: 2 });
        that.isSubmiting = ko.observable(false);
        that.hasSubmit = ko.observable(false);
        that.hasQRCodeImg = ko.computed(function () {
            return that.currentThreePay() && that.currentThreePay().QRCodeImg;

        });
        that.isLoading = ko.observable(false);
        
        that.banksList = ko.computed(function () {
            var banks = that.currentThreePay() ? that.currentThreePay().Banks : [];
            banks = banks || [];
            that.currentBank(banks.length > 0 ? banks[0] : '');
            return banks;
        });
        that.currentThreePayID = ko.computed(function () {
            return that.currentThreePay() ? that.currentThreePay().ID : 0;
        });
        that.currentBankCode = ko.computed(function () {
            return that.currentBank() ? that.currentBank().code : '';
        })
        //最大值
        that.maxAmount = ko.computed(function () {
            return that.currentThreePay() ? that.currentThreePay().MaxAmount : 0;
        });
        //最小值
        that.minAmount = ko.computed(function () {
            return that.currentThreePay() ? that.currentThreePay().MinAmount : 0;
        });
        that.isOffline = ko.computed(function () {
            return (that.currentThreePay() ? that.currentThreePay().isOffline : (that.payList().length <= 0 ? true : false));
        })
        //页面内切换支付类型
        that.tabPayType = function (typeId, data, evt) {
            that.offAmount('');
            that.offRealName('');
            that.amount('');
            that.currentPayType(typeId);
            that.getBankList();
        };
        that.tabCurrentThreePayType = function (data) {
            if (!that.hasSubmit()) {
                //if (data.Charge - 0 < 1) {
                //    var changgg = data.Charge || '';
                //    changgg = Math.round(Number((changgg * 100) * 10)) / 10;
                //    data.Charge = changgg;
                //};
                that.currentThreePay(data);
            };
           
        };
        that.setTa1CursorPosition = function(i){
            var oTa2 = $("input:focus")[0];
            if (!oTa2) return false;
            if (oTa2.selectionStart || oTa2.selectionStart == 0) {//非IE浏览器
                oTa2.selectionStart = i;
                oTa2.selectionEnd = i;
            } else {//IE
                var range = oTa2.createTextRange();
                range.move("character", i);
                range.select();
            }
        };
        that.isRepeatAmountIn30m = ko.observable(0); /// 0未验证、1验证通过、2验证未通过、3正在验证中
        that.checkAmountError = ko.observable(null); /// 存储错误信息
        that.checkAmount = function (next) {
            var amount = that.amount() - 0;
            if (amount <= 0) return;
            that.isRepeatAmountIn30m(3);
            $.ajax({
                url: '/Recharge/CheckAmount',
                data: { amount: amount },
                cache: false,
                dataType: 'json',
                success: function (json) {
                    if (!json.IsSuccess) {
                        that.isRepeatAmountIn30m(2);
                        that.checkAmountError(json.Message || '提交失败, 服务器错误');
                    } else {
                        that.isRepeatAmountIn30m(1);
                        if (typeof next === 'function') next();
                    }
                },
                error: function (err) {
                    that.isRepeatAmountIn30m(2);
                    that.checkAmountError(err.statusText || '提交失败, 服务器错误');
                }
            });
        }
        that.hideSubmitButton = function () {
            that.isRepeatAmountIn30m(0);
            that.checkAmountError(null);
        }

        that.init();
    }

    //充值金额补小数0-0.08
    OnlinePaymentVM.prototype.addRandomAmount = function () {
        var that = this;
        if (!(that.currentThreePay().IsDepositAddRandom)) {
            return false;
        };
        var oldValue = that.isOffline() ? that.offAmount() : that.amount();
        if ((oldValue + "").split(".")[1]) {
            return false;
        } else {

            var newValue = oldValue - 0 + Math.floor(1 + Math.random() * 8) / 100;
            that.isOffline() ? that.offAmount(newValue) : that.amount(newValue);
        }
    };
    //金额输入框失去焦点后的回调处理
    OnlinePaymentVM.prototype.amountInputBlur = function (data, evt) {
        this.addRandomAmount();
        if (!this.isOffline()) {
            this.checkAmount();
        }
    }
    ///获取线上&线下支付通道列表
    OnlinePaymentVM.prototype.getBankList = function (data, evt) {
        var that = this;
        that.isLoading(true);
        $.ajax({
            url: "/Recharge/GetPaymentProvider",
            type: "get",
            data: { id: that.currentPayType() },
            cache: false,
            dataType: "json",
            success: function (json) {
                if (typeof json === "string") {
                    try {
                        json = JSON.parse(json);
                    }
                    catch (e) {
                        return;
                    }
                }
                onlinePaymentInit(json.OnlinePayment)
                offlinePaymentInit(json.OfflinePayment);
                that.orderNumber(json.OrderNumber);
                that.offlineAmountSaveConfig = json.OfflineAmountSaveConfig;
                that.onlineAmountSaveConfig = json.OnlineAmountSaveConfig;
                that.isLoading(false);
            }
        });
        function onlinePaymentInit(json) {
            var list = [];
            $.each(json, function (idx, item) {
                if (!item) return;
                var banks = [];
                var bankArr = item.BankConfig ? item.BankConfig.split('|') : [];
                $.each(bankArr, function (i, b) {
                    if (!b || /^\s*$/.test(b)) return;
                    var codes = b.split(",");
                    if (codes.length > 1) {
                        banks.push({
                            className: codes[0],
                            code: codes[1],
                            bankName: codes[2] ? codes[2] : ""
                        });
                    }
                });
                if (item.IsCharge) {
                    var charge = item.Charge || 0;
                    charge = Math.round(charge * 1000000) / 10000;
                    item.Charge = charge;
                }    
                item.isOffline = false;
                item.Banks = banks;
                list.push(item);
            });
            //that.currentThreePay(list.length > 0 ? list[0] : '');
            that.payList(list);
            that.currentThreePay('');
        }
        function offlinePaymentInit(json) {
            if (typeof json === "string") {
                try {
                    json = JSON.parse(json);
                }
                catch (e) {
                    return;
                }
            }
            var list = [];
            $.each(json, function (idx, item) {
                if (!item) return;
                item.isOffline = true;
                if (item.IsCharge) {
                    var charge = item.Charge || 0;
                    charge = Math.round(charge * 1000000) / 10000;
                    item.Charge = charge;
                }                
                list.push(item);
            });
            //that.payList().length <= 0 && that.currentThreePay(list.length > 0 ? list[0] : '');
            that.offlinePayList(list);
            that.currentThreePay('');
        }
    }
    ///online submit click handle
    OnlinePaymentVM.prototype.submit = function (data, evt) {
        if (!this.isOffline() && this.isRepeatAmountIn30m() !== 1) return;
        this.preference(data, evt);
    }
    //online submit
    OnlinePaymentVM.prototype.onlineSubmit = function ($data, evt) {
        var that = this;
        var data = that.Validation();
        if (typeof data == "string") {
            utils.tip(data, false, 3000);
            return;
        }
        if ($(evt.currentTarget).hasClass("disabled")) return;
        form.submit();
        dialog({
            id: 'DIALOG-TIP',
            title: "操作提示",
            padding: '30px',
            content: '<span class="succeed">' + '订单提交成功，请尽快付款！订单号：' + that.orderNumber() + '</span>',
            ok: function () {
                window.location.replace('/Recharge/OnlinePayment/' + that.currentPayType());
            },
            onshow: function () {
                $(document).off('keydown', this._esc);
            },
            onclose: function () {
                window.location.replace('/Recharge/OnlinePayment/' + that.currentPayType());
            }
        }).showModal();
    }
    //offline submit
    OnlinePaymentVM.prototype.offlineSubmit = function () {
        var that = this;
        if (that.isSubmiting()) return;
        var params = that.offlineValidation();
        if (!params) return;
        that.isSubmiting(true);
        var dia = dialog('正在提交中, 请稍候....').showModal();
        that.hasSubmit(false);
        $.ajax({
            type: 'GET',
            url: '/CompanyReceipts/UpApply',
            data: params,
            cache: false,
            dataType: "json",
            success: function (data) {
                dia.close().remove();
                if (data.status) {
                    //that.reset();
                    that.hasSubmit(true);
                    if (that.isOffline()) {
                        if (that.hasQRCodeImg()) {
                            utils.tip('您的订单已提交成功, 请关闭此弹窗, 扫描二维码并转账', true);
                        }
                        else {
                            utils.tip('您的订单已提交成功, 此公司没有提供二维码, <br>请根据手动输入收款账号[<span style="color: red;">' + that.currentThreePay().CardNo + '</span>]并转账', true);
                        }
                    }
                    else {
                        utils.tip('您的存款申请已成功提交！<br/>财务在收到您的充值后，1分钟内为您确认到账！', true, function () {
                            //window.location.replace(href + '/' + that.currentPayType());
                        });
                    }
                }
                else {
                    utils.tip("支付提交失败！" + data.infor, false);
                }
                that.isSubmiting(false);
            }
        });
    }
    //online Validation
    OnlinePaymentVM.prototype.Validation = function () {
        var that = this;
        var minAmount = that.minAmount();
        var maxAmount = that.maxAmount();
        var amount = that.amount() - 0;//that.amount();
        if (isNaN(amount)) {
            utils.tip('请输入正确的充值金额');
            return;
        }
        if (!that.currentThreePayID()) {
            return '请选择支付通道!';
        }
        if (!amount) {
            return "充值金额不能为空! ";
        }
        amount = amount - 0;
        if (amount < minAmount) {
            return "充值金额不能小于" + minAmount + "元! ";
        }
        else if (amount > maxAmount) {
            return "充值金额不能大于" + maxAmount + "元! ";
        }
        if (that.banksList().length > 0 && !that.currentBankCode()) {
            return "请选择银行! ";
        }
        var data = {
            fmerchantid: that.currentThreePayID(),
            amount: amount,
            code: that.currentBankCode()
        };
        return data;
    };
    //offline Validation
    OnlinePaymentVM.prototype.offlineValidation = function () {
        var that = this;
        var amount = that.offAmount() - 0;
        if (isNaN(amount)) {
            utils.tip('请输入正确的金额');
            return;
        }
        if (!that.currentThreePayID()) {
            utils.tip('请选择第三方支付! ');
            return;
        }
        if (!amount) {
            utils.tip('请输入存入金额!');
            return;
        }
        if (!that.offRealName()) {
            utils.tip('请输入存款人昵称!');
            return;
        }
        var min = that.currentThreePay() ? that.currentThreePay().MinAmount : 0;
        var max = that.currentThreePay() ? that.currentThreePay().MaxAmount : 0;
        if (min && amount < min) {
            utils.tip('您输入的金额小于最低存款金额' + min);
            return;
        }
        else if (max && amount > max) {
            utils.tip('您输入的金额大于最高存款金额' + max);
            return;
        }

        var params = {
            orderNumber: that.orderNumber(),
            amount: that.offAmount(),
            userBankId: that.currentThreePay().BankId,
            copanyCardId: that.currentThreePayID(),
            date: (new Date()).format('yyyy/MM/dd hh:mm:ss'),
            way: '',
            realName: that.offRealName(),
            place: '',
            bankId: that.currentThreePayID(),
            choicePre: that.choicePre()
        }
        return params;
    }


    OnlinePaymentVM.prototype.init = function () {
        this.SetWithdrawalPwd();
        this.getBankList();

        initCopy();
    }
    //存款送优惠
    OnlinePaymentVM.prototype.preference = function (data, evt) {
        var that = this;
        if ((that.isOffline() && that.offlineAmountSaveConfig && that.offlineAmountSaveConfig.id === that.currentThreePayID()) ||
            (!that.isOffline() && that.onlineAmountSaveConfig && that.onlineAmountSaveConfig.id === that.currentThreePayID())) {
            validationPreference();
        }
        else {
            var dia = dialog('正在提交中, 请稍候....').showModal();
            $.ajax({
                url: '/Recharge/GetPreferenceNewConfig',
                cache: false,
                type: 'get',
                data: { type: that.isOffline() ? 1 : 2, cashConfigId: that.currentThreePayID() },
                async: that.isOffline(),
                dataType: "json",
                success: function (json) {
                    if (that.isOffline()) {
                        that.offlineAmountSaveConfig = json.Result;
                        that.offlineAmountSaveConfig.id = that.currentThreePayID();
                    }
                    else {
                        that.onlineAmountSaveConfig = json.Result;
                        that.onlineAmountSaveConfig.id = that.currentThreePayID();
                    }
                    dia.close().remove();
                    if (!json.Result) that.submitOnAndOff(data, evt);
                    else validationPreference();
                }
            });
        }
        function validationPreference() {
            var config = that.isOffline() ? that.offlineAmountSaveConfig : that.onlineAmountSaveConfig;
            var amount = that.isOffline() ? that.offAmount() : that.amount();
            var line = config.PreferenceLine;
            var needDialog = ((config.RechargePrivilege == 3 && config.IsFirst) || config.RechargePrivilege == 4) && config.PreferencePercent > 0;
            var setTrue = (config.RechargePrivilege == 2 || (config.RechargePrivilege == 1 && config.IsFirst)) && config.PreferencePercent > 0;
            if (config.PreferenceMax >= 0 && amount >= line) {
                if (setTrue) {
                    that.choicePre(true);
                }
                else if (needDialog) {
                    if (that.hasPreDialog == false) {
                        dialog({
                            title: '消息',
                            content: proPreferenceDialogContent(config),
                            width: 300,
                            okValue: '提交',
                            ok: function () {
                                var getPf = $('#GetPreference').is(':checked');
                                that.choicePre(getPf);
                                that.hasPreDialog = true;
                                that.submitOnAndOff(data, evt);
                            }
                        }).showModal();
                        return;
                    }
                }
            }
            that.submitOnAndOff(data, evt);
        }
    }

    ///线上或线下支付提交
    OnlinePaymentVM.prototype.submitOnAndOff = function (data, evt) {
        var that = this;
        if (that.isOffline()) {
            that.offlineSubmit(data, evt);
        }
        else {
            that.onlineSubmit(data, evt);
        }
    }
    //检查是否需要设置资金密码
    OnlinePaymentVM.prototype.SetWithdrawalPwd = function () {
        if ($('#hdWithdrawalpwdIsNull').val() === 'true') {
            dialog({
                title: '取款密码设置',
                content: $('#WithdrawalpwdDialog').html(),
                width: 350,
                okValue: '确定',
                cancelValue: '取消',
                ok: function () {
                    var self = this;
                    var withdrawalpwd = '';
                    $(self.dom.main).find('#withdrawalpwd').find('select').each(function () {
                        withdrawalpwd += $(this).val();
                    });
                    $.post('/Member/SetWithdrawalPwd', { newPwd: withdrawalpwd }, function (json) {
                        alert(json.info);
                        if (json.status) {
                            $('#hdWithdrawalpwdIsNull').val('false');
                        } else {
                            return false;
                        }
                    });
                },
                cancel: function () {
                    this.close();
                }
            }).showModal();
            return;
        }
    }

    //初始化复制按钮
    function initCopy() {
        var needCopyBtns = $('.need-copy');
        if ($('.need-copy').length <= 0) return;
        var lens = needCopyBtns.length;
        if (window['isLTIE9']) {
            for (var i = 0; i < lens; i++) {
                var btn0 = $(needCopyBtns[i]);
                btn0.zclip({
                    path: '/Scripts/Util/zclip/ZeroClipboard.swf',
                    copy: btn0.attr('data-clipboard-text'),
                    afterCopy: function () {
                        utils.tip('复制成功！');
                    }
                });
            }
        }
        else {
            for (var i = 0; i < lens; i++) {
                var cb = new Clipboard(needCopyBtns[i]);
                cb.on('success', function (e) {
                    utils.tip('复制成功！');//, 复制内容: ' + e.text);
                    e.clearSelection();
                });
            }
        }
    }
    //生成随机0-5带有两位小数的数值
    function proRandomNum(num) {
        var rand3 = Math.floor(Math.random() * 5);
        var rand1 = Math.floor(1 + Math.random() * 9) / 10;
        var rand2 = Math.floor(1 + Math.random() * 9) / 100;
        if (!num || num >= 2) {
            return rand3 + rand2 + rand1;
        }
        else {
            return rand2;
        }
    }
    //生成优惠弹窗所需html文本
    function proPreferenceDialogContent(config) {
        var rtn = '';
        rtn += '<p>';
        rtn += '  尊敬的会员您好：';
        if (window['companySiteName']) {
            rtn += '感谢您选择' + window['companySiteName'] + ' ！';
        }
        rtn += '恭喜您可获得充值送';
        rtn += '  <span>' + config.PreferencePercent + '</span>%(最高: ' + (config.PreferenceMax > 0 ? config.PreferenceMax : '无上限') + ')的存款优惠，达到基础流水即可提款!(活动详情请联系在线客服）';
        rtn += '</p>';
        rtn += '<p>';
        rtn += '  <input name="getPreference1" type="radio" id="GetPreference" checked="checked" />';
        rtn += '  <label for="GetPreference">我要获取存款优惠</label>';
        rtn += '</p>';
        rtn += '<p>';
        rtn += '  <input name="getPreference1" type="radio" id="GiveUpPreference" />';
        rtn += '  <label for="GiveUpPreference">我要放弃存款优惠</label>';
        rtn += '</p>';
        return rtn;
    }
    ko.applyBindings(new OnlinePaymentVM(), document.getElementById('receiptsIndexContainer'));
});