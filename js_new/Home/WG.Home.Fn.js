/// <reference path="../Common/jquery-1.11.3.min.js" />
window.homeFn = {
    /// 本地存储兼容
    localStorage: window.sessionStorage ? sessionStorage : {
        getItem: function (name) {
            return utils.cookie.get(name);
        },
        setItem: function (key, value) {
            return utils.cookie.set(key, value, 0, "/");
        }
    },
    /// 过滤html标签
    filterHtml: function (content) {
        var div = document.createElement("div");
        div.innerHTML = content;
        return div.innerText;
    },
    ///重整公告内容
    filterAHref: function (content) {
        var div = $('<div></div>');
        content = content.replace(/\n/g, '<br>').replace('&lt;', '<').replace('&gt;', '>');
        div.html(content);
        div.find('a').each(function (idx, ele) {
            ele = $(ele);
            var href = ele.attr('href');
            if (href.indexOf('undefined') > -1) {
                var text = ele.text();
                if (!(/^http/i.test(text))) {
                    text = href.replace('undefined', ele.text());
                }
                ele.attr('href', text);
            }
        });
        return div.html();
    },
    /// 初始化游戏列表菜单
    ///id[游戏列表根元素]
    ///[sort]游戏分类列表显示顺序, 如果该值传boolean类型, 会自动应用到type上, 并使用默认排序
    /// [type]是否需要游戏分类名称
    // @param {String} tplId 模板id
    menu: function (id, sort, type, tplId) {
        var defaultSort = ['SSC', 'FFC', 'PKS', 'TYC', 'KLC', 'DPC'];
        tplId = '#' + (tplId || 'tpl-menu');
        if (typeof sort == 'boolean') {
            type = sort;
            sort = defaultSort;
        }
        else {
            sort = sort || defaultSort; /// 排序
        }
        var groupTitles = { 'SSC': '时时彩', 'FFC': '分分彩', 'PKS': '北京赛车', 'TYC': '11选5', 'KLC': '快乐彩', 'DPC': '低频彩', 'PCDD': 'PC蛋蛋', 'K3': '快三' }
        var group = {}, parentBox = document.getElementById(id || '');
        var vm = {
            visible: function (flag, data, evt) {
                evt.preventDefault();
                $(evt.currentTarget).find('.J-menu-son').css('display', flag == 1 ? 'block' : 'none');
            },
            change: function (data, evt) {
                var that = $(evt.currentTarget);
                evt.preventDefault();
                if (that.hasClass('disable')) return;
                that.addClass('active').siblings('.J-game-toggle-nav').removeClass('active');
                that.parents('.J-menu-son').find('.J-hotgame_con').hide().eq(that.attr('data-type') - 0).show();
            }
        };
        if (!parentBox) {
            console.log('menu函数父容器ID');
        } else if (!window.GameInfoList) {
            console.log('没有彩票数据');
        } else {
            GameInfoList = typeof GameInfoList === 'object' ? GameInfoList : $.parseJSON(GameInfoList);
            $.each(GameInfoList, function (i, v) {
                var nk = v.FCategoryCode.split('_'), formatNk = '';
                //统一分类
                switch (nk[1]) {
                    case '11X5':
                        formatNk = 'TYC';
                        break;
                    case 'LHC':
                        formatNk = 'DPC';
                        break;
                    default:
                        formatNk = nk[1];
                }
                if (!group[formatNk]) { group[formatNk] = {}; }
                group[formatNk][nk[0]] = v.GameInfoList;
                //if (nk[1] == 'PCDD') {
                //    //PC蛋蛋, 官方和信用相同
                //    var creditOrOff = nk[0] == 'CREDIT' ? 'OFFICIAL' : 'CREDIT';
                //    group[formatNk][creditOrOff] = v.GameInfoList;
                //}
            });
            //位置和数据处理
            vm.group = ko.utils.arrayMap(sort, function (el) {
                var item = group[el];
                var rtn;
                if (item) {
                    for (var n in item) {
                        item[n].sort(function (a, b) {
                            return a.FSort - a.FSort < 0 ? -1 : 1;
                        });
                    }
                    rtn = ko.utils.extend({
                        groupName: el,
                        status: true,
                        CREDIT: [],
                        OFFICIAL: []
                    }, item);
                } else {
                    rtn = {
                        groupName: el,
                        status: false,
                        CREDIT: [],
                        OFFICIAL: []
                    };
                }
                if (type) {
                    rtn = {
                        type: el,
                        name: groupTitles[el],
                        data: rtn
                    }
                }
                return rtn;
            });
            var box = document.createElement("div");
            box.innerHTML = $(tplId).html();
            ko.applyBindings(vm, box);
            parentBox.appendChild(box);
        }
        return this;
    },
    /// 弹窗公告
    /// showType: false/0 显示标题, true/1 显示内容,  2 显示标题和内容，默认显示标题
    /// data-show-tip="1" 点击显示弹窗
    /// data-nojump="1" 点击不跳转到公告页面
    message: function (showType, noScroller, showRebate) {
        if (showRebate === undefined) showRebate = true;
        if (homeFn.message.hasInit) return;
        homeFn.message.hasInit = true;
        if (showType === true) showType = 1;
        if (showType === undefined || showType === false) showType = 0;
        var isLogin = utils.cookie.get("LoginSessionID");

        if (document.getElementById("notices") == null) {
            console.log("无跑马灯ID：notices");
            getRebate();
            return this;
        }
        var that = this;
        var dialogNotice = [], index = 0, newMegDate = 0, oldMegDate = (that.localStorage.getItem("oldMegDate") || 0) - 0;
        var newsNoticeData, rebateMessageData;
        $.ajax({
            url: "/Notice/NewsNotice",
            dataType: "json",
            cache: false,
            success: function (data) {
                newsNoticeData = data;
                if (showRebate && isLogin) {
                    getRebate();
                }
                else {
                    notice();
                }
            }
        });

        function getRebate(data) {
            $.ajax({
                url: '/Home/GetRebateMessage',
                type: 'get',
                dataType: '',
                cache: false,
                success: function (json) {
                    rebateMessageData = json;
                    if (newsNoticeData) {
                        notice();
                    } else {
                        tipRebate();
                    }
                }
            });
        }
        function notice() {
            var temp = [];
            showType = newsNoticeData['type'] === undefined ? showType : newsNoticeData['type'];
            if (newsNoticeData.status) {
                var newID = 0;
                $.each(newsNoticeData.rows, function (i, v) {
                    v.FNoticeContent = homeFn.filterAHref(v.FNoticeContent);
                    var date = v.FLastEditTime || "";
                    date = date.replace(/[^0-9:\/\s]+/g, "/");   ///IE只支持用 '/'分割的日期字符串
                    var type = Number(v.FNoticeType);
                    if (type % 5 == 0) {
                        dialogNotice.push(v);
                        var newTime = new Date(date || 0).getTime();
                        newMegDate = newTime - newMegDate > 0 ? newTime : newMegDate;
                    }
                    v.Fid > newID && (newID = v.Fid);
                    var _content = homeFn.filterHtml(v.FNoticeContent);
                    if (type % 3 == 0) { index++; temp.push("<span style='padding-right:20px;'><label>" + index + "、&nbsp;</label>" + [v.FNoticeTitle, _content, v.FNoticeTitle + "：" + _content][showType] + "</span>"); }
                });
                var tempIDs = utils.unreadMessages.getMessageCookie();
                if (tempIDs[1] < newID) {
                    (tempIDs[1] = newID);
                    utils.unreadMessages.setMessageCookie(tempIDs);
                }
                //有最新消息
                if (newMegDate > oldMegDate) {
                    homeFn.localStorage.setItem("oldMegDate", newMegDate);
                    tip();
                    utils.unreadMessages({ needUndreadHandle: true, hasPopDialogTip: true });
                }
                else {
                    tipRebate();
                    utils.unreadMessages({ needUndreadHandle: true, hasPopDialogTip: false });
                }
                $(".js-notices-container").html('<p>' + temp.join("</p><p>") + '</p>').on('click', function () {
                    if ($(this).data("show-tip")) {
                        tip();
                    }
                        //如果元素中有 data-nojump   属性, 且值不为空, 则不跳转
                    else if (!$(this).data("nojump")) {
                        window.location.href = '/UserCenter/Notice';
                    }

                });
                !noScroller && $("#notices").html(temp.join("")).on('click', function () {
                    if ($(this).data("show-tip")) {
                        tip();
                    }
                        //如果元素中有 data-nojump   属性, 且值不为空, 则不跳转
                    else if (!$(this).data("nojump")) {
                        window.location.href = '/UserCenter/Notice';
                    }

                }).textScroller();

                $("[data-notices = 'true']").html(temp.join("")).on('click', function () {
                    if ($(this).data("show-tip")) {
                        tip();
                    }
                    //如果元素中有 data-nojump   属性, 且值不为空, 则不跳转
                    if (!$(this).data("nojump")) {
                        window.location.href = '/UserCenter/Notice';
                    }
                });
                //setTimeout(function () {
                //    that.message.hasInit = false;
                //    that.message(showType, true, false);
                //}, 3e4);
            }
        }

        //显示日工资弹窗
        function tipRebate() {
            if (!utils.cookie.get("LoginSessionID") || !showRebate || !rebateMessageData) return;
            var data = rebateMessageData.Data;
            if (typeof data == 'string') {
                try {
                    data = JSON.parse(data);
                }
                catch (e) {
                    return;
                }
            }
            if (data.length == 0) return;

            var html = '', lens = data.length;
            html += '<div class="rebate-container">';
            for (var i = 0; i < lens; i++) {
                var href = data[i].FType == 4 ? '/AccountManager/ContractRebate' : '/AccountManager/DayWages';
                if (i > 0) html += "<hr>";
                html += '<h3 class="title">' + data[i].FTitle + '</h3>';
                html += '<div class="content">' + data[i].FContent + ('<a href="' + href + '" style="color:blue">立即查看</a>') + '</div>';
            }
            html += '</div>';

            utils.cornerDialog({
                content: html
            })
        }
        //显示弹窗公告    
        function tip() {
            if (!dialogNotice.length) return;
            var vm = {
                dialogNotice: ko.observableArray(dialogNotice),
                activeMessage: ko.observable(dialogNotice[0]),
                activeIndex: ko.observable(0),
                active: function (index, data) {
                    vm.activeMessage(data);
                    vm.activeIndex(index);
                }
            }
            utils.dialog({
                id: "tpl-message",
                title: "平台公告",
                skin: "dialog-notice",
                template: 'tpl-message',
                viewModel: vm,
                onclose: function () {
                    tipRebate();
                }
            }).showModal();
        }
        //未登录弹出公告
        if (!utils.cookie.get("LoginSessionID")) {
            $("a[href='/UserCenter/Notice']").click(function (ev) {
                ev.preventDefault();
                if (!dialogNotice.length) {
                    utils.tip("暂无平台公告");
                } else {
                    tip();
                }
                return false;
            });
        }
        return this;
    },

    //随机生成用户名charBit[字母数量], starNum[星号数量], isFrontStar[型号是否在前面]
    proRandomName: function (charBit, starNum, isFrontStar) {
        var char = "", star = "", i;
        for (i = 0; i < charBit; i++) {
            var charCode, rand = Math.random();
            if (i == 0) {
                charCode = rand < 0.5 ? 97 : 65;
                charCode += Math.floor(Math.random() * 26);
            }
            else {
                var lt = rand <= 0.25;
                charCode = lt ? 48 : (rand < 0.5 ? 97 : 65);
                charCode += Math.floor(Math.random() * (lt ? 10 : 26));
            }
            char += String.fromCharCode(charCode);
        }
        for (i = 0; i < starNum; i++) {
            star += "*";
        }
        return isFrontStar ? (star + char) : (char + star);
    },
    ///获取最新中奖排行榜
    getNewWinRanking: function (dom, callback, gameList, minNum, range) {
        if (!dom) return;
        vm = {
            prizeList: ko.observableArray([])
        }
        vm.refresh = function (isInit) {
            var gameLens = gameList.length, minMoney = 10, maxMoney = 100000;
            if ($.isArray(range) && range.length == 2) {
                minMoney = range[0];
                maxMoney = range[1];
                if (minMoney > maxMoney) {
                    //交换
                    maxMoney = minMoney + maxMoney;
                    minMoney = maxMoney - minMoney;
                    maxMoney = maxMoney - minMoney;
                }
            }
            var list = [];
            maxMoney = maxMoney - minMoney;

            // max与min的差值太大，使用 Math.random()*(max-min+1)+min 计算无法得到接近min的值
            function random(min, max) {
                var r = Math.random();
                var s = String(r);

                function level(v) {
                    var maxLen = String(max).length - 1 - v;
                    return Math.pow(0.1, maxLen > 0 ? maxLen : 0);
                }

                var last = s.slice(-1) - 0, first = s.slice(4, 5), second = s.slice(6, 7);
                if (last % 2 === 0 && first % 2 === 0 && second === first) {
                    if (second === first) {
                        r *= level(1);
                    } else if (last == first) {
                        r *= level(2);
                    } else if (second === last) {
                        r *= level(3);
                    }
                }
                return Math.floor(min + (max - min + 1) * r);
            }

            for (var i = 0; i < minNum; i++) {
                var obj = {};
                var randomGameName;
                do {
                    var rand = Math.floor(gameList.length * Math.random());
                    randomGameName = gameList[rand];
                    if (!randomGameName) {
                        gameList.splice(rand, 1);
                    }
                } while (!randomGameName);
                obj.FGameName = randomGameName;
                obj.FAccount = window.homeFn.proRandomName(3, 3 + Math.floor(Math.random() * 4));
                obj.Amount = random(minMoney, maxMoney);
                list.push(obj);
            }
            vm.prizeList(list);
            isInit && typeof callback == 'function' && callback(vm);
        }
        if ($.isArray(gameList) && !!gameList[0]) {
            setTimeout(function () {
                vm.refresh(true);
            }, 0);
        }
        ko.applyBindings(vm, dom);
        return this;
    },
    /// 获取排行榜数据
    ///maxConfig: {bet: '投注最多显示条数', prize: '中奖最多显示条数', money: '充值最多显示条数',prizeMinMoney:'中奖排行榜最小金额'}， 
    getRanking: function (dom, callback, gameList, minNum, maxConfig) {
        if (!dom) return;
        maxConfig = maxConfig || {};
        var vm = {
            tab: ko.observable(0), //0 默认，1投注，2中奖
            betList: ko.observableArray([]), //投注榜
            prizeList: ko.observableArray([]), //中奖榜
            moneyList: ko.observableArray([]),  //充值金额
        }
        $.ajax({
            url: "/home/GetHomeTRanking",
            success: function (json) {
                if (json.status) {
                    var betList = json.rowsOne || [];
                    var prizeList = json.rowsTwo || [];
                    var moneyList = json.rowsThr || [];
                    if ($.isArray(gameList) && gameList.length > 0 && gameList[0] !== "") {
                        var lens = prizeList.length, gameLens = gameList.length;
                        var lastAmount = lens > 0 ? prizeList[0].Amount : (maxConfig.prizeMinMoney ? maxConfig.prizeMinMoney : 1000);
                        for (var i = lens; i < minNum; i++) {
                            var obj = {};
                            var randomGameName;
                            do {
                                var rand = Math.floor(gameList.length * Math.random());
                                randomGameName = gameList[rand];
                                if (!randomGameName) {
                                    gameList.splice(rand, 1);
                                }
                            } while (!randomGameName);
                            obj.FGameName = randomGameName;
                            obj.FAccount = window.homeFn.proRandomName(3, 3 + Math.floor(Math.random() * 4));
                            obj.Amount = Math.floor((1 + Math.random() * 0.6) * lastAmount);
                            lastAmount = obj.Amount;
                            prizeList.unshift(obj);
                        }
                    }

                    vm.betList(maxConfig.bet ? betList.slice(0, maxConfig.bet) : betList);
                    vm.prizeList(maxConfig.prize ? prizeList.slice(0, maxConfig.prize) : prizeList);
                    vm.moneyList(maxConfig.money ? moneyList.slice(0, maxConfig.money) : moneyList);
                    vm.tab(1);
                    typeof callback == 'function' && callback(vm);
                }
            },
            error: function (e) {
                //console.error("获取排行榜异常：" + e);
            }

        });
        ko.applyBindings(vm, dom)
        return this;
    },
    /**获取游戏期数信息
     * @param dom[要绑定的元素]
     * @param refreshTime[数据刷新时间间隔]
     * @param gameInfos[获取开奖结果的游戏id列表]
     * @param isRereshMulti[是否刷新多个]    
     * @param results[Array, 显示游戏结果, 数组中元素的属性参见getLotteryResult方法, 如果只有一个, 可以不用数组]
     * @param callback[第一次加载完成后回调此函数]
     * @return this
    */
    getGamePeriodsInfo: function (options) {
        if (!options.dom && !options.results) return;
        var results = options.results;
        if ($.isPlainObject(results)) results = [results];
        var vm = new BetNowVM(options, results);
        ko.applyBindings(vm, options.dom);
        if (results) {
            ko.utils.arrayForEach(vm.resultListVM, function (item) {
                item.options.dom && ko.applyBindings(item, item.options.dom);
            });
        }
        return this;
    },
    /**获取开奖结果
     * @param dom[要绑定的元素]
     * @param refreshTime[数据刷新时间间隔]
     * @param gameIds[获取开奖结果的游戏id列表]  
     * @param num[绑定个数, 如果为0, 返回gameIds中的所有游戏]
     * @param callback[第一次加载完成后回调此函数]
     * @return this
    */
    getLotteryResult: function (options) {
        if (!options.dom) return;
        var vm = {
            tab: ko.observable(),
            resultList: ko.observableArray([])
        };
        if (!options.gameIds || options.gameIds.length == 0) {
            options.gameIds = [0];
        }
        vm.tab(options.gameIds[0]);
        vm.current = ko.computed(function () {
            var i = 0, list = vm.resultList(), lens = list.length;
            for (var i = 0; i < lens; i++) {
                if (vm.tab() == list[i].GameId) {
                    return list[i];
                }
            }
        })
        var url = "/Shared/GetLotteryResult?gamelist=" + encodeURI(options.gameIds.join(","));
        var refresh = function (isInit) {
            $.ajax({
                url: url,
                cache: false,
                success: function (json) {
                    if (json.status) {
                        var list;
                        if (options.num) {
                            list = json.Data && json.Data.slice(0, options.num);
                        }
                        else {
                            list = json.Data;
                        }
                        if (list) {
                            var hasCurrentTab = false;
                            if (isInit) {
                                ko.utils.arrayForEach(list, function (item) {
                                    item.resultUrl = '/Result/index?game=' + item.GameId;
                                    var result = (item.PreviousResult || "").split(",");
                                    if (result.length == 1 && /^\s*$/.test(result[0])) {
                                        result = [];
                                    }
                                    item.PreviousResult = ko.observableArray(result);
                                    item.LottoStartTime = ko.observable(item.LottoStartTime || "");
                                    item.gameMultiID = item.Abbreviation + ":" + item.GroupId;
                                    if (item.gameMultiID == vm.tab()) {
                                        hasCurrentTab = true;
                                    }
                                    item.betUrl = item.GroupId == 3 ? ("/OffcialOtherGame/Index/" + item.GameId) : (item.GameId == 1 ? ("/six/index") : ("/OtherGame/Index/" + item.GameId));
                                })
                                vm.resultList(list);
                            }
                            else {
                                var rl = vm.resultList(), lens = rl.length;
                                ko.utils.arrayForEach(list, function (item) {
                                    var gameMultiID = item.Abbreviation + ":" + item.GroupId;
                                    if (gameMultiID == vm.tab()) {
                                        hasCurrentTab = true;
                                    }
                                    for (var i = 0; i < lens; i++) {
                                        if (gameMultiID == rl[i].gameMultiID) {
                                            var result = (item.PreviousResult || "").split(",");
                                            if (result.length == 1 && /^\s*$/.test(result[0])) {
                                                result = [];
                                            }
                                            rl[i].PreviousResult(result);
                                            rl[i].LottoStartTime(item.LottoStartTime || "");
                                            break;
                                        }
                                    }
                                })
                            }
                            if (!hasCurrentTab) {
                                vm.tab(vm.resultList().length > 0 ? vm.resultList()[0].gameMultiID : '');
                            }
                        }
                        if (options.refreshTime) {
                            setTimeout(refresh, options.refreshTime * 1000);
                        }
                        if (isInit && options.callback) {
                            options.callback && options.callback(vm, isInit);
                        }
                    }
                    else {
                        alert(json.infor);
                    }
                },
                error: function (e) {
                    //alert("获取开奖结果异常：" + e);
                }
            });
        }
        refresh(true);
        ko.applyBindings(vm, options.dom);
        return this;
    }
};
//获取当前在线人数，5s获取一次
homeFn.getOnlineUsers = function (dom, count) {
    (function _getOnlineUsers() {
        $.ajax({
            url: "/home/GetOnlineCount",
            cache: false,
            success: function (data) {
                var nowOn = isNaN(data.nowOnline - 0) ? 0 : data.nowOnline - 0;
                $(dom).text(nowOn * (count || 1));
            },
            complete: function () {
                setTimeout(function () {
                    _getOnlineUsers();
                }, 5000);
            }
        });
    })();
};

