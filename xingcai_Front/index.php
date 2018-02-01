


<!DOCTYPE html>
<!--[if lte IE 8]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <title></title>
    <meta content="origin-when-cross-origin" name="referrer" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="Shortcut Icon" href="/Images/ICO/yuducaipiao/favicon.ico" />
    <link rel="Bookmark" href="/Images/ICO/yuducaipiao/favicon.ico" />
    <link rel="stylesheet" href="/css_new/index/main.css?dafcad239a" />
    <link rel="stylesheet" href="/css_new/jquery.rondell.css?d15ce96fe0" />
    <link href="/js_new/Common/artDialog6/ui-dialog.css?ae7e700648" rel="stylesheet" />
    <script src="/js_new/dist/$.ko.js?a876144a3a"></script>
    <script src="/js_new/Common/artDialog6/dialog-plus-min.js?4786a25c83"></script>
    <script src="/js_new/dist/official/utils.min.js?94126d98c6"></script>
    <script src="/js_new/Common/modernizr.custom.js?44a0670bed"></script>
</head>

<body class="official-site" x-ms-format-detection="none">
    
    <div class="popup_tc" id="popup_tc" style="display:none; position:fixed;left:0;top:0;width:100%;height:100%;background:rgba(0,0,0,0.8)">
        <div class="popup_tc" style="width: 400px; height: 256px; position: absolute;top:50%;left:50%;margin-top:-128px;margin-left:-200px; background: #fff;  z-index: 9998;">
            <div class="tc_center">
                <div class="popup_top">
                    <div class="tips_o">操作提示</div>
                    <a class="d-close" href="javascript:;" onclick="popclose('popup_tc')">×</a>
                </div>
                <div class="popup_center">
                    <p>正在建设中，敬请期待。。。</p>
                </div>
                <div class="popup_bottom">
                    <div class="d-buttons"><input type="button" class="popup_button" value="确定" onclick="popclose('popup_tc')"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- container -->
    <div class="container">
        <!-- header -->
        <div class="top-box">
            <div class="main clear">
                <div class="logo_only"></div>
                <div class="bar-left"><span>PLAY RESPONSIBLY</span><label id="nowTime" class="now-time">--</label></div>
                <div class="bar-right">
                    <div class="fright">
                        <div id="LOGIN-FORM">
                            <form autocomplete="off" action="/Home/login" method="post" data-bind="submit:submit">
                                <input type="text" style="visibility:hidden;position:absolute;z-index:-999;" />
                                <input type="password" style="visibility:hidden;position:absolute;z-index:-999;" />
                                <div class="login-area">
                                    <span class="login-mane">
                                        <input class="input_tip" type="text" maxlength="20" data-bind="textinput:fields.username,placeholder:'账号|tip_form'" needed>
                                    </span>
                                    <span class="login-password">
                                        <input class="input_tip" type="password" maxlength="20" data-bind="textinput:fields.password,placeholder:'密码|tip_form'" needed>
                                    </span>
                                    <span class="login-code">
                                        <input type="text" class="input_tip input_tip_45" data-bind="textinput:fields.validateCode,placeholder:'验证码|tip_form tip_forms'" needed>
                                        <img width="58" height="24" src="" style="background-color:white;" data-bind="attr:{src:'/Home/ValidateCode?'+random()},click:refreshCode" alt="验证码" title="点击切换验证码" />
                                    </span>
                                    <a title="登录" href="javascript:void(0)" class="btn-login" style="position:relative">
                                        <span data-bind="text:isSubmitting()?'登录中...':'登录'">登录</span>
                                        <input type="submit" value="" class="btn-login" style="position:absolute;left:0;top:0;height:34px;width:100px;margin:0;filter:alpha(opacity=0);opacity:0;" />
                                    </a>
                                    <a title="免费开户" href="/Register?Intr=" class="btn-member bnt-register">免费开户</a>
                                    <a title="忘记密码" href="javascript:void(0)" id="forgetBtn" class="btn-member">忘记密码</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="mail-box" id="msg_box">
                        <a title="未读信息" class="btn-mail" href="javascript:;" id="msg_box"></a>
                        <a href="javascript:;" class="ui-mail-tip-box dn" id="msg_info"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="main">
                <div class="header-main ">
                    <div class="logo_icon">
                        <div class="logo fleft">
                            <a href="/"></a>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="menu">
                            <ul class="clear">
                                <li data-item="lot_hall" id="lot_hall">
                                    <a href="javascript:;" class="lottery" data-item="lot_hall">
                                        <div>购彩大厅</div>
                                        <span>LOTTERY</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/index.php/together/togetherCenter" class="UserCenter">
                                        <div>合买中心</div>
                                        <span>TOGETHER</span>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="javascript:void(0)" class="UserCenter">
                                        <div>美女直播</div>
                                        <span>LIVING</span>
                                    </a>
                                </li> -->
                                <li>
                                    <a href="/index.php/team/memberList" class="UserCenter">
                                        <div>团队管理</div>
                                        <span>TEAM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/index.php/userCenter/userInfo" class="UserCenter">
                                        <div>用户中心</div>
                                        <span>USERCENTER</span>
                                    </a>
                                </li>
                                <li >
                                    <a href="/Activity" class="Activity">
                                        <div>优惠活动</div>
                                        <span>ACTIVITY</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/UserCenter/Notice" class="Announncement">
                                        <div>平台公告</div>
                                        <span>ANNOUNCEMENT</span>
                                    </a>
                                </li>
                                <li >
                                    <a href="/Mobile" class="mobile">
                                        <div>手机采购</div>
                                        <span>MOBILE</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu-child1" style="display:none;" id="lot_sec_menu">
                            <div class="gamelist-1 clear">
                                <div class="official_play">
                                    <div class="gamelist_tit clear">
                                        <h1 class="red_style">官方玩法</h1>
                                        <div class="color">官</div>
                                    </div>
                                    <div class="high_wrap">
                                        <div class="gamelist_l">
                                            <ul>
                                                <li>
                                                    <!--<a class="game_26" href="/OffcialOtherGame/Index/26"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/ZQSSC.png?_=20160805" /></a>-->
                                                    <a class="game_26" href="/index.php/game/chongqing"><img src="/images/main/ZQSSC.png?_=20160805" /><span class="hot"><font>重庆时时彩</font></span></a>
                                                </li>
                                                <li>
                                                    <!--<a class="game_29" href="/OffcialOtherGame/Index/29"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/BJPKS.png?_=20160805" /></a>-->
                                                    <a class="game_29" href="/index.php/game/beijing"><img src="/images/main/BJPKS.png?_=20160805" /><span class="hot"><font>北京PK拾</font></span></a>
                                                </li>
                                                <li>
                                                    <!--<a class="game_30" href="/OffcialOtherGame/Index/30"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/FC3D.png?_=20160805" /></a>-->
                                                    <a class="game_30" href="/index.php/game/fucai"><img src="/images/main/FC3D.png?_=20160805" /><span class="hot"><font>福彩3D</font></span></a>
                                                </li>
                                                <li>
                                                    <!--<a class="game_40" href="/OffcialOtherGame/Index/40"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/XJSSC.png?_=20160805" /></a>-->
                                                    <a class="game_40" href="/index.php/game/xinjiang"><img src="/images/main/XJSSC.png?_=20160805" /><span class="hot"><font>新疆时时彩</font></span></a>
                                                </li>
                                                <li>
                                                    <!--<a class="game_42" href="/OffcialOtherGame/Index/42"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/TJSSC.png?_=20160805" /></a>-->
                                                    <a class="game_42" href="/index.php/game/tianjing"><img src="/images/main/TJSSC.png?_=20160805" /><span class="hot"><font>天津时时彩</font></span></a>
                                                </li>
                                                <li>
                                                    <!--<a class="game_44" href="/OffcialOtherGame/Index/44"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/PLSW.png?_=20160805" /></a>-->
                                                    <a class="game_44" href="/OffcialOtherGame/Index/44"><img src="/images/main/PLSW.png?_=20160805" /><span class="hot"><font>排列三、五</font></span></a>
                                                </li>
                                                <li>
                                                    <!--<a class="game_39" href="/OffcialOtherGame/Index/39"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/JSKS.png?_=20160805" /></a>-->
                                                    <a class="game_39" href="/index.php/game/jiangsukuaisan"><img src="/images/main/JSKS.png?_=20160805" /><span class="hot"><font>江苏快三</font></span></a>
                                                </li>
                                                <li>
                                                    <!--<a class="game_61" href="/OffcialOtherGame/Index/61"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/JNDKLC.png?_=20160805" /></a>-->
                                                    <a class="game_61" href="/OffcialOtherGame/Index/61"><img src="/images/main/JNDKLC.png?_=20160805" /><span class="hot"><font>加拿大3.5分</font></span></a>
                                                </li>
                                                <li>
                                                    <!--<a class="game_68" href="/OffcialOtherGame/Index/68"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/AZ3FC.png?_=20160805" /></a>-->
                                                    <a class="game_68" href="/OffcialOtherGame/Index/68"><img src="/images/main/AZ3FC.png?_=20160805" /><span class="hot"><font>澳洲3分彩</font></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="credit_play">
                                    <div class="gamelist_tit clear">
                                        <h1 class="orange_style">信用玩法</h1>
                                        <div class="color">信</div>
                                    </div>
                                    <div class="high_wrap">
                                        
                                        <div class="gamelist_r">
                                            <ul>
                                                <li>
                                                    <!--<a class="game_1" href="/six/index"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/⑥HC.png?_=20160805" /></a>-->
                                                    <a class="game_1" href="/index.php/game/xianggangliuhecai"><img src="/images/main/⑥HC.png?_=20160805" /><span class="hot"><font>香港六合彩</font></span></a>
                                                </li>
                                                <li>
                                                    <!--<a class="game_7" href="/OtherGame/Index/7"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/ZQSSC.png?_=20160805" /></a>-->
                                                    <a class="game_7" href="/OtherGame/Index/7"><img src="/images/main/ZQSSC.png?_=20160805" /><span class="hot"><font>重庆时时彩</font></span></a>
                                                </li>
                                                <li>
                                                    <!--<a class="game_9" href="/OtherGame/Index/9"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/TJSSC.png?_=20160805" /></a>-->
                                                    <a class="game_9" href="/OtherGame/Index/9"><img src="/images/mainn/TJSSC.png?_=20160805" /><span class="hot"><font>天津时时彩</font></span></a>
                                                </li>
                                                <li>
                                                    <!--<a class="game_10" href="/OtherGame/Index/10"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/XJSSC.png?_=20160805" /></a>-->
                                                    <a class="game_10" href="/OtherGame/Index/10"><img src="/images/main/XJSSC.png?_=20160805" /><span class="hot"><font>新疆时时彩</font></span></a>
                                                </li>
                                                <li>
                                                    <!--<a class="game_13" href="/OtherGame/Index/13"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/ZQKS.png?_=20160805" /></a>-->
                                                    <a class="game_13" href="/OtherGame/Index/13"><img src="/images/main/ZQKS.png?_=20160805" /><span class="hot"><font>幸运农场</font></span></a>
                                                </li>
                                                <li>
                                                    <!--<a class="game_15" href="/OtherGame/Index/15"><img src="https://zy11sbsbqt.lfjieweisi.com//Content/dingsheng/images/gameIcon/BJPKS.png?_=20160805" /></a>-->
                                                    <a class="game_15" href="/OtherGame/Index/15"><img src="/images/main/BJPKS.png?_=20160805" /><span class="hot"><font>北京PK拾</font></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="triangles_back"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- header end -->
        <!--  插入内容  -->
        
        <div class="main_wrap">
            <div class="content">
                <div class="home-con">
                    <div class="banner">
                        <div class="wrapper">
                            <div class="swiper-container" style="height:100%">
                                <div class="swiper-wrapper" style="height:100%">
                                    <div class="swiper-slide" style="background: url(/images/main/W_20170226000315.jpg) no-repeat center center;"></div>
                                    <div class="swiper-slide" style="background: url(/images/main/W_20170225231505.jpg) no-repeat center center;"></div>
                                    <div class="swiper-slide" style="background: url(/images/main/W_20170225235534.jpg) no-repeat center center;"></div>
                                </div>
                                <div class="controller">
                                    <a href="javascript:;" class="prev prev-one" id="prev_btn">
                                        <img src="/images/main/arrow_left.png" alt="" class="img_hidden" />
                                    </a>
                                    <a href="javascript:;" class="next next-one" id="next_btn">
                                        <img src="/images/main/arrow_right.png" alt="" class="img_hidden" />
                                    </a>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mq">
                        <div class="mq-mask" id="notices">
                            
                        </div>
                    </div>
                    <div class="more_game">
                        <div class="hot_game_play">
                            <h2></h2>
                        </div>
                        <div class="middle_min">
                            <div class="more_game_middle">
                                <div class="game_kind clear">
                                    <div class="kind_bg_o">
                                        <a href="/OtherGame/Index/7">重庆时时彩</a>
                                        <div class="right_tag_o"></div>
                                        <a href="/OtherGame/Index/7" class="tag_ic"></a>
                                    </div>
                                    <div class="kind_bg_c">
                                        <a href="/OtherGame/Index/22">江苏快三</a>
                                        <div class="right_tag_c"></div>
                                        <a href="/OtherGame/Index/22" class="tag_ic"></a>
                                    </div>
                                    <div class="kind_bg_s">
                                        <a href="/OtherGame/Index/15">北京赛车</a>
                                        <div class="right_tag_s"></div>
                                        <a href="/OtherGame/Index/15" class="tag_ic"></a>
                                    </div>
                                    <div class="kind_bg_p">
                                        <a href="/Six/Index">六合彩</a>
                                        <div class="right_tag_p"></div>
                                        <a href="/Six/Index" class="tag_ic"></a>
                                    </div>
                                </div>
                                <div class="columns">
                                    <div class="col_a clearfix">
                                        <h1 class="hotgame_tit">
                                            <span class="hotgame_tits"></span>
                                        </h1>
                                        <div class="hot_game_toggle">官</div>
                                        
                                        <div class="hotgame_con">
                                                    <div class="official_games clear">
                                                        <ul>
                                                            <li class="official_game">官方玩法</li>
                                                            <li class="high_frequency">高频游戏</li>
                                                                    <li class="navlot15">
                                                                        <a href="/OffcialOtherGame/Index/26">重庆时时彩<i data-time="300" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                                    <li class="navlot15">
                                                                        <a href="/OffcialOtherGame/Index/29">北京PK拾<i data-time="300" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                                    <li class="navlot15">
                                                                        <a href="/OffcialOtherGame/Index/40">新疆时时彩<i data-time="300" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                                    <li class="navlot15">
                                                                        <a href="/OffcialOtherGame/Index/42">天津时时彩<i data-time="300" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                                    <li class="navlot15">
                                                                        <a href="/OffcialOtherGame/Index/39">江苏快三<i data-time="300" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                                    <li class="navlot15">
                                                                        <a href="/OffcialOtherGame/Index/61">加拿大3.5分<i data-time="300" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                                    <li class="navlot15">
                                                                        <a href="/OffcialOtherGame/Index/68">澳洲3分彩<i data-time="300" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                        </ul>
                                                        <ul class="play_hidden">
                                                            <li class="low_frequency">低频游戏</li>
                                                                    <li class="navlot15">
                                                                        <a href="/OffcialOtherGame/Index/30">福彩3D<i data-time="300" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                                    <li class="navlot15">
                                                                        <a href="/OffcialOtherGame/Index/44">排列三、五<i data-time="300" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                        </ul>
                                                    </div>

                                        </div>
                                    </div>
                                    <div class="col_b clearfix">
                                        <h1 class="hotgame_tit"></h1>
                                        <div class="hot_game_toggles">信</div>
                                        
                                        <div class="hotgame_con">
                                                    <div class="credit_games clear">
                                                        <ul>
                                                            <li class="credit_game">信用玩法</li>
                                                                    <li class="navlot11">
                                                                        <a href="/six/index">香港六合彩 <i data-time="48000" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                                    <li class="navlot11">
                                                                        <a href="/OtherGame/Index/7">重庆时时彩 <i data-time="48000" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                                    <li class="navlot11">
                                                                        <a href="/OtherGame/Index/9">天津时时彩 <i data-time="48000" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                                    <li class="navlot11">
                                                                        <a href="/OtherGame/Index/10">新疆时时彩 <i data-time="48000" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                                    <li class="navlot11">
                                                                        <a href="/OtherGame/Index/13">幸运农场 <i data-time="48000" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                                    <li class="navlot11">
                                                                        <a href="/OtherGame/Index/15">北京PK拾 <i data-time="48000" style="float:right;" class="lottime_go"></i></a>
                                                                    </li>
                                                        </ul>
                                                    </div>

                                        </div>
                                    </div>
                                    <div class="line"></div>
                                </div>
                                <div class="others">
                                    <div class="advantages">
                                        <h2></h2>
                                        <div class="payment_date clear">
                                            <div class="payment_date_l">
                                                <h3>存款</h3>
                                                <p>到账平均时间</p>
                                            </div>
                                            <div class="payment_date_r">
                                                <span class="pay_time">23<strong>秒</strong></span>
                                            </div>
                                            <div class="time_bar">
                                                <span class="bar_slide"></span>
                                            </div>
                                        </div>
                                        <div class="payment_date clear">
                                            <div class="payment_date_l">
                                                <h3>取款</h3>
                                                <p>到账平均时间</p>
                                            </div>
                                            <div class="payment_date_r">
                                                <span class="pay_time">2'02<strong>分</strong></span>
                                            </div>
                                            <div class="time_bar">
                                                <span class="bar_slide_n"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mobile_down">
                                        <h2></h2>
                                        <p>移动互联网时代，机会一手把握</p>
                                        <p>全面支持苹果APP 安卓APP 手机全部浏览器</p>
                                        <div class="down">
                                            <span class="apple"><a href="/Mobile"></a></span>
                                            <span class="android"><a href="/Mobile"></a></span>
                                            <span class="browser"><a href="/Mobile"></a></span>
                                        </div>
                                    </div>
                                    <div class="problem">
                                        <h2></h2>
                                        <div class="common">
                                            <ul>
                                                <li><a href="/Help/Deposit">存款问题</a></li>
                                                <li><a href="/Help/Techq">游戏帮助</a></li>
                                                <li><a href="/Help/Teller">取款问题</a></li>
                                                <li><a href="http://tb.53kf.com/webCompany.php?arg=10147846&style=1&fromthirdservice=webapp" target="_blank">联系客服</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <link href="/js_new/Common/swiper2.7.6/css/idangerous.swiper.css?594fc7a57f" rel="stylesheet" />
        <script src="/js_new/Common/swiper2.7.6/js/idangerous.swiper.min.js?2073ab22ec"></script>
        <script>
            $(function () {
                //底部热门游戏 - [官|信] 切换
                $('.hot_game_toggle a').click(function () {
                    var index = $(this).index();
                    $('.hotgame_con div').eq(index).show().siblings().hide();
                    $(this).addClass('active').siblings().removeClass('active')
                });
                var bannerItems = $('.swiper-container .swiper-slide');
                //只有一张图片时不操作
                if (bannerItems.length > 1) {
                    //轮播图
                    if (window.Swiper) {
                        var mySwiper = new Swiper('.swiper-container', {
                            //pagination: '.swiper-pagination',
                            loop: true,
                            grabCursor: true,
                            paginationClickable: true,
                            autoplay: 3000,
                            autoplayDisableOnInteraction: false,
                            speed: 300
                        })
                        $('#prev_btn').on('click', function (e) {
                            e.preventDefault();
                            mySwiper.swipePrev();
                        })
                        $('#next_btn').on('click', function (e) {
                            e.preventDefault();
                            mySwiper.swipeNext();
                        });
                    }
                } else {
                    $(".controller,.swiper-pagination").hide();
                }
            });
        </script>
        <div class="footer">
            <div class="bottom-info-main">
                <div class="footer_main clear">
                    <div class="bottom-info">
                        <div class="new-box">
                            <h1><em>技术支持</em><span class="lx_ico"></span></h1>
                            <div class="new-con clear">
                                <div class="footer_logo"></div>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-info">
                        <div class="new-box">
                            <h1><em>使用帮助</em><span>Guide</span></h1>
                            <div class="new-con">
                                <table class="guideTable">
                                    <tbody>
                                        <tr>
                                            <td><a href="/Help/Generalq">关于我们</a></td>
                                            <td>
                                                <a href="http://tb.53kf.com/webCompany.php?arg=10147846&style=1&fromthirdservice=webapp" target="_blank">联络我们</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="/Help/Generalq">合作伙伴</a></td>
                                            <td><a href="/Help/Deposit">存款帮助</a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="/Help/Teller">取款帮助</a></td>
                                            <td><a href="/Help/Generalq">常见问题</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-info">
                        <div class="new-box">
                            <h1><em>推荐浏览器</em><span>Browser</span></h1>
                            <div class="new-con">
                                <div class="clear">
                                    <ul class="browser-list commonlist notitle clear">
                                        <li>
                                            <a target="_blank" href="http://rj.baidu.com/soft/detail/14917.html"><i class="icon icon-browser icon-browserIE"></i><span>IE新版下载</span></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://rj.baidu.com/soft/detail/14744.html?ald"><i class="icon icon-browser icon-browserFF"></i><span>Chrome浏览器</span></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://rj.baidu.com/soft/detail/11843.html"><i class="icon icon-browser icon-browserGL"></i><span>Firefox浏览器</span></a>
                                        </li>
                                    </ul>
                                    <div class="browser-tip">
                                        <p>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
            <div class="main clear">
                <div class="copyright"> 未满18周岁禁止购买，Copyright © 2010-2017 御都彩票娱乐公司保留所有权利</div>
                <a href="#" class="btn btn-gotop"><i class="icon icon-gotop"></i></a>
            </div>
        </div>
        <!-- footer end -->
    </div>
    <!-- container end -->
    <!--公告-->
    <script type="text/html" id="tpl-message">
        <div>
            <div>
                <div class="side_left" data-bind="foreach:dialogNotice">
                    <div class="side_item">
                        <a href="javascript:;" data-bind="click:$parent.active.bind($data,$index()),css:$parent.activeIndex() == $index() ? 'active' : ''">
                            <span data-bind="text:FNoticeTitle"></span>
                        </a>
                    </div>
                </div>
                <div class="notice_main" data-bind="with:activeMessage">
                    <div class="notice_title"><h1 data-bind="text:FNoticeTitle"></h1></div>
                    <div class="notice_text">
                        <div class="fleft notice_item" style="text-align:left;word-break:break-all;" data-bind="html:FNoticeContent"></div>
                        <div class="fright" data-bind="visible: FIsShowTime">【<span data-bind="text:FLastEditTime"></span>】</div>
                    </div>
                </div>
            </div>
        </div>
    </script>
    <!--公告  end-->
    <input type="hidden" id="accountId" value="0" />
    <!-- sideBar end -->
    <div class="ui-md-box1">
        <a href="/Mobile"></a>
    </div>
    <div class="ui-md-box">
        <a href="http://tb.53kf.com/webCompany.php?arg=10147846&style=1&fromthirdservice=webapp" target="_blank" class="ui-t5-box"></a>
        <div class="ui-t4-box"></div>
    </div>

    <script src="/js_new/Common/jquery.md5.min.js?b9a2f4d724"></script>
    <script src="/js_new/Home/WG.Home.Common.js?d43cd0eb16"></script>

    <script type="text/javascript" src="/js_new/Home/WG.Home.UnRember.js?27585dc461"></script>
    <script src="/js_new/Home/WG.Home.Fn.js?91c07be8e7"></script>
    <script src="/js_new/Home/reg.common.js?3524e92385"></script>
    <script src="/js_new/WG.RegisterUser.js?78b9bba0bc"></script>
    <script src="/js_new/Common/jquery.signalR-2.1.1.min.js?40e112173f"></script>
    <script type="text/javascript">
        var SignalrSite = 'https://zycccppp.websocketcdn.com:8819/signalr', st = '2018-01-27 12:05:49', iis = 'https://zy11sbsbqt.lfjieweisi.com/';
        function popshow(showId) { document.getElementById(showId).style.display = 'block'; }
        function popclose(showId) { document.getElementById(showId).style.display = 'none'; }
        homeFn.message();
    </script>
</body>
</html>