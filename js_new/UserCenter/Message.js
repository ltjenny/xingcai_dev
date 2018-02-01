'use strict';
!function () {

    var Message = function () {
        if (this instanceof Message) {
            this.init = function (){
                //getMsgModel
                ko.applyBindings(new this.getMsgModel, document.getElementById('receive_box'));
                ko.applyBindings(new this.sendMsgModel, document.getElementById('outbox_box'));
                this.eventBind();
            };
            this.scroll = {};
            this.eventBind = function () {
                var $this = this;
                $this.tabelTitChange();
                //点击发送站内短信按钮
                $('#send_station_msg,#close_btn').on('click', function (e) {
                    if ($('#station_msg').hasClass('dn')) {
                        $('#station_msg').removeClass('dn');
                        $('[data-con="two"],[data-con="three"]').val('');
                    } else {
                        $('#station_msg').addClass('dn');
                    }
                });
                //增加滑动效果 begin
                $this.scroll = (navigator.userAgent.indexOf('MSIE') !== -1) ? function () {
                    $('#scroll_box').css({ 'overflow-y': 'auto'});
                    return {};
                }():function(){
                    return new IScroll('#scroll_box', {
                        scrollbars: true,
                        mouseWheel: false,
                        interactiveScrollbars: true,
                        shrinkScrollbars: 'scale'//,
                        //fadeScrollbars: true
                    });
                }();
                //增加滑动效果 end
                //绑定关闭下级弹窗浮层 begin
                $('[oid="close"]').on('click',function(e){
                    $('#send_msg_box').addClass('dn');
                    $('#up_grade').prop('checked', true);
                    $('#down_grade').prop('checked', false);

                    //指引线
                    $('#lineBox').addClass('dn');
                });
                //绑定关闭下级弹窗浮层 end
                //下级浮层绑定搜索处理函数 begin
                $('#seach_btn').on('click', $this.seachData);
                $('#selectAll').on('change', function () {
                    var checked = $(this).is(':checked');
                    $.each($('[name="acc_check"]'), function (i, v) {
                        $(v).prop('checked', checked);
                    });
                });
                $('#down_ta').on('change', '[name="acc_check"]', function () {
                    var checked = $(this).is(':checked');
                    if (checked) {
                        if ($('[name="acc_check"]').length == $('[name="acc_check"]:checked').length)
                            $('#selectAll').prop('checked', true);
                    }
                    else {
                        $('#selectAll').prop('checked', false);
                    }
                });
                //下级浮层绑定搜索处理函数 end
                $('[name="js"]').on('change', function () {
                    if ($(this).val() === 'up') {
                        $('#send_msg_box').addClass('dn');
                        $('#lineBox').addClass('dn');
                    } else {
                        $('#lineBox,#down_ta,#send_msg_box').removeClass('dn');
                        $.get('/userCenter/GetAccountsSubordinate', function (data) {
                            var dt = (typeof data === 'string') ? eval('(' + data + ')') : data
                            , opt = '';
                            $.each(dt.rows, function (i, v) {
                                opt += '<li><input type="checkbox" value="' + v.FID + '" name="acc_check"/>' + v.FAccount + '</li>';
                            });
                            $('#down_ta').html('').append(opt);
                            if(navigator.userAgent.indexOf('MSIE') === -1){
                                $this.scroll.refresh();
                            };
                        });
                    }
                });
                //重置修改
                $('#cz_msg').on('click', function () {
                    $('[data-con="two"],[data-con="three"]').val('');
                    $($('input[type=radio]')[0]).attr('checked', true);
                    $($('input[type=radio]')[1]).removeAttr('checked');
                    $('[data-con="one"]').addClass('dn');
                    document.getElementById('up_grade').checked = 'true';
                    $('#lineBox').addClass('dn');
                    $('#send_msg_box').addClass('dn');
                    $('#keyword').val('');
                });
                //如果是IE浏览器
                if(navigator.userAgent.indexOf('MSIE') !== -1){
                    $('#keyword').val('请输入关键字搜索');
                }
                $(document.body).on('focus', '#keyword', function (e) {
                    if(navigator.userAgent.indexOf('MSIE') !== -1){
                        if (this.value === $.trim('请输入关键字搜索')) {
                            this.value = '';
                        }
                    }
                });
                $(document.body).on('blur', '#keyword', function (e) {
                    if (navigator.userAgent.indexOf('MSIE') !== -1) {
                        if (this.value === '') {
                            this.value = '请输入关键字搜索';
                        }
                    }
                });
            };
            //table切换
            this.tabelTitChange = function () {
                var self = this;
                $('[name="receive"]').on('click', function () {
                    $(this).addClass('btn').removeClass('mbactive');
                    $(this).next().removeClass('btn').addClass('mbactive');
                    $('#receive_box').removeClass('dn');
                    $('#outbox_box').addClass('dn');
                    self.oneTrSetFalse();
                });
                $('[name="outbox"]').on('click', function () {
                    $(this).addClass('btn').removeClass('mbactive');
                    $(this).prev().removeClass('btn').addClass('mbactive');
                    $('#receive_box').addClass('dn');
                    $('#outbox_box').removeClass('dn');
                    self.twoTrSetFalse();
                });
            };
            //下级搜索处理回调
            this.seachData = function (e){
                var keyword = $('#keyword').val()
                    , $this = message;
                $.get('/userCenter/GetAccountsSubordinate', function (data) {
                    var dt = (typeof data === 'string') ? eval('(' + data + ')') : data
                    , opt = '';
                    $.each(dt.rows, function (i,v) {
                        if ((v.FID+'').indexOf($.trim(keyword)) !== -1 || v.FAccount.indexOf($.trim(keyword)) !== -1) {
                            opt += '<li><input type="checkbox" value="' + v.FID + '" name="acc_check"/>' + v.FAccount + '</li>';
                        };
                    });
                    if (opt !== '') {
                        $('#down_ta').html('').append(opt);
                    } else {
                        $('#down_ta').html('').append('<li class="fs-999">暂无结果，换个关键字试试？</li>');
                    };
                    if(navigator.userAgent.indexOf('MSIE') === -1){
                        $this.scroll.refresh();
                    };
                });
            }
            //循环遍历tr
            this.oneTrSetFalse = function () {
                $.each($('#have_data').find('tr'), function (i, v) {
                    $(v).find('td:nth-of-type(1)').find('div:nth-of-type(1)').find('label:nth-of-type(1)').find('input:nth-of-type(1)').prop('checked', false);
                });
            };
            this.twoTrSetFalse = function () {
                $.each($('#have_inbox_data').find('tr'), function (i, v) {
                    $(v).find('td:nth-of-type(1)').find('div:nth-of-type(1)').find('label:nth-of-type(1)').find('input:nth-of-type(1)').prop('checked', false);
                });
            };
            this.oneTrSetTrue = function () {
                $.each($('#have_data').find('tr'), function (i, v) {
                    $(v).find('td:nth-of-type(1)').find('div:nth-of-type(1)').find('label:nth-of-type(1)').find('input:nth-of-type(1)').prop('checked', true);
                });
            }
            this.twoTrSetTrue = function () {
                $.each($('#have_inbox_data').find('tr'), function (i, v) {
                    $(v).find('td:nth-of-type(1)').find('div:nth-of-type(1)').find('label:nth-of-type(1)').find('input:nth-of-type(1)').prop('checked', true);
                });
            }
            //构造收件箱模型
            this.getMsgModel = function () {
                var _this = this;
                _this.listData = ko.observableArray();
                ko.koPage.init(this, function (pageindex){
                    $.get('/UserCenter/GetMessageListWithPage_Inbox?pageSize=10&pageIndex=' + pageindex, function (data) {
                        var dt = (typeof data === 'string') ? eval('(' + data + ')') : data;
                            if (dt.rows !== null && dt.rows.length > 0) {
                                $('#no_inbox_data').addClass('dn');
                                $('#have_inbox_data').removeClass('dn');
                                $('#inbox_page').removeClass('dn');
                                _this.countItems(dt.total);
                                _this.listData(dt.rows);

                                $('div[data-notice="inbox"]').on('click',function (e){
                                    //console.log($(e.target));e.target.tagName !== 'A' && 
                                    if (e.target.tagName !== 'INPUT') {
                                        if ($(this).next().hasClass('dn')) {
                                            $(this).addClass('fc_red');
                                            $(this).next().removeClass('dn');
                                            $(this).parent().parent().siblings().find('td:eq(0)').find('div:eq(0)').removeClass('fc_red')
                                            $(this).parent().parent().siblings().find('td:eq(0)').find('div:eq(1)').addClass('dn');
                                            if (e.target.tagName === 'LABEL' || e.target.tagName === 'SPAN' || e.target.tagName === 'INPUT') {
                                                if (typeof $(e.target.parentElement).attr('style') === 'string' || typeof $(e.target.parentElement.parentElement).attr('style') === 'string') {
                                                    $.get('/UserCenter/UpdateMessage?fid=' + $(this).find('input:nth-of-type(1)')[1].value, function (data) {
                                                        if (typeof $(e.target.parentElement).attr('style') === 'string') {
                                                            $(e.target.parentElement).removeAttr('style')
                                                        }else{
                                                            $(e.target.parentElement.parentElement).removeAttr('style');
                                                        }
                                                    });
                                                }
                                            } else if (e.target.tagName === 'DIV') {
                                                if (typeof $(e.target).attr('style') === 'string') {
                                                    $.get('/UserCenter/UpdateMessage?fid=' + $(this).find('input:nth-of-type(1)')[1].value, function (data) {
                                                        $(e.target).removeAttr('style');
                                                    });
                                                }
                                            }
                                            var trr = $(this).parent().parent().siblings().find('td:eq(0)').find('div:eq(1)');
                                            if (!trr.hasClass('dn')) {
                                                trr.removeAttr('style');
                                            }
                                        } else {
                                            $(this).removeClass('fc_red');
                                            $(this).next().addClass('dn');
                                        }
                                    }
                                    
                                });

                                $('#all_select').on('click', function (e) {
                                    if ($(e.target).is(':checked')) {
                                        message.twoTrSetTrue();
                                    } else {
                                        message.twoTrSetFalse();
                                    }
                                });

                                $('input[name="select_inbox"]').on('click', function (e){
                                    if(!$(e.target).is(':checked')){
                                        $('#all_select').prop('checked',false);
                                    }
                                });

                            } else {
                                $('#no_inbox_data').removeClass('dn');
                                $('#have_inbox_data').addClass('dn');
                                $('#inbox_page').addClass('dn');
                            }
                    });
                }, {
                    pagesize: 10,
                    className: 'page'
                });
                _this.deleteInt = function (d, e) {
                    var idArr = []
                        ,trArr = $('#have_inbox_data').find('tr');
                    $.each(trArr, function (i,v){
                        if ($(v).find('td:nth-of-type(1)').find('div:nth-of-type(1)').find('label:nth-of-type(1)').find('input:nth-of-type(1)').is(':checked')) {
                            idArr[idArr.length] = $(v).find('td:nth-of-type(1)').find('div:nth-of-type(1)').find('label:nth-of-type(1)').next().val();
                        }
                    });
                    //console.log(idArr);
                    $.post('/UserCenter/BatchDeleteMessage', { arrMessageId: idArr.join(',') }, function (data) {
                        var dt = (typeof data === 'string') ? eval('(' + data + ')') : data;
                        if (dt.status) {
                            utils.tip('删除成功', true, function () {
                                $('#all_select').prop('checked', false);
                                _this.currentPage(0);
                                _this.currentPage(1);
                            });
                        } else {
                            utils.tip(dt.infor, '#ff0000', function () { });
                        }
                    });
                };
            };
            //构造发件箱模型
            this.sendMsgModel = function () {
                var $this = this
                , all = 0;
                $this.list = ko.observableArray();
                ko.koPage.init(this, function (pageindex) {
                    $.get('/UserCenter/GetMessageListWithPage_Outbox?pageSize=10' + '&pageIndex=' + pageindex, function (data) {
                        var dt = (typeof data === 'string') ? eval('(' + data + ')') : data;
                        if (dt.rows !== null && dt.rows.length > 0) {
                            $('#no_data').addClass('dn');
                            $('#have_data,#outbox_page').removeClass('dn');
                            $this.countItems(dt.total);
                            $this.list(dt.rows);

                            $('div[data-notice="outbox"]').on('click', function (e) {
                                //console.log($(e.target));
                                if (e.target.tagName !== 'A' && e.target.tagName !== 'INPUT') {
                                    if ($(this).next().hasClass('dn')) {
                                        $(this).addClass('fc_red');
                                        $(this).next().removeClass('dn');
                                        $(this).parent().parent().siblings().find('td:eq(0)').find('div:eq(0)').removeClass('fc_red')
                                        $(this).parent().parent().siblings().find('td:eq(0)').find('div:eq(1)').addClass('dn');
                                    } else {
                                        $(this).removeClass('fc_red');
                                        $(this).next().addClass('dn');
                                    }
                                }
                            });
                            $('#all_sec_select').on('click', function (e) {
                                if ($(e.target).is(':checked')) {
                                    message.oneTrSetTrue();
                                } else {
                                    message.oneTrSetFalse();
                                }
                            });

                            $('input[name="select_sec_inbox"]').on('click', function (e) {
                                if (!$(e.target).is(':checked')) {
                                    $('#all_sec_select').prop('checked', false);
                                }
                            });
                        } else {
                            $('#no_data').removeClass('dn');
                            $('#have_data,#outbox_page').addClass('dn');
                        }
                    });
                }, {
                    pagesize: 10,
                    className: 'page'
                });
                $this.deleteOut = function (d, e) {
                    var idArr = []
                        ,trArr = $('#have_data').find('tr');
                    $.each(trArr, function (i, v) {
                        if ($(v).find('td:nth-of-type(1)').find('div:nth-of-type(1)').find('label:nth-of-type(1)').find('input:nth-of-type(1)').is(':checked')) {
                            idArr[idArr.length] = $(v).find('td:nth-of-type(1)').find('div:nth-of-type(1)').find('label:nth-of-type(1)').next().val();
                        }
                    });
                    $.post('/UserCenter/BatchDeleteMessage', { arrMessageId: idArr.join(',') }, function (data) {
                        var dt = (typeof data === 'string') ? eval('(' + data + ')') : data;
                        if (dt.status) {
                            utils.tip('删除成功', true, function () {
                                $('#all_sec_select').prop('checked', false);
                                $this.currentPage(0);
                                $this.currentPage(1);
                            });
                        } else {
                            utils.tip(dt.infor, '#ff0000', function () { });
                        }
                    });
                };
                $this.sendMessage = function () {
                    var $this = this
                            , ops = {}
                            , checkArr = []
                            , param = {
                                title: $('[data-con="two"]').val()
                                , context: $('[data-con="three"]').val()
                                , type: 1
                            };
                    $.each($('[name="acc_check"]'),function(i,v){
                        if($(v).is(':checked')){
                            checkArr[checkArr.length] = $(v).val();
                        }
                    });
                    if (document.getElementById('up_grade').checked) {
                        ops = {
                            gradeType: 0
                        };
                    } else {
                        ops = {
                            gradeType: 1
                            , arrAccountId: checkArr.join(',')
                        };
                    };
                    if (param.title === '') {
                        utils.tip('标题不能为空！', '#ff0000', function () {
                            setTimeout(function () {
                                $('[data-con="two"]').focus();
                            }, 350);
                        });
                        return false;
                    } else if (param.context === '') {
                        utils.tip('内容不能为空！', '#ff0000', function () {
                            setTimeout(function () {
                                $('[data-con="three"]').focus();
                            }, 350);
                        });
                        return false;
                    };
                    if (ops.arrAccountId == "") {
                        utils.tip("请勾选下级");
                        return false;
                    }
                    $.ajax({
                        url: 'InsertMessage'
                        , data: $.extend(param, ops)
                        , type: 'post'
                        , success: function (data) {
                            var dt = (typeof data === 'string') ? eval('(' + data + ')') : data;
                            if (dt.status) {
                                var current = $this.currentPage();
                                $this.currentPage(0);
                                $this.currentPage(current);

                                utils.tip(dt.infor,true, function () {
                                    setTimeout(function () {
                                        $('#station_msg').addClass('dn');
                                    }, 100);
                                });
                            } else {
                                utils.tip(dt.infor, '#ff0000', function () {
                                    setTimeout(function () {
                                        $('#station_msg').addClass('dn');
                                    }, 100);
                                });
                            }
                        }
                        , error: function (err) {
                            utils.tip('发送失败！', '#ff0000', function () { });
                        }
                    });
                }
            }
        } else {
            new Message();
        }
    };
    var message = new Message();
    message.init();
}();