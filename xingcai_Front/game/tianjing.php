
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title> - 天津时时彩 - 彩票系统</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="keywords" />
    <meta name="description" />
    <link rel="Shortcut Icon" href="/Images/ICO/yuducaipiao/favicon.ico" />
    <link rel="Bookmark" href="/Images/ICO/yuducaipiao/favicon.ico" />

    <link href="/js_new/common/artDialog6/ui-dialog.css" rel="stylesheet" />
    <link href="/js_new/common/flipclock/flipclock.css" rel="stylesheet" />
    <link href="/css_new/default/officialGames/css/common.css" rel="stylesheet" />
    <link href="/css_new/mapping/yuducaipiao/officialGames/css/common.css" rel="stylesheet" tii="common" />

    <script src="/js_new/common/jquery-1.11.3.min.js"></script>
    <script src="/js_new/common/jquery.md5.min.js"></script>
    <script src="/js_new/common/knockout-3.4.0.js"></script>
    <script src="/js_new/common/artDialog6/dialog-plus-min.js"></script>
    <script src="/js_new/dist/official/utils.min.js"></script>
    <style>
        /*x068增加单独头部*/
        .top-box .main {
            width: 1338px !important;
            margin: 0 auto;
        }

        .header-main {
            width: 1338px !important;
            margin: 0 auto;
        }
        /*x068增加单独头部*/
    </style>
</head>
<body data-gamename="天津时时彩" data-gameid="42" >
    

    
    <input type="hidden" id="accountId" value="632961" />
    

    <div class="Ccenter">

        <div class="top">
            <div class="top_in clear">
                    <div class="top_menu">
                        <div class="clear">
                                    <a href="/" class="getout" title="返回首页"><span class="return_index">返回首页</span></a>
                                <a href="http://tb.53kf.com/webCompany.php?arg=10147846&style=1&fromthirdservice=webapp" target="_blank" class="service" title="在线客服">
                                    <span class="new-msg" id="NewMsg">在线客服</span>
                                </a>
                                <a href="javascript:;" data-bind="click:showRule" class="rule" id="Rule" title="规则说明" target="_blank"><i></i><span class="rule_description">规则说明</span></a>
                                    <a title="登出账号" class="btn-login-out" href="/Home/UserLogout"><span>登出账号</span></a>
                        </div>
                        
                        <div class="menu-child" style="display:none;" id="lot_sec_menu">
                        </div>
                        
                    </div>


                    <div class="game_info game_42">
                        <div class="game_ico game_ico_42"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/default/images/gameIcon/TJSSC.png?_=20160805" /></div>
                        <div class="game_mane ">
                            <span class="">天津时时彩</span>
                                <a href="http://www.tjflcpw.com/report/SSC_WinMessage.aspx" target="_blank" title="官方网址" class="cn-btn"></a>
                        </div>
                        <div class="openinfo">
                            <div class="drawNumber" id="PeriodInfo"><span class="c-period"><div>第 <b data-bind="text:periodInfo().fnumberofperiod">&nbsp;</b> 期</div><div class="time" data-bind="text:periodTip">&nbsp;</div></span> <span class="c-resttime" id="RestTime" style="float:left;width:128px;padding:0;"></span></div><div id="RestTime2" style="display:none"></div>
                            <div class="now_time" id="Clock"></div>
                        </div>
                    </div>
                    <div class="lottery_result lottery_result_SSC">
                        <div data-bind="flip:prevPeriodResult" class="lr_ball_box" data-game="SSC"></div>
                        <div>
                            <span class="lr_txt">第<span class="color-NoL fsL" data-bind="text:periodInfo().fpreviousperiod">&nbsp;</span>期</span>
                            <span class="lr_txt"><a target="_blank" href="/result/index?game=42">开奖结果</a></span>
                            <span class="vol-item">
                                <a href="javascript:;" class="volume" data-bind="click:tracks.mute,css:'volume-'+(tracks.isMute()?'off':'on')"></a>
                                <div class="Ringtone select-box">
                                    <div class="select-current"><span data-bind="text:tracks.trackName"></span><i></i></div>
                                    <select class="select-list" data-bind="options:tracks.list,value:tracks.track,optionsText:'name',optionsValue:'value'"></select>
                                </div>
                            </span>
                            
                        </div>
                    </div>



                

            </div>
        </div>
        <div class="container clear">
            <div class="side">
                <div class="userbox">
                    <ul class="stc_1 clear">
                        <li class="mane">
                            <span class="stc_t">账号：</span>
                            <span class="stc_c">eccainiao</span>
                        </li>
                        <li class="balance">
                            <span class="stc_t">余额：</span><span class="stc_c stc_d" id="AvailableBalance" data-bind="click:refreshBalance" title="点击可刷新余额" style="cursor:pointer">0</span>

                            
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="acc-links clear" id="OpenNewWindow">
                            <a title="在线存款" class="btn-navacc btn-navacc-deposit" href="/Recharge/Index" target = &quot;_blank&quot;=)><span title="在线存款">充值</span></a>
                            <a title="在线取款" class="btn-navacc btn-navacc-withdraw" id="jGetMoney" href="/Withdrawal/Encashment/" target = &quot;_blank&quot;=)><span title="在线取款">提现</span></a>
                            <a title="帐变记录" class="btn-navacc btn-navacc-mail" href="/Report/AccountChange" target = &quot;_blank&quot;=)><span title="帐变记录">帐变记录</span></a>
                            <a title="游戏记录" class="btn-navacc btn-navacc-current" href="/Report/Bet" target = &quot;_blank&quot;=)><span>游戏记录</span></a>
                            <a title="账户管理" class="btn-navacc btn-navacc-history" href="/UserCenter/UserInfo" target = &quot;_blank&quot;=)><span>账户管理</span></a>
                            <a title="会员中心" class="btn-navacc btn-navacc-center" href="/UserCenter/UserInfo" target = &quot;_blank&quot;=)><span title="会员中心">会员中心</span></a>
                    </div>
                </div>
                
                <div class="side-in">
                    <div class="side_tab">
                        <a href="/Result/index?game=42" target="_blank" class="result-btn"></a>
                        <ul id="JSResultHistoryList" data-bind="foreach:resultHistoryList" class="SSC">
                            <li>
                                <b data-bind="text:$index()+1">&nbsp;</b>
                                <span data-bind="text:$root.trimPeriod(period)" class="olPeriod">&nbsp;</span>
                                <span data-bind="attr:{title:result}" class="resultNum">
                                    <span><i data-bind="text:result">&nbsp;</i></span>
                                </span>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="side_menu" id="sideMenu">
                                <div class="sidem_item sidem_item_1 sidem_item_active">
                                    <a href="javascript:;" class="sidem_b clear"><i></i><span>时时彩</span></a>
                                    <ul style="display:block">
                                            <li class=""><a data-key="26" data-val="重庆时时彩" href="/OffcialOtherGame/Index/26"><span><i></i>重庆时时彩</span></a></li>
                                            <li class=""><a data-key="40" data-val="新疆时时彩" href="/OffcialOtherGame/Index/40"><span><i></i>新疆时时彩</span></a></li>
                                            <li class="active-item-link currentClass"><a data-key="42" data-val="天津时时彩" href="/OffcialOtherGame/Index/42"><span><i></i>天津时时彩</span></a></li>
                                    </ul>
                                </div>
                                <div class="sidem_item sidem_item_2">
                                    <a href="javascript:;" class="sidem_b clear"><i></i><span>分分彩</span></a>
                                    <ul style="">
                                            <li class=""><a data-key="61" data-val="加拿大3.5分" href="/OffcialOtherGame/Index/61"><span><i></i>加拿大3.5分</span></a></li>
                                            <li class=""><a data-key="68" data-val="澳洲3分彩" href="/OffcialOtherGame/Index/68"><span><i></i>澳洲3分彩</span></a></li>
                                    </ul>
                                </div>
                                <div class="sidem_item sidem_item_3">
                                    <a href="javascript:;" class="sidem_b clear"><i></i><span>PK拾</span></a>
                                    <ul style="">
                                            <li class=""><a data-key="29" data-val="北京PK拾" href="/OffcialOtherGame/Index/29"><span><i></i>北京PK拾</span></a></li>
                                    </ul>
                                </div>
                                <div class="sidem_item sidem_item_5">
                                    <a href="javascript:;" class="sidem_b clear"><i></i><span>低频彩</span></a>
                                    <ul style="">
                                            <li class=""><a data-key="30" data-val="福彩3D" href="/OffcialOtherGame/Index/30"><span><i></i>福彩3D</span></a></li>
                                            <li class=""><a data-key="44" data-val="排列三、五" href="/OffcialOtherGame/Index/44"><span><i></i>排列三、五</span></a></li>
                                    </ul>
                                </div>
                                <div class="sidem_item sidem_item_7">
                                    <a href="javascript:;" class="sidem_b clear"><i></i><span>快三</span></a>
                                    <ul style="">
                                            <li class=""><a data-key="39" data-val="江苏快三" href="/OffcialOtherGame/Index/39"><span><i></i>江苏快三</span></a></li>
                                    </ul>
                                </div>
                    </div>
                </div>
            </div>
            <div class="ui-main clear">
                <div class="ui-video dn" data-bind="css: {dn: !diplayLotteryLiveVideoStatus()}">
                    <video id="mediaVideo" width="100%" height="466" controls="controls" preload="false">
                        <source src="https://zy11sbsbqt.lfjieweisi.com//Content/Video/movie.mp4" type="video/mp4" />
                    </video>
                </div>
                <div style="position:relative;height:100%;">
                    

