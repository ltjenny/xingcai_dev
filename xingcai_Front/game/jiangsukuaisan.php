
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title> - 江苏快三 - 彩票系统</title>
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
<body data-gamename="江苏快三" data-gameid="39" >
    

    
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


                    <div class="game_info game_39">
                        <div class="game_ico game_ico_39"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/default/images/gameIcon/JSKS.png?_=20160805" /></div>
                        <div class="game_mane ">
                            <span class="">江苏快三</span>
                                <a href="http://www.jslottery.com/Lottery/LotteryInfo_Fast3?PlayType=7" target="_blank" title="官方网址" class="cn-btn"></a>
                        </div>
                        <div class="openinfo">
                            <div class="drawNumber" id="PeriodInfo"><span class="c-period"><div>第 <b data-bind="text:periodInfo().fnumberofperiod">&nbsp;</b> 期</div><div class="time" data-bind="text:periodTip">&nbsp;</div></span> <span class="c-resttime" id="RestTime" style="float:left;width:128px;padding:0;"></span></div><div id="RestTime2" style="display:none"></div>
                            <div class="now_time" id="Clock"></div>
                        </div>
                    </div>
                    <div class="lottery_result lottery_result_K3">
                        <div data-bind="flip:prevPeriodResult" class="lr_ball_box" data-game="K3"></div>
                        <div>
                            <span class="lr_txt">第<span class="color-NoL fsL" data-bind="text:periodInfo().fpreviousperiod">&nbsp;</span>期</span>
                            <span class="lr_txt"><a target="_blank" href="/result/index?game=39">开奖结果</a></span>
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
                        <a href="/Result/index?game=39" target="_blank" class="result-btn"></a>
                        <ul id="JSResultHistoryList" data-bind="foreach:resultHistoryList" class="K3">
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
                                <div class="sidem_item sidem_item_1">
                                    <a href="javascript:;" class="sidem_b clear"><i></i><span>时时彩</span></a>
                                    <ul style="">
                                            <li class=""><a data-key="26" data-val="重庆时时彩" href="/OffcialOtherGame/Index/26"><span><i></i>重庆时时彩</span></a></li>
                                            <li class=""><a data-key="40" data-val="新疆时时彩" href="/OffcialOtherGame/Index/40"><span><i></i>新疆时时彩</span></a></li>
                                            <li class=""><a data-key="42" data-val="天津时时彩" href="/OffcialOtherGame/Index/42"><span><i></i>天津时时彩</span></a></li>
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
                                <div class="sidem_item sidem_item_7 sidem_item_active">
                                    <a href="javascript:;" class="sidem_b clear"><i></i><span>快三</span></a>
                                    <ul style="display:block">
                                            <li class="active-item-link currentClass"><a data-key="39" data-val="江苏快三" href="/OffcialOtherGame/Index/39"><span><i></i>江苏快三</span></a></li>
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
        var LatestPriodData = '{"fpreviousperiod":"","fpreviousresult":"","fid":"123024661","fnumberofperiod":"20180131006","fstarttime":"2018/01/31 09:19:00","flottostarttime":"2018/01/31 09:30:00","fstatus":"1","fclosetime":"2018/01/31 09:26:59","fnextperiod":"20180131007","fnextstarttime":"2018/01/31 09:29:00","fsettlefid":"","fsettlenumber":"","fsettletime":"","ServerTime":"2018/01/31 09:22:32","fisstopseles":"False"}';
        //历史开奖结果
        var ResultList = '{"total":6,"list":[{"period":20171206044,"date":"2017-12-06T15:50:00+08:00","result":"4,4,6"},{"period":20171206043,"date":"2017-12-06T15:40:00+08:00","result":"2,4,4"},{"period":20171206042,"date":"2017-12-06T15:30:00+08:00","result":"1,2,6"},{"period":20171206041,"date":"2017-12-06T15:20:00+08:00","result":"1,4,5"},{"period":20171206040,"date":"2017-12-06T15:10:00+08:00","result":"2,4,6"},{"period":20171206039,"date":"2017-12-06T15:00:00+08:00","result":"2,4,5"}]}';
        //玩法、玩法项树状结构树
        var navListJson = '[{"Id":1764,"P":0,"N":"同号","c":[{"N":"二同号","C":[{"I":1765,"P":1764,"N":"二同号单选","TP":1765,"C":[{"I":21334,"N":"二同号单选","MB":"7.9","MxO":"53.208","MiO":"47.52","SI":21334}]},{"I":1766,"P":1764,"N":"二同号复选","TP":1766,"C":[{"I":21335,"N":"二同号复选","MB":"7.9","MxO":"10.6416","MiO":"9.504","SI":21335}]}]},{"N":"三同号","C":[{"I":1772,"P":1764,"N":"三同号单选","TP":1772,"C":[{"I":21336,"N":"三同号单选","MB":"7.9","MxO":"159.624","MiO":"142.56","SI":21336}]},{"I":1773,"P":1764,"N":"三同号复选","TP":1773,"C":[{"I":21337,"N":"三同号复选","MB":"7.9","MxO":"26.604","MiO":"23.76","SI":21337}]}]}]},{"Id":1767,"P":0,"N":"和值","c":[{"N":"和值","C":[{"I":1774,"P":1767,"N":"和值","TP":1774,"C":[{"I":21338,"N":"3,18","MB":"7.9","MxO":"159.624","MiO":"142.56","SI":21338},{"I":21339,"N":"4,17","MB":"7.9","MxO":"53.208","MiO":"47.52","SI":21339},{"I":21340,"N":"5,16","MB":"7.9","MxO":"26.604","MiO":"23.76","SI":21340},{"I":21341,"N":"6,15","MB":"7.9","MxO":"15.9624","MiO":"14.256","SI":21341},{"I":21342,"N":"7,14","MB":"7.9","MxO":"10.6416","MiO":"9.504","SI":21342},{"I":21343,"N":"8,13","MB":"7.9","MxO":"7.6011","MiO":"6.7886","SI":21343},{"I":21344,"N":"9,12","MB":"7.9","MxO":"6.385","MiO":"5.7024","SI":21344},{"I":21345,"N":"10,11","MB":"7.9","MxO":"5.912","MiO":"5.28","SI":21345}]}]}]},{"Id":1768,"P":0,"N":"三连号","c":[{"N":"三连号","C":[{"I":1775,"P":1768,"N":"三连号","TP":1775,"C":[{"I":21346,"N":"三连号","MB":"7.9","MxO":"6.651","MiO":"5.94","SI":21346}]}]}]},{"Id":1769,"P":0,"N":"不同号","c":[{"N":"不同号","C":[{"I":1776,"P":1769,"N":"二不同号","TP":1776,"C":[{"I":21347,"N":"二不同号","MB":"7.9","MxO":"5.3208","MiO":"4.752","SI":21347}]},{"I":1777,"P":1769,"N":"三不同号","TP":1777,"C":[{"I":21348,"N":"三不同号","MB":"7.9","MxO":"26.604","MiO":"23.76","SI":21348}]}]}]}]';
        //单注基数
        var  Radix=1;
        //今日未封盘期数
        var TodyUnClosePeriods= function(){return [{"PeriodId":123024661,"NumberOfPeriod":"20180131006","StartTime":"2018-01-31 09:19:00","CloseTime":"2018-01-31 09:27:00","Status":1},{"PeriodId":123024188,"NumberOfPeriod":"20180131007","StartTime":"2018-01-31 09:29:00","CloseTime":"2018-01-31 09:37:00","Status":0},{"PeriodId":123024120,"NumberOfPeriod":"20180131008","StartTime":"2018-01-31 09:39:00","CloseTime":"2018-01-31 09:47:00","Status":0},{"PeriodId":123023780,"NumberOfPeriod":"20180131009","StartTime":"2018-01-31 09:49:00","CloseTime":"2018-01-31 09:57:00","Status":0},{"PeriodId":123024052,"NumberOfPeriod":"20180131010","StartTime":"2018-01-31 09:59:00","CloseTime":"2018-01-31 10:07:00","Status":0},{"PeriodId":123023576,"NumberOfPeriod":"20180131011","StartTime":"2018-01-31 10:09:00","CloseTime":"2018-01-31 10:17:00","Status":0},{"PeriodId":123023712,"NumberOfPeriod":"20180131012","StartTime":"2018-01-31 10:19:00","CloseTime":"2018-01-31 10:27:00","Status":0},{"PeriodId":123023440,"NumberOfPeriod":"20180131013","StartTime":"2018-01-31 10:29:00","CloseTime":"2018-01-31 10:37:00","Status":0},{"PeriodId":123023168,"NumberOfPeriod":"20180131014","StartTime":"2018-01-31 10:39:00","CloseTime":"2018-01-31 10:47:00","Status":0},{"PeriodId":123023100,"NumberOfPeriod":"20180131015","StartTime":"2018-01-31 10:49:00","CloseTime":"2018-01-31 10:57:00","Status":0},{"PeriodId":123023915,"NumberOfPeriod":"20180131016","StartTime":"2018-01-31 10:59:00","CloseTime":"2018-01-31 11:07:00","Status":0},{"PeriodId":123023983,"NumberOfPeriod":"20180131017","StartTime":"2018-01-31 11:09:00","CloseTime":"2018-01-31 11:17:00","Status":0},{"PeriodId":123024323,"NumberOfPeriod":"20180131018","StartTime":"2018-01-31 11:19:00","CloseTime":"2018-01-31 11:27:00","Status":0},{"PeriodId":123023643,"NumberOfPeriod":"20180131019","StartTime":"2018-01-31 11:29:00","CloseTime":"2018-01-31 11:37:00","Status":0},{"PeriodId":123024525,"NumberOfPeriod":"20180131020","StartTime":"2018-01-31 11:39:00","CloseTime":"2018-01-31 11:47:00","Status":0},{"PeriodId":123024255,"NumberOfPeriod":"20180131021","StartTime":"2018-01-31 11:49:00","CloseTime":"2018-01-31 11:57:00","Status":0},{"PeriodId":123025399,"NumberOfPeriod":"20180131022","StartTime":"2018-01-31 11:59:00","CloseTime":"2018-01-31 12:07:00","Status":0},{"PeriodId":123024458,"NumberOfPeriod":"20180131023","StartTime":"2018-01-31 12:09:00","CloseTime":"2018-01-31 12:17:00","Status":0},{"PeriodId":123024728,"NumberOfPeriod":"20180131024","StartTime":"2018-01-31 12:19:00","CloseTime":"2018-01-31 12:27:00","Status":0},{"PeriodId":123024929,"NumberOfPeriod":"20180131025","StartTime":"2018-01-31 12:29:00","CloseTime":"2018-01-31 12:37:00","Status":0},{"PeriodId":123025130,"NumberOfPeriod":"20180131026","StartTime":"2018-01-31 12:39:00","CloseTime":"2018-01-31 12:47:00","Status":0},{"PeriodId":123023467,"NumberOfPeriod":"20180131027","StartTime":"2018-01-31 12:49:00","CloseTime":"2018-01-31 12:57:00","Status":0},{"PeriodId":123023807,"NumberOfPeriod":"20180131028","StartTime":"2018-01-31 12:59:00","CloseTime":"2018-01-31 13:07:00","Status":0},{"PeriodId":123023875,"NumberOfPeriod":"20180131029","StartTime":"2018-01-31 13:09:00","CloseTime":"2018-01-31 13:17:00","Status":0},{"PeriodId":123023943,"NumberOfPeriod":"20180131030","StartTime":"2018-01-31 13:19:00","CloseTime":"2018-01-31 13:27:00","Status":0},{"PeriodId":123024283,"NumberOfPeriod":"20180131031","StartTime":"2018-01-31 13:29:00","CloseTime":"2018-01-31 13:37:00","Status":0},{"PeriodId":123023603,"NumberOfPeriod":"20180131032","StartTime":"2018-01-31 13:39:00","CloseTime":"2018-01-31 13:47:00","Status":0},{"PeriodId":123024485,"NumberOfPeriod":"20180131033","StartTime":"2018-01-31 13:49:00","CloseTime":"2018-01-31 13:57:00","Status":0},{"PeriodId":123024215,"NumberOfPeriod":"20180131034","StartTime":"2018-01-31 13:59:00","CloseTime":"2018-01-31 14:07:00","Status":0},{"PeriodId":123025023,"NumberOfPeriod":"20180131035","StartTime":"2018-01-31 14:09:00","CloseTime":"2018-01-31 14:17:00","Status":0},{"PeriodId":123025426,"NumberOfPeriod":"20180131036","StartTime":"2018-01-31 14:19:00","CloseTime":"2018-01-31 14:27:00","Status":0},{"PeriodId":123025292,"NumberOfPeriod":"20180131037","StartTime":"2018-01-31 14:29:00","CloseTime":"2018-01-31 14:37:00","Status":0},{"PeriodId":123022924,"NumberOfPeriod":"20180131038","StartTime":"2018-01-31 14:39:00","CloseTime":"2018-01-31 14:47:00","Status":0},{"PeriodId":123022992,"NumberOfPeriod":"20180131039","StartTime":"2018-01-31 14:49:00","CloseTime":"2018-01-31 14:57:00","Status":0},{"PeriodId":123023060,"NumberOfPeriod":"20180131040","StartTime":"2018-01-31 14:59:00","CloseTime":"2018-01-31 15:07:00","Status":0},{"PeriodId":123023128,"NumberOfPeriod":"20180131041","StartTime":"2018-01-31 15:09:00","CloseTime":"2018-01-31 15:17:00","Status":0},{"PeriodId":123023400,"NumberOfPeriod":"20180131042","StartTime":"2018-01-31 15:19:00","CloseTime":"2018-01-31 15:27:00","Status":0},{"PeriodId":123023672,"NumberOfPeriod":"20180131043","StartTime":"2018-01-31 15:29:00","CloseTime":"2018-01-31 15:37:00","Status":0},{"PeriodId":123023536,"NumberOfPeriod":"20180131044","StartTime":"2018-01-31 15:39:00","CloseTime":"2018-01-31 15:47:00","Status":0},{"PeriodId":123024012,"NumberOfPeriod":"20180131045","StartTime":"2018-01-31 15:49:00","CloseTime":"2018-01-31 15:57:00","Status":0},{"PeriodId":123023740,"NumberOfPeriod":"20180131046","StartTime":"2018-01-31 15:59:00","CloseTime":"2018-01-31 16:07:00","Status":0},{"PeriodId":123024080,"NumberOfPeriod":"20180131047","StartTime":"2018-01-31 16:09:00","CloseTime":"2018-01-31 16:17:00","Status":0},{"PeriodId":123024148,"NumberOfPeriod":"20180131048","StartTime":"2018-01-31 16:19:00","CloseTime":"2018-01-31 16:27:00","Status":0},{"PeriodId":123024621,"NumberOfPeriod":"20180131049","StartTime":"2018-01-31 16:29:00","CloseTime":"2018-01-31 16:37:00","Status":0},{"PeriodId":123024352,"NumberOfPeriod":"20180131050","StartTime":"2018-01-31 16:39:00","CloseTime":"2018-01-31 16:47:00","Status":0},{"PeriodId":123024554,"NumberOfPeriod":"20180131051","StartTime":"2018-01-31 16:49:00","CloseTime":"2018-01-31 16:57:00","Status":0},{"PeriodId":123024756,"NumberOfPeriod":"20180131052","StartTime":"2018-01-31 16:59:00","CloseTime":"2018-01-31 17:07:00","Status":0},{"PeriodId":123025047,"NumberOfPeriod":"20180131053","StartTime":"2018-01-31 17:09:00","CloseTime":"2018-01-31 17:17:00","Status":0},{"PeriodId":123025450,"NumberOfPeriod":"20180131054","StartTime":"2018-01-31 17:19:00","CloseTime":"2018-01-31 17:27:00","Status":0},{"PeriodId":123025316,"NumberOfPeriod":"20180131055","StartTime":"2018-01-31 17:29:00","CloseTime":"2018-01-31 17:37:00","Status":0},{"PeriodId":123022948,"NumberOfPeriod":"20180131056","StartTime":"2018-01-31 17:39:00","CloseTime":"2018-01-31 17:47:00","Status":0},{"PeriodId":123023016,"NumberOfPeriod":"20180131057","StartTime":"2018-01-31 17:49:00","CloseTime":"2018-01-31 17:57:00","Status":0},{"PeriodId":123023084,"NumberOfPeriod":"20180131058","StartTime":"2018-01-31 17:59:00","CloseTime":"2018-01-31 18:07:00","Status":0},{"PeriodId":123023152,"NumberOfPeriod":"20180131059","StartTime":"2018-01-31 18:09:00","CloseTime":"2018-01-31 18:17:00","Status":0},{"PeriodId":123023424,"NumberOfPeriod":"20180131060","StartTime":"2018-01-31 18:19:00","CloseTime":"2018-01-31 18:27:00","Status":0},{"PeriodId":123023696,"NumberOfPeriod":"20180131061","StartTime":"2018-01-31 18:29:00","CloseTime":"2018-01-31 18:37:00","Status":0},{"PeriodId":123023560,"NumberOfPeriod":"20180131062","StartTime":"2018-01-31 18:39:00","CloseTime":"2018-01-31 18:47:00","Status":0},{"PeriodId":123024036,"NumberOfPeriod":"20180131063","StartTime":"2018-01-31 18:49:00","CloseTime":"2018-01-31 18:57:00","Status":0},{"PeriodId":123023764,"NumberOfPeriod":"20180131064","StartTime":"2018-01-31 18:59:00","CloseTime":"2018-01-31 19:07:00","Status":0},{"PeriodId":123024104,"NumberOfPeriod":"20180131065","StartTime":"2018-01-31 19:09:00","CloseTime":"2018-01-31 19:17:00","Status":0},{"PeriodId":123024172,"NumberOfPeriod":"20180131066","StartTime":"2018-01-31 19:19:00","CloseTime":"2018-01-31 19:27:00","Status":0},{"PeriodId":123024645,"NumberOfPeriod":"20180131067","StartTime":"2018-01-31 19:29:00","CloseTime":"2018-01-31 19:37:00","Status":0},{"PeriodId":123024376,"NumberOfPeriod":"20180131068","StartTime":"2018-01-31 19:39:00","CloseTime":"2018-01-31 19:47:00","Status":0},{"PeriodId":123024578,"NumberOfPeriod":"20180131069","StartTime":"2018-01-31 19:49:00","CloseTime":"2018-01-31 19:57:00","Status":0},{"PeriodId":123024780,"NumberOfPeriod":"20180131070","StartTime":"2018-01-31 19:59:00","CloseTime":"2018-01-31 20:07:00","Status":0},{"PeriodId":123024847,"NumberOfPeriod":"20180131071","StartTime":"2018-01-31 20:09:00","CloseTime":"2018-01-31 20:17:00","Status":0},{"PeriodId":123024981,"NumberOfPeriod":"20180131072","StartTime":"2018-01-31 20:19:00","CloseTime":"2018-01-31 20:27:00","Status":0},{"PeriodId":123025048,"NumberOfPeriod":"20180131073","StartTime":"2018-01-31 20:29:00","CloseTime":"2018-01-31 20:37:00","Status":0},{"PeriodId":123025451,"NumberOfPeriod":"20180131074","StartTime":"2018-01-31 20:39:00","CloseTime":"2018-01-31 20:47:00","Status":0},{"PeriodId":123025317,"NumberOfPeriod":"20180131075","StartTime":"2018-01-31 20:49:00","CloseTime":"2018-01-31 20:57:00","Status":0},{"PeriodId":123022949,"NumberOfPeriod":"20180131076","StartTime":"2018-01-31 20:59:00","CloseTime":"2018-01-31 21:07:00","Status":0},{"PeriodId":123023017,"NumberOfPeriod":"20180131077","StartTime":"2018-01-31 21:09:00","CloseTime":"2018-01-31 21:17:00","Status":0},{"PeriodId":123023289,"NumberOfPeriod":"20180131078","StartTime":"2018-01-31 21:19:00","CloseTime":"2018-01-31 21:27:00","Status":0},{"PeriodId":123023085,"NumberOfPeriod":"20180131079","StartTime":"2018-01-31 21:29:00","CloseTime":"2018-01-31 21:37:00","Status":0},{"PeriodId":123023221,"NumberOfPeriod":"20180131080","StartTime":"2018-01-31 21:39:00","CloseTime":"2018-01-31 21:47:00","Status":0},{"PeriodId":123023153,"NumberOfPeriod":"20180131081","StartTime":"2018-01-31 21:49:00","CloseTime":"2018-01-31 21:57:00","Status":0},{"PeriodId":123023357,"NumberOfPeriod":"20180131082","StartTime":"2018-01-31 21:59:00","CloseTime":"2018-01-31 22:07:00","Status":0}]};
        //前20
        var topHistoryOrders=[];
        var GameCode = 'K3', PAGE_START_TIME = new Date() - 0;
        var SignalrSite = "https://zycccppp.websocketcdn.com:8819/signalr";
        var showLongHu = 'False';


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

    <script src="https://zy11sbsbqt.lfjieweisi.com//Scripts/dist/official/data.jsk3.js?ca8feec974"></script>
    <script src="https://zy11sbsbqt.lfjieweisi.com//Scripts/dist/official/core.min.js?1bf7fb5011"></script>

    <script type="text/javascript" src="https://zy11sbsbqt.lfjieweisi.com//Scripts/Betting/bet.js?f5fe70c355"></script>
    <script src="https://zy11sbsbqt.lfjieweisi.com//Scripts/Common/jquery.signalR-2.1.1.min.js?40e112173f"></script>
    <script src="https://zy11sbsbqt.lfjieweisi.com//Scripts/Common/jquery.md5.min.js?b9a2f4d724"></script>
    <script src="https://zy11sbsbqt.lfjieweisi.com//Scripts/WG.RegisterUser.js?78b9bba0bc"></script>
    </body>
</html>
