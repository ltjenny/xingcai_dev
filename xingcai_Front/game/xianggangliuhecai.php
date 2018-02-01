
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> - 香港六合彩 - 彩票系统</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" />
    <meta name="description" />
    <link rel="Shortcut Icon" href="/Images/ICO/yuducaipiao/favicon.ico" />
    <link rel="Bookmark" href="/Images/ICO/yuducaipiao/favicon.ico" />
    <link href="/js_new/common//artDialog6/ui-dialog.css?ae7e700648" rel="stylesheet" />
    <link href="/css_new/default/creditGames/css/frameui.css?6f066cb37a" rel="stylesheet" />
    <link href="/css_new/mapping/yuducaipiao/creditGames/css/frameui.css?6ac7af97e4" rel="stylesheet" id="CSS" />
    <link href="/js_new/common/flipclock/flipclock.css?f9d01deb80" rel="stylesheet" />

    <script src="/js_new/dist/$.ko.js?a876144a3a"></script>
    <script src="/js_new/common/jquery.md5.min.js?b9a2f4d724"></script>
    <script src="/js_new/common/artDialog6/dialog-plus-min.js?4786a25c83"></script>
    <script src="/js_new/dist/credit/utils.min.js?d609585e96"></script>
    <style>
        /*x068增加单独头部*/
        .top-box .main { width: 1338px !important; margin: 0 auto; }
        .header-main { width: 1338px !important; margin: 0 auto; }
        /*x068增加单独头部*/
    </style>
</head>
<body id="body" class="body" data-gameid="1" data-gamename="香港六合彩" >
    

    
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
                            <a href="javascript:;" data-bind="click:viewRule" class="rule" title="规则说明"><i></i><span class="rule_description">规则说明</span></a>
                                <a title="登出账号" class="btn-login-out" href="/Home/UserLogout"><span>登出账号</span></a>
                        
                        
                    </div>
                    
                    <div class="menu-child" style="display:none;" id="lot_sec_menu">
                    </div>
                    
                </div>

                    <div class="game_info game_1">
                        <div class="game_ico game_ico_1">
                            <img src="https://zy11sbsbqt.lfjieweisi.com//Content/default/images/gameIcon/⑥HC.png?_=20160805" />
                        </div>
                        <div class="game_mane">
                            <span class="">香港六合彩</span>
                                <a href="http://bet.hkjc.com/marksix/default.aspx" target="_blank" title="官方网址" class="cn-btn"></a>
                        </div>
                        <div class="openinfo">
                            <div class="drawNumber" id="PeriodInfo"><span class="c-period"><div>第 <b data-bind="text:periodInfo().fnumberofperiod">&nbsp;</b> 期</div><div class="time" data-bind="text:periodTip">&nbsp;</div></span> <span class="c-resttime" id="RestTime"></span></div><div id="RestTime2" style="display:none"></div>
                            <div class="now_time" id="Clock"></div>
                        </div>
                    </div>
                    <div class="lottery_result game_LHC">
                        <div data-bind="foreach:{data:prevPeriodResult,afterRender:$root.lotteryEffect||$.noop}" id="LotteryResultBox" class="lr_ball_box">
                            <span class="lottery-result-ball" data-bind="css:'ball_'+$data" style="position:relative;">
                                <label data-bind="text:$data">&nbsp;</label>
                                    <span style="position:absolute;right:-1em;bottom:5px;color:#fff;font-weight:normal;font-size:12px;line-height:1" data-bind="text:$root.getZodiacFromBall($data)">&nbsp;</span>
                            </span>
                                <b class="result-plus" data-bind="if:$index()===5">+</b>
                        </div>
                        <div>
                            <span class="lr_txt">第 <label data-bind="text:periodInfo().fpreviousperiod">&nbsp;</label> 期</span>
                            <span class="lr_txt"><a target="_blank" href="/result/index?game=1">开奖结果</a></span>
                            <span class="vol-item">
                                <a href="javascript:;" class="volume" data-bind="click:tracks.mute,css:'volume-'+(tracks.isMute()?'off':'on')"></a>
                                <div class="Ringtone select-box">
                                    <div class="select-current"><span data-bind="text:tracks.trackName"></span><i></i></div>
                                    <select class="select-list" data-bind="options:tracks.list,value:tracks.track,optionsText:'name',optionsValue:'value'"></select>
                                </div>
                                    <a href="javascript:;" class="video-btn" data-bind="click:sixLotteryVideo">开奖直播</a>
                            </span>
                        </div>
                    </div>
                            </div>
        </div>
        <div class="container clear" id="container">
            <div class="side">
                <div class="userbox">
                    <ul class="stc_1 clear">
                        <li class="mane">
                            <span class="stc_t">账号：</span><span class="stc_c">eccainiao</span>
                        </li>
                        <li class="balance">
                            <span class="stc_t">余额：</span><span class="stc_c" id="AvailableBalance" data-bind="click:refreshBalance.bind($data,'latest')" style="cursor:pointer">0</span>
                            
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="acc-links clear" id="OpenNewWindow">
                            <a title="在线存款" class="btn-navacc btn-navacc-deposit" href="/Recharge/Index" target = &quot;_blank&quot;><span title="在线存款">充值</span></a>
                            <a title="在线取款" class="btn-navacc btn-navacc-withdraw" id="jGetMoney" href="/Withdrawal/Encashment/" target = &quot;_blank&quot;><span title="在线取款">提现</span></a>
                                <a title="帐变记录" class="btn-navacc btn-navacc-mail" href="/Report/AccountChange" target = &quot;_blank&quot;><span title="帐变记录">帐变记录</span></a>
                                <a title="游戏记录" class="btn-navacc btn-navacc-current" href="/Report/Bet" target = &quot;_blank&quot;><span>游戏记录</span></a>
                                <a title="账户管理" class="btn-navacc btn-navacc-history" href="/UserCenter/UserInfo" target = &quot;_blank&quot;><span>账户管理</span></a>
                                <a title="会员中心" class="btn-navacc btn-navacc-center" href="/UserCenter/UserInfo" target = &quot;_blank&quot;><span title="会员中心">会员中心</span></a>
                    </div>
                </div>
                <div class="side-in">
                    
                    <div class="side_tab">
                        <div class="" id="sideTab" style="overflow:hidden;">
                            <div class="st_header clear" tab="header">
                                <a href="javascript:;" class="active black_bg">开奖结果</a>
                                <a href="javascript:;" class="black_bg">本期投注</a>
                            </div>
                            <div class="st_content" tab="content">
                                <div class="side-result">
                                    <ul data-bind="foreach:resultHistoryList().slice(0,5),style:{display:resultHistoryList().length<=0?'none':''}">
                                        <li>
                                            <span class="sr-index" data-bind="text:$index()+1"></span>
                                            <span class="sr-period" data-bind="text:period"></span>
                                            <div class="sr-nums" data-bind="attr:{title:result}">
                                                <span><i data-bind="html:result"></i></span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="top10T" data-bind="style:{display:resultHistoryList().length>=5?'':'none'}"><a target="_blank" href="/Result/index?game=1">更多开奖结果</a></ul>
                                    <ul class="top10T" data-bind="style:{display:resultHistoryList().length<=0?'':'none'}">暂无开奖结果</ul>
                                </div>
                                
                                <div class="stc_2" style="display:none;">
                                    <table class="top10-order">
                                        <thead class="top10-order-header">
                                            <tr class="top10-tr">
                                                <th class="top10-td-1">时间</th>
                                                <th class="top10-td-2">赔率</th>
                                                <th class="top10-td-3 noborder">金额</th>
                                            </tr>
                                        </thead>
                                        <tbody class="top10-order-content">
                                            <!-- ko if:top10().length===0 -->
                                            <tr><td colspan="3" class="top10T noborder">暂无最新注单信息</td></tr>
                                            <!-- /ko -->
                                            <!-- ko foreach:top10 -->
                                            <tr class="top10-tr">
                                                <td class="top10-td-1 bdtop" align="center" data-bind="text:cTime"></td>
                                                <td class="top10-td-2 bdtop" align="center" data-bind="text:odds"></td>
                                                <td class="top10-td-3 bdtop" align="center" data-bind="text:amount"></td>
                                            </tr>
                                            <tr><td colspan="3" class="top10-td-4 bdbottom" data-bind="text:content"></td></tr>
                                            <!-- /ko -->
                                        </tbody>
                                        <tfoot class="top10-order-content">
                                            <!-- ko if:top10().length > 0 -->
                                            <tr><td colspan="3" class="top10T noborder"><a href="/Report/Bet">更多记录</a></td></tr>
                                            <!-- /ko -->
                                        </tfoot>
                                    </table>
                                        <script>
                                            var top10orders = [];
                                        </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="side_menu" id="sideMenu">
                                <div class="sidem_item sidem_item_1 sidem_item_active">
                                    <a href="javascript:;" class="sidem_b clear"><i></i><span>低频彩</span></a>
                                    <ul style="display:block">
                                            <li><a data-key="1" data-val="香港六合彩" href="/Six/Index" class="active"><span><i></i>香港六合彩</span></a></li>
                                    </ul>
                                </div>
                                <div class="sidem_item sidem_item_2">
                                    <a href="javascript:;" class="sidem_b clear"><i></i><span>时时彩</span></a>
                                    <ul style="">
                                            <li><a data-key="7" data-val="重庆时时彩" href="/OtherGame/Index/7" class=""><span><i></i>重庆时时彩</span></a></li>
                                            <li><a data-key="9" data-val="天津时时彩" href="/OtherGame/Index/9" class=""><span><i></i>天津时时彩</span></a></li>
                                            <li><a data-key="10" data-val="新疆时时彩" href="/OtherGame/Index/10" class=""><span><i></i>新疆时时彩</span></a></li>
                                    </ul>
                                </div>
                                <div class="sidem_item sidem_item_4">
                                    <a href="javascript:;" class="sidem_b clear"><i></i><span>PK拾</span></a>
                                    <ul style="">
                                            <li><a data-key="15" data-val="北京PK拾" href="/OtherGame/Index/15" class=""><span><i></i>北京PK拾</span></a></li>
                                    </ul>
                                </div>
                                <div class="sidem_item sidem_item_6">
                                    <a href="javascript:;" class="sidem_b clear"><i></i><span>快乐彩</span></a>
                                    <ul style="">
                                            <li><a data-key="13" data-val="幸运农场" href="/OtherGame/Index/13" class=""><span><i></i>幸运农场</span></a></li>
                                    </ul>
                                </div>
                    </div>
                </div>
            </div>
            <div class="ui-main clear" id="UIMain">
                <div class="ui-video dn" data-bind="css: {dn: !diplayLotteryLiveVideoStatus()}">
                    <video width="100%" height="466" controls="controls" preload="false">
                        <source src="https://zy11sbsbqt.lfjieweisi.com//Content/Video/movie.mp4" type="video/mp4" />
                    </video>
                </div>
                
<link href="/css_new/default/creditGames/css/liuhecai.css?05a0a7f362" rel="stylesheet" />
<link href="/css_new/mapping/yuducaipiao/creditGames/css/liuhecai.css?0b29996696" rel="stylesheet" />


<div class="" style="position:relative;height:100%;">
    <div class="ball_info clear">
        <ul data-bind="foreach:navList">
            <li data-bind="css:$parent.currentNavId()===id?'curr':''"><a href="javascript:;" data-bind="text:name,click:$parent.navClick&&$parent.navClick.bind($data,$index())"></a></li>
             <li data-bind="visible:$parent.navList().length==($index()+1)">
                <a href="javascript:;">
                </a>
            </li>
        </ul>
        

    </div>
    <div class="con_box clear">
        <div class="content">
            <div class="main_txt shadow">
                <div class="sumBtn_wrap clear" style="overflow:visible;">
                    <div class="fleft">
                        <div class="buyBonus" id="SLIPPER" data-bind="visible:maxKickback()!==0">
                            <div class="BonusPercen"><label data-bind="text:utils.toFixed(kickback(),1)">&nbsp;</label>%</div>
                            <a href="javascript:;" class="minus" data-bind="click:plus"></a>
                            <div class="ranger">
                                <div class="ui-widget">
                                    <span class="ui-handle" style="left: 0;"></span>
                                </div>
                            </div>
                            <a href="javascript:;" class="plus" data-bind="click:minus"></a>
                        </div>
                        <div class="buyBonus" data-bind="visible:maxKickback()===0">
                            <div class="BonusPercen"><label data-bind="text:utils.toFixed(kickback(),1)">&nbsp;</label>%</div>
                        </div>
                        <span id="jiangJin" style="float:left; display:inline-block; position:relative; z-index:1000; margin: 5px 10px 0 10px; width: 100px; height: 25px; line-height:25px;  text-align:center;font-size: 14px;background-color:#ccc; color:#444; border-radius:5px; cursor:pointer;">
                            奖金计算说明
                            
                            <div id="_jiangJinDiv" style="display:none; position:absolute;width: 576px; left:-288px; top: 40px; text-align:left; background-color:#000;z-index:1001;border: 2px solid #F6A513;color:#fff;padding:5px;border-radius:5px;"></div>
                        </span>
                    </div>
                </div>
                <div data-bind="component:scene"></div>
            </div>
        </div>
    </div>
</div>



<script type="text/html" id="tpl-tema">
    <div class="sumBtn_wrap sumBtn_wrap1">
        <input type="button" data-bind="click:checkMode.bind($data,0),css:checkMode()===0?'active':''" class="btn_red" value="一般">
        <input type="button" data-bind="click:checkMode.bind($data,1),css:checkMode()===1?'active':''" class="btn_red" value="快捷">
        <input type="button" class="btn_red btn_red_bg" data-bind="click:customSelectAmountEvent" value="快选金额" />
    </div>
    <form data-bind="submit:buildOrders,selectAmount:quickAmountArr" class="w900">
        <div class="main_txt bet-wrap" data-bind="css:['','fast-select'][$root.checkMode()]">
            <div class="txt_section1 clear_fix">
                <div class="s1_nav">
                    <ul class="clear" data-bind="foreach:[0,1,2,3,4]">
                        <li>
                            <div class="bd clear head-1">
                                <span class="border_001">号码</span>
                                <span class="border_002">赔率</span>
                                <span class="border_003">金额</span><i></i>
                            </div>
                        </li>
                    </ul>
                    <i class="nav_bg fl_nav_bg"></i>
                    <i class="nav_bg fr_nav_bg"></i>
                </div>
                <div class="s1_txt clear">
                    <ul id="Num49" data-bind="foreach:list1">
                        <li data-bind="click:$root.fastSelect">
                            <div class="bd clear head-1" data-bind="css:selected()?'selected-item':''">
                                <span data-bind='text:N,attr:{title:pname+":"+N},css:"ball ball_"+N'></span>
                                <span class="odds" data-bind="text:$root.displayOdds(odds),css:$root.setOddsCss(odds)"></span>
                                <span class="amount_pane">
                                    <label data-bind="visible:!$root.checkMode()"><input type="text" class="amount" data-bind="textinput:amount,enable:status,visible:N!==''" autocomplete="off" /></label>
                                </span>
                            </div>
                        </li>
                    </ul>
                    <ul>
                        <li class="btn_ok">
                            <div class="bd clear">
                                <span data-bind="visible:$root.checkMode()===0">
                                    <input type="submit" class="btn btn-green" value="" title="确定" />
                                    <input type="button" class="btn" data-bind="click:reset" value="" title="取消" />
                                    <input type="reset" style="display:none;" />
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="txt_section3 clear_fix">
                <ul data-bind="foreach:list2" class="s1_txt clear">
                    <li data-bind="click:$root.fastSelect">
                        <div class="bd clear head-1" data-bind="css:selected()?'selected-item':''">
                            <span data-bind='text:N,attr:{title:(N==""?"":pname+":"+N)},css:"ball_m "'></span>
                            <span class="odds" data-bind="text:$root.displayOdds(odds),css:$root.setOddsCss(odds)"></span>
                            <span class="amount_pane" data-bind="if:(!!N)">
                                <label data-bind="visible:!$root.checkMode()"><input type="text" class="amount" data-bind="textinput:amount,enable:status" autocomplete="off" /></label>
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="btn-wrap" data-bind="visible:checkMode()===1">
                <input type="text" data-bind="textinput:fastAmount" class="fast-amount" />
                <input type="submit" class="btn btn-green" value="" title="确定" />
                <input type="button" class="btn" data-bind="click:reset" value="" title="取消" />
            </div>
        </div>
    </form>
    <div class="rightbar">
        <div class="otergamebar"></div>
        <div class="shadow sidebox">
            <div class="title">
                <a href="javascript:;" data-bind="click:quickTpl.bind($data,'tpl-side-quickChecked'),css:quickTpl()==='tpl-side-quickChecked'?'active':''" class="CheckBets"></a><a href="javascript:;" data-bind="click:quickTpl.bind($data,'tpl-side-keybord'),css:quickTpl()==='tpl-side-keybord'?'active':''" class="QuickOrder"></a>
            </div>
            <div data-bind="template:quickTpl"></div>
        </div>
    </div>