<div class="con_box" id="PLAY-CONTAINER">
    <div class="mainNav">
        <div class="mainNav-list">
            <!--ko foreach:navLevel1-->
            <a href="javascript:;" data-bind="text:name,click:$parent.navParentClick,css:$parent.active1()===id?'active':''">五星</a>
            <!--/ko-->
                <a href="/OtherGame/Index/9#!id=longhu">龙虎</a>
        </div>
        
            <div class="gamePlay">
                <a href="/OtherGame/Index/9" title="信用玩法"></a>
                <span class="page-ico" style="position:absolute;right:0;top:0;">
                    <img src="https://zy11sbsbqt.lfjieweisi.com//Content/default/officialGames/images/new-ico.gif" />
                </span>
            </div>
    </div>
    <div class="mainNav-children" data-bind="foreach:navLevel2_3">
        <div>
            <span data-bind="text:name+'：'"></span>
            <!-- ko foreach:children -->
            <a href="javascript:;" data-bind="text:name,click:$root.navChildClick,css:$root.active2()===id?'select':''"></a>
            <!-- /ko -->
        </div>
    </div>
    <div class="sumBtn_box">
        <div class="clear" data-bind="component:{name:scene}"></div>
    </div>
    <div class="help-box clear" style="overflow:visible;">
        <div class="current-game fleft">
            <span><b data-bind="text:navLevel1()[currentPlay().addr[0]].name">&nbsp;</b>：<label data-bind="text:currentPlay().name">&nbsp;</label></span>
        </div>
        <div class="fleft">
            <div class="checkbox-box" data-bind="if:appearOmitUseful">
                <label class="checkbox" data-bind="css:appear()?'select':''" for="APPEAR"><input type="checkbox" class="checkbox-hide" id="APPEAR" data-bind="checked:appear,event:{change:appearOmitEvent.bind($data,1)}" />冷热</label>
                <label class="checkbox" data-bind="css:omit()?'select':''" for="OMIT"><input type="checkbox" class="checkbox-hide" id="OMIT" data-bind="checked:omit,event:{change:appearOmitEvent.bind($data,2)}" />遗漏</label>
            </div>
            <div class="help-tips">
                
                <span class="help-exp" data-bind="hover:currentPlay().config.example" data-align="top"></span>
                <span class="help-help" data-bind="hover:currentPlay().config.rule" data-align="top"></span>
            </div>
            <span class="fleft" data-bind="text:currentPlay().config.description">&nbsp;</span>
            <span id="jiangJin" class="jiangJin" style="float:left; position:relative; z-index:1000; width: 100px; height: 32px; line-height:32px;text-align:center;font-size: 14px;background-color:#ccc; color:#444; border-radius:5px; cursor:pointer;" data-bind="visible:!!coefficient(),hover:$root.coefficientDesc" data-align="top">奖金计算说明</span>
            <span class="jiangJin" style="float:left; position:relative; z-index:1000; width: 86px; height: 32px; line-height:32px;text-align:center;font-size: 14px;background-color:#ccc; color:#ff0000; border-radius:5px; cursor:pointer;margin-left:5px;" data-bind="visible:realtimeCount()>0&&currentPlay().config.odds&&coefficient(),click:viewOdds">赔率详情</span>
        </div>
        
    </div>
    <div class="betNum-btn row_btm clear">
        <div class="betNum-in">
            <div class="amount-box">
                <div class="amount">
                    <i class="minus" data-bind="click:upDown.bind($data,-1)">-</i>
                    <input type="text" data-bind="textinput:multiple,event:{focus:showMultipleBox.bind($data,true),blur:multipleBlur}" maxlength="6" />
                    <i class="plus" data-bind="click:upDown.bind($data,1)">+</i>
                    <ul class="dropdown" data-bind="visible:showMultipleBox,foreach:multipleArr">
                        <li data-bind="text:$data,click:$parent.selectMultiple"></li>
                    </ul>
                </div>
                <span>倍</span>
                <span>模式</span>
                <div class="unit-box select-box" data-bind="slideDown:unit">
                    <div class="unit">
                        <span data-slide="bar">元</span>
                        <i></i>
                    </div>
                    <ul data-slide="body" id="MoneyModel">
                            <li>
                                <a href="javascript:;" data-value="1">元</a>
                            </li>
                                                    <li>
                                <a href="javascript:;" data-value="0.1">角</a>
                            </li>                                                                    </ul>
                </div>
            </div>
            <div class="buyBonus" id="slipper" data-ratio="11.5">
                <div data-bind="if:currentMaxRatio()>0">
                    <div class="BonusPercen" data-bind="text:ratio()+'%'">&nbsp;</div>
                    <a href="javascript:;" class="minus"></a>
                    <div class="ranger">
                        <div class="ui-widget">
                            <span class="ui-handle" style="left: 0;"></span>
                        </div>
                    </div>
                    <a href="javascript:;" class="plus"></a>
                    <div class="Bonus">
                        
                        <span style="padding-top:8px" data-bind="text:currentOdds().toFixed(4)-0">0</span>
                    </div>
                </div>
                <div data-bind="if:currentMaxRatio()===0">
                    <div class="BonusPercen" style="width:45px;text-align:right">奖金：</div>
                    <div class="Bonus">
                        <span style="padding-top:8px" data-bind="text:currentOdds().toFixed(4)-0">0</span>
                    </div>
                </div>
            </div>
            <span class="total">共选<label data-bind="text:realtimeCount" class="extraFontC"></label>注，共投<label data-bind="text:realtimeSum" class="extraFontC">1</label>元，盈利<label class="extraFontC" data-bind="text:willWinAmount"></label> 元</span>
        </div>
        <a href="#" class="btn add-btn" data-bind="click:confirm,css:realtimeCount()>0?'activate':''" title="确认选号"></a>
        <a href="#" class="btn confirm-btn" data-bind="click:confirm.bind($data, 'submitNow'),css:realtimeCount()>0?'activate1':''" title="立即下注"></a>
        
    </div>
    <div class="line1"></div>
    <div class="betNum-list clear">
        <div class="bet-box betB-w40">
            <div class="row_btm clear">
                <span class="fleft" data-bind="if:randomUseful">随机<input type="text" data-bind="textinput:randomCount" maxlength="2" />注<a href="#" class="btn Random-btn" data-bind="click:doRandom">随机</a></span>
                <span class="tit">投注列表</span>
                <a href="" id="aaaa" class="btn delete-btn" data-bind="click:orderEmpty">清空</a>
            </div>
            <div class="table-list betb-main">
                <table>
                    <tbody data-bind="foreach:orderList">
                        <tr>
                            <td data-bind="text:title">&nbsp;</td>
                            <td width="160">
                                <div class="ellipsis" style="width:160px" data-bind="text:content,attr:{title:content.length>500?(content.slice(0,500)+'...'):content}">&nbsp;</div>
                            </td>
                            <td data-bind="text:$root.UNIT_MAPPING[unit+'']">&nbsp;</td>
                            <td>
                                <span data-bind="text:count">&nbsp;</span>注
                            </td>
                            <td>
                                <span data-bind="text:multiple">&nbsp;</span>倍
                            </td>
                            <td>
                                <span data-bind="text:amount">&nbsp;</span>元
                            </td>
                            <td>
                                <a href="#" class="btn" data-bind="click:$parent.orderRemove">X</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="bet-box betB-w25">
            <div class="row_btm">
                <span class="tit">操作状态</span>
            </div>
            <div class="betb-main">
                <div class="clear">
                    <span class="fleft">选择</span>
                    <span class="fright"><label data-bind="text:orderList().length" class="extraFontC col_3">&nbsp;</label>单</span>
                    <span class="fright"><label data-bind="text:orderCount()" class="extraFontC col_3">&nbsp;</label>注</span>
                </div>
                <div class="clear">
                    <span class="fleft">投注</span>
                    <span class="fright"><label data-bind="text:orderAmount()" class="extraFontC col_2">&nbsp;</label>元</span>
                </div>
                <div class="clear">
                    <span class="fleft">追号</span>
                    <span class="fright" data-bind="text:appendInfo">&nbsp;</span>
                </div>
            </div>
        </div>
        <div class="bet-box betB-w35">
            <div class="row_btm">
                
                <div class="form-switch" data-bind="click: isClockMultiple.bind($data, !isClockMultiple()), css: {active: isClockMultiple()}">
                    <em></em>
                    <i></i>
                </div>
                <label class="alignCenter">是否锁定倍数</label>
            </div>
            <div class="betb-main">
                <div class="NumberCheck clear">
                    <a href="" class="btn Continue-btn" title="我要追号" data-bind="click:append"></a>
                    <div class="fleft">
                        <label class="checkbox" for="CK-stopAfterSkip" data-bind="css:stopAfterSkip()?'select':''"><input class="checkbox-hide" id="CK-stopAfterSkip" type="checkbox" data-bind="checked:stopAfterSkip" />官方跳开即停</label>
                        <label class="checkbox" for="CK-stopAfterWin" data-bind="css:stopAfterWin()?'select':''"><input class="checkbox-hide" id="CK-stopAfterWin" type="checkbox" data-bind="checked:stopAfterWin" />中奖后停止追号</label>
                    </div>
                </div>
                <a href="#" class="btn deter-btn" data-bind="click:submit" title="确认下注"><label data-bind="visible:isAppend,text:'追'+totalAppendPeriod()">&nbsp;</label></a>
            </div>
        </div>
    </div>
    <div class="bet-history clear">
        <div class="row_btm">
            <a href="javascript:;" class="btn" style="left:10px;right:auto" 
               data-bind="click:doBatchRevoke,style:{'background':checkedOrderIDs().length>0?'#fb8f10':'#CCCCCC'}">批量撤单
            <b data-bind="text:'('+checkedOrderIDs().length+')'"></b></a>
            <span class="tit">游戏记录</span>
                <a href="/Report/Bet" class="btn">更多记录</a>
        </div>
        <div class="table-list">
            <table>
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" data-bind="event:{change:checkedOrderAllIDsEvent},checked:checkedOrderIDs().length===revokeLength(),visible:revokeLength()>0" />
                        </th>
                        <th>注单编号</th>
                        <th>玩法</th>
                        <th>期号</th>
                        <th>投注时间</th>
                        <th>投注内容</th>
                        <th>倍模</th>
                        <th>总金额</th>
                        <th>奖金</th>
                        <th>状态</th>
                    </tr>
                </thead>
                <tbody data-bind="foreach:orderLogList">
                    <tr data-bind="hover:$parent.orderItemDetail,click:$parent.orderFullDetail" data-delay="500" style="cursor:pointer">
                        <td noclick="1">
                            <input type="checkbox" data-bind="checked:$root.checkedOrderIDs,value:OrderId,visible:status()===0" />
                        </td>
                        <td data-bind="text:Ordernumber">&nbsp;</td>
                        <td class="col_1" data-bind="text:GamePlayName">&nbsp;</td>
                        <td data-bind="text:NumberOfPeriod">&nbsp;</td>
                        <td class="col_1" data-bind="text:CreateTime">&nbsp;</td>
                        <td>
                            <div data-bind="text:Content" style="width:100px;" class="ellipsis">&nbsp;</div>
                        </td>
                        <td data-bind="text:Times()+'倍/'+unitName()">&nbsp;</td>
                        <td class="col_2" data-bind="text:Amount()-0">&nbsp;</td>
                        <td class="col_2" data-bind="text:BettingBalance()-0>0?(BettingBalance()-0).toFixed(4)-0:0">&nbsp;</td>
                        <td>
                            <font class="fc_yellow" data-bind="text:['可撤单','已撤单','已派奖','未中奖','已删除','未开奖','未结算','处理中','下注失败', '撤单返款'][status()]+(IsTrack()?'[追号]':''), css:['status-undo','status-hasundo','status-win','status-lose','status-delete','status-unlottery','status-lottery','status-undo','status-hasundo','status-win'][status()-0]">&nbsp;</font>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/html" id="tpl-empty">
</script>

<script type="text/html" id="tpl-num1">
    <div data-bind="foreach:itemList,css:'itemlist-'+itemList().length">
        <div class="sumBtn_list clear">
            <div class="sumBtn_left">
                <span class="name" data-bind="text:name,visible:name!==''">&nbsp;</span>
                <div class="fleft" data-bind="foreach:range">
                    
                    <span class="num-box"><a href="#" data-bind="css:(checked()?'active':'')+' num num-'+name,click:$parents[1].numChecked.bind($data,$parent)"><font data-bind="html:name"></font></a><i data-bind="html:times"></i></span>
                </div>
            </div>
            <div class="sumBtn_righr">
                <a href="#" title="全" class="allBtn" data-bind="click:$parent.quickChecked.bind($data,1)">全</a>
                <a href="#" title="大" class="bigBtn" data-bind="click:$parent.quickChecked.bind($data,2)">大</a>
                <a href="#" title="小" class="smallBtn" data-bind="click:$parent.quickChecked.bind($data,3)">小</a>
                <a href="#" title="单" class="oddBtn" data-bind="click:$parent.quickChecked.bind($data,4)">单</a>
                <a href="#" title="双" class="evenBtn" data-bind="click:$parent.quickChecked.bind($data,5)">双</a>
                <a href="#" title="清" class="delBtn" data-bind="click:$parent.quickChecked.bind($data,0)">清</a>
            </div>
        </div>
    </div>