/// 刷新余额方法
; (function () {
    var isRefreshingBalance = false;
    window.refreshBalance = function () {
        var $dom = $("#Balance");
        if ($dom.length === 0) return alert('请将余额所在的标签添加id="Balance"');
        var beforeValue = $.trim($dom.text());
        $dom.text('...');
        isRefreshingBalance = true;
        $.ajax({
            url: "/AccountInfo/GetAccount",
            cache: false,
            success: function (json) {
                if (json && json.AccountName) $dom.text(json.CreditBalance);
            },
            error: function () {
                $dom.text(beforeValue);
            },
            complete: function () {
                isRefreshingBalance = false;
            }
        });
    };
})();


///首页立即下注ViewModel
function BetNowVM(options, results) {
    var that = this, format = 'hh<b>:</b>MM<b>:</b>ss<b></b>';
    this.options = options;
    this.cacheLotteryTime = {}; /// 存储开奖时间
    this.allGameInfos = options.gameInfos;
    this.topGameInfos = options.gameInfos.slice(0,4);
    this.btmGameInfos = options.gameInfos.slice(4,8);
    this.tab = ko.observable();   //当前所选游戏基本信息
    this.tabTop = ko.observable();   //top当前所选游戏基本信息
    this.tabBtm = ko.observable();   //btm当前所选游戏基本信息
    this.allResultList = ko.observableArray([]);    //所有游戏信息
    this.topResultList = ko.observableArray([]);    //所有游戏信息,上模板
    this.btmResultList = ko.observableArray([]);    //所有游戏信息，下模板
    this.resultList = ko.observableArray([]);  //游戏结果列表
    this.customList = ko.observableArray([]); //如果用户要自定义, 请使用回调修改此数组
    this.current = ko.observable();
    this.times = ko.observable(1);
    this.isModeGime = ko.observable(true);
    this.gameList = [];
    this.getResultsIds = undefined;   ///要获取开奖结果的id列表
    ko.utils.arrayForEach(that.allGameInfos, function (item) {
        item.isOpen = ko.observable(true);
        item.gameMultiID = item.Abbreviation + ":" + item.GroupID;
        that.gameList.push(item.gameMultiID);
    });

    //切换游戏
    this.gameTab = function (data, evt) {
        that.tab(data);
        if (data.Abbreviation === 'ZQSSC' || data.Abbreviation === 'ZQKS' || data.Abbreviation === 'JSKS' || data.Abbreviation === 'TXFFC') {
            that.tabTop(data);
        };
        if (data.Abbreviation === 'BJPKS' || data.Abbreviation === 'QQFFC' || data.Abbreviation === 'HGKLC' || data.Abbreviation === 'DJ1.5FC') {
            that.tabBtm(data);
        }
        !that.options.isRereshMulti && that.refresh(null, that.getLotteryRestTime);
    };
    //当前所选游戏
    that.current = ko.computed(function () {
        var i = 0, list = that.resultList(), lens = list.length;
        for (var i = 0; i < lens; i++) {
            if (that.tab().gameMultiID == list[i].gameMultiID) {
                return list[i];
            }
        }
    });
    that.tab(that.allGameInfos[0]);
    //增加或减少倍数
    that.addOrMinusMultiple = function (num, item, data, evt) {
        var current = item === true ? data : that.current();
        if (!current) return;
        num = current.times() - 0 + num;
        num = num < 1 ? 1 : num;
        current.times(num);
    };
    this.initResultInfos(results);
    that.refreshTimeout = 0;
    //立即下注
    that.betNow = function (item, data, evt) {
        var current = item === true ? data : that.current();
        if (!current || current.status() != 1) {
            utils.tip("当前为封盘状态, 请等待开盘!")
            return;
        };
        var baseUrl = current.betUrl;
        var params = "#!times=" + current.times() + "&id=" + current.betInfos.SI + "&nums=" + current.machineSelection().join(",") + "&radix=" + current.Radix;
        var url = baseUrl + params;
        window.location.href = url;
    }
    that.refresh(true);

    that.machineSelect = function (item, data, evt) {
        var that = this;
        var current = item === true ? data : that.current();
        if (!current) return;
        var betInfos = current.betInfos;
        current.machineSelection.removeAll();
        if (betInfos.count == betInfos.range.length && $.isArray(betInfos.range[0])) {
            for (var i = 0; i < betInfos.count; i++) {
                productNum(betInfos.range[i], 1);
            }
        }
        else {
            productNum(betInfos.range, betInfos.count);
        }
        function productNum(range, count) {
            if (betInfos.canRepeat) {
                //可重复
                var countNum = range[1] - range[0] + 1;
                for (i = 0; i < count; i++) {
                    current.machineSelection.push(range[0] + Math.floor(Math.random() * countNum));
                }
            }
            else {
                //不重复
                var allNum = [], i;
                for (i = range[0]; i <= range[1]; i++) {
                    allNum.push(i);
                }
                for (i = 0; i < count; i++) {
                    var lens = allNum.length - i;
                    var idx = Math.floor(Math.random() * lens);
                    current.machineSelection.push(allNum[idx]);
                    if (idx != lens - 1) {
                        allNum[idx] = allNum[lens - 1];
                    }
                }
            }
        }
    };

    /// 获取离开奖的剩余时间
    that.countdown = ko.observable({ reset: 0, callback: that.timeover, format: format });
    that.currentPeriod = ko.observable();
    that.getLotteryRestTime = function () {
        var current = that.current();
        if (!current) return 0;
        var serverCurrentTime = window.serverTime + (new Date() - window.localTime);
        that.lotteryReset(current.NumberofPeriod(), Math.ceil((new Date(current.LottoStartTime) - serverCurrentTime) / 1000));
    }
    that.timeover = function () {
        if (!that.current()) return that.lotteryReset();
        var currentGameid = that.current().GameId, index = -1;
        var serverCurrentTime = window.serverTime + (new Date() - window.localTime);
        ko.utils.arrayForEach(that.cacheLotteryTime[currentGameid], function (el, i) {
            if (el.period === that.currentPeriod()) index = i;
        });
        if (index > -1 && serverCurrentTime > new Date(that.cacheLotteryTime[currentGameid][index].time.replace(/-/g, "/")) - 0) {
            that.cacheLotteryTime[currentGameid].splice(index, 1);
        }
        var newCurrent = that.cacheLotteryTime[currentGameid].length > 0 ? that.cacheLotteryTime[currentGameid][0] : that.current();
        if (!newCurrent.period && !newCurrent.time) {
            that.lotteryReset();
        } else {
            that.lotteryReset(newCurrent.period, Math.ceil((new Date(newCurrent.time) - serverCurrentTime) / 1000));
        }
    }
    that.lotteryReset = function (period, rest) {
        that.currentPeriod(period || "");
        that.countdown({ rest: rest || 0, callback: that.timeover, format: format });
    }
}
////初始化游戏结果信息
BetNowVM.prototype.initResultInfos = function (results) {
    if (!results) return
    var resultListVM = [];
    ko.utils.arrayForEach(results, function (item, idx) {
        if (!item.dom) return;
        if (!item.gameIds || item.gameIds.length == 0) {
            item.gameIds = [0];
        }
        var vm = {
            index: idx,
            options: item,
            tab: ko.observable(),
            resultList: ko.observableArray([])
        }
        vm.current = ko.computed((function () {
            var i = 0, list = this.resultList(), lens = list.length;
            for (var i = 0; i < lens; i++) {
                if (vm.tab() == list[i].GameId) {
                    return list[i];
                }
            }
        }).bind(vm));
        resultListVM.push(vm);
    });
    var ids = [];
    ko.utils.arrayForEach(results, function (option) {
        ko.utils.arrayForEach(option.gameIds, function (id) {
            if (ko.utils.arrayIndexOf(ids, id) < 0) {
                ids.push(id);
            }
        });
    })
    this.getResultsIds = ids;
    this.resultListVM = resultListVM;
    this.refreshResults = function (list, vm, isInit) {
        isInit && (list = JSON.parse(JSON.stringify(list)));
        if (isInit) {
            var results = [];
            ko.utils.arrayForEach(list, function (item) {
                var gameMultiID = item.Abbreviation + ":" + item.GroupId;
                if (ko.utils.arrayIndexOf(vm.options.gameIds, gameMultiID) > -1) {
                    item.gameMultiID = gameMultiID;
                    item.resultUrl = '/Result/index?game=' + item.GameId;
                    item.PreviousResult = ko.observableArray((item.PreviousResult || "").split(","));
                    item.LottoStartTime = ko.observable(item.LottoStartTime || "");
                    item.betUrl = item.GroupId == 3 ? ("/OffcialOtherGame/Index/" + item.GameId) : (item.GameId == 1 ? ("/six/index") : ("/OtherGame/Index/" + item.GameId));
                    results.push(item);
                }
            });
            if (vm.options.num) results = results.slice(0, vm.options.num);
            vm.resultList(results);
        }
        else {
            var rl = vm.resultList(), lens = rl.length;
            ko.utils.arrayForEach(list, function (item) {
                var gameMultiID = item.Abbreviation + ":" + item.GroupId;
                for (var i = 0; i < lens; i++) {
                    if (gameMultiID == rl[i].gameMultiID) {
                        rl[i].PreviousResult((item.PreviousResult || "").split(","));
                        rl[i].LottoStartTime(item.LottoStartTime || "");
                        break;
                    }
                }
            })
        }
    }
}
////刷新游戏信息
/// callback 成功获取期数后的回调
BetNowVM.prototype.refresh = function (isInit, callback) {
    var that = this;
    var options = that.options;
    clearTimeout(that.refreshTimeout);
    var currentGameIds = options.isRereshMulti ? that.gameList : [that.tab().gameMultiID];
    var allids = currentGameIds;
    if (this.getResultsIds) {
        var ids = [];
        allids = allids.concat(this.getResultsIds);
        ko.utils.arrayForEach(allids, function (id) {
            if (ko.utils.arrayIndexOf(ids, id) < 0) {
                ids.push(id);
            }
        });
        allids = ids;
    }
    function findGame(gameMultiID) {
        for (var i = 0; i < that.allResultList().length; i++) {
            var result = that.allResultList()[i];
            if (result.gameMultiID == gameMultiID) {
                return result;
            }
        }
    }
    ///重置游戏是否为开启状态
    function resetOpenStatus(jsonList) {
        var lens = jsonList.length;
        var lens2 = that.allGameInfos.length;
        var i, j;
        for (j = 0; j < lens2; j++) {
            var item = that.allGameInfos[j];
            if (ko.utils.arrayIndexOf(currentGameIds, item.gameMultiID) > -1) {
                for (i = 0; i < lens; i++) {
                    if (item.gameMultiID == jsonList[i].Abbreviation + ":" + jsonList[i].GroupId) {
                        item.isOpen(true);
                        break;
                    }
                }
                if (i >= lens) {
                    item.isOpen(false);
                }
            }
        }
    }
    var url = "/Shared/GetLotteryResult?gamelist=" + encodeURI(allids.join(","));
    $.ajax({
        url: url,
        cache: false,
        success: function (json) {
            if (json.status) {
                var list = json.Data
                var needCounts = [];
                if (list) {
                    if (that.getResultsIds) {
                        ko.utils.arrayForEach(that.resultListVM, function (item, idx) {
                            that.refreshResults(list, item, isInit);
                        })
                    }
                    ko.utils.arrayForEach(list, function (item) {
                        if (!that.cacheLotteryTime[item.GameId]) that.cacheLotteryTime[item.GameId] = [];
                        var isExist = true;
                        ko.utils.arrayForEach(that.cacheLotteryTime[item.GameId], function (el) {
                            if (el.period === item.NumberofPeriod) isExist = false;
                        });
                        isExist && that.cacheLotteryTime[item.GameId].push({ period: item.NumberofPeriod, time: item.LottoStartTime });

                        var gameMultiID = item.Abbreviation + ":" + item.GroupId;
                        if (ko.utils.arrayIndexOf(currentGameIds, gameMultiID) < 0) return;
                        var result = findGame(gameMultiID);
                        if (result) {
                            for (var key in item) {
                                if ($.isFunction(result[key])) {
                                    if (key == 'PreviousResult') {
                                        result[key]((item[key] || "").split(','))
                                    }
                                    else {
                                        result[key](item[key]);
                                    }
                                }
                                else {
                                    result[key] = item[key];
                                }
                            }
                        }
                        else {
                            for (var i = 0; i < that.allGameInfos.length; i++) {
                                if (that.allGameInfos[i].gameMultiID == gameMultiID) {
                                    item.betInfos = that.allGameInfos[i].betInfos;
                                    break;
                                }
                            }
                            item.machineSelection = ko.observableArray([]);
                            that.machineSelect(true, item, null);
                            item.resultUrl = '/Result/index?game=' + item.GameId;
                            item.gameMultiID = gameMultiID;
                            item.NumberofPeriod = ko.observable(item.NumberofPeriod);
                            item.PreviousResult = ko.observableArray((item.PreviousResult || "").split(','));
                            item.countSeconds = ko.observable(3732);
                            item.status = ko.observable(0);
                            item.Radix = item.Radix || 0;
                            item.times = ko.observable(1);
                            item.totalMoney = ko.computed(function () {
                                var rtn = item.Radix * item.times();
                                if (item.betInfos["calcByCount"] || (item.betInfos["calcByCount"] !== false && item.GroupId == 0)) {
                                    rtn *= item.betInfos.count;
                                }
                                return rtn;
                            });
                            item.dayStr = ko.computed(function () {
                                var seconds = item.countSeconds();
                                if (seconds <= 0) {
                                    return "0";
                                }
                                var temp = "" + Math.floor(seconds / 3600 / 24);
                                return temp;//temp.length > 2 ? temp : (("00" + temp).substr(temp.length));
                            });
                            item.hourStr = ko.computed(function () {
                                var seconds = item.countSeconds();
                                if (seconds <= 0) {
                                    return "00";
                                }
                                //var temp = "" + Math.floor(seconds % (3600 * 24) / 3600);
                                var temp = "" + Math.floor(seconds / 3600);
                                return temp.length > 2 ? temp : (("00" + temp).substr(temp.length));
                            });
                            item.minuteStr = ko.computed(function () {
                                var seconds = item.countSeconds();
                                if (seconds <= 0) {
                                    return "00";
                                }
                                var temp = "" + Math.floor(seconds % 3600 / 60);
                                return ("00" + temp).substr(temp.length);
                            });
                            item.secondsStr = ko.computed(function () {
                                var seconds = item.countSeconds();
                                if (seconds <= 0) {
                                    return "00";
                                }
                                var temp = "" + Math.floor(seconds % 3600 % 60);
                                return ("00" + temp).substr(temp.length);
                            });
                            item.betUrl = item.GroupId == 3 ? ("/OffcialOtherGame/Index/" + item.GameId) : (item.GameId == 1 ? ("/six/index") : ("/OtherGame/Index/" + item.GameId));
                            result = item;
                            that.allResultList.push(item);
                            if (item.Abbreviation === 'ZQSSC' || item.Abbreviation === 'ZQKS' || item.Abbreviation === 'JSKS' || item.Abbreviation === 'TXFFC') {
                                that.topResultList.push(item);
                            };
                            if (item.Abbreviation === 'BJPKS' || item.Abbreviation === 'QQFFC' || item.Abbreviation === 'HGKLC' || item.Abbreviation === 'DJ1.5FC') {
                                that.btmResultList.push(item);
                            }
                        }
                        needCounts.push(result);
                    });
                    resetOpenStatus(list);
                    that.resultList(needCounts);
                    that.autoCountdown();
                    if (isInit && options.callback) {
                        options.callback && options.callback(that, isInit);
                    }
                    if (isInit) {
                        that.getLotteryRestTime();
                    } else {
                        that.timeover();
                    }
                }
                if (options.refreshTime) {
                    that.refreshTimeout = setTimeout(function () { that.refresh(); }, options.refreshTime * 1000);
                }
            }
            else {
                alert(json.infor);
            }
        },
        error: function (e) {
            //alert("获取开奖结果异常：" + e);
        }
    });
}
//倒计时
BetNowVM.prototype.autoCountdown = function () {
    var vm = this;
    var serverCurrentTime = window.serverTime + (new Date() - window.localTime);
    var needCountdown = false;
    ko.utils.arrayForEach(vm.resultList(), function (item, idx) {
        processItem(item, serverCurrentTime);
    });
    function processItem(item, st) {
        var seconds = 0;
        if (item.StartTime) {
            var startTime = new Date(item.StartTime.replace(/\-/g, "/")) - 0;
            var endTime = new Date(item.CloseTime.replace(/\-/g, "/")) - 0;
            if (startTime > st) {
                seconds = startTime - st;
                item.status(2);
            }
            else if (st < endTime) {
                seconds = endTime - st;
                item.status(1);
            }
            else {
                seconds = 0;
                item.status(0);
            }
        }
        seconds = Math.floor(seconds / 1000);
        seconds > 0 && (needCountdown = true);
        item.countSeconds(seconds);
    };
    if (!vm.clock) {
        var clock = {
            timeout: 0,
            circle: function () {
                var serverCurrentTime = window.serverTime + (new Date() - window.localTime);
                ko.utils.arrayForEach(vm.resultList(), function (item, idx) {
                    item.countSeconds(item.countSeconds() - 1);
                    if (item.countSeconds() <= 0) {
                        processItem(item, serverCurrentTime);
                    }
                });
            },
            start: function () {
                this.timeout = setTimeout(function () {
                    clock.circle();
                    clock.start();
                }, 1000);
            },
            stop: function () {
                this.circle();
                clearTimeout(this.timeout);
            }
        }
        vm.clock = clock;
    }
    vm.clock.stop();
    if (needCountdown) {
        vm.clock.start();
    }
    return this;
};