</script>


<script type="text/html" id="tpl-sebo">
    <div class="sumBtn_wrap sumBtn_wrap1 rightM0">
        <input type="button" data-bind="click:checkMode.bind($data,0),css:checkMode()===0?'active':''" class="btn_red" value="一般">
        <input type="button" data-bind="click:checkMode.bind($data,1),css:checkMode()===1?'active':''" class="btn_red" value="快捷">
        <input type="button" class="btn_red btn_red_bg" data-bind="click:customSelectAmountEvent" value="快选金额" />
        
    </div>
    <form data-bind="submit:buildOrders,selectAmount:quickAmountArr">
        <div class="main_txt"  data-bind="css:['','fast-select'][$root.checkMode()]">
            <div style="position:relative;" class="s1_nav">
                <ul class="sb_txt clear_fix">
                    <li style="width:100%">
                        <div class="bd clear head-2">
                            <span class="ball_m">项目</span>
                            <span class="odds">赔率</span>
                            <span class="amount_pane">金额</span>
                            <span class="ball_box">号码</span>
                        </div>
                    </li>
                </ul>
                <i class="nav_bg fl_nav_bg"></i>
                <i class="nav_bg fr_nav_bg"></i>
            </div>
            <ul class="sb_txt clear_fix" data-bind="foreach:list1">
                <li data-bind="click:$root.fastSelect,css:selected()?'selected-item':''" class="head-2">
                    <span class="ball_m" data-bind='text:N'></span>
                    <span class="odds" data-bind="text:$root.displayOdds(odds),css:$root.setOddsCss(odds)"></span>
                    <span class="amount_pane"><input type="text" class="amount" data-bind="textinput:amount,enable:status,visible:$root.checkMode()===0" autocomplete="off" /></span>
                    <div class="ball_box" data-bind="foreach:balls">
                        <span class="ball" data-bind='text:$data,css:"ball_"+$data'></span>
                    </div>
                </li>
            </ul>
            <div class="btn-wrap">
                <input type="text" data-bind="textinput:fastAmount,visible:checkMode()===1" class="fast-amount" />
                <input type="submit" class="btn btn-green" value="" title="确认" />
                <input type="button" class="btn" data-bind="click:reset" value="" title="取消" />
            </div>
        </div>
    </form>
</script>



<script type="text/html" id="tpl-texiao">
    <div class="sumBtn_wrap  sumBtn_wrap1 rightM0">
        <input type="button" data-bind="click:checkMode.bind($data,0),css:checkMode()===0?'active':''" class="btn_red" value="一般">
        <input type="button" data-bind="click:checkMode.bind($data,1),css:checkMode()===1?'active':''" class="btn_red" value="快捷">
        <input type="button" class="btn_red btn_red_bg" data-bind="click:customSelectAmountEvent" value="快选金额" />        
    </div>
    <form data-bind="submit:buildOrders,selectAmount:quickAmountArr">
        <div class="main_txt" data-bind="css:['','fast-select'][$root.checkMode()]">
            <div class="main_txt tx_txt clear_fix">
                <div class="tx_txt1 s1_nav">
                    <ul class="clear" data-bind="foreach:[0,1]">
                        <li>
                            <div class="clear bd head-2">
                                <span class="ball_m">生肖</span>
                                <span class="odds">赔率</span>
                                <span class="amount_pane" data-bind="text:['金额',' '][$root.checkMode()]">&nbsp;</span>
                                <span class="ball_box">号码</span><i></i>
                            </div>
                        </li>
                    </ul>
                    <i class="nav_bg fl_nav_bg"></i>
                    <i class="nav_bg fr_nav_bg"></i>
                </div>
                <div class="tx_txt1">
                    <ul data-bind="foreach:list1" class="clear s1_txt">
                        <li data-bind="click:$root.fastSelect">
                            <div class="bd clear head-2" data-bind="css:selected()?'selected-item':''">
                                <span class="ball_m" data-bind="text:N,attr:{title:pname+':'+N}"></span>
                                <span class="odds" data-bind="text:$root.displayOdds(odds),css:$root.setOddsCss(odds)"></span>
                                <span class="amount_pane"><input type="text" class="amount" data-bind="textinput:amount,enable:status,visible:$root.checkMode()===0" autocomplete="off" /></span>
                                <div class="ball_box" data-bind='foreach:balls'>
                                    <span class="ball" data-bind='text:$data,css:"ball_"+$data'></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="btn-wrap">
                    <input type="text" data-bind="textinput:fastAmount,visible:checkMode()===1" class="fast-amount" />
                    <input type="submit" class="btn btn-green" value="" title="确认" />
                    <input type="reset" data-bind="click:reset" class="btn" value="" title="取消" />
                </div>
            </div>
        </div>
    </form>
</script>


<script type="text/html" id="tpl-zhengma">
    <div class="sumBtn_wrap sumBtn_wrap1">
        <input type="button" data-bind="click:checkMode.bind($data,0),css:checkMode()===0?'active':''" class="btn_red" value="一般">
        <input type="button" data-bind="click:checkMode.bind($data,1),css:checkMode()===1?'active':''" class="btn_red" value="快捷">
        <input type="button" class="btn_red btn_red_bg" data-bind="click:customSelectAmountEvent" value="快选金额" />        
    </div>
    <form data-bind="submit:buildOrders,selectAmount:quickAmountArr" class="w900">
        <div class="main_txt" data-bind="css:['','fast-select'][$root.checkMode()]">
            <div class="main_nav clear" data-bind="if:isZMT,visible:isZMT">
                <div data-bind="foreach:childNav">
                    <input type="button" data-bind="value:pname,click:$parent.childNavClick,css:$index()===0?'active':''" />
                </div>
            </div>
            <div class="txt_section1 clear_fix">
                <div class="s1_nav clear_fix">
                    <ul class="clear" data-bind="foreach:[0,1,2,3,4]">
                        <li>
                            <div class="clear bd head-1">
                                <span class="border_001">号码</span>
                                <span class="border_002">赔率</span>
                                <span class="border_003" data-bind="text:['金额',' '][$root.checkMode()]">金额</span><i></i>
                            </div>
                        </li>
                    </ul>
                    <i class="nav_bg fl_nav_bg"></i>
                    <i class="nav_bg fr_nav_bg"></i>
                </div>
                <div class="s1_txt clear">
                    <ul id="Num49" data-bind="foreach:list1">
                        <li data-bind="click:$root.fastSelect">
                            <div class="bd clear head-1" data-bind="css:selected()?'selected-item':''">
                                <span data-bind='text:N,attr:{title:pname+":"+N},css:"ball ball_"+N'></span>
                                <span class="odds" data-bind="text:$root.displayOdds(odds),css:$root.setOddsCss(odds)"></span>
                                <span class="amount_pane"><input type="text" class="amount" data-bind="textinput:amount,enable:status,visible:$root.checkMode()===0" autocomplete="off" /></span>
                            </div>
                        </li>
                    </ul>
                    <ul>
                        <li class="btn_ok">
                            <div class="bd clear">
                                <span data-bind="visible:checkMode()===0">
                                    <input type="submit" class="btn btn-green" value="" title="确定" />
                                    <input type="reset" data-bind="click:reset" class="btn" value="" title="清空" />
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="btn-wrap" data-bind="visible:checkMode()===1">
            <input type="text" data-bind="textinput:fastAmount,visible:checkMode()===1" class="fast-amount" />
            <input type="submit" class="btn btn-green" value="" title="确认" />
            <input type="reset" data-bind="click:reset" class="btn" value="" title="取消" />
        </div>
    </form>
    <div class="rightbar">
        <div class="otergamebar"></div>
        <div class="shadow sidebox">
            <div class="title">
                <a href="javascript:;" data-bind="click:quickTpl.bind($data,'tpl-side-quickChecked'),css:quickTpl()==='tpl-side-quickChecked'?'active':''" class="CheckBets">快速投注</a><a href="javascript:;" data-bind="click:quickTpl.bind($data,'tpl-side-keybord'),css:quickTpl()==='tpl-side-keybord'?'active':''" class="QuickOrder">键盘投注</a>
            </div>
            <div data-bind="template:quickTpl"></div>
        </div>
    </div>
</script>


<script type="text/html" id="tpl-zm1-6">
    <div class="sumBtn_wrap sumBtn_wrap1 rightM0">
        <input type="button" data-bind="click:checkMode.bind($data,0),css:checkMode()===0?'active':''" class="btn_red" value="一般">
        <input type="button" data-bind="click:checkMode.bind($data,1),css:checkMode()===1?'active':''" class="btn_red" value="快捷">
        <input type="button" class="btn_red btn_red_bg" data-bind="click:customSelectAmountEvent" value="快选金额" />        
    </div>
    <form data-bind="submit:buildOrders,selectAmount:quickAmountArr">
        <div class="main_txt zm16_txt" data-bind="css:['','fast-select'][$root.checkMode()]">
            <div class="txt_section3 clear_fix">
                <div class="zm16_nav">
                    <ul class="clear">
                        <li><span>正码一</span></li>
                        <li><span>正码二</span></li>
                        <li><span>正码三</span></li>
                        <li><span>正码四</span></li>
                        <li><span>正码五</span></li>
                        <li><span>正码六</span></li>
                    </ul>
                </div>
                <div class="s1_nav clear_fix">
                    <ul class="clear" data-bind="foreach:[0,1,2,3,4,5]">
                        <li>
                            <div class="clear bd head-1">
                                <span class="border_001">号码</span>
                                <span class="border_002">赔率</span>
                                <span class="border_003" data-bind="text:['金额',' '][$root.checkMode()]">金额</span><i></i>
                            </div>
                        </li>
                    </ul>
                    <i class="nav_bg fl_nav_bg"></i>
                    <i class="nav_bg fr_nav_bg"></i>
                </div>
                <ul data-bind="foreach:list1" class="s1_txt clear">
                    <li data-bind="click:$root.fastSelect">
                        <div class="bd clear head-1" data-bind="css:selected()?'selected-item':''">
                            <span data-bind='text:N,attr:{title:pname+":"+N},css:"ball_m ball_"+N'></span>
                            <span class="odds" data-bind="text:$root.displayOdds(odds),css:$root.setOddsCss(odds)"></span>
                            <span class="amount_pane"><input type="text" class="amount" data-bind="textinput:amount,enable:status,visible:$root.checkMode()===0" autocomplete="off" /></span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="btn-wrap">
                <input type="text" data-bind="textinput:fastAmount,visible:checkMode()===1" class="fast-amount" />
                <input type="submit" class="btn btn-green" value="" title="清空" />
                <input type="reset" data-bind="click:reset" class="btn" value="" title="取消">
            </div>
        </div>
    </form>
</script>


<script type="text/html" id="tpl-lianma">
    <div class="sumBtn_wrap sumBtn_wrap1 rightM0">
        <input type="button" class="btn_red btn_red_bg" data-bind="click:customSelectAmountEvent" value="快选金额" />        
    </div>
    <div class="main_nav clear">
        <input type="button" data-bind="click:changeMode.bind($data,1),css:currentMode()===1?'active':''" value="单选/复式">
        <input type="button" data-bind="click:changeMode.bind($data,2),css:currentMode()===2?'active':''" value="胆拖">
        <input type="button" data-bind="click:changeMode.bind($data,3),css:currentMode()===3?'active':''" value="生肖对碰">
        <input type="button" data-bind="click:changeMode.bind($data,4),css:currentMode()===4?'active':''" value="尾数对碰">
        <input type="button" data-bind="click:changeMode.bind($data,5),css:currentMode()===5?'active':''" value="混合对碰">
       
    </div>
    <form data-bind="submit:buildOrders,selectAmount:quickAmountArr">
        <div class="main_txt bz_txt">
            <div class="txt_section1 clear_fix" data-bind="if:/^1|2$/.test(currentMode())">
                <div class="s1_nav">
                    <ul class="clear" data-bind="foreach:[0,1,2,3,4]">
                        <li>
                            <div class="clear bd">
                                <span class="border_001">号码</span>
                                <span class="border_003">赔率</span>
                                <span class="border_002">勾选</span><i></i>
                            </div>
                        </li>
                    </ul>
                    <i class="nav_bg fl_nav_bg"></i>
                    <i class="nav_bg fr_nav_bg"></i>
                </div>
                <div class="s1_txt clear">
                    <ul data-bind="foreach:list1">
                        <li>
                            <label class="bd clear display-block" data-bind="attr:{'for':'ck-'+$index()}">
                                <span data-bind='text:N,attr:{title:pname+":"+N},css:"ball ball_"+N'></span>
                                <span style="padding:0;" class="amount_pane txt-red" data-bind="text:$parent.computedOdds(odds,$data.odds2),css:$root.setOddsCss(odds)"></span>
                                <span class="odds" data-bind=""><input type="checkbox" style="width:auto;margin-top:11px;" data-bind="value:$data,checked:$parent.storeChecked,enable:status,attr:{id:'ck-'+$index()}" /></span>
                            </label>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <div class="bd clear">
                                <span class="border_001"></span>
                                <span style="padding:0;" class="amount_pane txt-red "></span>
                                <span class="odds"></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            
            <div class="main_txt tx_txt clear_fix" data-bind="if:/^3|5$/.test(currentMode())">
                <div class="tx_txt1 s1_nav">
                    <ul data-bind="foreach:[0,1]">
                        <li>
                            <div class="clear bd">
                                <span class="ball_m">生肖</span>
                                <span class="odds">赔率</span>
                                <span class="amount_pane">勾选</span>
                                <span class="ball_box">号码</span><i></i>
                            </div>
                        </li>
                    </ul>
                    <i class="nav_bg fl_nav_bg"></i>
                    <i class="nav_bg fr_nav_bg"></i>
                </div>
                <div class="tx_txt1">
                    <ul data-bind="foreach:shengxiao" class="clear s1_txt">
                        <li>
                            <label class="bd clear display-block" data-bind="attr:{'for':'cka-'+$index()}">
                                <span class="ball_m" data-bind="text:name"></span>
                                <span class="odds" data-bind="text:$parent.getMinOdds(origin), css:$parent.setMinOddsCss(origin)"></span>
                                <span class="amount_pane"><input type="checkbox" data-bind="value:$data,checked:$parent.storeChecked,disable:status,attr:{id:'cka-'+$index()}" style="margin-top:6px" /></span>
                                <div class="ball_box" data-bind='foreach:balls'>
                                    <span data-bind='text:$data,css:"ball ball_"+$data'></span>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>

            
            <div class="main_txt tx_txt clear_fix" data-bind="if:/^4|5$/.test(currentMode())">
                <div class="tx_txt1 s1_nav">
                    <ul data-bind="foreach:[0,1]">
                        <li>
                            <div class="clear bd">
                                <span class="ball_m">尾数</span>
                                <span class="odds">赔率</span>
                                <span class="amount_pane">勾选</span>
                                <span class="ball_box">号码</span><i></i>
                            </div>
                        </li>
                    </ul>
                    <i class="nav_bg fl_nav_bg"></i>
                    <i class="nav_bg fr_nav_bg"></i>
                </div>
                <div class="tx_txt1">
                    <ul data-bind="foreach:weishu" class="clear s1_txt">
                        <li>
                            <label class="bd clear display-block" data-bind="attr:{'for':'ckb-'+$index()}">
                                <span class="ball_m" data-bind="text:name"></span>
                                <span class="odds" data-bind="text:$parent.getMinOdds(origin), css:$parent.setMinOddsCss(origin)"></span>
                                <span class="amount_pane"><input type="checkbox" data-bind="value:$data,checked:$parent.storeChecked,disable:status,attr:{id:'ckb-'+$index()}" style="margin-top:6px" /></span>
                                <div class="ball_box" data-bind='foreach:balls'>
                                    <span data-bind='text:$data,css:"ball ball_"+$data'></span>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="lm_bom clear_fix">
                <div style="width:50px;float:left;line-height:25px;">类别</div>
                <div class="bz_nav" data-bind="foreach:childNav">
                    <input type="button" data-bind="value:pname,click:$parent.tabClick,css:$index()===0?'txt-red':''" />
                </div>
                <div class="last">
                    <span>金额</span>
                    <input type="text" class="sum" data-bind="textinput:amount" autocomplete="off" />
                    <input type="submit" class="btn btn-green" value="" title="确定" />
                    <input type="button" data-bind="click:reset" class="btn" value="" title="取消" />
                </div>
            </div>
        </div>
    </form>