</script>


<script type="text/html" id="tpl-num2">
    <div data-bind="foreach:itemList,css:'itemlist-'+itemList().length">
        <div class="sumBtn_list clear">
            <div class="sumBtn_left">
                <span class="name" data-bind="text:name,visible:name!==''">&nbsp;</span>
                <div class="fleft" data-bind="foreach:range">
                    <span class="num-box"><a href="#" data-bind="html:name,css:(checked()?'active':'')+' ball',click:$parents[1].numChecked.bind($data,$parent)"></a><i data-bind="html:times">&nbsp;</i></span>
                </div>
            </div>
            <div class="sumBtn_righr">
                <a href="#" title="全" class="allBtn" data-bind="click:$parent.quickChecked.bind($data,1)">全</a>
                <a href="#" title="清" class="delBtn" data-bind="click:$parent.quickChecked.bind($data,0)">清</a>
            </div>
        </div>
    </div>
</script>


<script type="text/html" id="tpl-num3">
    <div data-bind="foreach:itemList,css:'itemlist-'+itemList().length">
        <div class="sumBtn_list clear">
            <div class="sumBtn_left">
                <div>
                    <span class="name" data-bind="text:name,visible:name!==''">&nbsp;</span>
                    <div class="fleft" data-bind="foreach:range">
                        <span class="Bbtn num-box-2"><a href="#" data-bind="html:name,css:(checked()?'active':'')+' text',click:$parents[1].numChecked.bind($data,$parent)"></a><i data-bind="html:times">&nbsp;</i></span>
                    </div>
                </div>
                <div>
                    <div class="fleft" style="color:#fff;text-align:center">
                        <span class="num-box num-box-2" data-bind="text:$root.ComputedOdds(0)">&nbsp;</span>
                        <span class="num-box num-box-2" data-bind="text:$root.ComputedOdds(1)">&nbsp;</span>
                        <span class="num-box num-box-2" data-bind="text:$root.ComputedOdds(2)">&nbsp;</span>
                        <span class="num-box num-box-2" data-bind="text:$root.ComputedOdds(3)">&nbsp;</span>
                        <span class="num-box num-box-2" data-bind="text:$root.ComputedOdds(4)">&nbsp;</span>
                        <span class="num-box num-box-2" data-bind="text:$root.ComputedOdds(5)">&nbsp;</span>
                    </div>
                </div>
            </div>
            <div class="sumBtn_righr">
                <a href="#" title="全" class="allBtn" data-bind="click:$parent.quickChecked.bind($data,1)">全</a>
                <a href="#" title="清" class="delBtn" data-bind="click:$parent.quickChecked.bind($data,0)">清</a>
            </div>
        </div>
    </div>
</script>


<script type="text/html" id="tpl-num3-1">
    <div data-bind="foreach:itemList,css:'itemlist-'+itemList().length">
        <div class="sumBtn_list clear">
            <div class="sumBtn_left">
                <div>
                    <span class="name" data-bind="text:name,visible:name!==''">&nbsp;</span>
                    <div class="fleft" data-bind="foreach:range">
                        <span class="num-box num-box-1" ><a href="#" data-bind="css:(checked()?'active':'')+' num num-'+name,click:$parents[1].numChecked.bind($data,$parent)"><font data-bind="html:name"></font></a><i data-bind="html:times">&nbsp;</i></span>
                    </div>
                </div>
                <div>
                    <div class="fleft" style="text-align:center;color:#fff">
                        <span class="num-box num-box-1" data-bind="text:$root.ComputedOdds(0)">&nbsp;</span>
                        <span class="num-box num-box-1" data-bind="text:$root.ComputedOdds(1)">&nbsp;</span>
                        <span class="num-box num-box-1" data-bind="text:$root.ComputedOdds(2)">&nbsp;</span>
                        <span class="num-box num-box-1" data-bind="text:$root.ComputedOdds(3)">&nbsp;</span>
                        <span class="num-box num-box-1" data-bind="text:$root.ComputedOdds(2)">&nbsp;</span>
                        <span class="num-box num-box-1" data-bind="text:$root.ComputedOdds(1)">&nbsp;</span>
                        <span class="num-box num-box-1" data-bind="text:$root.ComputedOdds(0)">&nbsp;</span>
                    </div>
                </div>
            </div>
            <div class="sumBtn_righr">
                <a href="#" title="全" class="allBtn" data-bind="click:$parent.quickChecked.bind($data,1)">全</a>
                <a href="#" title="大" class="bigBtn" data-bind="click:$parent.quickChecked.bind($data,2)">大</a>
                <a href="#" title="小" class="smallBtn" data-bind="click:$parent.quickChecked.bind($data,3)">小</a>
                <a href="#" title="单" class="oddBtn" data-bind="click:$parent.quickChecked.bind($data,4)">单</a>
                <a href="#" title="双" class="evenBtn" data-bind="click:$parent.quickChecked.bind($data,5)">双</a>
                <a href="#" title="清" class="delBtn" data-bind="click:$parent.quickChecked.bind($data,0)">清</a>
            </div>
        </div>
    </div>
</script>


<script type="text/html" id="tpl-num4">
    <div data-bind="foreach:itemList">
        <div class="sumBtn_list clear">
            <div class="sumBtn_list_kl8">
                <span class="name" data-bind="text:name,visible:name!==''">&nbsp;</span>
                <div class="fleft" data-bind="foreach:range">
                    <span class="num-box"><a href="#" data-bind="css:(checked()?'active':'')+' num num-'+name,click:$parents[1].numChecked.bind($data,$parent)"><font data-bind="html:name"></font></a><i data-bind="html:times">&nbsp;</i></span>
                </div>
            </div>
        </div>
    </div>
</script>


<script type="text/html" id="tpl-num5">
    <div data-bind="foreach:itemList,css:'itemlist2-'+itemList().length">
        <div class="sumBtn_list clear">
            <div class="sumBtn_left">
                <span class="name" data-bind="text:name,visible:name!==''">&nbsp;</span>
                <div class="fleft" data-bind="foreach:range">
                    <span class="Bbtn"><a href="#" data-bind="html:name,css:(checked()?'active':'')+' text',click:$parents[1].numChecked.bind($data,$parent)"></a><i data-bind="html:times">&nbsp;</i></span>
                </div>
            </div>
            <div class="sumBtn_righr">
                <a href="#" title="全" class="allBtn" data-bind="click:$parent.quickChecked.bind($data,1)">全</a>
                <a href="#" title="清" class="delBtn" data-bind="click:$parent.quickChecked.bind($data,0)">清</a>
            </div>
        </div>
    </div>
</script>


<script type="text/html" id="tpl-num5-1">
    <div data-bind="foreach:itemList,css:'itemlist3-'+itemList().length">
        <div class="sumBtn_list clear">
            <div class="sumBtn_left">
                <div class="clear">
                    <span class="name" data-bind="text:name,visible:name!==''">&nbsp;</span>
                    <div class="fleft" data-bind="foreach:range">
                        <span class="Bbtn2"><a href="#" data-bind="css:(checked()?'active':'')+' text',click:$parents[1].numChecked.bind($data,$parent)"><font data-bind="html:name"></font></a><i data-bind="html:times">&nbsp;</i></span>
                    </div>
                </div>
                <div class="clear">
                    <span></span>
                    <div class="fleft">
                        <span class="Bbtn2-odds" data-bind="text:$root.ComputedOdds(0)"></span>
                        <span class="Bbtn2-odds" data-bind="text:$root.ComputedOdds(1)"></span>
                        <span class="Bbtn2-odds" data-bind="text:$root.ComputedOdds(2)"></span>
                    </div>
                </div>
            </div>
            <div class="sumBtn_righr">
                <a href="#" title="全" class="allBtn" data-bind="click:$parent.quickChecked.bind($data,1)">全</a>
                <a href="#" title="清" class="delBtn" data-bind="click:$parent.quickChecked.bind($data,0)">清</a>
            </div>
        </div>
    </div>
</script>


<script type="text/html" id="tpl-num6">
    <div data-bind="foreach:itemList,css:'itemlist-'+itemList().length ">
        <div class="sumBtn_list clear">
            <div class="sumBtn_left">
                <span class="name" data-bind="text:name,visible:name!==''">&nbsp;</span>
                <div class="fleft" data-bind="foreach:range">
                    <span class="Bbtn"><a href="#" data-bind="html:name,css:(checked()?'active':'')+' text',click:$parents[1].numChecked.bind($data,$parent)">&nbsp;</a><i data-bind="html:times">&nbsp;</i></span>
                </div>
            </div>
        </div>
    </div>
</script>


<script type="text/html" id="tpl-num7">
    <div class="clear sumBtn_list_jsk3 sumBtn_list">
        <div class="sumBtn_left" style="text-align:center">
            <div data-bind="foreach:itemList">
               <div class="clear">
                    <span class="name" data-bind="text:name,visible:name!==''">&nbsp;</span>
                    <div class="fleft" data-bind="foreach:range">
                        <span class="num-box"><a href="#" style="float:none;display:inline-block" data-bind="css:(checked()?'active':'')+' num num-'+name,click:$parents[1].numChecked"><font data-bind="html:name"></font></a><i data-bind="html:times">&nbsp;</i></span>
                    </div>
                </div>
            </div>
            <div class="clear">
                <span class="name" style="display:none">&nbsp;</span>
                <div class="fleft" style="color:#fff;">
                    
                    <span class="num-box" data-bind="text:$root.ComputedOdds(0,'x')">&nbsp;</span>
                    <span class="num-box" data-bind="text:$root.ComputedOdds(1,'x')">&nbsp;</span>
                    <span class="num-box" data-bind="text:$root.ComputedOdds(2,'x')">&nbsp;</span>
                    <span class="num-box" data-bind="text:$root.ComputedOdds(3,'x')">&nbsp;</span>
                    <span class="num-box" data-bind="text:$root.ComputedOdds(4,'x')">&nbsp;</span>
                    <span class="num-box" data-bind="text:$root.ComputedOdds(5,'x')">&nbsp;</span>
                    <span class="num-box" data-bind="text:$root.ComputedOdds(6,'x')">&nbsp;</span>
                    <span class="num-box" data-bind="text:$root.ComputedOdds(7,'x')">&nbsp;</span>
                </div>
            </div>
        </div>
        <div class="sumBtn_righr">
            <a href="#" title="小" class="smallBtn" data-bind="click:quickChecked.bind($data,'kuai3_0')">小</a>
            <a href="#" title="大" class="bigBtn" data-bind="click:quickChecked.bind($data,'kuai3_1')">大</a>
            <a href="#" title="单" class="oddBtn" data-bind="click:quickChecked.bind($data,'kuai3_2')">单</a>
            <a href="#" title="双" class="evenBtn" data-bind="click:quickChecked.bind($data,'kuai3_3')">双</a>
            <a href="#" title="清" class="delBtn" data-bind="click:quickChecked.bind($data,'kuai3_4')">清</a>

        </div>
    </div>
</script>


<script type="text/html" id="tpl-danshi1">
    <div class="selector-box">
        <div class="selector-con clear">
            <textarea data-bind="textinput:textarea"></textarea>
            <div class="fleft">
                <a href="#" data-bind="click:unique" class="btn DeleteDuplicate" title="删除重复号"></a>
                <a href="#" class="btn Import" title="导入文件" style="overflow:hidden;cursor:pointer" data-bind="swfReadFile:'/Res/swf/readFile.swf'"></a>
                <a href="#" data-bind="click:reset" class="btn Empty" title="清空"></a>
            </div>
        </div>
        <div class="tips" data-bind="html:CONFIG.inputTip"></div>
    </div>