/// 公用的登录模块（弹窗）
/// @param {String} klass , class名
homeFn.login = function (klass) {
    var tpl = '<div class="login-modal">'
        + '<form autocomplete="off" action="/home/login" method="post" data-bind="submit:submit">'
        + '<input type="text" name="username" style="visibility:hidden;position:absolute;z-index:-999;">'
        + '<input type="password" name="password" style="visibility:hidden;position:absolute;z-index:-999;">'
        + '<table cellpadding="0" cellspacing="1" border="0">'
        + '<tbody>'
        + '<tr>'
        + '<td height="28" align="right">用户名：</td>'
        + '<td>&nbsp;&nbsp;<input type="text" class="reg-int" tag="input" data-bind="textinput:fields.username,placeholder:\'请输入用户名\'" needed /></td>'
        + '</tr>'
        + '<tr>'
        + '<td height="28" align="right">密码：</td>'
        + '<td>&nbsp;&nbsp;<input type="password" class="reg-int" tag="input" data-bind="textinput:fields.password,placeholder:\'请输入密码\'" needed /></td>'
        + '</tr>'
        + '<tr>'
        + '<td height="28" align="right">验证码：</td>'
        + '<td>&nbsp;&nbsp;<input type="text" tag="input" class="codes-int" data-bind="textinput:fields.validateCode,placeholder:\'请输入验证码\'" needed /><img src="" alt="点击更换" data-bind="attr:{src:\'/Home/ValidateCode?\'+random()},click:refreshCode" class="ui-code-box"></td>'
        + '</tr>'
        + '<tr><td></td><td><span class="submitting" data-bind="visible:isSubmitting">正在登录中</span></td></tr>'
        + '<tr><td></td><td><a href="/Register">去注册</a></td></tr>'
        + '</tbody>'
        + '</table>'
        + '<input type="submit" value="提交" style="display:none">'
        + '</form>'
        + '</div>';
    if (!window.bootstrapForm) return alert("请调用home/reg.common.js文件");

    var options = {
        skin: klass,
        title: "登录",
        content: tpl,
        okValue: "登录",
        ok: function () {
            this.vm.submit();
            return false;
        },
        cancelValue: "取消",
        cancel: $.noop,
        onshow: function () {
            this.vm = bootstrapForm(this.node, "login");
        },
        initialize: function () {
            this.vm = bootstrapForm(this.dom.main.context, "login");
        },
        success: function (layero) {
            this.vm = bootstrapForm(layero[0], "login");
        },
        yes: function () {
            this.vm.submit();
        }
    };

    if (window.artDialog) { /// 5.x
        artDialog(options);
    } else if (window.dialog) { /// 6.x
        dialog(options).showModal();
    } else if (window.layer) {
        layer.open(options);
    } else {
        alert("没有引用弹窗插件");
    }
}


