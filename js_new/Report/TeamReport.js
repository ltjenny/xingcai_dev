/// <reference path="../standard/utils.js" />
/// <reference path="../_reference.js" />
///用户名href处理
(function () {
    function GetQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]); return null;
    };
    var accountID = GetQueryString('accountID') ? GetQueryString('accountID') : '';
    accountID = accountID == 0 ? '' : accountID;
    var parentIdStr = GetQueryString('parentIdStr') ? GetQueryString('parentIdStr') : '';
    var fenge = '';
    if (accountID != '' && parentIdStr != '') {
        fenge = ',';
    }
    var queryParent = 'parentIdStr=' + parentIdStr + fenge + accountID
    var $aList = $('a[need-parent-id]');
    $aList.each(function () {
        var oldUrl = $(this).attr('href');
        $(this).attr('href', oldUrl + '&' + queryParent);
    });
    window.queryParentIdStr = queryParent;
})();
(function ($, window) {
    var userInfoTitles = {
        Depositamount: '充值量',
        Encashment: '提现量',
        Stake: '投注量',
        WinningAmount: '返派奖',
        TotalKickback: '返点',
        AddUser: '新增用户数'
    }
    var getQueryString=function(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]); return '';
    };
    
    var ViewModel = function () {
        var that = this;
        that.startTime = getQueryString("startTime").replace('+', ' ');
        that.endTime = getQueryString("endTime").replace('+',' ');
        that.startEvent = function (data, event) {
            WdatePicker({
                readOnly: true, dateFmt: 'yyyy-MM-dd HH:mm:ss', maxDate: '#F{$dp.$D(\'end\')||\'2020-10-01\'}'
            });
        };
        that.endEvent = function (data, event) {
            WdatePicker({
                readOnly: true, dateFmt: 'yyyy-MM-dd HH:mm:ss', minDate: '#F{$dp.$D(\'start\')}', maxDate: '2100-10-01'
            });
        };
        that.containSub = function (o, d) {
            var t = $(d.currentTarget);
            if (t.attr("class") == "checkOn") {
                t.attr("class", "checkOff");
                $("#isContainSub").val("False");
            } else {
                t.attr("class", "checkOn");
                $("#isContainSub").val("True");
            }
        };
        that.searchData = function (data, event) {
            $("#SEARCH-TIP").show();
            $("#form1").submit();
        };
        that.goBack = function (data, event) {
            window.history.go(-1);
        };

        /**================个人/团队总览统计报表**/
        that.currentStatisticsName = ko.observable('');
        that.statisticsInfo = ko.observable('统计信息加载中, 请稍候.....');
        that.userDetailInfos = {
            Depositamount: null,
            Encashment: null,
            Stake: null,
            WinningAmount: null,
            TotalKickback: null,
            AddUser: null
        };
        that.currentStatisticsName.subscribe(function (newVal) {
            var currentData = that.userDetailInfos[newVal];
            var title = userInfoTitles[newVal];
            if (!currentData) {
                that.statisticsInfo('【' + title + '】' + '暂无数据...');
            } else {
                var cavasDom = document.getElementById('cavas-line');
                var listX = currentData.listX;
                var listY = currentData.listY;
                that.statisticsInfo('');
                var myChart = echarts.init(cavasDom);
                var option = {
                    title: {
                        text: title,
                        subtext: "(X轴代表时间，Y轴代表数量)",
                    },
                    tooltip: {
                        trigger: 'axis'
                    },
                    xAxis: {
                        type: 'category',
                        boundaryGap: false,
                        data: listX //x坐标
                    },
                    yAxis: {
                        type: 'value',
                        boundaryGap: [0, 0.1]
                    },
                    series: [{
                        name: title,
                        type: 'line',
                        markPoint: {
                            data: [
                                { type: 'max', name: '最大值' },
                            ]
                        },
                        markLine: {
                            data: [
                                { type: 'average', name: '平均值' }
                            ]
                        },
                        smooth: true,
                        data: listY//y坐标
                    }]
                };
                myChart.setOption(option);
            };
        });
        /**===========个人/团队总览统计报表**/
        that.init = function () {
            var errMsg = $("#hdErrMsg").val();
            if (errMsg != undefined && errMsg != '') {
                utils.tip(errMsg, '#ff0000',function(){});
            }
            else {
                var url = window['userInfoDetailUrl'];
                if (url) {
                    this.getUserDetailInfos(url);
                }
            }
        };
        that.init();
    };

    ViewModel.prototype.setDate = function (offset) {
        var that = this;
        var o = {};
        var endDate = new Date();
        if(offset !== -1) endDate.setDate(new Date().getDate() + 1);
        if(offset === 0) offset = -1;
        var startDate = new Date(endDate.getTime() + 86400000 * offset);
        o.from = startDate.format('yyyy-MM-dd') + ' 02:00:00';
        o.to = endDate.format('yyyy-MM-dd') + ' 02:00:00';
        $("#start").val(o.from);
        $("#end").val(o.to);
        return false;
    };

    ViewModel.prototype.setWeek = function (offset) {
        var that = this;
        var date = new Date();
        var w = date.getDay();
        w = w === 0 ? 7 : w;
        var o = {};
        date.setDate(date.getDate() - w + 1 + 7 * offset);
        o.from = date.format('yyyy-MM-dd') + ' 02:00:00';
        date.setDate(date.getDate() + 7);
        o.to = date.format('yyyy-MM-dd') + ' 02:00:00';
        $("#start").val(o.from);
        $("#end").val(o.to);
        return false;
    };

    ViewModel.prototype.setMonth = function (offset) {
        var that = this;
        var date = new Date(), o = {};
        date.setDate(new Date().getDate());
        date.setMonth(date.getMonth() + offset);
        o.from = date.format('yyyy-MM-dd') + ' 02:00:00';
        date.setMonth(date.getMonth() + 1);
        date.setDate(new Date().getDate());
        o.to = date.format('yyyy-MM-dd') + ' 02:00:00';
        $("#start").val(o.from);
        $("#end").val(o.to);
        return false;
    };

    ///=====获取个人/团队总览用户统计信息
    ViewModel.prototype.getUserDetailInfos = function (url) {
        var that = this;
        $.ajax({
            url: url,
            success: function (json) {
                if (json.status) {
                    var userInfoList = json.data || [];
                    var lens = userInfoList.length;
                    for (var i = lens - 1; i >= 0; i--) {
                        var item = userInfoList[i];
                        if (!that.userDetailInfos[item.FField]) {
                        that.userDetailInfos[item.FField] = {
                                data: [],
                                listX: [],
                                listY: []
                            }
                        }
                        var data = that.userDetailInfos[item.FField];
                        data.data.push(item);
                        data.listX.push(item.FDate);
                        data.listY.push(item.FValue);
                    }
                    that.currentStatisticsName('Depositamount');
                }
            }
        });
    };
    
    $(function () {
        var model = new ViewModel();
        ko.applyBindings(model, document.getElementById("ulMain"));
    });
})(jQuery, window);