</script>


<script type="text/html" id="tpl-danshi2">
    <div class="selector-box selector-box2">
        <div class="selector-con clear">
            <div class="con-toolbar clear">
                <span>选择位置：</span>
                <span>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'4')>-1?'checkbox-checked':''" for="ds-ck-5"><input type="checkbox" id="ds-ck-5" value="4" data-bind="checked:posChecked" class="checkbox-hide" />万</label>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'3')>-1?'checkbox-checked':''" for="ds-ck-4"><input type="checkbox" id="ds-ck-4" value="3" data-bind="checked:posChecked" class="checkbox-hide" />千</label>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'2')>-1?'checkbox-checked':''" for="ds-ck-3"><input type="checkbox" id="ds-ck-3" value="2" data-bind="checked:posChecked" class="checkbox-hide" />百</label>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'1')>-1?'checkbox-checked':''" for="ds-ck-2"><input type="checkbox" id="ds-ck-2" value="1" data-bind="checked:posChecked" class="checkbox-hide" />十</label>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'0')>-1?'checkbox-checked':''" for="ds-ck-1"><input type="checkbox" id="ds-ck-1" value="0" data-bind="checked:posChecked" class="checkbox-hide" />个</label>
                </span>
                <span class="toolbar-tips">( 温馨提示：你选择了 <label data-bind="text:posCheckedCount">&nbsp;</label> 个位置，系统会自动根据位置组合成 <label data-bind="text:posCombCount">&nbsp;</label> 个方案  )</span>
            </div>
            <textarea data-bind="textinput:textarea"></textarea>
            <div class="fleft">
                <a href="#" class="btn DeleteDuplicate" data-bind="click:unique" title="删除重复号"></a>
                <a href="#" class="btn Import" title="导入文件" style="overflow:hidden;cursor:pointer" data-bind="swfReadFile:'/Res/swf/readFile.swf'"></a>
                <a href="#" class="btn Empty" data-bind="click:reset" title="清空"></a>
            </div>
        </div>
        <div class="tips" data-bind="html:CONFIG.inputTip"></div>
    </div>
</script>


<script type="text/html" id="tpl-hezhi1">
    <div data-bind="foreach:itemList,css:'itemlist1-'+itemList().length">
        <div class="sumBtn_list clear">
            <div class="sumBtn_left">
                <span class="name" data-bind="text:name,visible:name!==''">&nbsp;</span>
                <div class="fleft" data-bind="foreach:range">
                    <span class="num-box"><a href="#" data-bind="css:(checked()?'active':'')+' num num-'+name,click:$parents[1].numChecked.bind($data,$parent)"><font data-bind="html:name"></font></a><i data-bind="html:times">&nbsp;</i></span>
                </div>
            </div>
        </div>
    </div>
</script>


<script type="text/html" id="tpl-hezhi2">
    <div class="selector-box4">
        <div class="selector-con clear">
            <div class="con-toolbar clear">
                <span>选择位置：</span>
                <span>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'4')>-1?'checkbox-checked':''" for="ds-ck-5"><input type="checkbox" id="ds-ck-5" value="4" data-bind="checked:posChecked" class="checkbox-hide" />万</label>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'3')>-1?'checkbox-checked':''" for="ds-ck-4"><input type="checkbox" id="ds-ck-4" value="3" data-bind="checked:posChecked" class="checkbox-hide" />千</label>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'2')>-1?'checkbox-checked':''" for="ds-ck-3"><input type="checkbox" id="ds-ck-3" value="2" data-bind="checked:posChecked" class="checkbox-hide" />百</label>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'1')>-1?'checkbox-checked':''" for="ds-ck-2"><input type="checkbox" id="ds-ck-2" value="1" data-bind="checked:posChecked" class="checkbox-hide" />十</label>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'0')>-1?'checkbox-checked':''" for="ds-ck-1"><input type="checkbox" id="ds-ck-1" value="0" data-bind="checked:posChecked" class="checkbox-hide" />个</label>
                </span>
                <span class="toolbar-tips">( 温馨提示：你选择了 <label data-bind="text:posCheckedCount">&nbsp;</label> 个位置，系统会自动根据位置组合成 <label data-bind="text:posCombCount">&nbsp;</label> 个方案  )</span>
            </div>
        </div>
        <div data-bind="foreach:itemList">
            <div class="sumBtn_list clear">
                <div class="sumBtn_left">
                    <span class="name" data-bind="text:name,visible:name!==''">&nbsp;</span>
                    <div class="fleft" data-bind="foreach:range">
                        <span class="num-box"><a href="#" data-bind="css:(checked()?'active':'')+' num num-'+name,click:$parents[1].numChecked"><font data-bind="html:name"></font></a><i data-bind="html:times">&nbsp;</i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>


<script type="text/html" id="tpl-renxuan1">
    <div class="selector-box3">
        <div class="selector-con clear">
            <div class="con-toolbar clear">
                <span>选择位置：</span>
                <span>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'4')>-1?'checkbox-checked':''" for="ds-ck-5"><input type="checkbox" id="ds-ck-5" value="4" data-bind="checked:posChecked" class="checkbox-hide" />万</label>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'3')>-1?'checkbox-checked':''" for="ds-ck-4"><input type="checkbox" id="ds-ck-4" value="3" data-bind="checked:posChecked" class="checkbox-hide" />千</label>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'2')>-1?'checkbox-checked':''" for="ds-ck-3"><input type="checkbox" id="ds-ck-3" value="2" data-bind="checked:posChecked" class="checkbox-hide" />百</label>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'1')>-1?'checkbox-checked':''" for="ds-ck-2"><input type="checkbox" id="ds-ck-2" value="1" data-bind="checked:posChecked" class="checkbox-hide" />十</label>
                    <label class="checkbox" data-bind="css:ko.utils.arrayIndexOf(posChecked(),'0')>-1?'checkbox-checked':''" for="ds-ck-1"><input type="checkbox" id="ds-ck-1" value="0" data-bind="checked:posChecked" class="checkbox-hide" />个</label>
                </span>
                <span class="toolbar-tips">( 温馨提示：你选择了 <label data-bind="text:posCheckedCount">&nbsp;</label> 个位置，系统会自动根据位置组合成 <label data-bind="text:posCombCount">&nbsp;</label> 个方案  )</span>
            </div>
        </div>
        <div data-bind="foreach:itemList">
            <div class="sumBtn_list clear">
                <div class="sumBtn_left">
                    <span class="name" data-bind="text:name,visible:name!==''">&nbsp;</span>
                    <div class="fleft" data-bind="foreach:range">
                        <span class="num-box"><a href="#" data-bind="css:(checked()?'active':'')+' num num-'+name,click:$parents[1].numChecked"><font data-bind="html:name"></font></a><i data-bind="html:times">&nbsp;</i></span>
                    </div>
                </div>
                <div class="sumBtn_righr">
                    <a href="#" title="全" class="allBtn" data-bind="click:$parent.quickChecked.bind($data,1)">全</a>
                    <a href="#" title="大" class="bigBtn" data-bind="click:$parent.quickChecked.bind($data,2)">大</a>
                    <a href="#" title="小" class="smallBtn" data-bind="click:$parent.quickChecked.bind($data,3)">小</a>
                    <a href="#" title="单" class="oddBtn" data-bind="click:$parent.quickChecked.bind($data,4)">单</a>
                    <a href="#" title="双" class="evenBtn" data-bind="click:$parent.quickChecked.bind($data,5)">双</a>
                    <a href="#" title="清" class="delBtn" data-bind="click:$parent.quickChecked.bind($data,0)">清</a>
                </div>
            </div>
        </div>
    </div>
</script>


<script type="text/html" id="tpl-dantuo">
    <div data-bind="foreach:itemList,css:'itemlist-'+itemList().length">
        <div class="sumBtn_list clear">
            <div class="sumBtn_left">
                <span class="name" data-bind="text:name,visible:name!==''">&nbsp;</span>
                <div class="fleft" data-bind="foreach:range">
                    
                    <span class="num-box"><a href="#" data-bind="css:(checked()?'active':'')+' num num-'+name,click:$parents[1].numChecked.bind($data,$parent)"><font data-bind="html:name"></font></a><i data-bind="html:times"></i></span>
                </div>
            </div>
            <div class="sumBtn_righr" data-bind="if:$index()>0">
                <a href="#" title="全" class="allBtn" data-bind="click:$parent.quickChecked.bind($data,1)">全</a>
                <a href="#" title="大" class="bigBtn" data-bind="click:$parent.quickChecked.bind($data,2)">大</a>
                <a href="#" title="小" class="smallBtn" data-bind="click:$parent.quickChecked.bind($data,3)">小</a>
                <a href="#" title="单" class="oddBtn" data-bind="click:$parent.quickChecked.bind($data,4)">单</a>
                <a href="#" title="双" class="evenBtn" data-bind="click:$parent.quickChecked.bind($data,5)">双</a>
                <a href="#" title="清" class="delBtn" data-bind="click:$parent.quickChecked.bind($data,0)">清</a>
            </div>
        </div>
    </div>
</script>

<script type="text/html" id="tpl-login">
    <form autocomplete="off">
        <div class="login-area">
            <div class="label-parent">
                <input class="input_tip" name="username" tag="input" type="text" id="LOGIN-1" placeholder="请输入账号" maxlength="32" />
                <label class="label_tip" for="LOGIN-1">请输入账号</label>
            </div>
            <div class="label-parent">
                <input class="input_tip" name="password" tag="input" type="password" id="LOGIN-2" placeholder="请输入密码" maxlength="20" />
                <label class="label_tip" for="LOGIN-2">请输入密码</label>
            </div>
            <div class="label-parent">
                <input type="text" name="code" tag="input" class="input_tip input_tip_45" id="LOGIN-3" placeholder="请输入验证码" maxlength="6" />
                <label class="label_tip" for="LOGIN-3">请输入验证码</label>
                <img style="background-color:white;" tabindex="" src="/Home/ValidateCode?20160121112737" alt="点击切换验证码" title="点击切换验证码" />
            </div>
            <div class="label-parent" style="text-align:left;" info></div>
        </div>
    </form>
