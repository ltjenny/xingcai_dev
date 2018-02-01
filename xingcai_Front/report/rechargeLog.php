
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="telephone=no" name="format-detection" />
    <title>用户中心-帐变报表</title>
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
            <script src="/js_new/Util/My97DatePicker/WdatePicker.js?52a537aade"></script>
            <input type="hidden" id="hdErrMsg" value="" />
            <div class="main-head">
                <span>用户中心&gt;报表管理&gt;帐变报表</span>
            </div>
            <div class="con_box">
                <form id="form1" action="/Report/AccountChange" method="get">
                    <div class="form-box">
                        <input id="accountID" name="accountID" type="hidden" value="632874" />
                        <input id="isContainSub" name="isContainSub" type="hidden" value="True" />
                        <span>
                            时间：
                            <input type="text" id="start" name="startTime" value="2018-01-27 02:00:00" data-bind="click:startEvent">
                            至
                            <input type="text" id="end" name="endTime" value="2018-01-28 02:00:00" data-bind="click:endEvent">
                        </span>
                        <span>用户名：<input type="text" name="uname" id="uname" value=""></span>
                        <span><a href="javascript:void(0)" class="btn" data-bind="click:searchData">查询</a></span>
                        <div style="padding:5px 10px;background:#fff;border-radius:6px;border:1px solid #d4d4d4;margin:10px 0 0 0;line-height:2">
                            类型：
                            <label><input type="checkbox" name="cktype" value="0"  id="checkAllType" />所有类型</label>
                            <div id="typeItems">
                                <font class="red">收入：</font>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="1"  />公司入款</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="2"  />线上支付</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="3"  />人工存入</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="8"  />给予返水</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="17"  />活动优惠</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="26"  />彩票派彩</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="27"  />彩票返水</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="31"  />撤单返款</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="33"  />追号返款</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="34"  />系统奖励</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="35"  />提款失败</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="42"  />其他充值</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="43"  />打和返款</label>
                                <br />
                                <font class="red">支出：</font>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="4"  />出款扣除</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="5"  />用户提款</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="7"  />人工提出</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="9"  />冲销返水</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="10"  />彩票下注</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="30"  />转账充值</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="32"  />追号扣款</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="39"  />优惠扣除</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="40"  />其他扣除</label>
                                <label style="padding:0 5px;"><input type="checkbox" name="cktype" value="44"  />冲销派奖</label>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="table-list">
                    <table>
                        <thead>
                            <tr>
                                <th>用户名</th>
                                <th>时间</th>
                                <th>帐变类型</th>
                                <th>支出</th>
                                <th>收入</th>
                                <th>余额</th>
                                <th>备注</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td colspan="7">请选择查询条件之后进行查询</td>
                                </tr>
                        </tbody>
                        <tfoot>
                            <tr style="font-weight:bold">
                                <td colspan="3">小计0笔</td>
                                <td>

                                    <font color="red">
                                        总支出:0(0)
                                    </font>
                                </td>
                                <td>

                                    总收入:0(0)
                                </td>
                                <td colspan="2"></td>
                            </tr>
                            <tr style="font-weight:bold">
                                <td colspan="3">总计0笔</td>
                                <td>
                                    <font color="red">总支出:0(0)</font>
                                </td>
                                <td>总收入:0(0)</td>
                                <td colspan="2"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="tips">
                    <p>备注：本页资金变动为所有用户资金变动之和</p>
                </div>
            </div>
            <script src="/js_new/Report/TeamReport.js?ad3a17ba03"></script>
            <script type="text/javascript">
                $(function () {
                    $("#sp_IsContainSub").click(function () {
                        var thisEle = $(this);
                        if (thisEle.attr("class") === "checkbox select") {
                            thisEle.attr("class", "checkbox");
                            $("#isContainSub").val("False");
                        } else {
                            thisEle.attr("class", "checkbox select");
                            $("#isContainSub").val("True");
                        }
                    });
                    $("#checkAllType").click(function () {
                        $("#typeItems input[type='checkbox']").prop('checked', $(this).is(':checked'));
                    })
                    $("#typeItems input[type='checkbox']").click(function () {
                        var items = $("#typeItems input[type='checkbox']");
                        var lens = items.length;
                        var i = 0;
                        items.each(function (idx, item) {
                            if (!$(item).is(':checked')) {
                                i++
                                $("#checkAllType").prop('checked', false);
                            };
                        });
                        if (i <= 0) {
                            $("#checkAllType").prop('checked', true);
                        }
                    })
                });
            </script>
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

