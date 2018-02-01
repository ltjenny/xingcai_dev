    
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="telephone=no" name="format-detection" />
    <title>用户中心-修改密码</title>
    <meta name="keywords" />
    <meta name="description" />
    <link rel="Shortcut Icon" href="/Images/ICO/yuducaipiao/favicon.ico" />
    <link rel="Bookmark" href="/Images/ICO/yuducaipiao/favicon.ico" />
    <link href="/css_new/userCenter/usercenter.css?3eda99ab3b" rel="stylesheet" tii="usercenter" />
    <link href="/css_new/usercenter.css?ab5383d759" rel="stylesheet" />
    <script src="/js_new/dist/$.ko.js?a876144a3a"></script>
    <script src="/js_new/common/jquery.knob.js?be4c010975"></script>
    <script src="/js_new/common/modernizr.custom.js?44a0670bed"></script>
    <script src="/js_new/common/artDialog6/dialog-plus-min.js?4786a25c83"></script>
    <link href="/js_new/common/artDialog6/ui-dialog.css?ae7e700648" rel="stylesheet" />
    <script src="/js_new/dist/official/utils.min.js?94126d98c6"></script>
    <script src="/js_new/common/banner.js?3bc5e3023e"></script>
    <script src="/js_new/common/ko.page.js?23b592fe9a"></script>
    <style>
        /*x068增加单独头部*/
        .head {
            position: relative;
        }

            .head .logo-wrap {
                margin: 0;
            }

        .top-box .main {
            width: 100% !important;
            margin: 0 auto;
        }

        .header-main {
            width: 100% !important;
            margin: 0 auto;
        }

        .bar-left {
            margin-left: 20px;
        }

        .logo {
            margin-left: 20px;
        }

        .bar-right {
            margin-right: 20px;
        }

        .top-online {
            margin-right: 20px;
        }
        /*x068增加单独头部*/
    </style>