</script>
                </div>
                
                <div id="stopSellingPop" class="stop_selling" =)>
                    <div class="stop_selling_title"></div>
                </div>
            </div>
        </div>
            <div class="side_news">
                <div class="sn_in">
                    <div class="sn_h black_bg">即时资讯</div>
                    <div class="sn_c" style="color:#fff" id="NOTICE-BOX">

                    </div>
                </div>
            </div>
            </div>

        <div class="ui-ww-box ui-ww-box1" style="position:absolute;right:0;top:80px">
            

        </div>
    <!--如果未登录的用户，没有的cookie中拿不到的一些变量-->
    <input type="hidden" value="231757" id="companyId" />

    
    <script type="text/html" id="ORDER-LOG">
        <div class="clear">
            <p>注单编号：<span data-bind="text:Ordernumber"></span></p>
            <p><span data-bind="text:gamename+'【'+GamePlayName()+'】'+NumberOfPeriod()+'期'">&nbsp;</span></p>
        </div>
        <div class="clear">
            <span>投注：</span>
            <span class="break-wrod" style="display:inline-block;" data-bind="text:Content().length>500?(Content().slice(0,500)+'...'):Content">&nbsp;</span>
        </div>
        <div class="clear">
            <span class="fleft">扣款：<font class="fc_green">-<label data-bind="text:Amount()">&nbsp;</label>元</font></span>
            <span class="fright" data-bind="text:total">&nbsp;</span>
        </div>
        <div class="clear">
            <span class="fleft">返点：<font class="fc_pink"><label data-bind="text:KickbackAmount">&nbsp;</label>元</font></span>
            <span class="fright">（扣款*<label data-bind="text:KickbackPercent">&nbsp;</label>%）</span>
        </div>
        <div class="clear">
            <span>奖金：<font class="fc_yellow" data-bind="text:(BettingBalance()-0>0?BettingBalance():0)+'元'">&nbsp;</font></span>
        </div>
    </script>


    
    <script type="text/html" id="ORDER-FULL-DETAIL">
        <div class="popup">
            <div class="popup-body">
                <div class="bet-info">
                    <div class="bet-top">
                        <div class="clear">
                            <ul class="ul-item1">
                                <li><span>用户名</span><p data-bind="text:FAccount">&nbsp;</p></li>
                                <li><span>注单编号</span><p data-bind="text:$source.Ordernumber">&nbsp;</p></li>
                                <li><span>倍数模式</span><p><label data-bind="text:$source.Times">&nbsp;</label>倍，<label data-bind="text:$source.unitName">&nbsp;</label></p></li>
                                <li><span>奖期</span><p data-bind="text:$source.NumberOfPeriod">&nbsp;</p></li>
                                <li><span>投注注数</span><p><label data-bind="text:$source.BetNumber"></label>&nbsp;注</p> </li>
                            </ul>
                            <ul class="ul-item2">
                                <li><span>游戏</span><p data-bind="text:gamename">&nbsp;</p></li>
                                <li><span>投单时间</span><p data-bind="text:FCreateTime">&nbsp;</p></li>
                                <li><span>注单奖金</span><p data-bind="text:FBettingBalance()-0>0?FBettingBalance():0">&nbsp;</p></li>
                                <li><span>开奖内容</span><p data-bind="text:!OpenResult()?'--':OpenResult()">&nbsp;</p></li>
                            </ul>
                            <ul class="ul-item3">
                                <li><span>玩法</span><p data-bind="text:$source.GamePlayName">&nbsp;</p></li>
                                <li><span>总金额</span><p data-bind="text:FTotalAmount">&nbsp;</p></li>
                                <li><span>动态返点</span><p data-bind="text:FTotalKickback">&nbsp;</p></li>
                                <li><span>订单状态</span><p class="fc_green" data-bind="text:['可撤单','已撤单','已派奖','未中奖','已删除','未开奖','未结算','处理中','下注失败', '撤单返款'][status()], css:['status-undo','status-hasundo','status-win','status-lose','status-delete','status-unlottery','status-lottery','status-undo','status-hasundo','status-win'][status()-0]">&nbsp;</p></li>
                            </ul>
                        </div>
                        <div class="bet-con clear">
                            <span>投注内容</span>
                            <div class="bet-num" style="text-align:left" data-bind="text:shortContent+(isMoreContent?'... 【点击查看所有内容】':''),click:showMore"></div>
                        </div>
                    </div>
                    <div class="acenter">可能中奖情况</div>
                    <div class="table-box table-th">
                        <table>
                            <thead>
                                <tr>
                                    <th width="100">奖级名称</th>
                                    <th>号码</th>
                                    <th width="100">倍数</th>
                                    <th width="100">奖级</th>
                                    <th width="100">奖金</th>
                                    <th width="100">中奖奖金</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table-box table-box1">
                        <table>
                            <tbody data-bind="foreach:list">
                                <tr>
                                    <td width="100" data-bind="text:FName">&nbsp;</td>
                                    <td data-bind="text:$parent.FContent().length>60?($parent.FContent().slice(0,60)+'...'):$parent.FContent">&nbsp;</td>
                                    <td width="100" data-bind="text:$parent.FTimes">&nbsp;</td>
                                    <td width="100" data-bind="text:FAwardLevel">1</td>
                                    <td width="100" data-bind="text:FODDS">&nbsp;</td>
                                    <td width="100" data-bind="text:+(FODDS() * $parent.FTimes()).toFixed(2)">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div data-bind="if:CoefficientList.length>0">
                <div style="text-align:left;padding:0 1em; height:68px; overflow-y:auto;">
                    
                    <div style="width: 7em; "> 奖金计算说明：</div>
                    <p style="margin-left:1rem;">非常规时时彩中奖后，根据中奖号码球号的奖金组，中奖奖金需要乘以球号的奖金组，如：</p>
                    <p style="margin-left:1rem;line-height: 25px;padding:3px 0;">1、北京时时彩后三直选（1960奖金组）：下注321，开奖号码54321，其中3号球的奖金组为：1.014，2号球的奖金组为：0.984，1号球的奖金组为1.022；那么中奖后的实际奖金=1960*1.014*0.984*1.022=1998.665</p>
                    <p style="margin-left:1rem;line-height: 25px;padding:3px 0;">2、若北京时时彩后三直选（1960奖金组）：下注246，开奖号码54246，其中2号球的奖金组为：0.984，4号球的奖金组为：0.976，6号球的奖金组为0.98；那么中奖后的实际奖金=1960*0.984*0.976*0.98=1844.706</p>
                </div>
            </div>
            <div class="popup-foot">
                <div class="clear">
                    <!-- ko ifnot:$source.status()===0 -->
                    <a href="javascript:;" class="btn Again " data-bind="click:resub" title="再次下注"></a>
                    <!-- /ko -->
                    <!-- ko if:$source.status()===0 -->
                    <a href="" class="btn Revoke" data-bind="click:revoke" title="撤单"></a>
                    <!-- /ko -->
                    <a href="javascript:;" class="btn deter" title="确定" data-bind="click:close"></a>
                    <a href="javascript:;" class="btn Continue" data-bind="css:isAppend?'':'disabled',click:viewAppendDetail" title="追号详单"></a>
                    
                </div>
            </div>
        </div>
    </script>

    
    <script type="text/html" id="APPEND-DETAIL">
        <div class="popup">
            <div class="popup-body">
                <div class="bet-info">
                    <div class="bet-top">
                        <div class="clear">
                            <ul class="ul-item1">
                                <li><span>追号编号</span><p data-bind="text:FTrackNumber">&nbsp;</p></li>
                                <li><span>游戏</span><p data-bind="text:FGameName">&nbsp;</p></li>
                                <li><span>开始期号</span><p data-bind="text:FStartNumberOfPeriod">&nbsp;</p></li>
                                <li><span>取消期数</span><p data-bind="text:FCancelCount">&nbsp;</p></li>
                                <li><span>中奖期数</span><p data-bind="text:FWinCount">&nbsp;</p></li>
                                <li><p style="width:40px;float:right" data-bind="text:FIsWinStop?'是':'否'">&nbsp;</p><span style="width:100px">中奖后停止追号</span></li>
                            </ul>
                            <ul class="ul-item2">
                                <li><span>游戏用户</span><p data-bind="text:FAccount">&nbsp;</p></li>
                                <li><span>玩法</span><p data-bind="text:FGamePlayName">&nbsp;</p></li>
                                <li><span>追号期数</span><p data-bind="text:FPeriodsCount">&nbsp;</p></li>
                                <li><span>追号总金额</span><p data-bind="text:FAmountSum">&nbsp;</p></li>
                                <li><span>派奖总金额</span><p data-bind="text:FWinAmount">&nbsp;</p></li>
                                <li><p style="width:40px;float:right" data-bind="text:FSkipStop?'是':'否'">&nbsp;</p><span style="width:100px">官方跳开即停</span></li>
                            </ul>
                            <ul class="ul-item3">
                                <li><span>追号时间</span><p data-bind="text:FCreateTime">&nbsp;</p></li>
                                <li><span>模式</span><p data-bind="text:['','元','角','分','厘'][FMoneyModel]">&nbsp;</p></li>
                                <li><span>完成期数</span><p data-bind="text:FFinishPeriods">&nbsp;</p></li>
                                <li><span>完成金额</span><p data-bind="text:FFinishAmount">&nbsp;</p></li>
                                <li><span>取消金额</span><p data-bind="text:FCancelAmount">&nbsp;</p></li>
                                <li><span>订单状态</span><p class="fc_green" data-bind="text:['进行中','已完成','已取消'][FStatus-1]">&nbsp;</p></li>
                            </ul>
                        </div>
                        <div class="bet-con clear">
                            <span>投注内容</span>
                            <div class="bet-num" data-bind="text:FContent"></div>
                        </div>
                    </div>
                    <div class="acenter">可能中奖情况</div>
                    <div class="table-box" style="height:auto">
                        <div style="padding-right:17px;">
                            <table>
                                <thead>
                                    <tr>
                                        <th><span class="checkbox" style="vertical-align:middle" data-bind="click:selectAll,css:selectAllStatus()?'checkbox-checked':''"></span>奖期</th>
                                        <th width="100">追号倍数</th>
                                        <th width="120">追号状态</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div style="height:154px;overflow:auto">
                            <table>
                                <tbody data-bind="foreach:list">
                                    <tr data-bind="click:$parent.select">
                                        <td data-bind="css:FStatus()-0===1?'':'no-checkbox'"><span class="checkbox" data-bind="text:FNumberOfPeriod,css:checked()?'checkbox-checked':''">&nbsp;</span></td>
                                        <td width="100" data-bind="text:FTimes">&nbsp;</td>
                                        <td width="120" data-bind="text:['进行中','已完成','已取消','已取消','失败'][FStatus()-1],css:['color-doing','color-complete','color-cancel','color-fail'][FStatus()-1]">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup-foot" style="padding-top:10px;">
                <div class="clear">
                    <a href="#" class="btn Revoke" data-bind="css:revokeUseful()?'':'disabled',click:revoke" title="撤单"></a>
                    <a href="javascript:;" class="btn deter" title="确定" data-bind="click:close"></a>
                    
                    
                </div>
            </div>
        </div>
    </script>

    
    <script type="text/html" id="APPEND-TPL">
        <div class="popup">
            <div class="popup-body">
                <div class="bet-info">
                    <div class="popup-tab">
                        <div class="tab">
                            
                            <a href="#" data-bind="click:currentPlan.bind($data,2),css:currentPlan()===2?'active':''">同倍追号</a>
                            <a href="#" data-bind="click:currentPlan.bind($data,3),css:currentPlan()===3?'active':''">翻倍追号</a>
                        </div>
                    </div>
                    <div class="popup-form clear">
                        
                        <div class="fleft" data-bind="if:currentPlan()===2">
                            追号计划：
                            <span>起始倍数<input type="text" data-bind="textinput:singleTimes" /></span>
                            <span>追号期数<input type="text" data-bind="textinput:singleCount" /></span>
                        </div>
                        <div class="fleft" data-bind="if:currentPlan()===3">
                            追号计划：
                            <span>每隔<input type="text" data-bind="textinput:doubleSection" style="width:30px" />期</span>
                            <span>×<input type="text" data-bind="textinput:doubleTimes" style="width:30px" />倍</span>
                            <span>追号期数<input type="text" data-bind="textinput:doubleCount" style="width:30px" /></span>
                            <span>起始倍数<input type="text" data-bind="textinput:startNum" style="width:30px" /></span>
                        </div>
                        <div class="fright" style="padding-left:0">
                            <label class="checkbox" for="CK-ROOT-stopAfterSkip" data-bind="css:root.stopAfterSkip()?'checkbox-checked':''" style="float:left;"><span style="float:left;">官方跳开即停</span><input type="checkbox" id="CK-ROOT-stopAfterSkip" data-bind="checked:root.stopAfterSkip" class="checkbox-hide" /></label>
                            <label class="checkbox" for="CK-ROOT-stopAfterWin" data-bind="css:root.stopAfterWin()?'checkbox-checked':''" style="float:left;"><span style="float:left;">中奖后停止追号</span><input type="checkbox" id="CK-ROOT-stopAfterWin" data-bind="checked:root.stopAfterWin" class="checkbox-hide" /></label>
                        </div>
                    </div>
                    <div class="popup-form clear">
                        <div class="fleft">
                            追号期数：
                            <div class="select-box">
                                <div><span data-bind="text:continueCountName">&nbsp;</span><i></i></div>
                                <select class="select-list" data-bind="options:selectContinueCount,optionsText:'name',optionsValue:'value',value:continueCountValue"></select>
                            </div>
                            <span>追号总期数:<label class="fc_yellow" data-bind="text:totalPeriod">&nbsp;</label></span>
                            <span>追号总金额:<label class="fc_yellow" data-bind="text:totalAmount">&nbsp;</label>元</span>
                        </div>
                        <div class="fright"><a href="#" class="btn generate" title="生成追号计划" data-bind="click:createAppendNumberPlan"></a></div>
                    </div>
                    <div class="table-box" style="height:auto;width:auto;padding-right:17px;">
                        <table>
                            <thead>
                                <tr>
                                    <th>期号</th>
                                    <th width="140">倍数</th>
                                    <th width="180">当前投入</th>
                                    <th width="160">截止时间</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table-box" style="overflow:auto;width:auto">
                        <table>
                            <tbody data-bind="foreach:list">
                                <tr data-bind="click:$parent.select">
                                    <td><span class="checkbox" data-bind="text:NumberOfPeriod,css:multi()>0?'checkbox-checked':''">&nbsp;</span></td>
                                    <td width="140"><input type="text" data-bind="textinput:multi" />倍</td>
                                    <td width="180">&yen;<label data-bind="text:$parent.computedAmount($parent,multi)">&nbsp;</label></td>
                                    <td width="160" data-bind="text:CloseTime">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="popup-foot" style="padding-top:10px">
                <div class="clear">
                    <a href="#" class="btn Empty" data-bind="click:reset" title="清空追号"></a>
                    <a href="#" class="btn" data-bind="css:totalPeriod()>0?'bet':'DirectBet',click:submit"></a>
                    <a href="#" class="btn Cancel" data-bind="click:cancel" title="取消"></a>
                </div>
            </div>
        </div>
    </script>

    <!--- 游戏记录详情 --->
    <div class="gamedetail" style="display:none;">
        <div class="detail">
            <span class="fc_grey">双击查看详情</span>
            <div class="clear">
                <span class="fleft">分分彩60[五星组选60]1506030421</span>
                <span class="fright"><font class="">ID:07118</font></span>
            </div>
            <div class="clear">
                <span>投注：1568|012357</span>
            </div>
            <div class="clear">
                <span class="fleft">开奖：79170</span>
                <span class="fright">（截止|<font class="fc_green">未中奖</font><font class="fc_pink">中奖</font>）</span>
            </div>
            <div class="clear">
                <span class="fleft">扣款：<font class="fc_green">-2400.00</font></span>
                <span class="fright">（2元*20倍*60注）</span>
            </div>
            <div class="clear">
                <span class="fleft">返点：<font class="fc_pink">+0.0000</font></span>
                <span class="fright">（扣款*0.0%）</span>
            </div>
            <div class="clear">
                <span class="fleft">以派奖金：－</span>
            </div>
            <div class="clear">
                <span class="fleft">玩家：我</span>
                <span class="fright">购买时间：2015-06-03 11:00:20</span>
            </div>
        </div>
    </div>
    <!--- 游戏记录详情 end --->
    <!--- 登录  --->
    <div class="login-wrap" style="display:none;">
        <a href="" class="login-close"></a>
        <div class="login-area">
            <div>
                <span>用户名</span>
                <input class="input_tip" type="text" value="" id="username" maxlength="32" />
            </div>
            <div>
                <span>密码</span>
                <input class="input_tip" type="password" value="" id="password" maxlength="20" />
            </div>
            <div>
                <span>验证码</span>
                <input type="text" value="" class="input_tip input_tip_45" id="validateCode" />
                <img id="verifyImg" tabindex="" src="/Home/ValidateCode" alt="点击切换验证码" title="点击切换验证码" />
            </div>
            <div class="login-foot">
                <a href="">忘记密码</a>
                <a id="login" title="登入" href="javascript:void(0)" class="btn-login"></a>
            </div>
        </div>
    </div>
    <!--- 登录 end  --->

        <script type="text/javascript">
        //最新期数
        var LatestPriodData = '{"fpreviousperiod":"","fpreviousresult":"","fid":"122824842","fnumberofperiod":"20180131001","fstarttime":"2018/01/31 09:00:00","flottostarttime":"2018/01/31 09:10:00","fstatus":"1","fclosetime":"2018/01/31 09:07:24","fnextperiod":"20180131002","fnextstarttime":"2018/01/31 09:08:30","fsettlefid":"","fsettlenumber":"","fsettletime":"","ServerTime":"2018/01/31 09:00:09","fisstopseles":"False"}';
        //历史开奖结果
        var ResultList = '{"total":6,"list":[{"period":20171201067,"date":"2017-12-01T20:10:00+08:00","result":"9,9,5,4,0"},{"period":20171201066,"date":"2017-12-01T20:00:00+08:00","result":"0,8,0,0,6"},{"period":20171201065,"date":"2017-12-01T19:50:00+08:00","result":"4,1,5,0,8"},{"period":20171201064,"date":"2017-12-01T19:40:00+08:00","result":"2,5,0,4,3"},{"period":20171201063,"date":"2017-12-01T19:30:00+08:00","result":"0,7,2,2,9"},{"period":20171201062,"date":"2017-12-01T19:20:00+08:00","result":"7,3,7,6,6"}]}';
        //玩法、玩法项树状结构树
        var navListJson = '[{"Id":1950,"P":0,"N":"后三码","c":[{"N":"后三直选","C":[{"I":1977,"P":1950,"N":"后三直选复式","TP":1313,"C":[{"I":21827,"N":"复式","MB":"7.9","MxO":"1958","MiO":"1800","SI":20976}]},{"I":1976,"P":1950,"N":"后三直选单式","TP":1312,"C":[{"I":21826,"N":"单式","MB":"7.9","MxO":"1958","MiO":"1800","SI":20975}]},{"I":1978,"P":1950,"N":"后三直选和值","TP":1314,"C":[{"I":21828,"N":"直选和值","MB":"7.9","MxO":"1958","MiO":"1800","SI":20977}]}]},{"N":"后三组选","C":[{"I":1979,"P":1950,"N":"后三组三","TP":1315,"C":[{"I":21829,"N":"组三","MB":"7.9","MxO":"652.6667","MiO":"600","SI":20978}]},{"I":1980,"P":1950,"N":"后三组六","TP":1316,"C":[{"I":21830,"N":"组六","MB":"7.9","MxO":"326.3333","MiO":"300","SI":20979}]},{"I":1981,"P":1950,"N":"后三混合组选","TP":1317,"C":[{"I":21831,"N":"组三","MB":"7.9","MxO":"652.6667","MiO":"600","SI":20980},{"I":21831,"N":"组六","MB":"7.9","MxO":"326.3333","MiO":"300","SI":20982}]},{"I":1982,"P":1950,"N":"后三组选和值","TP":1318,"C":[{"I":21833,"N":"组三","MB":"7.9","MxO":"652.6667","MiO":"600","SI":20981},{"I":21833,"N":"组六","MB":"7.9","MxO":"326.3333","MiO":"300","SI":20983}]}]}]},{"Id":1951,"P":0,"N":"前三码","c":[{"N":"前三直选","C":[{"I":1984,"P":1951,"N":"前三直选复式","TP":1320,"C":[{"I":21836,"N":"复式","MB":"7.9","MxO":"1958","MiO":"1800","SI":20985}]},{"I":1983,"P":1951,"N":"前三直选单式","TP":1319,"C":[{"I":21835,"N":"单式","MB":"7.9","MxO":"1958","MiO":"1800","SI":20984}]},{"I":1985,"P":1951,"N":"前三直选和值","TP":1321,"C":[{"I":21837,"N":"直选和值","MB":"7.9","MxO":"1958","MiO":"1800","SI":20986}]}]},{"N":"前三组选","C":[{"I":1986,"P":1951,"N":"前三组三","TP":1322,"C":[{"I":21838,"N":"组三","MB":"7.9","MxO":"652.6667","MiO":"600","SI":20987}]},{"I":1987,"P":1951,"N":"前三组六","TP":1323,"C":[{"I":21839,"N":"组六","MB":"7.9","MxO":"326.3333","MiO":"300","SI":20988}]},{"I":1988,"P":1951,"N":"前三混合组选","TP":1324,"C":[{"I":21840,"N":"组三","MB":"7.9","MxO":"652.6667","MiO":"600","SI":20989},{"I":21840,"N":"组六","MB":"7.9","MxO":"326.3333","MiO":"300","SI":20991}]},{"I":1989,"P":1951,"N":"前三组选和值","TP":1325,"C":[{"I":21842,"N":"组三","MB":"7.9","MxO":"652.6667","MiO":"600","SI":20990},{"I":21842,"N":"组六","MB":"7.9","MxO":"326.3333","MiO":"300","SI":20992}]}]}]},{"Id":1952,"P":0,"N":"中三码","c":[{"N":"中三直选","C":[{"I":1991,"P":1952,"N":"中三直选复式","TP":1327,"C":[{"I":21845,"N":"复式","MB":"7.9","MxO":"1958","MiO":"1800","SI":20994}]},{"I":1990,"P":1952,"N":"中三直选单式","TP":1326,"C":[{"I":21844,"N":"单式","MB":"7.9","MxO":"1958","MiO":"1800","SI":20993}]},{"I":1992,"P":1952,"N":"中三直选和值","TP":1328,"C":[{"I":21846,"N":"直选和值","MB":"7.9","MxO":"1958","MiO":"1800","SI":20995}]}]},{"N":"中三组选","C":[{"I":1993,"P":1952,"N":"中三组三","TP":1329,"C":[{"I":21847,"N":"组三","MB":"7.9","MxO":"652.6667","MiO":"600","SI":20996}]},{"I":1994,"P":1952,"N":"中三组六","TP":1330,"C":[{"I":21848,"N":"组六","MB":"7.9","MxO":"326.3333","MiO":"300","SI":20997}]},{"I":1995,"P":1952,"N":"中三混合组选","TP":1331,"C":[{"I":21849,"N":"组三","MB":"7.9","MxO":"652.6667","MiO":"600","SI":20998},{"I":21849,"N":"组六","MB":"7.9","MxO":"326.3333","MiO":"300","SI":21000}]},{"I":1996,"P":1952,"N":"中三组选和值","TP":1332,"C":[{"I":21851,"N":"组三","MB":"7.9","MxO":"652.6667","MiO":"600","SI":20999},{"I":21851,"N":"组六","MB":"7.9","MxO":"326.3333","MiO":"300","SI":21001}]}]}]},{"Id":1953,"P":0,"N":"二码","c":[{"N":"二星直选","C":[{"I":1997,"P":1953,"N":"后二直选(复式)","TP":1333,"C":[{"I":21853,"N":"后二直选(复式)","MB":"7.9","MxO":"195.8","MiO":"180","SI":21002}]},{"I":1998,"P":1953,"N":"后二直选(单式)","TP":1334,"C":[{"I":21854,"N":"后二直选(单式)","MB":"7.9","MxO":"195.8","MiO":"180","SI":21003}]},{"I":1999,"P":1953,"N":"前二直选(复式)","TP":1335,"C":[{"I":21855,"N":"前二直选(复式)","MB":"7.9","MxO":"195.8","MiO":"180","SI":21004}]},{"I":2000,"P":1953,"N":"前二直选(单式)","TP":1336,"C":[{"I":21856,"N":"前二直选(单式)","MB":"7.9","MxO":"195.8","MiO":"180","SI":21005}]},{"I":2001,"P":1953,"N":"后二直选和值","TP":1337,"C":[{"I":21857,"N":"后二直选和值","MB":"7.9","MxO":"195.8","MiO":"180","SI":21006}]},{"I":2002,"P":1953,"N":"前二直选和值","TP":1338,"C":[{"I":21858,"N":"前二直选和值","MB":"7.9","MxO":"195.8","MiO":"180","SI":21007}]}]},{"N":"二星组选","C":[{"I":2003,"P":1953,"N":"后二组选(复式)","TP":1339,"C":[{"I":21859,"N":"后二组选(复式)","MB":"7.9","MxO":"97.9","MiO":"90","SI":21008}]},{"I":2004,"P":1953,"N":"后二组选(单式)","TP":1340,"C":[{"I":21860,"N":"后二组选(单式)","MB":"7.9","MxO":"97.9","MiO":"90","SI":21009}]},{"I":2005,"P":1953,"N":"前二组选(复式)","TP":1341,"C":[{"I":21861,"N":"前二组选(复式)","MB":"7.9","MxO":"97.9","MiO":"90","SI":21010}]},{"I":2006,"P":1953,"N":"前二组选(单式)","TP":1342,"C":[{"I":21862,"N":"前二组选(单式)","MB":"7.9","MxO":"97.9","MiO":"90","SI":21011}]},{"I":2007,"P":1953,"N":"后二组选和值","TP":1343,"C":[{"I":21863,"N":"后二组选和值","MB":"7.9","MxO":"97.9","MiO":"90","SI":21012}]},{"I":2008,"P":1953,"N":"前二组选和值","TP":1344,"C":[{"I":21864,"N":"前二组选和值","MB":"7.9","MxO":"97.9","MiO":"90","SI":21013}]}]}]},{"Id":1954,"P":0,"N":"定位胆","c":[{"N":"定位胆","C":[{"I":2009,"P":1954,"N":"定位胆","TP":1345,"C":[{"I":21865,"N":"定位胆万位","MB":"7.9","MxO":"19.58","MiO":"18","SI":21014},{"I":21866,"N":"定位胆千位","MB":"7.9","MxO":"19.58","MiO":"18","SI":21015},{"I":21867,"N":"定位胆百位","MB":"7.9","MxO":"19.58","MiO":"18","SI":21016},{"I":21868,"N":"定位胆十位","MB":"7.9","MxO":"19.58","MiO":"18","SI":21017},{"I":21869,"N":"定位胆个位","MB":"7.9","MxO":"19.58","MiO":"18","SI":21018}]}]}]},{"Id":1955,"P":0,"N":"不定胆","c":[{"N":"三星不定胆","C":[{"I":2010,"P":1955,"N":"后三一码不定胆","TP":1346,"C":[{"I":21870,"N":"后三一码不定胆","MB":"7.9","MxO":"7.2251","MiO":"6.6421","SI":21019}]},{"I":2012,"P":1955,"N":"前三一码不定胆","TP":1348,"C":[{"I":21872,"N":"前三一码不定胆","MB":"7.9","MxO":"7.2251","MiO":"6.6421","SI":21021}]}]}]},{"Id":1956,"P":0,"N":"大小单双","c":[{"N":"大小单双","C":[{"I":2014,"P":1956,"N":"后二大小单双","TP":1350,"C":[{"I":21874,"N":"后二大小单双","MB":"7.9","MxO":"7.832","MiO":"7.2","SI":21023}]},{"I":2015,"P":1956,"N":"前二大小单双","TP":1351,"C":[{"I":21875,"N":"前二大小单双","MB":"7.9","MxO":"7.832","MiO":"7.2","SI":21024}]}]}]},{"Id":1957,"P":0,"N":"趣味","c":[{"N":"特殊","C":[{"I":2016,"P":1957,"N":"一帆风顺","TP":1352,"C":[{"I":21876,"N":"一帆风顺","MB":"7.9","MxO":"4.7813","MiO":"4.3955","SI":21025}]},{"I":2017,"P":1957,"N":"好事成双","TP":1353,"C":[{"I":21877,"N":"好事成双","MB":"7.9","MxO":"24.0363","MiO":"22.0967","SI":21026}]},{"I":2018,"P":1957,"N":"三星报喜","TP":1354,"C":[{"I":21878,"N":"三星报喜","MB":"7.9","MxO":"228.7383","MiO":"210.2804","SI":21027}]},{"I":2019,"P":1957,"N":"四季发财","TP":1355,"C":[{"I":21879,"N":"四季发财","MB":"7.9","MxO":"4256.5217","MiO":"3913.0435","SI":21028}]}]}]}]';
        //单注基数
        var  Radix=2;
        //今日未封盘期数
        var TodyUnClosePeriods= function(){return [{"PeriodId":122824842,"NumberOfPeriod":"20180131001","StartTime":"2018-01-31 09:00:00","CloseTime":"2018-01-31 09:07:25","Status":1},{"PeriodId":122824905,"NumberOfPeriod":"20180131002","StartTime":"2018-01-31 09:08:30","CloseTime":"2018-01-31 09:17:25","Status":0},{"PeriodId":122825031,"NumberOfPeriod":"20180131003","StartTime":"2018-01-31 09:18:30","CloseTime":"2018-01-31 09:27:25","Status":0},{"PeriodId":122825094,"NumberOfPeriod":"20180131004","StartTime":"2018-01-31 09:28:30","CloseTime":"2018-01-31 09:37:25","Status":0},{"PeriodId":122825346,"NumberOfPeriod":"20180131005","StartTime":"2018-01-31 09:38:30","CloseTime":"2018-01-31 09:47:25","Status":0},{"PeriodId":122825598,"NumberOfPeriod":"20180131006","StartTime":"2018-01-31 09:48:30","CloseTime":"2018-01-31 09:57:25","Status":0},{"PeriodId":122825787,"NumberOfPeriod":"20180131007","StartTime":"2018-01-31 09:58:30","CloseTime":"2018-01-31 10:07:25","Status":0},{"PeriodId":122825913,"NumberOfPeriod":"20180131008","StartTime":"2018-01-31 10:08:30","CloseTime":"2018-01-31 10:17:25","Status":0},{"PeriodId":122825535,"NumberOfPeriod":"20180131009","StartTime":"2018-01-31 10:18:30","CloseTime":"2018-01-31 10:27:25","Status":0},{"PeriodId":122826732,"NumberOfPeriod":"20180131010","StartTime":"2018-01-31 10:28:30","CloseTime":"2018-01-31 10:37:25","Status":0},{"PeriodId":122826039,"NumberOfPeriod":"20180131011","StartTime":"2018-01-31 10:38:30","CloseTime":"2018-01-31 10:47:25","Status":0},{"PeriodId":122826102,"NumberOfPeriod":"20180131012","StartTime":"2018-01-31 10:48:30","CloseTime":"2018-01-31 10:57:25","Status":0},{"PeriodId":122826228,"NumberOfPeriod":"20180131013","StartTime":"2018-01-31 10:58:30","CloseTime":"2018-01-31 11:07:25","Status":0},{"PeriodId":122826354,"NumberOfPeriod":"20180131014","StartTime":"2018-01-31 11:08:30","CloseTime":"2018-01-31 11:17:25","Status":0},{"PeriodId":122826480,"NumberOfPeriod":"20180131015","StartTime":"2018-01-31 11:18:30","CloseTime":"2018-01-31 11:27:25","Status":0},{"PeriodId":122826606,"NumberOfPeriod":"20180131016","StartTime":"2018-01-31 11:28:30","CloseTime":"2018-01-31 11:37:25","Status":0},{"PeriodId":122826670,"NumberOfPeriod":"20180131017","StartTime":"2018-01-31 11:38:30","CloseTime":"2018-01-31 11:47:25","Status":0},{"PeriodId":122824402,"NumberOfPeriod":"20180131018","StartTime":"2018-01-31 11:48:30","CloseTime":"2018-01-31 11:57:25","Status":0},{"PeriodId":122824591,"NumberOfPeriod":"20180131019","StartTime":"2018-01-31 11:58:30","CloseTime":"2018-01-31 12:07:25","Status":0},{"PeriodId":122824654,"NumberOfPeriod":"20180131020","StartTime":"2018-01-31 12:08:30","CloseTime":"2018-01-31 12:17:25","Status":0},{"PeriodId":122824843,"NumberOfPeriod":"20180131021","StartTime":"2018-01-31 12:18:30","CloseTime":"2018-01-31 12:27:25","Status":0},{"PeriodId":122824906,"NumberOfPeriod":"20180131022","StartTime":"2018-01-31 12:28:30","CloseTime":"2018-01-31 12:37:25","Status":0},{"PeriodId":122825032,"NumberOfPeriod":"20180131023","StartTime":"2018-01-31 12:38:30","CloseTime":"2018-01-31 12:47:25","Status":0},{"PeriodId":122825095,"NumberOfPeriod":"20180131024","StartTime":"2018-01-31 12:48:30","CloseTime":"2018-01-31 12:57:25","Status":0},{"PeriodId":122825112,"NumberOfPeriod":"20180131025","StartTime":"2018-01-31 12:58:30","CloseTime":"2018-01-31 13:07:25","Status":0},{"PeriodId":122825364,"NumberOfPeriod":"20180131026","StartTime":"2018-01-31 13:08:30","CloseTime":"2018-01-31 13:17:25","Status":0},{"PeriodId":122825616,"NumberOfPeriod":"20180131027","StartTime":"2018-01-31 13:18:30","CloseTime":"2018-01-31 13:27:25","Status":0},{"PeriodId":122825805,"NumberOfPeriod":"20180131028","StartTime":"2018-01-31 13:28:30","CloseTime":"2018-01-31 13:37:25","Status":0},{"PeriodId":122825931,"NumberOfPeriod":"20180131029","StartTime":"2018-01-31 13:38:30","CloseTime":"2018-01-31 13:47:25","Status":0},{"PeriodId":122825553,"NumberOfPeriod":"20180131030","StartTime":"2018-01-31 13:48:30","CloseTime":"2018-01-31 13:57:25","Status":0},{"PeriodId":122826750,"NumberOfPeriod":"20180131031","StartTime":"2018-01-31 13:58:30","CloseTime":"2018-01-31 14:07:25","Status":0},{"PeriodId":122826057,"NumberOfPeriod":"20180131032","StartTime":"2018-01-31 14:08:30","CloseTime":"2018-01-31 14:17:25","Status":0},{"PeriodId":122826120,"NumberOfPeriod":"20180131033","StartTime":"2018-01-31 14:18:30","CloseTime":"2018-01-31 14:27:25","Status":0},{"PeriodId":122826246,"NumberOfPeriod":"20180131034","StartTime":"2018-01-31 14:28:30","CloseTime":"2018-01-31 14:37:25","Status":0},{"PeriodId":122826372,"NumberOfPeriod":"20180131035","StartTime":"2018-01-31 14:38:30","CloseTime":"2018-01-31 14:47:25","Status":0},{"PeriodId":122826498,"NumberOfPeriod":"20180131036","StartTime":"2018-01-31 14:48:30","CloseTime":"2018-01-31 14:57:25","Status":0},{"PeriodId":122826624,"NumberOfPeriod":"20180131037","StartTime":"2018-01-31 14:58:30","CloseTime":"2018-01-31 15:07:25","Status":0},{"PeriodId":122826688,"NumberOfPeriod":"20180131038","StartTime":"2018-01-31 15:08:30","CloseTime":"2018-01-31 15:17:25","Status":0},{"PeriodId":122824420,"NumberOfPeriod":"20180131039","StartTime":"2018-01-31 15:18:30","CloseTime":"2018-01-31 15:27:25","Status":0},{"PeriodId":122824609,"NumberOfPeriod":"20180131040","StartTime":"2018-01-31 15:28:30","CloseTime":"2018-01-31 15:37:25","Status":0},{"PeriodId":122824672,"NumberOfPeriod":"20180131041","StartTime":"2018-01-31 15:38:30","CloseTime":"2018-01-31 15:47:25","Status":0},{"PeriodId":122824861,"NumberOfPeriod":"20180131042","StartTime":"2018-01-31 15:48:30","CloseTime":"2018-01-31 15:57:25","Status":0},{"PeriodId":122824924,"NumberOfPeriod":"20180131043","StartTime":"2018-01-31 15:58:30","CloseTime":"2018-01-31 16:07:25","Status":0},{"PeriodId":122825050,"NumberOfPeriod":"20180131044","StartTime":"2018-01-31 16:08:30","CloseTime":"2018-01-31 16:17:25","Status":0},{"PeriodId":122825113,"NumberOfPeriod":"20180131045","StartTime":"2018-01-31 16:18:30","CloseTime":"2018-01-31 16:27:25","Status":0},{"PeriodId":122825365,"NumberOfPeriod":"20180131046","StartTime":"2018-01-31 16:28:30","CloseTime":"2018-01-31 16:37:25","Status":0},{"PeriodId":122825617,"NumberOfPeriod":"20180131047","StartTime":"2018-01-31 16:38:30","CloseTime":"2018-01-31 16:47:25","Status":0},{"PeriodId":122825806,"NumberOfPeriod":"20180131048","StartTime":"2018-01-31 16:48:30","CloseTime":"2018-01-31 16:57:25","Status":0},{"PeriodId":122825932,"NumberOfPeriod":"20180131049","StartTime":"2018-01-31 16:58:30","CloseTime":"2018-01-31 17:07:25","Status":0},{"PeriodId":122825554,"NumberOfPeriod":"20180131050","StartTime":"2018-01-31 17:08:30","CloseTime":"2018-01-31 17:17:25","Status":0},{"PeriodId":122826751,"NumberOfPeriod":"20180131051","StartTime":"2018-01-31 17:18:30","CloseTime":"2018-01-31 17:27:25","Status":0},{"PeriodId":122825944,"NumberOfPeriod":"20180131052","StartTime":"2018-01-31 17:28:30","CloseTime":"2018-01-31 17:37:25","Status":0},{"PeriodId":122825566,"NumberOfPeriod":"20180131053","StartTime":"2018-01-31 17:38:30","CloseTime":"2018-01-31 17:47:25","Status":0},{"PeriodId":122826763,"NumberOfPeriod":"20180131054","StartTime":"2018-01-31 17:48:30","CloseTime":"2018-01-31 17:57:25","Status":0},{"PeriodId":122826070,"NumberOfPeriod":"20180131055","StartTime":"2018-01-31 17:58:30","CloseTime":"2018-01-31 18:07:25","Status":0},{"PeriodId":122826133,"NumberOfPeriod":"20180131056","StartTime":"2018-01-31 18:08:30","CloseTime":"2018-01-31 18:17:25","Status":0},{"PeriodId":122826259,"NumberOfPeriod":"20180131057","StartTime":"2018-01-31 18:18:30","CloseTime":"2018-01-31 18:27:25","Status":0},{"PeriodId":122826385,"NumberOfPeriod":"20180131058","StartTime":"2018-01-31 18:28:30","CloseTime":"2018-01-31 18:37:25","Status":0},{"PeriodId":122826511,"NumberOfPeriod":"20180131059","StartTime":"2018-01-31 18:38:30","CloseTime":"2018-01-31 18:47:25","Status":0},{"PeriodId":122826637,"NumberOfPeriod":"20180131060","StartTime":"2018-01-31 18:48:30","CloseTime":"2018-01-31 18:57:25","Status":0},{"PeriodId":122826701,"NumberOfPeriod":"20180131061","StartTime":"2018-01-31 18:58:30","CloseTime":"2018-01-31 19:07:25","Status":0},{"PeriodId":122824433,"NumberOfPeriod":"20180131062","StartTime":"2018-01-31 19:08:30","CloseTime":"2018-01-31 19:17:25","Status":0},{"PeriodId":122824622,"NumberOfPeriod":"20180131063","StartTime":"2018-01-31 19:18:30","CloseTime":"2018-01-31 19:27:25","Status":0},{"PeriodId":122824685,"NumberOfPeriod":"20180131064","StartTime":"2018-01-31 19:28:30","CloseTime":"2018-01-31 19:37:25","Status":0},{"PeriodId":122824874,"NumberOfPeriod":"20180131065","StartTime":"2018-01-31 19:38:30","CloseTime":"2018-01-31 19:47:25","Status":0},{"PeriodId":122824937,"NumberOfPeriod":"20180131066","StartTime":"2018-01-31 19:48:30","CloseTime":"2018-01-31 19:57:25","Status":0},{"PeriodId":122825063,"NumberOfPeriod":"20180131067","StartTime":"2018-01-31 19:58:30","CloseTime":"2018-01-31 20:07:25","Status":0},{"PeriodId":122825126,"NumberOfPeriod":"20180131068","StartTime":"2018-01-31 20:08:30","CloseTime":"2018-01-31 20:17:25","Status":0},{"PeriodId":122825378,"NumberOfPeriod":"20180131069","StartTime":"2018-01-31 20:18:30","CloseTime":"2018-01-31 20:27:25","Status":0},{"PeriodId":122825630,"NumberOfPeriod":"20180131070","StartTime":"2018-01-31 20:28:30","CloseTime":"2018-01-31 20:37:25","Status":0},{"PeriodId":122825819,"NumberOfPeriod":"20180131071","StartTime":"2018-01-31 20:38:30","CloseTime":"2018-01-31 20:47:25","Status":0},{"PeriodId":122825945,"NumberOfPeriod":"20180131072","StartTime":"2018-01-31 20:48:30","CloseTime":"2018-01-31 20:57:25","Status":0},{"PeriodId":122825567,"NumberOfPeriod":"20180131073","StartTime":"2018-01-31 20:58:30","CloseTime":"2018-01-31 21:07:25","Status":0},{"PeriodId":122825693,"NumberOfPeriod":"20180131074","StartTime":"2018-01-31 21:08:30","CloseTime":"2018-01-31 21:17:25","Status":0},{"PeriodId":122826764,"NumberOfPeriod":"20180131075","StartTime":"2018-01-31 21:18:30","CloseTime":"2018-01-31 21:27:25","Status":0},{"PeriodId":122825756,"NumberOfPeriod":"20180131076","StartTime":"2018-01-31 21:28:30","CloseTime":"2018-01-31 21:37:25","Status":0},{"PeriodId":122826071,"NumberOfPeriod":"20180131077","StartTime":"2018-01-31 21:38:30","CloseTime":"2018-01-31 21:47:25","Status":0},{"PeriodId":122826008,"NumberOfPeriod":"20180131078","StartTime":"2018-01-31 21:48:30","CloseTime":"2018-01-31 21:57:25","Status":0},{"PeriodId":122826134,"NumberOfPeriod":"20180131079","StartTime":"2018-01-31 21:58:30","CloseTime":"2018-01-31 22:07:25","Status":0},{"PeriodId":122826197,"NumberOfPeriod":"20180131080","StartTime":"2018-01-31 22:08:30","CloseTime":"2018-01-31 22:17:25","Status":0},{"PeriodId":122826260,"NumberOfPeriod":"20180131081","StartTime":"2018-01-31 22:18:30","CloseTime":"2018-01-31 22:27:25","Status":0},{"PeriodId":122826323,"NumberOfPeriod":"20180131082","StartTime":"2018-01-31 22:28:30","CloseTime":"2018-01-31 22:37:25","Status":0},{"PeriodId":122826386,"NumberOfPeriod":"20180131083","StartTime":"2018-01-31 22:38:30","CloseTime":"2018-01-31 22:47:25","Status":0},{"PeriodId":122826449,"NumberOfPeriod":"20180131084","StartTime":"2018-01-31 22:48:30","CloseTime":"2018-01-31 22:57:25","Status":0}]};
        //前20
        var topHistoryOrders=[];
        var GameCode = 'SSC', PAGE_START_TIME = new Date() - 0;
        var SignalrSite = "https://zycccppp.websocketcdn.com:8819/signalr";
        var showLongHu = 'True';


        (function () {
            var $popup = $(".skin-box"), f;
            $("#centerListBtn").on({
                mouseenter: function () {
                    $popup.stop(true, true).fadeIn(300);
                },
                mouseleave: function () {
                    f = setTimeout(function () {
                        $popup.stop().fadeOut(300);
                    }, 100);
                }
            });

            $popup.on({
                mouseenter: function () {
                    clearTimeout(f);
                },
                mouseleave: function () {
                    $popup.fadeOut(300);
                }
            });
        })();

    </script>
        <script src="https://zy11sbsbqt.lfjieweisi.com//Scripts/Common/flipclock/flipclock.min.js?052238f61f"></script>

    <script src="https://zy11sbsbqt.lfjieweisi.com//Scripts/dist/official/data.cqssc.js?ca8feec974"></script>
    <script src="https://zy11sbsbqt.lfjieweisi.com//Scripts/dist/official/core.min.js?1bf7fb5011"></script>

    <script type="text/javascript" src="https://zy11sbsbqt.lfjieweisi.com//Scripts/Betting/bet.js?f5fe70c355"></script>
    <script src="https://zy11sbsbqt.lfjieweisi.com//Scripts/Common/jquery.signalR-2.1.1.min.js?40e112173f"></script>
    <script src="https://zy11sbsbqt.lfjieweisi.com//Scripts/Common/jquery.md5.min.js?b9a2f4d724"></script>
    <script src="https://zy11sbsbqt.lfjieweisi.com//Scripts/WG.RegisterUser.js?78b9bba0bc"></script>
    </body>
</html>
