<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0040)http://www.yd9992.com/UserCenter/AddCard -->
<html class=" js cssgradients generatedcontent" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta content="telephone=no" name="format-detection">
    <title>用户中心-银行卡管理</title>
    <meta name="keywords">
    <meta name="description">
    <link rel="Shortcut Icon" href="http://www.yd9992.com/Images/ICO/yuducaipiao/favicon.ico">
    <link rel="Bookmark" href="http://www.yd9992.com/Images/ICO/yuducaipiao/favicon.ico">

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
<body class="bg body UC-con" style="background-image: url(&quot;https://zy11sbsbqt.lfjieweisi.com//content/mapping/haocai-blue/home/images/bg/01.jpg&quot;);">
    <input type="hidden" id="accountId" value="632874">
    <div class="head">
        <div class="logo-wrap"></div>
        <div class="top_menu">
            <div class="clear">
                    <a href="http://www.yd9992.com/OffcialOtherGame/Index/26" id="gameListBtn" class="games" title="游戏大厅"><span>游戏大厅</span></a>
                    <a href="http://www.yd9992.com/" class="getout" title="返回首页"><span>返回首页</span></a>
                    <a href="http://tb.53kf.com/webCompany.php?arg=10147846&amp;style=1&amp;fromthirdservice=webapp" target="_blank" class="service" title="在线客服">
                        <span class="new-msg" id="NewMsg">在线客服</span>
                    </a>
                    <a href="http://www.yd9992.com/Help/Betq?gameId=0" class="rule" id="Rule" title="规则说明"><i></i><span class="rule_description">规则说明</span></a>
                    <a href="http://www.yd9992.com/Help/Techq" class="help" title="游戏帮助"><i></i><span class="play_help">游戏帮助</span></a>
                    <a title="登出账号" class="btn-login-out" href="http://www.yd9992.com/Home/UserLogout"><span>登出账号</span></a>
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
                                            <a class="game_26" data-bind="attr:{href:&#39;/OffcialOtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/OffcialOtherGame/Index/26"><font data-bind="text:FGameName">重庆时时彩</font></a>
                                        </li>
                                    
                                        <li>
                                            <a class="game_26" data-bind="attr:{href:&#39;/OffcialOtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/OffcialOtherGame/Index/29"><font data-bind="text:FGameName">北京PK拾</font></a>
                                        </li>
                                    
                                        <li>
                                            <a class="game_26" data-bind="attr:{href:&#39;/OffcialOtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/OffcialOtherGame/Index/30"><font data-bind="text:FGameName">福彩3D</font></a>
                                        </li>
                                    
                                        <li>
                                            <a class="game_26" data-bind="attr:{href:&#39;/OffcialOtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/OffcialOtherGame/Index/40"><font data-bind="text:FGameName">新疆时时彩</font></a>
                                        </li>
                                    
                                        <li>
                                            <a class="game_26" data-bind="attr:{href:&#39;/OffcialOtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/OffcialOtherGame/Index/42"><font data-bind="text:FGameName">天津时时彩</font></a>
                                        </li>
                                    
                                        <li>
                                            <a class="game_26" data-bind="attr:{href:&#39;/OffcialOtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/OffcialOtherGame/Index/44"><font data-bind="text:FGameName">排列三、五</font></a>
                                        </li>
                                    
                                        <li>
                                            <a class="game_26" data-bind="attr:{href:&#39;/OffcialOtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/OffcialOtherGame/Index/39"><font data-bind="text:FGameName">江苏快三</font></a>
                                        </li>
                                    
                                        <li>
                                            <a class="game_26" data-bind="attr:{href:&#39;/OffcialOtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/OffcialOtherGame/Index/61"><font data-bind="text:FGameName">加拿大3.5分</font></a>
                                        </li>
                                    
                                        <li>
                                            <a class="game_26" data-bind="attr:{href:&#39;/OffcialOtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/OffcialOtherGame/Index/68"><font data-bind="text:FGameName">澳洲3分彩</font></a>
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
                                            <a class="game_1" data-bind="attr:{href:FGameID==1?&#39;/six/index&#39;:&#39;/OtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/six/index"><font data-bind="text:FGameName">香港六合彩</font></a>
                                        </li>
                                      
                                    
                                        <li>
                                            <a class="game_1" data-bind="attr:{href:FGameID==1?&#39;/six/index&#39;:&#39;/OtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/OtherGame/Index/7"><font data-bind="text:FGameName">重庆时时彩</font></a>
                                        </li>
                                      
                                    
                                        <li>
                                            <a class="game_1" data-bind="attr:{href:FGameID==1?&#39;/six/index&#39;:&#39;/OtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/OtherGame/Index/9"><font data-bind="text:FGameName">天津时时彩</font></a>
                                        </li>
                                      
                                    
                                        <li>
                                            <a class="game_1" data-bind="attr:{href:FGameID==1?&#39;/six/index&#39;:&#39;/OtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/OtherGame/Index/10"><font data-bind="text:FGameName">新疆时时彩</font></a>
                                        </li>
                                      
                                    
                                        <li>
                                            <a class="game_1" data-bind="attr:{href:FGameID==1?&#39;/six/index&#39;:&#39;/OtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/OtherGame/Index/13"><font data-bind="text:FGameName">幸运农场</font></a>
                                        </li>
                                      
                                    
                                        <li>
                                            <a class="game_1" data-bind="attr:{href:FGameID==1?&#39;/six/index&#39;:&#39;/OtherGame/Index/&#39;+FGameID}" href="http://www.yd9992.com/OtherGame/Index/15"><font data-bind="text:FGameName">北京PK拾</font></a>
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
                    <a title="在线存款" class="btn-navacc btn-navacc-deposit" href="http://www.yd9992.com/Recharge/Index"><span title="在线存款">充值</span></a>
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
                    var active = 'CardsList';
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
            <script type="text/javascript">var hasContact = 'False';</script>
            <div class="main-head">
                <span>用户中心&gt;账户管理&gt;银行卡管理</span>
            </div>
            <div class="con_box">
                <div id="firstStep">
                    <div class="form-horizontal form-horizontal2">
                        <div class="control-group">
                            <label class="control-label">提示：</label>
                            <div class="controls">
                                <span class="help-float"><font class="fc_red">*</font>为必填信息<span class="more_message">，如需要删除请联系客服提供银行卡照片和充值截图进行处理！</span></span>
                                <span style="display: none;" class="help-float help-float1"><font class="fc_red">*</font>为必填信息<span class="more_message">，请仔细核对银行信息是否正确，方便财务为您转账汇款，温馨提示：（如果信息有误，请联系在线客服处理）</span></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"><font class="fc_red">*</font>开户银行：</label>
                            <div class="controls inputMD">
                                <select name="bank">
                                    <option value="1">中国工商银行</option>
                                    <option value="2">中国农业银行</option>
                                    <option value="3">中国民生银行</option>
                                    <option value="4">中国建设银行</option>
                                    <option value="5">中国招商银行</option>
                                    <option value="6">中国银行</option>
                                    <option value="7">中国交通银行</option>
                                    <option value="8">中国邮政银行</option>
                                    <option value="9">中国兴业银行</option>
                                    <option value="10">华夏银行</option>
                                    <option value="11">浦发银行</option>
                                    <option value="12">广州银行</option>
                                    <option value="13">BEA东亚银行</option>
                                    <option value="14">广州农商银行</option>
                                    <option value="15">顺德农商银行</option>
                                    <option value="16">北京银行</option>
                                    <option value="17">平安银行</option>
                                    <option value="18">杭州银行</option>
                                    <option value="19">温州银行</option>
                                    <option value="20">上海农商银行</option>
                                    <option value="21">尧都信用社</option>
                                    <option value="22">中国光大银行</option>
                                    <option value="23">中信银行</option>
                                    <option value="24">渤海银行</option>
                                    <option value="25">浙商银行</option>
                                    <option value="26">晋商银行</option>
                                    <option value="27">汉口银行</option>
                                    <option value="28">浙江稠州商业银行</option>
                                    <option value="29">上海银行</option>
                                    <option value="30">广发银行</option>
                                    <option value="32">东莞银行</option>
                                    <option value="33">宁波银行</option>
                                    <option value="34">南京银行</option>
                                    <option value="36">北京农商银行</option>
                                    <option value="37">重庆银行</option>
                                    <option value="38">广西壮族自治区农村信用社</option>
                                    <option value="40">江苏银行</option>
                                    <option value="41">吉林银行</option>
                                    <option value="42">成都银行</option>
                                    <option value="46">农村信用社</option>
                                    <option value="47">晋城银行</option>
                                    <option value="48">邯郸银行</option>
                                    <option value="49">郑州银行</option>
                                    <option value="50">九江银行</option>
                                    <option value="51">财付通</option>
                                    <option value="52">盛京银行</option>
                                    <option value="53">安徽农村信用合作社</option>
                                    <option value="54">甘肃银行</option>
                                    <option value="55">甘肃农村信用社</option>
                                    <option value="56">东莞农村商业银行</option>
                                    <option value="57">广东农村商业银行</option>
                                    <option value="58">Payoneer</option>
                                    <option value="59">NETELLER </option>
                                    <option value="60">Skrill</option>
                                    <option value="61">PayPal</option>
                                    <option value="62">其它银行</option>
                                    <option value="63">锦州银行</option>
                                    <option value="64">齐鲁银行</option>
                                    <option value="65">QQ钱包</option>
                                    <option value="67">厦门银行</option>
                                    <option value="68">贵州银行</option>
                                    <option value="69">贵阳银行</option>
                                    <option value="70">深圳农商银行</option>
                                    <option value="71">樱花银行</option>
                                    <option value="72">苏州银行</option>
                                    <option value="73">哈尔滨银行</option>
                                    <option value="74">QQ扫码</option>
                                    <option value="75">甘肃银行</option>
                                    <option value="76">兰州银行</option>
                                    <option value="77">云南省农村信用社</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"><font class="fc_red">*</font>开户人姓名：</label>
                            <div class="controls inputMD">
                                <input type="text" data-verify="^[^`~!@#\$%\^&amp;\*\(\)\_=+\/\\]{1,40}$*|*开户人姓名:由1至40个字符组成，且不能含有特殊字符" name="holder" class="phInput">
                                <span class="phText">填写银行卡真实姓名</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"><font class="fc_red">*</font>银行卡号：</label>
                            <div class="controls inputMD">
                                <input type="text" data-verify="^\d{16,20}$*|*银行卡号填写错误" id="IPcardNO" maxlength="19" name="cardNO" class="phInput">
                                <span class="phText">只能输入16-19个数字</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"><font class="fc_red">*</font>确认卡号:</label>
                            <div class="controls inputMD">
                                <input type="text" onpaste="return false" data-confirm="#IPcardNO*|*两次输入的卡号不同" maxlength="19" class="phInput">
                                <span class="phText">再次输入银行卡卡号</span>
                            </div>
                        </div>
                    </div>
                    <div class="acenter pdB-40"><a href="javascript:;" onclick="BankCards.firstStep()" class="btn">下一步</a><a href="http://www.yd9992.com/UserCenter/CardsList" class="btn">返回</a></div>
                </div>
                <div style="display:none;" id="secondStep">
                    <!--最近一次绑定的银行卡-->
                    <div class="form-horizontal">
                        <div class="control-group">
                            <label class="control-label">开户人姓名：</label>
                            <div class="controls inputMD">
                                <span class="help-float" style="width:200px;" id="lastHolder"></span>
                                <span class="help-float" style="color:red">(最近一次绑定的银行卡开户人姓名)</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">银行帐号：</label>
                            <div class="controls inputMD">
                                <span class="help-float" style="width:200px;" id="lastCardNO"></span>
                                <span class="help-float" style="color:red">(最近一次绑定的银行卡卡号)</span>
                            </div>
                        </div>
                        <div class="controls">
                            <span class="help-help" style="color:red">备注：增加绑定银行卡需提供最近一次绑定的卡号信息！</span>
                        </div>
                    </div>
                    <!--END-->
                    <div class="form-horizontal form-horizontal2">
                        <div class="control-group">
                            <label class="control-label">绑定银行：</label>
                            <div class="controls inputMD">
                                <span class="help-float" id="bank"></span>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">开户人姓名：</label>
                            <div class="controls inputMD">
                                <span class="help-float" id="holder"></span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">银行账号：</label>
                            <div class="controls inputMD">
                                <span class="help-float" id="cardNO"></span>
                            </div>
                        </div>
                        <div class="control-group" style="display:none">
                            <label class="control-label">联系电话：</label>
                            <div class="controls inputMD">
                                <span class="help-float" id="fphone"></span>
                            </div>
                        </div>
                        <div class="control-group" style="display:none">
                            <label class="control-label">联系QQ：</label>
                            <div class="controls inputMD">
                                <span class="help-float" id="fQQ"></span>
                            </div>
                        </div>
                    </div>
                    <div class="acenter"><a href="javascript:;" onclick="BankCards.submit()" class="btn">提交</a><a href="javascript:;" onclick="BankCards.back()" class="btn">返回</a></div>
                </div>
            </div>
            <div id="userInfo-Tpl" style="display:none">
                <div class="ui-form-wrap-box" style="margin-top:0;">
                    <span style="color:red;display:none;">为了您的账户资金安全，本次出款需要您完善联系方式，否则将无法出款。</span>
                    <div>
                        <label class="dib tr">联系电话：</label>
                        <label class="dib"><input type="text" id="phone" onkeypress="return (/[\d.]/.test(String.fromCharCode(event.keyCode || event.which)))" name="PhoneNo" class="w100 _PhoneNo" maxlength="20"></label>
                    </div>
                    <div>
                        <label class="dib tr">联系QQ：</label>
                        <label class="dib"><input type="text" id="qq" name="QQ" onkeypress="return (/[\d.]/.test(String.fromCharCode(event.keyCode || event.which)))" class="w100 _QQ" maxlength="12"></label>
                    </div>
                    <div class="tc mt10px">
                        <a href="javascript:;" class="btn" id="bind_email_btn">&nbsp;保存&nbsp;</a>
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
            <script src="/js_new/userCenter/UserCenter.Index.js"></script>
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
    <script src="/js_new/common/jquery.signalR-2.1.1.min.js.下载"></script>
    <script src="/js_new/WG.RegisterUser.js.下载"></script>
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

</body></html>