</head>
<body class="bg body UC-con">
    <input type="hidden" id="accountId" value="632874" />
    <div class="head">
        <div class="logo-wrap"></div>
        <div class="top_menu">
            <div class="clear">
                <a href="/OffcialOtherGame/Index/26" id="gameListBtn" class="games" title="游戏大厅"><span>游戏大厅</span></a>
                <a href="/" class="getout" title="返回首页"><span>返回首页</span></a>
                <a href="http://tb.53kf.com/webCompany.php?arg=10147846&style=1&fromthirdservice=webapp" target="_blank" class="service" title="在线客服">
                    <span class="new-msg" id="NewMsg">在线客服</span>
                </a>
                <a href="/Help/Betq?gameId=0" class="rule" id="Rule" title="规则说明"><i></i><span class="rule_description">规则说明</span></a>
                <a href="/Help/Techq" class="help" title="游戏帮助"><i></i><span class="play_help">游戏帮助</span></a>
                <a title="登出账号" class="btn-login-out" href="/Home/UserLogout"><span>登出账号</span></a>
            </div>

            <!--下拉游戏选择-->
            <div class="menu-child" style="display:none;" id="lot_sec_menu">
                <div class="gamelist clear">
                    <div class="official_play">
                        <div class="gamelist_tit clear">
                            <h1 class="red_style">官方玩法</h1>
                        </div>
                        <div class="high_wrap">
                            <div class="gamelist_l">
                                <ul data-bind="foreach:official">
                                    <li>
                                        <a class="game_26" data-bind="attr:{href:'/OffcialOtherGame/Index/'+FGameID}"><font data-bind="text:FGameName"></font></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="cut-line"></div>
                    <div class="credit_play">
                        <div class="gamelist_tit clear">
                            <h1 class="orange_style">信用玩法</h1>
                        </div>
                        <div class="high_wrap">
                            <div class="gamelist_r">
                                <ul data-bind="foreach:credit">
                                    <li>
                                        <a class="game_1" data-bind="attr:{href:FGameID==1?'/six/index':'/OtherGame/Index/'+FGameID}"><font data-bind="text:FGameName"></font></a>
                                    </li>
                                    
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="triangles_back"></div>
            </div>
            <!--下拉游戏选择 end-->
        </div>
    </div>
    <div class="container clear">
        <div class="side-left">
            <div class="user-info">
                <div class="userbox">
                    <ul class="stc_1 clear">
                        <li class="mane">
                            <span class="stc_t">账号：</span>
                            <span class="stc_c">321</span>
                        </li>
                        <li class="balance">
                            <span class="stc_t">余额：</span>
                            <span class="stc_c" id="AvailableBalance">0</span>
                        </li>
                    </ul>
                </div>
                <div class="acc-links clear" id="OpenNewWindow">
                    <a title="在线存款" class="btn-navacc btn-navacc-deposit" href="/Recharge/Index"><span title="在线存款">充值</span></a>
                    <a title="在线取款" class="jGetMoney btn-navacc btn-navacc-withdraw" href="javascript:;"><span title="在线取款">提现</span></a>
                </div>
            </div>
            <div class="side_menu" id="sideMenu">
                <div class="sidem_item">
                    <a href="/index.php/userCenter/cardList" class="sidem_b"><span>绑定卡号</span></a>
                </div>
                <div class="sidem_item">
                    <a href="/index.php/userCenter/editPwd" class="sidem_b"><span>密码修改</span></a>
                </div>
                <div class="sidem_item">
                    <a href="/index.php/record/bet" class="sidem_b"><span>投注记录</span></a>
                </div>
                <div class="sidem_item">
                    <a href="/index.php/report/accountChange" class="sidem_b"><span>账变记录</span></a>
                </div>
                <div class="sidem_item">
                    <a href="/index.php/report/count" class="sidem_b"><span>盈亏报表</span></a>
                </div>
                <div class="sidem_item">
                    <a href="/index.php/report/rechargeLog" class="sidem_b"><span>充值记录</span></a>
                </div>
                <div class="sidem_item">
                    <a href="/index.php/report/toCashLog" class="sidem_b"><span>提现记录</span></a>
                </div>
                <div class="sidem_item">
                    <a href="/index.php/userCenter/emails" class="sidem_b"><span>更改昵称</span></a>
                </div>
                <div class="sidem_item">
                    <a href="/index.php/userCenter/notice" class="sidem_b"><span>平台公告</span></a>
                </div>
                <div class="sidem_item">
                    <a href="/index.php/userCenter/message" class="sidem_b"><span>站内短信</span></a>
                </div>
            </div>
            <script type="text/javascript">
                (function () {
                    var active = '';
                    var url = document.location.href.toLowerCase();
                    //var patt = new RegExp(url);
                    $(".side_menu").find("a").each(function (a, b) {
                        var thisEle = $(this);
                        var thisUrl = thisEle.attr("href").toLowerCase();
                        if (/editpwd|secretquestion|emails|contact/g.test(url)) {
                            thisEle.parent().parent().parent().parent().show();
                        }
                        //if (active != '') {
                        //    if (new RegExp(active.toLowerCase()).test(thisUrl)) {
                        //        thisEle.parent().parent().show();
                        //        thisEle.parent().addClass("active");
                        //    }
                        //} else {
                            if (url.match(thisUrl)) {
                                thisEle.parent().parent().show();
                                thisEle.parent().addClass("active");
                            }
                        //}
                    });

                    /// 左边菜单折叠效果
                    $(function () {
                        var sidemenu = $("#sideMenu");
                        var btnbars = sidemenu.children().children("a");
                        btnbars.on("click", function () {
                            var $this = $(this);
                            $this.next("ul").slideToggle("fast");
                            $this.parent().siblings().children("ul").slideUp("fast");
                        });
                        sidemenu.find(".sidem_sub").on("click", function () {
                            $(this).next().slideToggle("fast");
                        });
                    });
                })();
            </script>
        </div>
        <div class="ui-main clear" id="ulMain">
            <script type="text/javascript">
                var hasWithdrawalPwd = 'False';
                var token = '';
                var hisUrl = '/UserCenter/EditPwd';
                var IsGeneralize = 'False';
            </script>
            <div class="main-head">
                <span>用户中心&gt;账户管理&gt;密码修改</span>
            </div>
            <div class="con_box clear">
                <div class="btn-box clear">
                    <span class="tabs-con">
                        <a id="loginPwd" href="javascript:void(0)" data-type="1" class="btn" data-bind="click:switchPwd">修改登录密码</a>
                        <a id="withdrawalpwd" href="javascript:void(0)" data-type="2" class="btn active" data-bind="click:switchPwd">设置取款密码</a>
                    </span>
                </div>
                <div class="form-horizontal" data-bind="visible:showLoginPwd">
                    <div class="control-group">
                        <label class="control-label">输入旧登录密码：</label>
                        <div class="controls inputMD">
                            <input type="password" data-bind="value:oldLoginPwd" name="oldLoginPwd">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">输入新登录密码：</label>
                        <div class="controls inputMD">
                            <input type="password" data-bind="value:newLoginPwd" name="newLoginPwd" class="phInput">
                            <span class="phText">6-13个字符(数字和字母)</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">确认新登录密码：</label>
                        <div class="controls inputMD">
                            <input type="password" data-bind="value:okNewLoginPwd" name="okNewLoginPwd">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"></label>
                        <div class="controls">
                            <a href="javascript:void(0)" class="btn" data-bind="click:modifyLoginPwd">修改</a>
                            <a href="javascript:void(0)" class="btn" data-bind="click:reset">重置</a>
                            <span data-bind="visible:isSubmitting">正在修改，请稍后...</span>
                        </div>
                    </div>
                </div>
                <div class="form-horizontal" data-bind="visible:showWithdrawalPwd">
                    <div class="control-group">
                        <span class="help-float" style="margin-left:58px;">提示：取款密码由4-6位数字或字母或数字和字母组成，在线取款时需要输入取款密码才能进行取款</span>
                    </div>
                    <div class="control-group">
                        <label class="control-label">输入新提款密码：</label>
                        <div class="controls inputMD">
                            <input type="password" data-bind="value:newWithdrawalPwd" name="newWithdrawalPwd">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">确认新提款密码：</label>
                        <div class="controls inputMD">
                            <input type="password" data-bind="value:okNewWithdrawalPwd" name="okNewWithdrawalPwd">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"></label>
                        <div class="controls">
                            <a href="javascript:void(0)" class="btn" data-bind="click:modifyWithdrawalPwd">设置</a>
                            <a href="javascript:void(0)" class="btn" data-bind="click:reset">重置</a>
                            <span data-bind="visible:isSubmitting">正在修改，请稍后...</span>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                function _placeholderText(phInput, phText) {
                    var $input = $(phInput);
                    var $text = $(phText);
                    $input.each(function () {
                        var _this = $(this);
                        var _text = _this.siblings(phText);
                        if ($.trim(_this.val()) == '') {
                            _this.val("");
                            _text.show();
                        } else {
                            _text.hide();
                        }
                    });
                    $text.on('click', function () {
                        $(this).siblings(phInput).focus();
                    });
                    $input.on('input propertychange blur', function () {
                        var _this = $(this);
                        if (_this.val() == '') {
                            _this.siblings(phText).show();
                        } else {
                            _this.siblings(phText).hide();
                        }
                    });
                }

                _placeholderText('.phInput', '.phText');
            </script>
            <script src="/js_new/common/lz-string.min.js?ff5d344228"></script>
            <script src="/js_new/UserCenter/EditPwd.js?b0c651a662"></script>
        </div>
    </div>
    <div id="SEARCH-TIP" style="display:none;">
        <div class="mask"></div>
        <div class="popup tips-popup">
            <div class="popup-head">
                <span>提示</span>
            </div>
            <div class="popup-body">
                <p>查询中,请您耐心等待.....</p>
            </div>
        </div>
    </div>
    <script type="text/javascript">var SignalrSite = 'https://zycccppp.websocketcdn.com:8819/signalr', iis = 'https://zy11sbsbqt.lfjieweisi.com/';</script>
    <script src="/js_new/common/jquery.signalR-2.1.1.min.js?40e112173f"></script>
    <script src="/js_new/WG.RegisterUser.js?78b9bba0bc"></script>
    <script>
        $(function () {
            //点击提现前, 调用接口, 判断是否可以提款
            $('#jGetMoney, .jGetMoney').on('click', function (evt) {
                $.ajax({
                    url: '/Withdrawal/ValidateEncashment',
                    cache: false,
                    success: function (json) {
                        if (json.status) {
                            window.location.href = json.url;
                        }
                        else {
                            utils.tip(json.info);
                        }
                    }
                });
                evt.preventDefault();
                return false;
            });
            var menuVM = function () {
                this.init = function (id) {
                    this.getData();
                    ko.applyBindings(this, $("#" + id)[0]);
                    return this;
                },
                    this.credit = ko.observableArray(),
                    this.official = ko.observableArray(),
                    this.isInitMenu = false,
                    this.getData = function () {
                        var that = this;
                        $.ajax({
                            url: '/home/gameinfolist',
                            type: 'GET',
                            dataType: 'JSON',
                            success: function (data) {
                                if (data.length) {
                                    that.isInitMenu = true;
                                    that.formatData(data);
                                }
                            }
                        });
                    },
                    this.formatData = function (data) {
                        var credit = [], official = [];
                        $.each(data, function (index, value) {
                            var len = value.GameInfoList.length;
                            $.each(value.GameInfoList, function (i, v) {
                                v.FGameID = v.FGameID - 0;
                                v.FSort = v.FSort - 0;
                                v.FGroupId == 3 ? official.push(v) : credit.push(v);
                            });
                        });

                        // 先根据游戏id排序，再根据sort排序
                        credit = utils.arrSortByKey(credit, ['FGameID', 'FSort']);
                        official = utils.arrSortByKey(official, ['FGameID', 'FSort']);
                        
                        this.credit(credit);
                        this.official(official);
                        return 
                    }
            };
            var vm = new menuVM().init("lot_sec_menu");
            var time = 0, menuBox = $('#lot_sec_menu');
            $("#gameListBtn,#lot_sec_menu").hover(function () {
                menuBox.stop(true, true).slideDown(300);
                clearTimeout(time);
            }, function () {
                time = setTimeout(function () {
                    menuBox.stop().slideUp(100);
                }, 300);
            });
            utils && utils.unreadMessages && utils.unreadMessages();
        });
    </script>
</body>

</html>