///游戏列表/购彩大厅页(含倒计时)
homeFn.initGameList = function (dom, timeIsArr) {
    function GameListVM() {
        var fg = formatGameList();
        var that = this;
        that.typeList = ko.observableArray(fg.type);
        that.allList = ko.observableArray(fg.all);
        that.ids = fg.ids.join(",");
        that.isLoadding = false;
        that.foldingMenu = function (data, evt) {
            var target = $(evt.currentTarget);
            var par = target.parent();
            if (par.hasClass("sidem_type_active")) {
                par.removeClass("sidem_type_active");
                target.siblings("ul").slideUp();
            }
            else {
                par.addClass("sidem_type_active");
                target.siblings("ul").slideDown();

            }
        }
        that.timeoutH = -1;
        that.GetData(true);
        that.IntervalH = -1;
    }
    GameListVM.prototype.GetData = function (reset) {
        var that = this;
        if (this.timeoutH != -1) {
            clearTimeout(this.timeoutH);
            that.Timeout();
        }
        if (reset) {
            clearInterval(that.IntervalH);
            that.IntervalH = setInterval(that.GetData.bind(that), 5000);
        }
        that.isLoadding = true;
        $.ajax({
            url: "/Shared/GetLotteryResult",
            type: "get",
            data: { gameID: 0 },  //that.ids, 0代表所有
            success: function (json) {
                if (!json.status) { alert(json.infor); return; }
                var csTime = new Date() - localSTime + serverTime; //当前服务器时间
                var data = json.Data, lens = data.length;
                $.each(that.allList(), function (idx, item) {
                    for (var i = idx; i < idx + lens; i++) {
                        var game = data[i % lens];
                        if (game.GameId == item.FGameID) {
                            if (game.StartTime) {
                                item.StartTime = +new Date(game.StartTime.replace("-", "/"));
                                item.CloseTime = +new Date(game.CloseTime.replace("-", "/"));
                                item.LottoStartTime = +new Date(game.LottoStartTime.replace("-", "/"));
                                var lot = item.LottoStartTime - csTime;
                                var close = item.CloseTime - csTime;
                                var start = item.StartTime - csTime;
                                if (start > 0 || lot < 0) {
                                    item.status(-1);
                                    item.Timeout(Math.floor(start));
                                }
                                else if (close >= 0) {
                                    item.status(0);
                                    item.Timeout(Math.floor(close / 1000));
                                }
                                else if (lot >= 0) {
                                    item.status(-2);
                                    item.Timeout(Math.floor(lot));
                                }
                            }
                            else {
                                item.Timeout(-1);
                            }
                            item.CurrentPeriods(game.NumberofPeriod);
                            item.PreviousResult(game.PreviousResult ? game.PreviousResult.replace(/\s/g, "").split(",") : []);
                            item.PreviousPeriod(game.PreviousPeriod);
                            break;
                        }
                    }
                });
                that.isLoadding = false;
                clearTimeout(that.timeoutH);
                that.timeoutH = setTimeout(that.Timeout.bind(that), 1000);
            }
        });
    };
    GameListVM.prototype.Timeout = function () {
        var that = this;
        var csTime = new Date() - localSTime + serverTime; //当前服务器时间
        var resetData = false;
        $.each(that.allList(), function (idx, item) {
            var lot = Math.floor((item.LottoStartTime - csTime) / 1000);
            var close = Math.floor((item.CloseTime - csTime) / 1000);
            var start = Math.floor((item.StartTime - csTime) / 1000);
            var status = item.status();
            if (start > 0 || lot < 0) {
                item.status(-1);
                item.Timeout(start);
            }
            else if (close >= 0) {
                item.status(0);
                item.Timeout(close);
            }
            else if (lot >= 0) {
                item.status(-2);
                item.Timeout(lot);
            }
            if (status != item.status() && (start == 0 || lot == 0 || lot == 0)) {
                resetData = true;
            }
        });
        !that.isLoadding && resetData && that.GetData(true);
        clearTimeout(that.timeoutH);
        !resetData && (that.timeoutH = setTimeout(that.Timeout.bind(that), 1000));
    }
    function formatTime(seconds) {
        var sec = seconds % 60;
        var min = Math.floor(seconds / 60);
        var hour = Math.floor(min / 60);
        min = min % 60;
        sec = sec < 10 ? ("0" + sec) : sec;
        min = min < 10 ? ("0" + min) : min;
        hour = hour < 10 ? ("0" + hour) : hour;

        return hour + ":" + min + ":" + sec;
    }
    function formatGameList() {
        ///左侧分类菜单各类显示顺序, 低频彩/时时彩/分分彩/PK拾/体育彩/快乐彩/pc蛋蛋/快三
        var sortBy = ["DPC", "SSC", "FFC", "PKS", "TYC", "KLC", "PCDD", "K3"];
        var Games = JSON.parse(gameList);
        var group = {};
        var typeList = [];  //分类后
        var allList = [];   //所有
        var ids = []; //游戏id列表
        $.each(Games, function (i, v) {
            var nk = v.FCategoryCode.split("_"), formatNk = "";
            //统一分类
            switch (nk[1]) {
                case "11X5":
                    formatNk = "TYC";
                    break;
                case "LHC":
                    formatNk = "DPC";
                    break;
                default:
                    formatNk = nk[1];
            }
            if (!group[formatNk]) {
                group[formatNk] = {
                    FCategoryName: v.FCategoryName,
                    FClassName: formatNk,
                    GameInfoList: []
                };
            }
            $.each(v.GameInfoList, function (idx, item) {
                item.FGameName += '[' + (nk[0] == 'CREDIT' ? "信" : "官") + ']';
                item.CurrentPeriods = ko.observable("");
                item.PreviousPeriod = ko.observable("");
                item.PreviousResult = ko.observableArray();
                item.StartTime = 0;
                item.CloseTime = 0;
                item.LottoStartTime = 0;
                item.Timeout = ko.observable(0);
                item.status = ko.observable(-1);
                item.TimeoutStr = ko.computed(function () {
                    var time = item.Timeout();
                    var status = item.status();
                    if (status == -1) {
                        return timeIsArr ? ["等待开盘"] : "等待开盘";
                    }
                    else if (status == -2) {
                        return timeIsArr ? ["等待开奖"] : "等待开奖";
                    }
                    var rtn = formatTime(item.Timeout())
                    return timeIsArr ? rtn.split('') : rtn;
                }, item);
                if (hasLogin) {
                    if (item.FGameID == 1) {
                        item.href = "/Six/Index";
                    }
                    else {
                        item.href = "/" + (nk[0] == 'CREDIT' ? "OtherGame" : "OffcialOtherGame") + "/Index/" + item.FGameID;
                    }
                }
                else {
                    item.href = "/Login";
                }
                item.resultUrl = '/Result/index?game=' + item.FGameID;
                group[formatNk].GameInfoList.push(item);
                allList.push(item);
                ids.push(item.FGameID);
            });
        });
        //排序
        $.each(sortBy, function (idx, item) {
            typeList[idx] = group[item];
        });
        allList.sort(function (l1, l2) {
            return l1.FSort - l2.FSort;
        })
        return { all: allList, type: typeList, ids: ids };
    }
    if (dom) {
        ko.applyBindings(new GameListVM(), dom);
    }
    else {
        ko.applyBindings(new GameListVM());
    }
}