</script>


<script type="text/html" id="tpl-yixiao">
    <div class="sumBtn_wrap sumBtn_wrap1 rightM0">
        <input type="button" data-bind="click:checkMode.bind($data,0),css:checkMode()===0?'active':''" class="btn_red" value="一般">
        <input type="button" data-bind="click:checkMode.bind($data,1),css:checkMode()===1?'active':''" class="btn_red" value="快捷">
        <input type="button" class="btn_red btn_red_bg" data-bind="click:customSelectAmountEvent" value="快选金额" />        
    </div>
    <form data-bind="submit:buildOrders,selectAmount:quickAmountArr">
        <div class="main_txt" data-bind="css:['','fast-select'][$root.checkMode()]">
            <div class="main_txt tx_txt clear_fix">
                <div class="tx_txt1 s1_nav">
                    <ul class="clear" data-bind="foreach:[0,1]">
                        <li>
                            <div class="clear bd head-2">
                                <span class="ball_m" data-bind="text:$parent.list2().length>0?'生肖':'尾数'"></span>
                                <span class="odds">赔率</span>
                                <span class="amount_pane" data-bind="text:['金额',' '][$root.checkMode()]">金额</span>
                                <span class="ball_box">号码</span><i></i>
                            </div>
                        </li>
                    </ul>
                    <i class="nav_bg fl_nav_bg"></i>
                    <i class="nav_bg fr_nav_bg"></i>
                </div>
                <div class="tx_txt1 clear shadow">
                    <ul data-bind="foreach:list1" class="s1_txt clear">
                        <li data-bind="click:$root.fastSelect">
                            <div class="bd clear head-2" data-bind="css:selected()?'selected-item':''">
                                <span class="ball_m" data-bind="text:N,attr:{title:pname+':'+N}"></span>
                                <span class="odds" data-bind="text:$root.displayOdds(odds),css:$root.setOddsCss(odds)"></span>
                                <span class="amount_pane"><input type="text" class="amount" data-bind="textinput:amount,enable:status,visible:$root.checkMode()===0" autocomplete="off" /></span>
                                <div class="ball_box" data-bind='foreach:balls'>
                                    <span data-bind='text:$data,css:"ball ball_"+$data'></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ko if:list2().length>0 -->
            <div style="font-size:14px; font-weight:bold;" class="second-Nav">七色波</div>
            <div class="main_txt tx_txt clear_fix shadow">
                <div class="tx_txt1 s1_nav">
                    <ul class="clear">
                        <li class="">
                            <div class="bd clear head-2">
                                <span class="ball_m">名称</span>
                                <span class="odds">赔率</span>
                                <span class="amount_pane" data-bind="text:['金额',' '][checkMode()]">金额</span>
                                <span class="ball_box"></span><i></i>
                            </div>
                        </li>
                        <li class="">
                            <div class="bd clear head-2">
                                <span class="ball_m">名称</span>
                                <span class="odds">赔率</span>
                                <span class="amount_pane" data-bind="text:['金额',' '][checkMode()]">金额</span>
                                <span class="ball_box"></span>
                            </div>
                        </li>
                    </ul>
                    <i class="nav_bg fl_nav_bg"></i>
                    <i class="nav_bg fr_nav_bg"></i>
                </div>
                <div class="tx_txt1 clear">
                    <ul data-bind="foreach:list2" class="s1_txt clear">
                        <li data-bind="click:$root.fastSelect">
                            <div class="bd clear" data-bind="css:selected()?'selected-item':''">
                                <span class="ball_m" data-bind="text:N,attr:{title:pname+':'+N}"></span>
                                <span class="odds" data-bind="text:$root.displayOdds(odds),css:$root.setOddsCss(odds)"></span>
                                <span class="amount_pane"><input type="text" class="amount" data-bind="textinput:amount,enable:status,visible:$root.checkMode()===0" autocomplete="off" /></span>
                                <div class="ball_box"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /ko -->
            <div class="btn-wrap">
                <input type="text" data-bind="textinput:fastAmount,visible:checkMode()===1" class="fast-amount" />
                <input type="submit" class="btn btn-green" value="" title="确认" />
                <input type="reset" data-bind="click:reset" class="btn" value="" title="取消" />
            </div>
        </div>
    </form>
</script>


<script type="text/html" id="tpl-hexiao">
    <div class="sumBtn_wrap sumBtn_wrap1 rightM0">
        <input type="button" class="btn_red btn_red_bg" data-bind="click:customSelectAmountEvent" value="快选金额" />        
    </div>
    <form data-bind="submit:buildOrders,selectAmount:quickAmountArr">
        <div class="main_txt">
            <div class="main_txt hx_txt clear_fix">
                <div class="hx_nav clear_fix">
                    <div data-bind="foreach:buttons" style="float:left">
                        <span><input type="button" data-bind="value:name,click:$parent.quickCheck,css:$parent.isAllowQuickCheck()&&!$data.disable?'':'disabled'" /></span>
                    </div>
                    <div style="float:left;padding-left:2em;" class="main_nav" data-bind="if:isShowMode">
                        <input type="button" data-bind="click:currentMode.bind($data,1),css:currentMode()===1?'active':''" value="单选/复式" class="active">
                        <input type="button" data-bind="click:currentMode.bind($data,2),css:currentMode()===2?'active':''" value="胆拖">
                    </div>
                </div>
                <div class="tx_txt1 clear_fix s1_nav">
                    <ul class="clear">
                        <li>
                            <div class="clear bd">
                                <span class="ball_m">生肖</span>
                                <span class="ball_box">号码</span>
                                <span class="amount_pane">勾选</span><i></i>
                            </div>
                        </li>
                        <li>
                            <div class="clear bd">
                                <span class="ball_m">生肖</span>
                                <span class="ball_box">号码</span>
                                <span class="amount_pane">勾选</span>
                            </div>
                        </li>
                    </ul>
                    <i class="nav_bg fl_nav_bg"></i>
                    <i class="nav_bg fr_nav_bg"></i>
                </div>
                <div class="tx_txt1 clear_fix shadow">
                    <ul data-bind="foreach:shengxiao" class="s1_txt clear">
                        <li>
                            <label class="bd clear display-block" data-bind="attr:{'for':'ck-'+$index()}">
                                <span class="ball_m" data-bind="text:Name"></span>
                                <span class="ball_box" data-bind='foreach:balls'>
                                    <span data-bind='text:$data,css:"ball ball_"+$data'></span>
                                </span>
                                <span class="amount_pane" data-bind="css:klass"><input type="checkbox" style="width:auto;margin-top:5px;" data-bind="enable:status,value:$data,checked:$parent.checkedZodiac,attr:{id:'ck-'+$index()}" /></span>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="hx_txt3 clear_fix shadow">
                    <div class="combo_zodiac">
                        <ul data-bind="foreach:list1">
                            <li>
                                <div class="bd clear">
                                    <div class="cz_title" data-bind="text:N"></div>
                                    <!-- ko foreach:C -->
                                    <div class="cz_1" data-bind="css:'cz_'+($index()+1)">
                                        <div class="cz_3"><input type="radio" name="hexiao" data-bind="attr:{id:['a',$parentContext.$index(),$index()].join('')},checked:$parents[1].currentPlayItem,value:$data" /><label data-bind="text:name,attr:{'for':['a',$parentContext.$index(),$index()].join('')},enable:status"></label></div>
                                        <div class="cz_4" data-bind="text:$root.displayOdds(odds),css:$root.setOddsCss(odds)"></div>
                                    </div>
                                    <!-- /ko -->
                                </div>
                            </li>
                        </ul>
                        <div class="cz_settle">
                            <div class="czs_1">下注金额</div>
                            <div class="czs_2"><input type="text" data-bind="textinput:amount" autocomplete="off" /></div>
                            <div class="czs_3"><input type="submit" class="btn btn-green" value="" title="确定" /><input type="reset" class="btn" data-bind="click:reset" value="" title="取消" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</script>


<script type="text/html" id="tpl-zixuanbuzhong">
    <div class="sumBtn_wrap sumBtn_wrap1 rightM0">
        <input type="button" class="btn_red btn_red_bg" data-bind="click:customSelectAmountEvent" value="快选金额" />        
    </div>
    <form data-bind="submit:buildOrders,selectAmount:quickAmountArr">
        <div class="main_txt bz_txt">
            <div class="txt_section1 clear_fix">
                <div class="s1_nav">
                    <ul class="clear" data-bind="foreach:[0,1,2,3,4]">
                        <li>
                            <div class="clear bd">
                                <span class="border_001">号码</span>
                                <span class="border_003">赔率</span>
                                <span class="border_002">勾选</span><i></i>
                            </div>
                        </li>
                    </ul>
                    <i class="nav_bg fl_nav_bg"></i>
                    <i class="nav_bg fr_nav_bg"></i>
                </div>
                <div class="s1_txt clear">
                    <ul data-bind="foreach:list1">
                        <li>
                            <label class="bd clear display-block" data-bind="attr:{'for':'ck-'+$index()}">
                                <span data-bind='text:N,attr:{title:pname+":"+N},css:"ball ball_"+N'></span>
                                <span style="padding:0;" class="amount_pane txt-red" data-bind="text:$root.displayOdds(odds),css:$root.setOddsCss(odds)"></span>
                                <span class="odds" data-bind=""><input type="checkbox" style="width:auto;margin-top:11px;" data-bind="value:$data,checked:$parent.storeChecked,enable:status,attr:{id:'ck-'+$index()}" /></span>
                            </label>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <div class="bd">
                                <span class="ball" style="border-right:none;background:none;"></span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="lm_bom">
                    <div class="bz_nav" data-bind="foreach:childNav">
                        <input type="button" data-bind="value:pname,click:$parent.tabClick,css:$index()===0?'txt-red':''" />
                    </div>
                    <div class="last">
                        <span>金额</span>
                        <input type="text" class="txt_input sum" data-bind="textinput:amount" autocomplete="off" />
                        <input type="submit" class="btn btn-green" value="" title="确定" />
                        <input type="reset" class="btn" data-bind="click:reset" value="" title="取消" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</script>


<script type="text/html" id="tpl-lianxiao">
    <div class="sumBtn_wrap sumBtn_wrap1 rightM0">
        <input type="button" class="btn_red btn_red_bg" data-bind="click:customSelectAmountEvent" value="快选金额" />        
    </div>
    <div class="main_nav clear">
        <input type="button" data-bind="click:currentMode.bind($data,1),css:currentMode()===1?'active':''" value="单选/复式">
        <input type="button" data-bind="click:currentMode.bind($data,2),css:currentMode()===2?'active':''" value="胆拖">
    </div>
    <form data-bind="submit:buildOrders,selectAmount:quickAmountArr">
        <div class="main_txt">
            <div class="main_txt tx_txt clear_fix">
                <div class="tx_txt1 s1_nav">
                    <ul data-bind="foreach:[0,1]">
                        <li>
                            <div class="clear bd">
                                <span class="ball_m" data-bind="text:$parent.headerName">&nbsp;</span>
                                <span class="odds">赔率</span>
                                <span class="amount_pane">勾选</span>
                                <span class="ball_box">号码</span><i></i>
                            </div>
                        </li>
                    </ul>
                    <i class="nav_bg fl_nav_bg"></i>
                    <i class="nav_bg fr_nav_bg"></i>
                </div>
                <div class="tx_txt1">
                    <ul data-bind="foreach:list1" class="clear s1_txt">
                        <li>
                            <label class="bd clear display-block" data-bind="attr:{'for':'ck-'+$index()}">
                                <span class="ball_m" data-bind="text:N,attr:{title:pname+':'+N}"></span>
                                <span class="odds" data-bind="text:$root.displayOdds(odds),css:$root.setOddsCss(odds)"></span>
                                <span class="amount_pane"><input type="checkbox" data-bind="value:$data,checked:$parent.storeChecked,enable:status,attr:{id:'ck-'+$index()}" style="margin-top:6px" /></span>
                                <div class="ball_box" data-bind='foreach:balls'>
                                    <span data-bind='text:$data,css:"ball ball_"+$data'></span>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="lm_bom clear">
                    <div class="lx_nav" data-bind="foreach:childNav">
                        <input type="button" data-bind="value:N,click:$parent.tabClick,css:$index()===0?'active':''" />
                    </div>
                    <div class="last">
                        <span>金额</span> <input type="text" class="sum" data-bind="textinput:amount" autocomplete="off" />
                        <input type="submit" value="" title="确定" class="btn btn-green" />
                        <input type="reset" data-bind="click:reset" value="" title="取消" class="btn" />
                    </div>
                </div>
            </div>
        </div>
    </form>
