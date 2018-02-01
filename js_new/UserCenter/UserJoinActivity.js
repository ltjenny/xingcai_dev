'use strict';
var UserJoinActivity = function () {
    if (this instanceof UserJoinActivity) {
        var viewModel = function () {
            var _this = this
                , d = new Date(), endDate, u = function (d) { return (d < 10) ? '0' + d : d; };
            _this.init = function () {
                //ko.koPage.init(this,this.getData, {
                //    pagesize: 10,
                //    className: 'page'
                //});
                //_this.getData();
            };
            endDate = function () {
                if ((d.getMonth() + 1) == 12) {
                    if ((d.getDate()) == (new Date(d.getFullYear(), (d.getMonth() + 1), 0).getDate())) {//年份加1
                        return u(Number((d.getFullYear() + 1))) + '/01/' + '01';
                    } else {
                        return 'yyyy/MM/' + u(Number(d.getDate() + 1));
                    }
                } else {
                    if ((d.getDate()) == (new Date(d.getFullYear(), (d.getMonth() + 1), 0).getDate())) {
                        return 'yyyy/' + u(Number((d.getMonth() + 2))) + '/' + '01';
                    } else {
                        return 'yyyy/MM/' + u(Number(d.getDate() + 1));
                    }
                }
            }();
            _this.startDate = ko.observable(new Date().format('yyyy/MM/dd 02:00:00'));
            _this.endDate = ko.observable(new Date().format(endDate + ' 02:00:00'));
            _this.bodyShow = ko.observable(false);
            _this.hide = ko.observable(false);
            _this.list = ko.observableArray();
            //设置日期和时间
            _this.setDate = function (data, e) {
                var maxDate = '', minDate = '', el = 'start';
                if (e.target.id == 'start') {
                    maxDate = '#F{$dp.$D(\'end\')||\'2050-10-01\'}';
                }
                el = e.target.id;
                minDate = (e.target.id == 'end') ? '#F{$dp.$D(\'start\')||\'2050-10-01\'}' : '';
                WdatePicker({
                    el: el, readOnly: true, dateFmt: 'yyyy/MM/dd HH:mm:ss', maxDate: maxDate, minDate: minDate, onpicked: function (rt) {
                        rt.el.id == 'start' ? function () {
                            rt.maxDate = '#F{$dp.$D(\'end\')||\'2020-10-01\'}';
                            _this.startDate(rt.el.realValue.replace('-', '/').replace('-', '/'));
                        }() : function () {
                            _this.endDate(rt.el.realValue.replace('-', '/').replace('-', '/'));
                        }()
                    }
                });
            }
            //搜索
            _this.searchData = function () {
                _this.getData();
            }
            _this.tip = function (title, content, okVal, ok) {
                dialog({ title: title, content: content, ok: ok || function () { }, okValue: okVal || "关闭" }).show()
            };
            ko.koPage.init(this, this.getData, {
                pageindex: 1,
                pagesize: 10,
                className: 'page'
            });
        };
        viewModel.prototype.getData = function (pageindex) {
            var self = this, pagesize = 10;
            if (!pageindex) pageindex = 1;
            $("#SEARCH-TIP").show();
            $.get('/UserCenter/GetUserJoinActivityInfo?startTime=' + self.startDate() + '&endTime=' + self.endDate() + '&pageIndex=' + pageindex + '&pageSize=' + pagesize + '&' + '_' + (+new Date()), function (data) {
                $("#SEARCH-TIP").hide();
                var dt = (typeof data === 'string') ? eval('(' + data.replace(/\s/, '') + ')') : data;
                if (dt.status) {
                    if (dt['rows'] && $.isArray(dt.rows) && dt.rows.length > 0) {
                        self.bodyShow(true);
                        self.hide(false);
                        ko.koPage.count(dt.total);
                        self.list(dt.rows);
                    } else {
                        self.bodyShow(false);
                        self.hide(true);
                    }
                } else {
                    self.bodyShow(false);
                    self.hide(true);
                    self.tip('提示', dt.info, '确定', function () { });
                }
            });
        };
        viewModel.prototype.getRebate = function (root, data, event) {
            var _this = this;
            if (data.FShowGet == false) {
                root.tip('提示', "该活动不可自行领取", '确定', function () { });
                return false;
            }
            utils.confirm("确定领取该活动奖励？", function () {
                $.post('/UserCenter/AuditActity', { id: data.FId }, function (json) {
                    root.tip('提示', json.info, '确定', function () {
                        if (json.status) {
                            $(event.currentTarget).hide();
                            //_this.getRebate();
                        } 
                        root.hide(false);
                    });
                });
            });
        };
        $(function () {
            var vm = new viewModel();
            vm.init();
            ko.applyBindings(vm, document.getElementById("ulMain"));
        });
    } else {
        new UserJoinActivity();
    };
    return this;
}
var userJoinActivity = new UserJoinActivity();