////弹窗显示游戏规则
homeFn.initRuleDialog = function (options) {
    var defaultOptions = {
        clickId: '#showRuleDialog',
        gameListId: 'lot_sec_menu',
        aClass: 'js-game',
        data: 'data-id',
        gameList: null,
        defaultId: 1
    }
    options = $.extend(defaultOptions, options);
    var currentID = options.defaultId;
    var gameList = (function () {
        if (options.gameList) return options.gameList;
        var lista = $('#' + options.gameListId + ' .' + options.aClass);
        var rtn = [];
        lista.each(function (i, v) {
            var ids = $(v).attr(options.data);
            if (ids) {
                ids = ids.split('|');
                if (ids.length == 2) {
                    rtn.push({
                        gameName: ids[1],
                        id: ids[0]
                    })
                }
            }
        });
        return rtn;
    })();
    $(options.clickId).click(function () {
        getRule(show, currentID);
    })
    function getRule(callback, id) {
        //没有传入id，证明还是当前页，所以拿缓存
        $.ajax({
            url: "/Help/GetGameRuleContent?gameId=" + (id || 1),
            success: function (data) {
                typeof callback == 'function' && callback(data);
            },
            error: function (err) { alert("功能维护中...") }
        });
    }
    function show(res) {
        //将顶部菜单列表从左侧菜单抓取出来
        var gameMenu = function () {
            var arr = ['<div class="rule-State"><ul class="clear gz_tab" rule="nav">'];
            $.each(gameList, function (i, v) {
                arr.push('<li data-id="' + v.id + '"' + (v.id == currentID ? 'class="curr"' : "") + '><a href="javascript:;">' + v.gameName + '</a></li>');
            });
            arr.push('</ul>')
            arr.push('<div class="gz_con" rule="content" style="padding:10px;">' + res + '</div></div>')
            return arr.join("");
        }();
        dialog({
            title: "规则说明",
            id: 'RULE',
            width: 850,
            height: 500,
            padding: 0,
            content: gameMenu,
            onshow: function () {
                var dom = this._$('content');
                var nav = dom.find('[rule=nav]');
                var content = dom.find("[rule=content]");
                nav.on("click", "li", function () {
                    $(this).addClass("curr").siblings('.curr').removeClass('curr');
                    var gameid = $(this).data("id");
                    getRule(function (res) {
                        content.html(res);
                    }, gameid);
                });
            }
        }).showModal();
    }
}