</script>


<script type="text/html" id="tpl-longhudou">
    <div class="sumBtn_wrap sumBtn_wrap1 rightM0">
        <input type="button" data-bind="click:checkMode.bind($data,0),css:checkMode()===0?'active':''" class="btn_red" value="一般">
        <input type="button" data-bind="click:checkMode.bind($data,1),css:checkMode()===1?'active':''" class="btn_red" value="快捷">
        <input type="button" class="btn_red btn_red_bg" data-bind="click:customSelectAmountEvent" value="快选金额" />        
    </div>
    <form data-bind="submit:buildOrders,selectAmount:quickAmountArr">
        <div class="toradora toradora_bar toradora-six" data-bind="css:['','fast-select'][$root.checkMode()]">
            <ul class="clear_fix" data-bind="foreach:list1">
                <li data-bind="css:$parent.margin($index())">
                    <div class="t-head" data-bind="text:N"></div>
                    <div class="t-box" data-bind="foreach:C">
                        <div class="t-item" data-bind="click:$root.fastSelect,css:selected()?'selected-item':''">
                            <div class="t-name"><span data-bind='text:N,attr:{"class":$index()==0?"txt-red":"txt-blue"}'></span><span class="t-odds" data-bind="text:$root.displayOdds(odds),css:$root.setOddsCss(odds)">&nbsp;</span></div>
                            <div class="t-input"><input type="text" data-bind="textinput:amount,enable:status,visible:$root.checkMode()===0" autocomplete="off" /></div>
                        </div>
                    </div>
                </li>
            </ul>
            <i class="nav_bg fl_nav_bg"></i>
            <div class="toradora_btn">
                <input type="text" data-bind="textinput:fastAmount,visible:checkMode()===1" class="fast-amount" />
                <input type="submit" class="btn btn-green" data-bind="" value="" title="确认" />
                <input type="reset" data-bind="click:reset" class="btn" value="" title="取消" />
            </div>
            <i></i>
        </div>
    </form>
    <div class="waybill-box-1">
        <div class="clear waybill-tab " id="WAYBILL-NAV">
            <dl data-bind="foreach:waybillSub2">
                <dd><a href="javascript:;" data-bind="text:name,click:$parent.waybillChecked.bind($data,$index()),css:$parent.waybillSelect2()===$data.site?'active':''">&nbsp;</a></dd>
            </dl>
        </div>
        <div id="WAYBILL-BODY" class="waybill clear"></div>
    </div>
            
</script>


<script type="text/html" id="tpl-side-quickChecked">
    <form data-bind="submit:quickSub1,selectAmount:quickAmountArr">
        <div class="quick-bet">
            <div class="clear">
                <ul data-bind="foreach:_list1,click:quickCheck">
                    <li><input class="btn-1" type="button" data-bind="value:name,css:(status()?'btn-checked':'')+' ball-'+name" /></li>
                </ul>
            </div>
            <div class="clear">
                <ul data-bind="foreach:_list2,click:quickCheck">
                    <li><input class="btn-2" type="button" data-bind="value:name,css:status()?'btn-checked':''" /></li>
                </ul>
            </div>
            <div class="clear">
                <ul data-bind="foreach:_list3,click:quickCheck">
                    <li><input class="btn-3" type="button" data-bind="value:name,css:status()?'btn-checked':''" /></li>
                </ul>
            </div>
            <div class="clear">
                <ul data-bind="foreach:_list4,click:quickCheck">
                    <li><input class="btn-4" type="button" data-bind="value:name,css:color+(status()?'btn-checked ':'')" /></li>
                </ul>
            </div>
            <div class="sum"><span>金额:</span><input type="text" class="sum-txt" data-bind="textinput:quickAmount" autocomplete="off" /><input type="submit" class="sum-btn" value="" /></div>
            <div><textarea disabled="disabled" data-bind="value:quickCheckedNums"></textarea></div>
            <div class="slct-btn"><input type="reset" value="" class="btn Reset" data-bind="click:quickReset" /><input type="button" value="" class="btn SlctAll" data-bind="click:quickCheckAll" /></div>
        </div>
    </form>
</script>


<script type="text/html" id="tpl-side-keybord">
    <form data-bind="submit:quickSub2">
        <div class="quick-bet">
            <p>输入下单文字：</p>
            <div><textarea rows="10" class="quickTextarea" data-bind="textinput:quickTextarea"></textarea></div>
            <div class="slct-btn"><input type="submit" class="btn Sub" value="" /><input type="reset" class="btn Cancel" value=" " /></div>
            <p>格式：号码=金额，以空格分开每一笔<br />例如：【3=188 26=280】 代表特码3号188元 特码26号280元</p>
        </div>
    </form>
</script>


<script type="text/html" id="tpl-orderlist">
    <div class="betorder-box">
        <div class="bb-list">
            <table>
                <thead>
                    <tr>
                        <th>内容</th>
                        <th>赔率</th>
                        <th>下注金额</th>
                    </tr>
                </thead>
                <tbody data-bind="foreach:datalist">
                    <tr>
                        <td data-bind="text:[pname,N].join('：')"></td>
                        <td data-bind="text:odds"></td>
                        <td data-bind="text:amount"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="foot-total">共 <b class="redtext" data-bind="text:datalist.length">&nbsp;</b> 注，合计下注金额 <b data-bind="text:totalAmount" class="redtext">&nbsp;</b><label for="ck-odds-latest" style="float:right"><input type="checkbox" id="ck-odds-latest" data-bind="checked:force" /> 按最新赔率提交</label></div>
    </div>
</script>



<div style="display:none;">
    <div class="sumBtn_wrap sumBtn_wrap1">
        <div class="sumBtn_info">
            <span>娱乐场</span><input type="button" data-bind="" class="btn_red" value="切换">
            <span>当前限红：<label class="redtext">5</label>元  至  <label class="redtext">5000</label>元</span>
        </div>
        <input type="button" data-bind="click:checkMode.bind($data,0),css:checkMode()===0?'active':''" class="btn_red" value="一般">
        <input type="button" data-bind="click:checkMode.bind($data,1),css:checkMode()===1?'active':''" class="btn_red" value="快捷">
        <input type="button" class="btn_red btn_red_bg" data-bind="click:customSelectAmountEvent" value="快选金额" />
    </div>
    <form>
        <div class="main_txt bet-wrap">
            <div class="txt_section1 txt_section4 clear_fix">
                <div class="s1_nav">
                    <ul class="clear">
                        <li>
                            <div class="bd clear head-1">
                                <span class="border_001">号码</span>
                                <span class="border_002">赔率</span>
                                <span class="border_003">金额</span><i></i>
                            </div>
                        </li>
                        <li>
                            <div class="bd clear head-1">
                                <span class="border_001">号码</span>
                                <span class="border_002">赔率</span>
                                <span class="border_003">金额</span><i></i>
                            </div>
                        </li>
                        <li>
                            <div class="bd clear head-1">
                                <span class="border_001">号码</span>
                                <span class="border_002">赔率</span>
                                <span class="border_003">金额</span><i></i>
                            </div>
                        </li>
                        <li>
                            <div class="bd clear head-1">
                                <span class="border_001">号码</span>
                                <span class="border_002">赔率</span>
                                <span class="border_003">金额</span><i></i>
                            </div>
                        </li>
                    </ul>
                    <i class="nav_bg fl_nav_bg"></i>
                    <i class="nav_bg fr_nav_bg"></i>
                </div>
                <div class="s1_txt clear">
                    <ul>
                        <li>
                            <div class="bd clear head-1">
                                <span title="特码:1" class="ball ball_1">1</span>
                                <span class="odds">12.25</span>
                                <span class="amount_pane">
                                    <label><input type="text" class="amount" autocomplete="off" /></label>
                                </span>
                            </div>
                        </li>
                        <li>
                            <div class="bd clear head-1">
                                <span title="特码:1" class="ball ball_1">1</span>
                                <span class="odds">12.25</span>
                                <span class="amount_pane">
                                    <label><input type="text" class="amount" autocomplete="off" /></label>
                                </span>
                            </div>
                        </li>
                        <li>
                            <div class="bd clear head-1">
                                <span title="特码:1" class="ball ball_1">1</span>
                                <span class="odds">12.25</span>
                                <span class="amount_pane">
                                    <label><input type="text" class="amount" autocomplete="off" /></label>
                                </span>
                            </div>
                        </li>
                        <li>
                            <div class="bd clear head-1">
                                <span title="特码:1" class="ball ball_1">1</span>
                                <span class="odds">12.25</span>
                                <span class="amount_pane">
                                    <label><input type="text" class="amount" autocomplete="off" /></label>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="txt_section5">
                <div class="dist-table">
                    <span class="ball_m">特码包三</span>
                    <span class="odds">3.50</span>
                    <div class="dist-select">
                        <div class="gameSelect">
                            <span class="ball">12</span>
                            <select>
                                <option>1</option>
                            </select>
                        </div>
                        <div class="gameSelect">
                            <span class="ball">12</span>
                            <select>
                                <option>1</option>
                            </select>
                        </div>
                        <div class="gameSelect">
                            <span class="ball">12</span>
                            <select>
                                <option>1</option>
                            </select>
                        </div>
                        <span class="amount_pane"><input type="text" class="int-text" /></span>
                    </div>
                </div>
                <div class="btn_ok">
                    <div class="bd clear">
                        <span data-bind="visible:$root.checkMode()===0">
                            <input type="submit" class="btn btn-green" value="" title="确定" />
                            <input type="button" class="btn" data-bind="click:reset" value="" title="取消" />
                            <input type="reset" style="display:none;" />
                        </span>
                    </div>
                </div>
            </div>
            <div class="txt_section3 clear_fix">
                <div class="s1_nav">
                    <ul class="clear">
                        <li>
                            <div class="bd clear head-1">
                                <span class="border_001">号码</span>
                                <span class="border_002">赔率</span>
                                <span class="border_003">金额</span><i></i>
                            </div>
                        </li>
                        <li>
                            <div class="bd clear head-1">
                                <span class="border_001">号码</span>
                                <span class="border_002">赔率</span>
                                <span class="border_003">金额</span><i></i>
                            </div>
                        </li>
                        <li>
                            <div class="bd clear head-1">
                                <span class="border_001">号码</span>
                                <span class="border_002">赔率</span>
                                <span class="border_003">金额</span><i></i>
                            </div>
                        </li>
                        <li>
                            <div class="bd clear head-1">
                                <span class="border_001">号码</span>
                                <span class="border_002">赔率</span>
                                <span class="border_003">金额</span><i></i>
                            </div>
                        </li>
                    </ul>
                    <i class="nav_bg fl_nav_bg"></i>
                    <i class="nav_bg fr_nav_bg"></i>
                </div>

                <ul class="s1_txt clear">
                    <li>
                        <div class="bd clear head-1">
                            <span title="特合大小:合大" class="ball_m">合大</span>
                            <span class="odds">0</span>
                            <span class="amount_pane">
                                <label><input type="text" class="amount" autocomplete="off"></label>
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="btn-wrap" data-bind="visible:checkMode()===1">
                <input type="text" data-bind="textinput:fastAmount" class="fast-amount" />
                <input type="submit" class="btn btn-green" value="" title="确定" />
                <input type="button" class="btn" data-bind="click:reset" value="" title="取消" />
            </div>
        </div>
    </form>
</div>

<script>
    ///奖金系数
    (function () {
        var CoefficientList = [];
        $.ajax({
            url: '/OfficialAddOrders/GetOddsCoefficient?gameid=1',
            async: false,
            success: function (json) {
                if (json) {
                    CoefficientList = json;
                }
            }
        });
        var _jiangJin = $("#jiangJin");
        var _jiangJinDiv = $("#_jiangJinDiv");
        var str=""
        if (CoefficientList.length > 0) {
            _jiangJin.css("display", "");
            //str = "<div style='width: 7em;float:left;'> 奖金系数说明：</div><p style='margin-left:7rem;'>";
            ////CoefficientList.forEach(function (item, index) {
            ////    if (index > 0) {
            ////        str += ("," + item.Ball + "系数:" + Number((item.Coefficient / 100).toFixed(4)));
            ////    } else {
            ////        str += (item.Ball + "系数:" + Number((item.Coefficient / 100).toFixed(4)));
            ////    }
            ////});
            //for (var i = 0; i < CoefficientList.length; i++) {
            //    if (i > 0) {
            //        str += ("," + CoefficientList[i].Ball + "系数:" + Number((CoefficientList[i].Coefficient / 100).toFixed(4)));
            //    } else {
            //        str += (CoefficientList[i].Ball + "系数:" + Number((CoefficientList[i].Coefficient / 100).toFixed(4)));
            //    }
            //};
            str += '<div style="width: 7em; "> 奖金计算说明：</div><p style="margin-left:1em;">非常规时时彩中奖后，根据中奖号码球号的奖金组，中奖奖金需要乘以球号的奖金组，如：</p><p style="margin-left:1em;line-height: 25px;padding:3px 0;">1、北京时时彩后三直选（1960奖金组）：下注321，开奖号码54321，其中3号球的奖金组为：1.014，2号球的奖金组为：0.984，1号球的奖金组为1.022；那么中奖后的实际奖金=1960*1.014*0.984*1.022=1998.665</p><p style="margin-left:1em;line-height: 25px;padding:3px 0;">2、若北京时时彩后三直选（1960奖金组）：下注246，开奖号码54246，其中2号球的奖金组为：0.984，4号球的奖金组为：0.976，6号球的奖金组为0.98；那么中奖后的实际奖金=1960*0.984*0.976*0.98=1844.706</P>';
            _jiangJinDiv.html(str);
        } else {
            _jiangJin.css("display", "none");
        };

        _jiangJin.hover(function () {
            _jiangJinDiv.css("display", "");
        }, function () {
            _jiangJinDiv.css("display", "none");
        })
    })();
