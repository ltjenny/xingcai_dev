
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="telephone=no" name="format-detection" />
    <title>合买中心-投注记录</title>
    <meta name="keywords" />
    <meta name="description" />
    <link rel="Shortcut Icon" href="/Images/ICO/yuducaipiao/favicon.ico" />
    <link rel="Bookmark" href="/Images/ICO/yuducaipiao/favicon.ico" />
    <link href="/css_new/userCenter/usercenter.css?3eda99ab3b" rel="stylesheet" tii="usercenter" />
    <link href="/css_new/usercenter.css?ab5383d759" rel="stylesheet" />
    <script src="/js_new/dist/$.ko.js?a876144a3a"></script>
    <script src="/js_new/Common/jquery.knob.js?be4c010975"></script>
    <script src="/js_new/Common/modernizr.custom.js?44a0670bed"></script>
    <script src="/js_new/Common/artDialog6/dialog-plus-min.js?4786a25c83"></script>
    <link href="/js_new/Common/artDialog6/ui-dialog.css?ae7e700648" rel="stylesheet" />
    <script src="/js_new/dist/official/utils.min.js?94126d98c6"></script>
    <script src="/js_new/Common/banner.js?3bc5e3023e"></script>
    <script src="/js_new/Common/ko.page.js?23b592fe9a"></script>
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
                    <a href="/index.php/together/togetherCenter" class="sidem_b"><span>合买中心</span></a>
                </div>
                <div class="sidem_item">
                    <a href="/index.php/together/search" class="sidem_b"><span>投注记录</span></a>
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
                    // $(function () {
                    //     var sidemenu = $("#sideMenu");
                    //     var btnbars = sidemenu.children().children("a");
                    //     btnbars.on("click", function () {
                    //         var $this = $(this);
                    //         $this.next("ul").slideToggle("fast");
                    //         $this.parent().siblings().children("ul").slideUp("fast");
                    //     });
                    //     sidemenu.find(".sidem_sub").on("click", function () {
                    //         $(this).next().slideToggle("fast");
                    //     });
                    // });
                })();
            </script>
        </div>
        <div class="ui-main clear" id="ulMain">
            <script src="/js_new/Util/My97DatePicker/WdatePicker.js?52a537aade"></script>
            <input type="hidden" id="hdErrMsg" value="" />
            <script type="text/javascript">
                var gameID = '0';
                var gamePlayID = '0';
            </script>
            <div class="main-head">
                <span>用户中心&gt;投注记录&gt;购彩查询</span>
            </div>
            <div class="con_box">
                <form id="form1" action="/Report/Bet" method="get">
                    <div class="form-box">
                        <input id="isContainSub" name="isContainSub" type="hidden" value="True" />
                        <span>
                            时间：
                            <input type="text" id="start" name="startTime" value="2018-01-27 02:00:00" data-bind="click:startEvent">
                            至
                            <input type="text" id="end" name="endTime" value="2018-01-28 02:00:00" data-bind="click:endEvent">
                        </span>
                        <!-- <span>用户名：<input type="text" name="accountName" id="accountName" value=""></span> -->
                        <span>
                            彩种：<select name="gameID" data-bind="value:gameID,event:{change:gameEvent}">
                                <option value="0">所有游戏</option>
                                    <option value="1" >香港六合彩 [信]</option>
                                    <option value="7" >重庆时时彩 [信]</option>
                                    <option value="9" >天津时时彩 [信]</option>
                                    <option value="10" >新疆时时彩 [信]</option>
                                    <option value="13" >幸运农场 [信]</option>
                                    <option value="15" >北京PK拾 [信]</option>
                                    <option value="26" >重庆时时彩 [官]</option>
                                    <option value="29" >北京PK拾 [官]</option>
                                    <option value="30" >福彩3D [官]</option>
                                    <option value="39" >江苏快三 [官]</option>
                                    <option value="40" >新疆时时彩 [官]</option>
                                    <option value="42" >天津时时彩 [官]</option>
                                    <option value="44" >排列三、五 [官]</option>
                                    <option value="61" >加拿大3.5分 [官]</option>
                                    <option value="68" >澳洲3分彩 [官]</option>
                            </select>
                        </span>
                        <span>
                            状态：<select name="setResult">
                                    <option value="0" selected>所有状态</option>
                                    <option value="1">已派奖</option>
                                    <option value="2">未中奖</option>
                                    <option value="3">未开奖</option>
                                    <option value="4">追号</option>
                                    <option value="5">撤单</option>
                            </select>
                        </span>
                        <span><a href="javascript:void(0)" class="btn" data-bind="click:searchData">查询</a></span>
                    </div>
                </form>
                <div class="table-list">
                    <table>
                        <thead>
                            <tr>
                                <th>单号</th>
                                <th>发起人</th>
                                <th>彩种</th>
                                <th>期号</th>
                                <th>玩法</th>
                                <th>倍数 | 模式</th>
                                <th>金额</th>
                                <th>认购倍数</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?=$var['wjorderId']?>
                                </td>
                                <td>
                                    <?=$this->iff($var['username']==$this->user['username'], $var['username'], preg_replace('/^(\w).*(\w{2})$/', '\1***\2', $var['username']))?>
                            
                                </td>
                                <!--<td><?=date('m-d H:i:s', $var['actionTime'])?></td>-->
                                <td><?=$this->ifs($this->types[$var['type']]['shortName'],$this->types[$var['type']]['title'])?></td>
                                <td><?=$var['actionNo']?></td>
                                <td><?=$this->playeds[$var['playedId']]['name']?></td>
                                <td><?=$var['beiShu']?>倍 [<?=$modeName[$var['mode']]?>]</td>
                                <td><?=$var['mode']*$var['beiShu']*$var['actionNum']?>元</td>
                    <!--			<td><?=$this->iff($var['lotteryNo'], number_format($var['bonus'], 2), '0.00')?></td>
                                <td style="text-align: center;"><?=$this->ifs($this->CsubStr($var['lotteryNo'],0,6), '--')?></td>-->
                                <td>
                                    <?php
                                        if(empty($var['lotteryNo']) && $var['kjTime']>time() && $var['isDelete']==0){
                                            echo '<input type="number" name="beishu" value="'.$var['beiShu'].'" style="width:40px"/>';
                                        }elseif($var['isDelete']==1){
                                        echo '<font color="#999999">已撤单</font>';
                                    }elseif($var['zjCount']){
                                        echo '<font color="red">已派奖</font>';
                                    }elseif(!$var['lotteryNo'] && $var['kjTime']>time()){
                                        echo '<font color="#009900">未开奖</font>';
                                    }elseif($var['lotteryNo']){
                                        echo '未中奖';
                                    }elseif($var['kjTime']<time()){
                                        echo '<font color="#013da0">已过期</font>';
                                    }
                                    ?>       
                                </td>
                                <td>
                                <?php if($var['isDelete']==0 && empty($var['lotteryNo']) && $var['kjTime']>time()){ ?>
                                    <a  href="/index.php/game/follow_order/<?=$var['id']?>" dataType="json" call="deleteBet" title="是否确定跟买？" target="ajax" class="combine_buy buy" style="color: #F8F8F8;">购买</a>
                                                    
                                <?php }else{ ?>
                                    
                                <?php } ?>
                                <a class="xq" onclick="hmxq(<?=$var['id']?>);" href="javascript:void(0)">详情</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tips">
                    <p>备注：点击“注单编号”可查看购彩详情</p>
                </div>
            </div>
            <script src="/js_new/Report/Bet.js?a1ac334fce"></script>
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