</script>
                
                <div id="stopSellingPop" class="stop_selling" style="display:none">
                    <div class="stop_selling_title"></div>
                </div>
            </div>
        </div>
    </div>

        <div class="ui-ww-box ui-ww-box1" style="position:absolute;right:0;top:80px">
            

        </div>
            <div class="side_news">
        <div class="sn_in">
            <div class="sn_h black_bg">即时资讯</div>
            <div class="sn_c" id="vScrollTxt">

            </div>
        </div>
    </div>
        <script type="text/html" id="tpl-diysum">
        <div class="diy-slct-sum" style="top:115px;">
            <div class="dss-warn">注意：设置只保存在您的电脑，清空浏览器缓存或更换电脑会显示默认值。</div>
            <div class="dss-content clear">
                <ul data-bind="foreach:list">
                    <li>
                        <i data-bind="click:$root.remove">删除</i>
                        <i data-bind="visible:$index()+1!==5&&$index()+1===$parent.list().length,click:$root.add" class="red_btn">增加</i>
                        <input type="text" data-bind="textInput:val" />
                    </li>
                </ul>
            </div>
            <div class="dss-tip" data-bind="text:tip"></div>
            <div class="dss-btn">
                <a href="javascript:;" data-bind="click:changeStatus,text:status()?'禁用':'启用'"></a>
                <a href="javascript:;" class="btn btn-mini" data-bind="click:save">保存</a>
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
                    <input type="text" name="code" tag="input" class="input_tip input_tip_45" id="LOGIN-3" placeholder="请输入验证码" maxlength="4" />
                    <label class="label_tip" for="LOGIN-3">请输入验证码</label>
                    <img style="background-color:white;" tabindex="" src="/Home/ValidateCode?20180131090515" alt="点击切换验证码" title="点击切换验证码" />
                </div>
                
            </div>
        </form>
    </script>
    <script type="text/javascript">
        var SignalrSite = "https://zycccppp.websocketcdn.com:8819/signalr";
        var GameCode='LHC';
        var PAGE_OPEN_TIME = new Date() - 0;
        //最新期数
        var LatestPriodData = '{"fpreviousperiod":"2018009","fpreviousresult":"40,4,7,11,49,12,25","fid":"3377","fnumberofperiod":"2018010","fstarttime":"2018/01/30 23:20:00","flottostarttime":"2018/02/01 21:35:00","fspecialcodeclosetime":"2018/02/01 21:24:50","fstatus":"1","fcodeclosetime":"2018/02/01 21:24:50","fcodestatus":"true","fevencodeclosetime":"2018/02/01 21:24:50","fevencodestatus":"true","fbothsidecodeclosetime":"2018/02/01 21:24:50","fbothsidecodestatus":"true","fsettlefid":"3365","fsettlenumber":"2018009","fsettletime":"2018/01/30 21:44:55","ServerTime":"2018/01/31 09:05:15","fisstopseles":"False"}';
        //历史开奖结果
        var ResultList = '{"total":6,"list":[{"period":2018009,"date":"2018-01-30T21:44:50.349","result":"40,4,7,11,49,12,25"},{"period":2018008,"date":"2018-01-27T21:41:43.022","result":"45,26,17,43,33,8,40"},{"period":2018007,"date":"2018-01-25T21:40:19.22","result":"47,14,40,3,36,23,20"},{"period":2018006,"date":"2018-01-23T21:41:49.61+08:00","result":"41,27,32,37,20,3,44"},{"period":2018005,"date":"2018-01-20T21:49:15.597+08:00","result":"5,23,27,24,2,34,8"},{"period":2018004,"date":"2018-01-16T21:43:54.31+08:00","result":"27,37,2,36,21,30,4"}]}';
        //玩法、玩法项树状结构树
        var navListJson = '[{"Id":1,"N":"特码","PIs":[457,462,461,464,463,466,469,468,465,470,460,876,877,632,633],"C":[{"Sord":0,"Id":457,"P":430,"N":"特码","C":[{"I":1343,"N":"1","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1344,"N":"2","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1345,"N":"3","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1346,"N":"4","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1347,"N":"5","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1348,"N":"6","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1349,"N":"7","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1350,"N":"8","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1351,"N":"9","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1352,"N":"10","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1353,"N":"11","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1354,"N":"12","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1355,"N":"13","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1356,"N":"14","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1357,"N":"15","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1358,"N":"16","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1359,"N":"17","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1360,"N":"18","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1361,"N":"19","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1362,"N":"20","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1363,"N":"21","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1364,"N":"22","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1365,"N":"23","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1366,"N":"24","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1367,"N":"25","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1368,"N":"26","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1369,"N":"27","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1370,"N":"28","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1371,"N":"29","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1372,"N":"30","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1373,"N":"31","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1374,"N":"32","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1375,"N":"33","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1376,"N":"34","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1377,"N":"35","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1378,"N":"36","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1379,"N":"37","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1380,"N":"38","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1381,"N":"39","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1382,"N":"40","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1383,"N":"41","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1384,"N":"42","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1385,"N":"43","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1386,"N":"44","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1387,"N":"45","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1388,"N":"46","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1389,"N":"47","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1390,"N":"48","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true},{"I":1391,"N":"49","MB":"0","MxO":"48.51","MiO":"48.51","SI":457,"St":true}]},{"Sord":0,"Id":460,"P":433,"N":"特色波","C":[{"I":1453,"N":"红波","MB":"0","MxO":"2.8535","MiO":"2.8535","SI":460,"St":true},{"I":1454,"N":"蓝波","MB":"0","MxO":"3.0319","MiO":"3.0319","SI":460,"St":true},{"I":1455,"N":"绿波","MB":"0","MxO":"3.0319","MiO":"3.0319","SI":460,"St":true}]},{"Sord":0,"Id":461,"P":434,"N":"特大小","C":[{"I":1456,"N":"特大","MB":"0","MxO":"1.98","MiO":"1.98","SI":461,"St":true},{"I":1457,"N":"特小","MB":"0","MxO":"1.98","MiO":"1.98","SI":461,"St":true}]},{"Sord":0,"Id":462,"P":435,"N":"特单双","C":[{"I":1458,"N":"特单","MB":"0","MxO":"1.98","MiO":"1.98","SI":462,"St":true},{"I":1459,"N":"特双","MB":"0","MxO":"1.98","MiO":"1.98","SI":462,"St":true}]},{"Sord":0,"Id":463,"P":436,"N":"特合大小","C":[{"I":1460,"N":"合大","MB":"0","MxO":"1.98","MiO":"1.98","SI":463,"St":true},{"I":1461,"N":"合小","MB":"0","MxO":"1.98","MiO":"1.98","SI":463,"St":true}]},{"Sord":0,"Id":464,"P":437,"N":"特合单双","C":[{"I":1462,"N":"合单","MB":"0","MxO":"1.98","MiO":"1.98","SI":464,"St":true},{"I":1463,"N":"合双","MB":"0","MxO":"1.98","MiO":"1.98","SI":464,"St":true}]},{"Sord":0,"Id":465,"P":438,"N":"特大小尾","C":[{"I":1464,"N":"尾大","MB":"0","MxO":"1.98","MiO":"1.98","SI":465,"St":true},{"I":1465,"N":"尾小","MB":"0","MxO":"1.98","MiO":"1.98","SI":465,"St":true}]},{"Sord":0,"Id":466,"P":439,"N":"家禽野兽","C":[{"I":1466,"N":"家禽","MB":"0","MxO":"1.98","MiO":"1.98","SI":466,"St":true},{"I":1467,"N":"野兽","MB":"0","MxO":"1.98","MiO":"1.98","SI":466,"St":true}]},{"Sord":0,"Id":468,"P":441,"N":"总和大小","C":[{"I":1468,"N":"总大","MB":"0","MxO":"1.9743","MiO":"1.9743","SI":468,"St":true},{"I":1469,"N":"总小","MB":"0","MxO":"1.9857","MiO":"1.9857","SI":468,"St":true}]},{"Sord":0,"Id":469,"P":442,"N":"总和单双","C":[{"I":1470,"N":"总单","MB":"0","MxO":"1.9743","MiO":"1.9743","SI":469,"St":true},{"I":1471,"N":"总双","MB":"0","MxO":"1.9857","MiO":"1.9857","SI":469,"St":true}]},{"Sord":0,"Id":470,"P":443,"N":"特合尾大小","C":[{"I":1472,"N":"合尾大","MB":"0","MxO":"1.98","MiO":"1.98","SI":470,"St":true},{"I":1473,"N":"合尾小","MB":"0","MxO":"1.98","MiO":"1.98","SI":470,"St":true}]},{"Sord":0,"Id":632,"P":625,"N":"上下","C":[{"I":2621,"N":"上","MB":"0","MxO":"2.9722","MiO":"2.9722","SI":632,"St":true},{"I":2622,"N":"下","MB":"0","MxO":"2.9722","MiO":"2.9722","SI":632,"St":true},{"I":2627,"N":"和","MB":"0","MxO":"2.9656","MiO":"2.9656","SI":632,"St":true}]},{"Sord":0,"Id":633,"P":635,"N":"奇偶","C":[{"I":2623,"N":"奇","MB":"0","MxO":"2.9722","MiO":"2.9722","SI":633,"St":true},{"I":2624,"N":"偶","MB":"0","MxO":"2.9722","MiO":"2.9722","SI":633,"St":true},{"I":2628,"N":"和","MB":"0","MxO":"2.9656","MiO":"2.9656","SI":633,"St":true}]},{"Sord":0,"Id":876,"P":874,"N":"特大单双","C":[{"I":2629,"N":"大单","MB":"0","MxO":"3.96","MiO":"3.96","SI":876,"St":true},{"I":2630,"N":"大双","MB":"0","MxO":"3.96","MiO":"3.96","SI":876,"St":true}]},{"Sord":0,"Id":877,"P":875,"N":"特小单双","C":[{"I":2631,"N":"小单","MB":"0","MxO":"3.96","MiO":"3.96","SI":877,"St":true},{"I":2632,"N":"小双","MB":"0","MxO":"3.96","MiO":"3.96","SI":877,"St":true}]}]},{"Id":3,"N":"色波","PIs":[459],"C":[{"Sord":0,"Id":459,"P":432,"N":"特半波","C":[{"I":1441,"N":"红单","MB":"0","MxO":"5.94","MiO":"5.94","SI":459,"St":true},{"I":1442,"N":"红双","MB":"0","MxO":"5.28","MiO":"5.28","SI":459,"St":true},{"I":1443,"N":"红大","MB":"0","MxO":"6.7886","MiO":"6.7886","SI":459,"St":true},{"I":1444,"N":"红小","MB":"0","MxO":"4.752","MiO":"4.752","SI":459,"St":true},{"I":1445,"N":"蓝单","MB":"0","MxO":"5.94","MiO":"5.94","SI":459,"St":true},{"I":1446,"N":"蓝双","MB":"0","MxO":"5.94","MiO":"5.94","SI":459,"St":true},{"I":1447,"N":"蓝大","MB":"0","MxO":"5.28","MiO":"5.28","SI":459,"St":true},{"I":1448,"N":"蓝小","MB":"0","MxO":"6.7886","MiO":"6.7886","SI":459,"St":true},{"I":1449,"N":"绿单","MB":"0","MxO":"5.94","MiO":"5.94","SI":459,"St":true},{"I":1450,"N":"绿双","MB":"0","MxO":"6.7886","MiO":"6.7886","SI":459,"St":true},{"I":1451,"N":"绿大","MB":"0","MxO":"5.94","MiO":"5.94","SI":459,"St":true},{"I":1452,"N":"绿小","MB":"0","MxO":"6.7886","MiO":"6.7886","SI":459,"St":true}]}]},{"Id":4,"N":"特肖","PIs":[467],"C":[{"Sord":0,"Id":467,"P":440,"N":"特肖","C":[{"I":1921,"N":"鼠","MB":"0","MxO":"12.1275","MiO":"12.1275","SI":467,"St":true},{"I":1922,"N":"牛","MB":"0","MxO":"12.1275","MiO":"12.1275","SI":467,"St":true},{"I":1923,"N":"虎","MB":"0","MxO":"12.1275","MiO":"12.1275","SI":467,"St":true},{"I":1924,"N":"兔","MB":"0","MxO":"12.1275","MiO":"12.1275","SI":467,"St":true},{"I":1925,"N":"龙","MB":"0","MxO":"12.1275","MiO":"12.1275","SI":467,"St":true},{"I":1926,"N":"蛇","MB":"0","MxO":"12.1275","MiO":"12.1275","SI":467,"St":true},{"I":1927,"N":"马","MB":"0","MxO":"12.1275","MiO":"12.1275","SI":467,"St":true},{"I":1928,"N":"羊","MB":"0","MxO":"12.1275","MiO":"12.1275","SI":467,"St":true},{"I":1929,"N":"猴","MB":"0","MxO":"12.1275","MiO":"12.1275","SI":467,"St":true},{"I":1930,"N":"鸡","MB":"0","MxO":"9.702","MiO":"9.702","SI":467,"St":true},{"I":1931,"N":"狗","MB":"0","MxO":"12.1275","MiO":"12.1275","SI":467,"St":true},{"I":1932,"N":"猪","MB":"0","MxO":"12.1275","MiO":"12.1275","SI":467,"St":true}]}]},{"Id":5,"N":"正码","PIs":[472],"C":[{"Sord":0,"Id":472,"P":445,"N":"正码","C":[{"I":1496,"N":"1","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1497,"N":"2","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1498,"N":"3","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1499,"N":"4","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1500,"N":"5","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1501,"N":"6","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1502,"N":"7","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1503,"N":"8","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1504,"N":"9","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1505,"N":"10","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1506,"N":"11","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1507,"N":"12","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1508,"N":"13","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1509,"N":"14","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1510,"N":"15","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1511,"N":"16","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1512,"N":"17","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1513,"N":"18","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1514,"N":"19","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1515,"N":"20","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1516,"N":"21","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1517,"N":"22","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1518,"N":"23","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1519,"N":"24","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1520,"N":"25","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1521,"N":"26","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1522,"N":"27","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1523,"N":"28","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1524,"N":"29","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1525,"N":"30","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1526,"N":"31","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1527,"N":"32","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1528,"N":"33","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1529,"N":"34","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1530,"N":"35","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1531,"N":"36","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1532,"N":"37","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1533,"N":"38","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1534,"N":"39","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1535,"N":"40","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1536,"N":"41","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1537,"N":"42","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1538,"N":"43","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1539,"N":"44","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1540,"N":"45","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1541,"N":"46","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1542,"N":"47","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1543,"N":"48","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true},{"I":1544,"N":"49","MB":"0","MxO":"8.085","MiO":"8.085","SI":472,"St":true}]}]},{"Id":6,"N":"正特","PIs":[473,474,475,476,477,478],"C":[{"Sord":0,"Id":473,"P":446,"N":"正码特一","C":[{"I":1545,"N":"1","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1546,"N":"2","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1547,"N":"3","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1548,"N":"4","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1549,"N":"5","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1550,"N":"6","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1551,"N":"7","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1552,"N":"8","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1553,"N":"9","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1554,"N":"10","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1555,"N":"11","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1556,"N":"12","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1557,"N":"13","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1558,"N":"14","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1559,"N":"15","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1560,"N":"16","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1561,"N":"17","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1562,"N":"18","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1563,"N":"19","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1564,"N":"20","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1565,"N":"21","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1566,"N":"22","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1567,"N":"23","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1568,"N":"24","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1569,"N":"25","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1570,"N":"26","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1571,"N":"27","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1572,"N":"28","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1573,"N":"29","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1574,"N":"30","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1575,"N":"31","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1576,"N":"32","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1577,"N":"33","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1578,"N":"34","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1579,"N":"35","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1580,"N":"36","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1581,"N":"37","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1582,"N":"38","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1583,"N":"39","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1584,"N":"40","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1585,"N":"41","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1586,"N":"42","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1587,"N":"43","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1588,"N":"44","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1589,"N":"45","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1590,"N":"46","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1591,"N":"47","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1592,"N":"48","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true},{"I":1593,"N":"49","MB":"0","MxO":"48.51","MiO":"48.51","SI":473,"St":true}]},{"Sord":0,"Id":474,"P":885,"N":"正码特二","C":[{"I":1594,"N":"1","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1595,"N":"2","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1596,"N":"3","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1597,"N":"4","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1598,"N":"5","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1599,"N":"6","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1600,"N":"7","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1601,"N":"8","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1602,"N":"9","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1603,"N":"10","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1604,"N":"11","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1605,"N":"12","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1606,"N":"13","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1607,"N":"14","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1608,"N":"15","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1609,"N":"16","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1610,"N":"17","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1611,"N":"18","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1612,"N":"19","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1613,"N":"20","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1614,"N":"21","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1615,"N":"22","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1616,"N":"23","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1617,"N":"24","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1618,"N":"25","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1619,"N":"26","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1620,"N":"27","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1621,"N":"28","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1622,"N":"29","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1623,"N":"30","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1624,"N":"31","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1625,"N":"32","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1626,"N":"33","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1627,"N":"34","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1628,"N":"35","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1629,"N":"36","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1630,"N":"37","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1631,"N":"38","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1632,"N":"39","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1633,"N":"40","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1634,"N":"41","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1635,"N":"42","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1636,"N":"43","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1637,"N":"44","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1638,"N":"45","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1639,"N":"46","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1640,"N":"47","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1641,"N":"48","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true},{"I":1642,"N":"49","MB":"0","MxO":"48.51","MiO":"48.51","SI":474,"St":true}]},{"Sord":0,"Id":475,"P":886,"N":"正码特三","C":[{"I":1643,"N":"1","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1644,"N":"2","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1645,"N":"3","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1646,"N":"4","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1647,"N":"5","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1648,"N":"6","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1649,"N":"7","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1650,"N":"8","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1651,"N":"9","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1652,"N":"10","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1653,"N":"11","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1654,"N":"12","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1655,"N":"13","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1656,"N":"14","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1657,"N":"15","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1658,"N":"16","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1659,"N":"17","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1660,"N":"18","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1661,"N":"19","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1662,"N":"20","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1663,"N":"21","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1664,"N":"22","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1665,"N":"23","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1666,"N":"24","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1667,"N":"25","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1668,"N":"26","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1669,"N":"27","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1670,"N":"28","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1671,"N":"29","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1672,"N":"30","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1673,"N":"31","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1674,"N":"32","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1675,"N":"33","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1676,"N":"34","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1677,"N":"35","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1678,"N":"36","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1679,"N":"37","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1680,"N":"38","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1681,"N":"39","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1682,"N":"40","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1683,"N":"41","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1684,"N":"42","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1685,"N":"43","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1686,"N":"44","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1687,"N":"45","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1688,"N":"46","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1689,"N":"47","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1690,"N":"48","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true},{"I":1691,"N":"49","MB":"0","MxO":"48.51","MiO":"48.51","SI":475,"St":true}]},{"Sord":0,"Id":476,"P":887,"N":"正码特四","C":[{"I":1692,"N":"1","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1693,"N":"2","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1694,"N":"3","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1695,"N":"4","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1696,"N":"5","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1697,"N":"6","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1698,"N":"7","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1699,"N":"8","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1700,"N":"9","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1701,"N":"10","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1702,"N":"11","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1703,"N":"12","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1704,"N":"13","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1705,"N":"14","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1706,"N":"15","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1707,"N":"16","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1708,"N":"17","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1709,"N":"18","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1710,"N":"19","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1711,"N":"20","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1712,"N":"21","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1713,"N":"22","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1714,"N":"23","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1715,"N":"24","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1716,"N":"25","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1717,"N":"26","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1718,"N":"27","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1719,"N":"28","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1720,"N":"29","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1721,"N":"30","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1722,"N":"31","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1723,"N":"32","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1724,"N":"33","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1725,"N":"34","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1726,"N":"35","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1727,"N":"36","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1728,"N":"37","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1729,"N":"38","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1730,"N":"39","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1731,"N":"40","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1732,"N":"41","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1733,"N":"42","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1734,"N":"43","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1735,"N":"44","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1736,"N":"45","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1737,"N":"46","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1738,"N":"47","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1739,"N":"48","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true},{"I":1740,"N":"49","MB":"0","MxO":"48.51","MiO":"48.51","SI":476,"St":true}]},{"Sord":0,"Id":477,"P":888,"N":"正码特五","C":[{"I":1741,"N":"1","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1742,"N":"2","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1743,"N":"3","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1744,"N":"4","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1745,"N":"5","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1746,"N":"6","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1747,"N":"7","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1748,"N":"8","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1749,"N":"9","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1750,"N":"10","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1751,"N":"11","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1752,"N":"12","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1753,"N":"13","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1754,"N":"14","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1755,"N":"15","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1756,"N":"16","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1757,"N":"17","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1758,"N":"18","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1759,"N":"19","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1760,"N":"20","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1761,"N":"21","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1762,"N":"22","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1763,"N":"23","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1764,"N":"24","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1765,"N":"25","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1766,"N":"26","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1767,"N":"27","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1768,"N":"28","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1769,"N":"29","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1770,"N":"30","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1771,"N":"31","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1772,"N":"32","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1773,"N":"33","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1774,"N":"34","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1775,"N":"35","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1776,"N":"36","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1777,"N":"37","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1778,"N":"38","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1779,"N":"39","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1780,"N":"40","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1781,"N":"41","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1782,"N":"42","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1783,"N":"43","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1784,"N":"44","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1785,"N":"45","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1786,"N":"46","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1787,"N":"47","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1788,"N":"48","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true},{"I":1789,"N":"49","MB":"0","MxO":"48.51","MiO":"48.51","SI":477,"St":true}]},{"Sord":0,"Id":478,"P":889,"N":"正码特六","C":[{"I":1790,"N":"1","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1791,"N":"2","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1792,"N":"3","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1793,"N":"4","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1794,"N":"5","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1795,"N":"6","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1796,"N":"7","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1797,"N":"8","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1798,"N":"9","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1799,"N":"10","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1800,"N":"11","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1801,"N":"12","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1802,"N":"13","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1803,"N":"14","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1804,"N":"15","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1805,"N":"16","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1806,"N":"17","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1807,"N":"18","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1808,"N":"19","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1809,"N":"20","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1810,"N":"21","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1811,"N":"22","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1812,"N":"23","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1813,"N":"24","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1814,"N":"25","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1815,"N":"26","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1816,"N":"27","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1817,"N":"28","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1818,"N":"29","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1819,"N":"30","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1820,"N":"31","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1821,"N":"32","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1822,"N":"33","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1823,"N":"34","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1824,"N":"35","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1825,"N":"36","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1826,"N":"37","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1827,"N":"38","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1828,"N":"39","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1829,"N":"40","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1830,"N":"41","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1831,"N":"42","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1832,"N":"43","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1833,"N":"44","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1834,"N":"45","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1835,"N":"46","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1836,"N":"47","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1837,"N":"48","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true},{"I":1838,"N":"49","MB":"0","MxO":"48.51","MiO":"48.51","SI":478,"St":true}]}]},{"Id":7,"N":"正码1-6","PIs":[479,485,491,497,480,486,492,498,481,487,493,499,482,488,494,500,483,489,495,501,484,490,496,502],"C":[{"Sord":0,"Id":479,"P":447,"N":"正码1大小","C":[{"I":1851,"N":"大","MB":"0","MxO":"1.98","MiO":"1.98","SI":479,"St":true},{"I":1852,"N":"小","MB":"0","MxO":"1.98","MiO":"1.98","SI":479,"St":true}]},{"Sord":0,"Id":480,"P":447,"N":"正码2大小","C":[{"I":1853,"N":"大","MB":"0","MxO":"1.98","MiO":"1.98","SI":480,"St":true},{"I":1854,"N":"小","MB":"0","MxO":"1.98","MiO":"1.98","SI":480,"St":true}]},{"Sord":0,"Id":481,"P":447,"N":"正码3大小","C":[{"I":1855,"N":"大","MB":"0","MxO":"1.98","MiO":"1.98","SI":481,"St":true},{"I":1856,"N":"小","MB":"0","MxO":"1.98","MiO":"1.98","SI":481,"St":true}]},{"Sord":0,"Id":482,"P":447,"N":"正码4大小","C":[{"I":1857,"N":"大","MB":"0","MxO":"1.98","MiO":"1.98","SI":482,"St":true},{"I":1858,"N":"小","MB":"0","MxO":"1.98","MiO":"1.98","SI":482,"St":true}]},{"Sord":0,"Id":483,"P":447,"N":"正码5大小","C":[{"I":1859,"N":"大","MB":"0","MxO":"1.98","MiO":"1.98","SI":483,"St":true},{"I":1860,"N":"小","MB":"0","MxO":"1.98","MiO":"1.98","SI":483,"St":true}]},{"Sord":0,"Id":484,"P":447,"N":"正码6大小","C":[{"I":1861,"N":"大","MB":"0","MxO":"1.98","MiO":"1.98","SI":484,"St":true},{"I":1862,"N":"小","MB":"0","MxO":"1.98","MiO":"1.98","SI":484,"St":true}]},{"Sord":0,"Id":485,"P":448,"N":"正码1单双","C":[{"I":1839,"N":"单","MB":"0","MxO":"1.98","MiO":"1.98","SI":485,"St":true},{"I":1840,"N":"双","MB":"0","MxO":"1.98","MiO":"1.98","SI":485,"St":true}]},{"Sord":0,"Id":486,"P":448,"N":"正码2单双","C":[{"I":1841,"N":"单","MB":"0","MxO":"1.98","MiO":"1.98","SI":486,"St":true},{"I":1842,"N":"双","MB":"0","MxO":"1.98","MiO":"1.98","SI":486,"St":true}]},{"Sord":0,"Id":487,"P":448,"N":"正码3单双","C":[{"I":1843,"N":"单","MB":"0","MxO":"1.98","MiO":"1.98","SI":487,"St":true},{"I":1844,"N":"双","MB":"0","MxO":"1.98","MiO":"1.98","SI":487,"St":true}]},{"Sord":0,"Id":488,"P":448,"N":"正码4单双","C":[{"I":1845,"N":"单","MB":"0","MxO":"1.98","MiO":"1.98","SI":488,"St":true},{"I":1846,"N":"双","MB":"0","MxO":"1.98","MiO":"1.98","SI":488,"St":true}]},{"Sord":0,"Id":489,"P":448,"N":"正码5单双","C":[{"I":1847,"N":"单","MB":"0","MxO":"1.98","MiO":"1.98","SI":489,"St":true},{"I":1848,"N":"双","MB":"0","MxO":"1.98","MiO":"1.98","SI":489,"St":true}]},{"Sord":0,"Id":490,"P":448,"N":"正码6单双","C":[{"I":1849,"N":"单","MB":"0","MxO":"1.98","MiO":"1.98","SI":490,"St":true},{"I":1850,"N":"双","MB":"0","MxO":"1.98","MiO":"1.98","SI":490,"St":true}]},{"Sord":0,"Id":491,"P":449,"N":"正码1合数单双","C":[{"I":1863,"N":"合单","MB":"0","MxO":"1.98","MiO":"1.98","SI":491,"St":true},{"I":1864,"N":"合双","MB":"0","MxO":"1.98","MiO":"1.98","SI":491,"St":true}]},{"Sord":0,"Id":492,"P":449,"N":"正码2合数单双","C":[{"I":1865,"N":"合单","MB":"0","MxO":"1.98","MiO":"1.98","SI":492,"St":true},{"I":1866,"N":"合双","MB":"0","MxO":"1.98","MiO":"1.98","SI":492,"St":true}]},{"Sord":0,"Id":493,"P":449,"N":"正码3合数单双","C":[{"I":1867,"N":"合单","MB":"0","MxO":"1.98","MiO":"1.98","SI":493,"St":true},{"I":1868,"N":"合双","MB":"0","MxO":"1.98","MiO":"1.98","SI":493,"St":true}]},{"Sord":0,"Id":494,"P":449,"N":"正码4合数单双","C":[{"I":1869,"N":"合单","MB":"0","MxO":"1.98","MiO":"1.98","SI":494,"St":true},{"I":1870,"N":"合双","MB":"0","MxO":"1.98","MiO":"1.98","SI":494,"St":true}]},{"Sord":0,"Id":495,"P":449,"N":"正码5合数单双","C":[{"I":1871,"N":"合单","MB":"0","MxO":"1.98","MiO":"1.98","SI":495,"St":true},{"I":1872,"N":"合双","MB":"0","MxO":"1.98","MiO":"1.98","SI":495,"St":true}]},{"Sord":0,"Id":496,"P":449,"N":"正码6合数单双","C":[{"I":1873,"N":"合单","MB":"0","MxO":"1.98","MiO":"1.98","SI":496,"St":true},{"I":1874,"N":"合双","MB":"0","MxO":"1.98","MiO":"1.98","SI":496,"St":true}]},{"Sord":0,"Id":497,"P":450,"N":"正码1色波","C":[{"I":1875,"N":"红波","MB":"0","MxO":"2.8535","MiO":"2.8535","SI":497,"St":true},{"I":1876,"N":"蓝波","MB":"0","MxO":"3.0319","MiO":"3.0319","SI":497,"St":true},{"I":1877,"N":"绿波","MB":"0","MxO":"3.0319","MiO":"3.0319","SI":497,"St":true}]},{"Sord":0,"Id":498,"P":450,"N":"正码2色波","C":[{"I":1878,"N":"红波","MB":"0","MxO":"2.8535","MiO":"2.8535","SI":498,"St":true},{"I":1879,"N":"蓝波","MB":"0","MxO":"3.0319","MiO":"3.0319","SI":498,"St":true},{"I":1880,"N":"绿波","MB":"0","MxO":"3.0319","MiO":"3.0319","SI":498,"St":true}]},{"Sord":0,"Id":499,"P":450,"N":"正码3色波","C":[{"I":1881,"N":"红波","MB":"0","MxO":"2.8535","MiO":"2.8535","SI":499,"St":true},{"I":1882,"N":"蓝波","MB":"0","MxO":"3.0319","MiO":"3.0319","SI":499,"St":true},{"I":1883,"N":"绿波","MB":"0","MxO":"3.0319","MiO":"3.0319","SI":499,"St":true}]},{"Sord":0,"Id":500,"P":450,"N":"正码4色波","C":[{"I":1884,"N":"红波","MB":"0","MxO":"2.8535","MiO":"2.8535","SI":500,"St":true},{"I":1885,"N":"蓝波","MB":"0","MxO":"3.0319","MiO":"3.0319","SI":500,"St":true},{"I":1886,"N":"绿波","MB":"0","MxO":"3.0319","MiO":"3.0319","SI":500,"St":true}]},{"Sord":0,"Id":501,"P":450,"N":"正码5色波","C":[{"I":1887,"N":"红波","MB":"0","MxO":"2.8535","MiO":"2.8535","SI":501,"St":true},{"I":1888,"N":"蓝波","MB":"0","MxO":"3.0319","MiO":"3.0319","SI":501,"St":true},{"I":1889,"N":"绿波","MB":"0","MxO":"3.0319","MiO":"3.0319","SI":501,"St":true}]},{"Sord":0,"Id":502,"P":450,"N":"正码6色波","C":[{"I":1890,"N":"红波","MB":"0","MxO":"2.8535","MiO":"2.8535","SI":502,"St":true},{"I":1891,"N":"蓝波","MB":"0","MxO":"3.0319","MiO":"3.0319","SI":502,"St":true},{"I":1892,"N":"绿波","MB":"0","MxO":"3.0319","MiO":"3.0319","SI":502,"St":true}]}]},{"Id":8,"N":"连码","PIs":[503,504,505,506,507],"C":[{"Sord":0,"Id":505,"P":453,"N":"二全中","C":[{"I":20366,"N":"1","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20367,"N":"2","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20368,"N":"3","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20369,"N":"4","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20370,"N":"5","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20371,"N":"6","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20372,"N":"7","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20373,"N":"8","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20374,"N":"9","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20375,"N":"10","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20376,"N":"11","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20377,"N":"12","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20378,"N":"13","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20379,"N":"14","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20380,"N":"15","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20381,"N":"16","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20382,"N":"17","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20383,"N":"18","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20384,"N":"19","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20385,"N":"20","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20386,"N":"21","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20387,"N":"22","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20388,"N":"23","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20389,"N":"24","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20390,"N":"25","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20391,"N":"26","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20392,"N":"27","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20393,"N":"28","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20394,"N":"29","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20395,"N":"30","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20396,"N":"31","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20397,"N":"32","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20398,"N":"33","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20399,"N":"34","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20400,"N":"35","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20401,"N":"36","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20402,"N":"37","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20403,"N":"38","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20404,"N":"39","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20405,"N":"40","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20406,"N":"41","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20407,"N":"42","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20408,"N":"43","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20409,"N":"44","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20410,"N":"45","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20411,"N":"46","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20412,"N":"47","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20413,"N":"48","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true},{"I":20414,"N":"49","MB":"0","MxO":"63.0022","MiO":"63.0022","SI":505,"St":true}]},{"Sord":0,"Id":506,"P":454,"N":"二中特","C":[{"I":20415,"N":"1","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20416,"N":"2","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20417,"N":"3","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20418,"N":"4","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20419,"N":"5","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20420,"N":"6","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20421,"N":"7","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20422,"N":"8","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20423,"N":"9","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20424,"N":"10","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20425,"N":"11","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20426,"N":"12","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20427,"N":"13","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20428,"N":"14","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20429,"N":"15","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20430,"N":"16","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20431,"N":"17","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20432,"N":"18","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20433,"N":"19","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20434,"N":"20","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20435,"N":"21","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20436,"N":"22","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20437,"N":"23","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20438,"N":"24","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20439,"N":"25","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20440,"N":"26","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20441,"N":"27","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20442,"N":"28","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20443,"N":"29","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20444,"N":"30","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20445,"N":"31","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20446,"N":"32","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20447,"N":"33","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20448,"N":"34","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20449,"N":"35","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20450,"N":"36","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20451,"N":"37","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20452,"N":"38","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20453,"N":"39","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20454,"N":"40","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20455,"N":"41","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20456,"N":"42","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20457,"N":"43","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20458,"N":"44","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20459,"N":"45","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20460,"N":"46","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20461,"N":"47","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20462,"N":"48","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20463,"N":"49","MB":"0","MxO":"31.0023","MiO":"31.0023","SI":506,"St":true,"L":2},{"I":20464,"N":"1","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20465,"N":"2","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20466,"N":"3","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20467,"N":"4","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20468,"N":"5","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20469,"N":"6","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20470,"N":"7","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20471,"N":"8","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20472,"N":"9","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20473,"N":"10","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20474,"N":"11","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20475,"N":"12","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20476,"N":"13","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20477,"N":"14","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20478,"N":"15","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20479,"N":"16","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20480,"N":"17","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20481,"N":"18","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20482,"N":"19","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20483,"N":"20","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20484,"N":"21","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20485,"N":"22","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20486,"N":"23","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20487,"N":"24","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20488,"N":"25","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20489,"N":"26","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20490,"N":"27","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20491,"N":"28","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20492,"N":"29","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20493,"N":"30","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20494,"N":"31","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20495,"N":"32","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20496,"N":"33","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20497,"N":"34","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20498,"N":"35","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20499,"N":"36","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20500,"N":"37","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20501,"N":"38","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20502,"N":"39","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20503,"N":"40","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20504,"N":"41","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20505,"N":"42","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20506,"N":"43","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20507,"N":"44","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20508,"N":"45","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20509,"N":"46","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20510,"N":"47","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20511,"N":"48","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true},{"I":20512,"N":"49","MB":"0","MxO":"50.96","MiO":"50.96","SI":506,"St":true}]},{"Sord":0,"Id":507,"P":455,"N":"特串","C":[{"I":20513,"N":"1","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20514,"N":"2","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20515,"N":"3","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20516,"N":"4","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20517,"N":"5","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20518,"N":"6","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20519,"N":"7","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20520,"N":"8","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20521,"N":"9","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20522,"N":"10","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20523,"N":"11","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20524,"N":"12","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20525,"N":"13","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20526,"N":"14","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20527,"N":"15","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20528,"N":"16","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20529,"N":"17","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20530,"N":"18","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20531,"N":"19","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20532,"N":"20","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20533,"N":"21","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20534,"N":"22","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20535,"N":"23","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20536,"N":"24","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20537,"N":"25","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20538,"N":"26","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20539,"N":"27","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20540,"N":"28","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20541,"N":"29","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20542,"N":"30","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20543,"N":"31","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20544,"N":"32","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20545,"N":"33","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20546,"N":"34","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20547,"N":"35","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20548,"N":"36","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20549,"N":"37","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20550,"N":"38","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20551,"N":"39","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20552,"N":"40","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20553,"N":"41","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20554,"N":"42","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20555,"N":"43","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20556,"N":"44","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20557,"N":"45","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20558,"N":"46","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20559,"N":"47","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20560,"N":"48","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true},{"I":20561,"N":"49","MB":"0","MxO":"154.9968","MiO":"154.9968","SI":507,"St":true}]}]},{"Id":9,"N":"一肖","PIs":[471,873],"C":[{"Sord":0,"Id":471,"P":444,"N":"一肖","C":[{"I":1474,"N":"鼠","MB":"0","MxO":"2.0987","MiO":"2.0987","SI":471,"St":true},{"I":1475,"N":"牛","MB":"0","MxO":"2.0987","MiO":"2.0987","SI":471,"St":true},{"I":1476,"N":"虎","MB":"0","MxO":"2.0987","MiO":"2.0987","SI":471,"St":true},{"I":1477,"N":"兔","MB":"0","MxO":"2.0987","MiO":"2.0987","SI":471,"St":true},{"I":1478,"N":"龙","MB":"0","MxO":"2.0987","MiO":"2.0987","SI":471,"St":true},{"I":1479,"N":"蛇","MB":"0","MxO":"2.0987","MiO":"2.0987","SI":471,"St":true},{"I":1480,"N":"马","MB":"0","MxO":"2.0987","MiO":"2.0987","SI":471,"St":true},{"I":1481,"N":"羊","MB":"0","MxO":"2.0987","MiO":"2.0987","SI":471,"St":true},{"I":1482,"N":"猴","MB":"0","MxO":"2.0987","MiO":"2.0987","SI":471,"St":true},{"I":1483,"N":"鸡","MB":"0","MxO":"1.7873","MiO":"1.7873","SI":471,"St":true},{"I":1484,"N":"狗","MB":"0","MxO":"2.0987","MiO":"2.0987","SI":471,"St":true},{"I":1485,"N":"猪","MB":"0","MxO":"2.0987","MiO":"2.0987","SI":471,"St":true}]},{"Sord":0,"Id":873,"P":872,"N":"七色波","C":[{"I":20215,"N":"红波","MB":"0","MxO":"2.8063","MiO":"2.8063","SI":873,"St":true},{"I":20216,"N":"蓝波","MB":"0","MxO":"3.2034","MiO":"3.2034","SI":873,"St":true},{"I":20217,"N":"绿波","MB":"0","MxO":"3.2034","MiO":"3.2034","SI":873,"St":true},{"I":20218,"N":"和局","MB":"0","MxO":"33.984","MiO":"33.984","SI":873,"St":true}]}]},{"Id":10,"N":"尾数","PIs":[510],"C":[{"Sord":0,"Id":510,"P":509,"N":"尾数","C":[{"I":1486,"N":"1尾","MB":"0","MxO":"1.7873","MiO":"1.7873","SI":510,"St":true},{"I":1487,"N":"2尾","MB":"0","MxO":"1.7873","MiO":"1.7873","SI":510,"St":true},{"I":1488,"N":"3尾","MB":"0","MxO":"1.7873","MiO":"1.7873","SI":510,"St":true},{"I":1489,"N":"4尾","MB":"0","MxO":"1.7873","MiO":"1.7873","SI":510,"St":true},{"I":1490,"N":"5尾","MB":"0","MxO":"1.7873","MiO":"1.7873","SI":510,"St":true},{"I":1491,"N":"6尾","MB":"0","MxO":"1.7873","MiO":"1.7873","SI":510,"St":true},{"I":1492,"N":"7尾","MB":"0","MxO":"1.7873","MiO":"1.7873","SI":510,"St":true},{"I":1493,"N":"8尾","MB":"0","MxO":"1.7873","MiO":"1.7873","SI":510,"St":true},{"I":1494,"N":"9尾","MB":"0","MxO":"1.7873","MiO":"1.7873","SI":510,"St":true},{"I":1495,"N":"0尾","MB":"0","MxO":"2.0987","MiO":"2.0987","SI":510,"St":true}]}]},{"Id":13,"N":"连肖","PIs":[532,533,534,535],"C":[{"Sord":0,"Id":532,"P":522,"N":"连肖二肖","C":[{"I":2326,"N":"鼠","MB":"0","MxO":"4.8255","MiO":"4.8255","SI":532,"St":true},{"I":2327,"N":"牛","MB":"0","MxO":"4.8255","MiO":"4.8255","SI":532,"St":true},{"I":2328,"N":"虎","MB":"0","MxO":"4.8255","MiO":"4.8255","SI":532,"St":true},{"I":2329,"N":"兔","MB":"0","MxO":"4.8255","MiO":"4.8255","SI":532,"St":true},{"I":2330,"N":"龙","MB":"0","MxO":"4.8255","MiO":"4.8255","SI":532,"St":true},{"I":2331,"N":"蛇","MB":"0","MxO":"4.8255","MiO":"4.8255","SI":532,"St":true},{"I":2332,"N":"马","MB":"0","MxO":"4.8255","MiO":"4.8255","SI":532,"St":true},{"I":2333,"N":"羊","MB":"0","MxO":"4.8255","MiO":"4.8255","SI":532,"St":true},{"I":2334,"N":"猴","MB":"0","MxO":"4.8255","MiO":"4.8255","SI":532,"St":true},{"I":2335,"N":"鸡","MB":"0","MxO":"4.0799","MiO":"4.0799","SI":532,"St":true},{"I":2336,"N":"狗","MB":"0","MxO":"4.8255","MiO":"4.8255","SI":532,"St":true},{"I":2337,"N":"猪","MB":"0","MxO":"4.8255","MiO":"4.8255","SI":532,"St":true}]},{"Sord":0,"Id":533,"P":900,"N":"连肖三肖","C":[{"I":2338,"N":"鼠","MB":"0","MxO":"12.3033","MiO":"12.3033","SI":533,"St":true},{"I":2339,"N":"牛","MB":"0","MxO":"12.3033","MiO":"12.3033","SI":533,"St":true},{"I":2340,"N":"虎","MB":"0","MxO":"12.3033","MiO":"12.3033","SI":533,"St":true},{"I":2341,"N":"兔","MB":"0","MxO":"12.3033","MiO":"12.3033","SI":533,"St":true},{"I":2342,"N":"龙","MB":"0","MxO":"12.3033","MiO":"12.3033","SI":533,"St":true},{"I":2343,"N":"蛇","MB":"0","MxO":"12.3033","MiO":"12.3033","SI":533,"St":true},{"I":2344,"N":"马","MB":"0","MxO":"12.3033","MiO":"12.3033","SI":533,"St":true},{"I":2345,"N":"羊","MB":"0","MxO":"12.3033","MiO":"12.3033","SI":533,"St":true},{"I":2346,"N":"猴","MB":"0","MxO":"12.3033","MiO":"12.3033","SI":533,"St":true},{"I":2347,"N":"鸡","MB":"0","MxO":"10.3179","MiO":"10.3179","SI":533,"St":true},{"I":2348,"N":"狗","MB":"0","MxO":"12.3033","MiO":"12.3033","SI":533,"St":true},{"I":2349,"N":"猪","MB":"0","MxO":"12.3033","MiO":"12.3033","SI":533,"St":true}]},{"Sord":0,"Id":534,"P":901,"N":"连肖四肖","C":[{"I":2350,"N":"鼠","MB":"0","MxO":"30.7001","MiO":"30.7001","SI":534,"St":true},{"I":2351,"N":"牛","MB":"0","MxO":"30.7001","MiO":"30.7001","SI":534,"St":true},{"I":2352,"N":"虎","MB":"0","MxO":"30.7001","MiO":"30.7001","SI":534,"St":true},{"I":2353,"N":"兔","MB":"0","MxO":"30.7001","MiO":"30.7001","SI":534,"St":true},{"I":2354,"N":"龙","MB":"0","MxO":"30.7001","MiO":"30.7001","SI":534,"St":true},{"I":2355,"N":"蛇","MB":"0","MxO":"30.7001","MiO":"30.7001","SI":534,"St":true},{"I":2356,"N":"马","MB":"0","MxO":"30.7001","MiO":"30.7001","SI":534,"St":true},{"I":2357,"N":"羊","MB":"0","MxO":"30.7001","MiO":"30.7001","SI":534,"St":true},{"I":2358,"N":"猴","MB":"0","MxO":"30.7001","MiO":"30.7001","SI":534,"St":true},{"I":2359,"N":"鸡","MB":"0","MxO":"26.9991","MiO":"26.9991","SI":534,"St":true},{"I":2360,"N":"狗","MB":"0","MxO":"30.7001","MiO":"30.7001","SI":534,"St":true},{"I":2361,"N":"猪","MB":"0","MxO":"30.7001","MiO":"30.7001","SI":534,"St":true}]},{"Sord":0,"Id":535,"P":902,"N":"连肖五肖","C":[{"I":2362,"N":"鼠","MB":"0","MxO":"107.9968","MiO":"107.9968","SI":535,"St":true},{"I":2363,"N":"牛","MB":"0","MxO":"107.9968","MiO":"107.9968","SI":535,"St":true},{"I":2364,"N":"虎","MB":"0","MxO":"107.9968","MiO":"107.9968","SI":535,"St":true},{"I":2365,"N":"兔","MB":"0","MxO":"107.9968","MiO":"107.9968","SI":535,"St":true},{"I":2366,"N":"龙","MB":"0","MxO":"107.9968","MiO":"107.9968","SI":535,"St":true},{"I":2367,"N":"蛇","MB":"0","MxO":"107.9968","MiO":"107.9968","SI":535,"St":true},{"I":2368,"N":"马","MB":"0","MxO":"107.9968","MiO":"107.9968","SI":535,"St":true},{"I":2369,"N":"羊","MB":"0","MxO":"107.9968","MiO":"107.9968","SI":535,"St":true},{"I":2370,"N":"猴","MB":"0","MxO":"107.9968","MiO":"107.9968","SI":535,"St":true},{"I":2371,"N":"鸡","MB":"0","MxO":"88.7841","MiO":"88.7841","SI":535,"St":true},{"I":2372,"N":"狗","MB":"0","MxO":"107.9968","MiO":"107.9968","SI":535,"St":true},{"I":2373,"N":"猪","MB":"0","MxO":"107.9968","MiO":"107.9968","SI":535,"St":true}]}]},{"Id":14,"N":"连尾","PIs":[536,537,538,539,540,541],"C":[{"Sord":0,"Id":536,"P":531,"N":"连尾二尾","C":[{"I":2374,"N":"0","MB":"0","MxO":"3.4514","MiO":"3.4514","SI":536,"St":true},{"I":2375,"N":"1","MB":"0","MxO":"3.4513","MiO":"3.4513","SI":536,"St":true},{"I":2376,"N":"2","MB":"0","MxO":"3.4513","MiO":"3.4513","SI":536,"St":true},{"I":2377,"N":"3","MB":"0","MxO":"3.4513","MiO":"3.4513","SI":536,"St":true},{"I":2378,"N":"4","MB":"0","MxO":"3.4513","MiO":"3.4513","SI":536,"St":true},{"I":2379,"N":"5","MB":"0","MxO":"3.4513","MiO":"3.4513","SI":536,"St":true},{"I":2380,"N":"6","MB":"0","MxO":"3.4513","MiO":"3.4513","SI":536,"St":true},{"I":2381,"N":"7","MB":"0","MxO":"3.4513","MiO":"3.4513","SI":536,"St":true},{"I":2382,"N":"8","MB":"0","MxO":"3.4513","MiO":"3.4513","SI":536,"St":true},{"I":2383,"N":"9","MB":"0","MxO":"3.4513","MiO":"3.4513","SI":536,"St":true}]},{"Sord":0,"Id":537,"P":903,"N":"连尾三尾","C":[{"I":2384,"N":"0","MB":"0","MxO":"7.2676","MiO":"7.2676","SI":537,"St":true},{"I":2385,"N":"1","MB":"0","MxO":"7.2672","MiO":"7.2672","SI":537,"St":true},{"I":2386,"N":"2","MB":"0","MxO":"7.2672","MiO":"7.2672","SI":537,"St":true},{"I":2387,"N":"3","MB":"0","MxO":"7.2672","MiO":"7.2672","SI":537,"St":true},{"I":2388,"N":"4","MB":"0","MxO":"7.2672","MiO":"7.2672","SI":537,"St":true},{"I":2389,"N":"5","MB":"0","MxO":"7.2672","MiO":"7.2672","SI":537,"St":true},{"I":2390,"N":"6","MB":"0","MxO":"7.2672","MiO":"7.2672","SI":537,"St":true},{"I":2391,"N":"7","MB":"0","MxO":"7.2672","MiO":"7.2672","SI":537,"St":true},{"I":2392,"N":"8","MB":"0","MxO":"7.2672","MiO":"7.2672","SI":537,"St":true},{"I":2393,"N":"9","MB":"0","MxO":"7.2672","MiO":"7.2672","SI":537,"St":true}]},{"Sord":0,"Id":538,"P":904,"N":"连尾四尾","C":[{"I":2394,"N":"0","MB":"0","MxO":"17.4764","MiO":"17.4764","SI":538,"St":true},{"I":2395,"N":"1","MB":"0","MxO":"17.4758","MiO":"17.4758","SI":538,"St":true},{"I":2396,"N":"2","MB":"0","MxO":"17.4758","MiO":"17.4758","SI":538,"St":true},{"I":2397,"N":"3","MB":"0","MxO":"17.4758","MiO":"17.4758","SI":538,"St":true},{"I":2398,"N":"4","MB":"0","MxO":"17.4758","MiO":"17.4758","SI":538,"St":true},{"I":2399,"N":"5","MB":"0","MxO":"17.4758","MiO":"17.4758","SI":538,"St":true},{"I":2400,"N":"6","MB":"0","MxO":"17.4758","MiO":"17.4758","SI":538,"St":true},{"I":2401,"N":"7","MB":"0","MxO":"17.4758","MiO":"17.4758","SI":538,"St":true},{"I":2402,"N":"8","MB":"0","MxO":"17.4758","MiO":"17.4758","SI":538,"St":true},{"I":2403,"N":"9","MB":"0","MxO":"17.4758","MiO":"17.4758","SI":538,"St":true}]}]},{"Id":15,"N":"龙虎斗","PIs":[604,605,606,607,608,609,610,611,612,613,614,615,616,617,618,619,620,621,622,623,624],"C":[{"Sord":0,"Id":604,"P":603,"N":"正码一VS正码二","C":[{"I":2571,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":604,"St":true},{"I":2572,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":604,"St":true}]},{"Sord":0,"Id":605,"P":603,"N":"正码一VS正码三","C":[{"I":2573,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":605,"St":true},{"I":2574,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":605,"St":true}]},{"Sord":0,"Id":606,"P":603,"N":"正码一VS正码四","C":[{"I":2575,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":606,"St":true},{"I":2576,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":606,"St":true}]},{"Sord":0,"Id":607,"P":603,"N":"正码一VS正码五","C":[{"I":2577,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":607,"St":true},{"I":2578,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":607,"St":true}]},{"Sord":0,"Id":608,"P":603,"N":"正码一VS正码六","C":[{"I":2579,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":608,"St":true},{"I":2580,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":608,"St":true}]},{"Sord":0,"Id":609,"P":603,"N":"正码一VS特码","C":[{"I":2581,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":609,"St":true},{"I":2582,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":609,"St":true}]},{"Sord":0,"Id":610,"P":603,"N":"正码二VS正码三","C":[{"I":2583,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":610,"St":true},{"I":2584,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":610,"St":true}]},{"Sord":0,"Id":611,"P":603,"N":"正码二VS正码四","C":[{"I":2585,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":611,"St":true},{"I":2586,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":611,"St":true}]},{"Sord":0,"Id":612,"P":603,"N":"正码二VS正码五","C":[{"I":2587,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":612,"St":true},{"I":2588,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":612,"St":true}]},{"Sord":0,"Id":613,"P":603,"N":"正码二VS正码六","C":[{"I":2589,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":613,"St":true},{"I":2590,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":613,"St":true}]},{"Sord":0,"Id":614,"P":603,"N":"正码二VS特码","C":[{"I":2591,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":614,"St":true},{"I":2592,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":614,"St":true}]},{"Sord":0,"Id":615,"P":603,"N":"正码三VS正码四","C":[{"I":2593,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":615,"St":true},{"I":2594,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":615,"St":true}]},{"Sord":0,"Id":616,"P":603,"N":"正码三VS正码五","C":[{"I":2595,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":616,"St":true},{"I":2596,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":616,"St":true}]},{"Sord":0,"Id":617,"P":603,"N":"正码三VS正码六","C":[{"I":2597,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":617,"St":true},{"I":2598,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":617,"St":true}]},{"Sord":0,"Id":618,"P":603,"N":"正码三VS特码","C":[{"I":2599,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":618,"St":true},{"I":2600,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":618,"St":true}]},{"Sord":0,"Id":619,"P":603,"N":"正码四VS正码五","C":[{"I":2601,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":619,"St":true},{"I":2602,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":619,"St":true}]},{"Sord":0,"Id":620,"P":603,"N":"正码四VS正码六","C":[{"I":2603,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":620,"St":true},{"I":2604,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":620,"St":true}]},{"Sord":0,"Id":621,"P":603,"N":"正码四VS特码","C":[{"I":2605,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":621,"St":true},{"I":2606,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":621,"St":true}]},{"Sord":0,"Id":622,"P":603,"N":"正码五VS正码六","C":[{"I":2607,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":622,"St":true},{"I":2608,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":622,"St":true}]},{"Sord":0,"Id":623,"P":603,"N":"正码五VS特码","C":[{"I":2609,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":623,"St":true},{"I":2610,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":623,"St":true}]},{"Sord":0,"Id":624,"P":603,"N":"正码六VS特码","C":[{"I":2611,"N":"龙","MB":"0","MxO":"1.98","MiO":"1.98","SI":624,"St":true},{"I":2612,"N":"虎","MB":"0","MxO":"1.98","MiO":"1.98","SI":624,"St":true}]}]}]';
        var iispath = 'https://zy11sbsbqt.lfjieweisi.com/';
var ballData={
	"red" : [1, 2, 7, 8, 12, 13, 18, 19, 23, 24, 29, 30, 34, 35, 40, 45, 46],
	"blue" : [3, 4, 9, 10, 14, 15, 20, 25, 26, 31, 36, 37, 41, 42, 47, 48],
	"green" : [5, 6, 11, 16, 17, 21, 22, 27, 28, 32, 33, 38, 39, 43, 44, 49],
	"redOdd" : [1, 7, 13, 19, 23, 29, 35, 45],
	"redEven" : [2, 8, 12, 18, 24, 30, 34, 40, 46],
	"redOver" : [29, 30, 34, 35, 40, 45, 46],
	"redUnder" : [1, 2, 7, 8, 12, 13, 18, 19, 23, 24],
	"greenOdd" : [5, 11, 17, 21, 27, 33, 39, 43],
	"greenEven" : [6, 16, 22, 28, 32, 38, 44],
	"greenOver" : [27, 28, 32, 33, 38, 39, 43, 44],
	"greenUnder" : [5, 6, 11, 16, 17, 21, 22],
	"blueOdd" : [3, 9, 15, 25, 31, 37, 41, 47],
	"blueEven" : [4, 10, 14, 20, 26, 36, 42, 48],
	"blueOver" : [25, 26, 31, 36, 37, 41, 42, 47, 48],
	"blueUnder" : [3, 4, 9, 10, 14, 15, 20],
	"odd" : [1, 3, 5, 7, 9, 11, 13, 15, 17, 19, 21, 23, 25, 27, 29, 31, 33, 35, 37, 39, 41, 43, 45, 47],
	"even" : [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 48],
	"over" : [25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48],
	"under" : [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],
	"sumOdd" : [1, 3, 5, 7, 9, 10, 12, 14, 16, 18, 21, 23, 25, 27, 29, 30, 32, 34, 36, 38, 41, 43, 45, 47],
	"sumEven" : [2, 4, 6, 8, 11, 13, 15, 17, 19, 20, 22, 24, 26, 28, 31, 33, 35, 37, 39, 40, 42, 44, 46, 48],
	"beast" : [2,14,26,38,5,17,29,41,6,18,30,42,7,19,31,43,8,20,32,44,10,22,34,46],
	"poultry" : [1,13,25,37,3,15,27,39,4,16,28,40,9,21,33,45,11,23,35,47,12,24,36,48],
	"weiOver" : [5, 6, 7, 8, 9, 15, 16, 17, 18, 19, 25, 26, 27, 28, 29, 35, 36, 37, 38, 39, 45, 46, 47, 48, 49],
	"weiUnder" : [1, 2, 3, 4, 10, 11, 12, 13, 14, 20, 21, 22, 23, 24, 30, 31, 32, 33, 34, 40, 41, 42, 43, 44],
	"teweiOver" : [5, 6, 7, 8, 9, 15, 16, 17, 18, 19, 25, 26, 27, 28, 29, 35, 36, 37, 38, 39, 45, 46, 47, 48],
	"teweiUnder" : [1, 2, 3, 4, 10, 11, 12, 13, 14, 20, 21, 22, 23, 24, 30, 31, 32, 33, 34, 40, 41, 42, 43, 44],
	"heweiOver" : [5, 6, 7, 8, 9, 14, 15, 16, 17, 18, 23, 24, 26, 27, 32, 33, 34, 35, 36, 41, 42, 43, 44, 45],
	"heweiUnder" : [1, 2, 3, 4, 10, 11, 12, 13, 19, 20, 21, 22, 28, 29, 30, 31, 37, 38, 39, 40, 46, 47, 48, 49],
	"tou0" : [1, 2, 3, 4, 5, 6, 7, 8, 9],
	"tou1" : [10, 11, 12, 13, 14, 15, 16, 17, 18, 19],
	"tou2" : [20, 21, 22, 23, 24, 25, 26, 27, 28, 29],
	"tou3" : [30, 31, 32, 33, 34, 35, 36, 37, 38, 39],
	"tou4" : [40, 41, 42, 43, 44,45,46,47,48,49],
	"top5" : [1,2,3,4,5],
	"top10" : [1,2,3,4,5,6,7,8,9,10],
	"wei0":[10, 20, 30, 40],
	"wei1" : [1, 11, 21, 31, 41],
	"wei2" : [2, 12, 22, 32, 42],
	"wei3" : [3, 13, 23, 33, 43],
	"wei4" : [4, 14, 24, 34, 44],
	"wei5" : [5, 15, 25, 35, 45],
	"wei6" : [6, 16, 26, 36, 46],
	"wei7" : [7, 17, 27, 37, 47],
	"wei8" : [8, 18, 28, 38, 48],
	"wei9" : [9, 19, 29, 39, 49],
	"rat" : [10,22,34,46],
	"ox" : [9,21,33,45],
	"tiger" : [8,20,32,44],
	"rabbit" : [7,19,31,43],
	"dragon" : [6,18,30,42],
	"snake" : [5,17,29,41],
	"horse" : [4,16,28,40],
	"goat" : [3,15,27,39],
	"monkey" : [2,14,26,38],
	"rooster" : [1,13,25,37,49],
	"dog" : [12,24,36,48],
	"pig" : [11,23,35,47],
	"redBall":[1,2,7,8,12,13,18,19,23,24,29,30,34,35,40,45,46],
	"blueBall":[3,4,9,10,14,15,20,25,26,31,36,37,41,42,47,48],
	"greenBall":[5,6,11,16,17,21,22,27,28,32,33,38,39,43,44,49],
	"overOdd":[25,27,29,31,33,35,37,39,41,43,45,47,49],
	"overEven":[26,28,30,32,34,36,38,40,42,44,46,48],
	"underOdd":[1,3,5,7,9,11,13,15,17,19,21,23],
	"underEven":[2,4,6,8,10,12,14,16,18,20,22,24],
	"dadan":[25,27,29,31,33,35,37,39,41,43,45,47,49],
	"dashuang":[26,28,30,32,34,36,38,40,42,44,46,48],
	"xiaodan":[1,3,5,7,9,11,13,15,17,19,21,23],
	"xiaoshuang":[2,4,6,8,10,12,14,16,18,20,22,24]
}
,ChineseZodiac='[{"Id":1474,"Name":"鼠","Key":"Mouse"},{"Id":1475,"Name":"牛","Key":"Cow"},{"Id":1476,"Name":"虎","Key":"Tiger"},{"Id":1477,"Name":"兔","Key":"Rabbit"},{"Id":1478,"Name":"龙","Key":"Dragon"},{"Id":1479,"Name":"蛇","Key":"Snake"},{"Id":1480,"Name":"马","Key":"Horse"},{"Id":1481,"Name":"羊","Key":"Sheep"},{"Id":1482,"Name":"猴","Key":"Monkey"},{"Id":1483,"Name":"鸡","Key":"Chicken"},{"Id":1484,"Name":"狗","Key":"Dog"},{"Id":1485,"Name":"猪","Key":"Pig"}]',PoultryAndBeast='False'==='True',OddAndEven='False'==='True';        var showLongHu = 'False';

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

    <script src="/js_new/common/flipclock/flipclock.min.js"></script>
    <script src="/js_new/dist/jquery.waybill.js"></script>
    <script src="/js_new/credit/game.common.js"></script>
    <script src="/js_new/dist/credit/six.core.min.js"></script>
    <script src="/js_new/common/jquery.md5.min.js"></script>
    <script src="/js_new/Betting/bet.js"></script>
    <script src="/js_new/WG.RegisterUser.js"></script>
    <script type="text/javascript" src="/js_new/common/jquery.signalR-2.1.1.min.js"></script>
    </body>
</html>