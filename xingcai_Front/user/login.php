<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

    <title>登录</title>
    <link rel="stylesheet" href="/css_new/mapping/yuducaipiao/home/css/usercenter.css" />
    
    
    
    
    <style>
        .body {
            background: #808080;
        }

        body {
            position: static;
            width: auto;
            height: auto;
            overflow: hidden;
        }

        .QRcode {
            width: 128px;
            height: 112px;
            z-index: 2;
            padding-top: 52px;
        }

            .QRcode img {
                margin-left: 14px;
            }
    </style>
    <script type="text/javascript">
        var mobileUrl = '';
        if (mobileUrl != '') {
            if (/(iphone)|(ipad)|(android)/i.test(navigator.userAgent)) {
                if (!/\?mobile=no/.test(location.search)) {
                    location.href = mobileUrl;
                }
            }
        }
    </script>
</head>
<body class="body">
    <div class="contianer login-contianer">
        <div class="login-area">
            <div class="login_area_box">
                <div class="mainloginbox" id="LOGIN-FORM">
                    <div class="site-logo">
                                <div class="logo-items">
                                </div>

                    </div>
                    <div class="login_tit">
                        <h1>用户登陆</h1>
                        <!--<a href="#">线路选择</a> -->
                    </div>
                    <!-- <form action="/index.php/user/logined" method="post" onajax="userBeforeLogin" enter="true" call="userLogin" target="ajax">
                    <input name="username" type="text" class="input-username" id="username" maxlength="32" placeholder="输入用户名">
                    </form> -->
                    <form class="login-form" action="/index.php/user/logined" method="post" onajax="userBeforeLogin" enter="true" call="userLogin" target="ajax">
                        <input type="text" style="visibility:hidden;position:absolute;z-index:-999;" />
                        <input type="password" style="visibility:hidden;position:absolute;z-index:-999;" />
                        <ul>
                            <li><input type="text" class="fieldWithIcon2" data-bind="textinput:fields.username,placeholder:'帐号'" needed name="username" /></li>
                            <li><input type="password" class="fieldWithIcon3" data-bind="textinput:fields.password,placeholder:'密码'" needed name="password" /></li>
                            <li class="codewrap">
                                <input type="text" class="codeipt" data-bind="textinput:fields.validateCode,placeholder:'验证码'" needed name="vcode" />
                                <!-- <img class="validate" width="80" height="25" border="0" id="dvcode" style="cursor:pointer;" src="/index.php/user/vcode/<?=$this->time?>" title="点击刷新"  onClick="this.src='/index.php/user/vcode/'+(new Date()).getTime()"/> -->
                                <span class="codeBox">
                                    <img src="/index.php/user/vcode/<?=$this->time?>"  width="80" height="25" border="0" id="dvcode" style="cursor:pointer;" title="点击刷新"  onClick="this.src='/index.php/user/vcode/'+(new Date()).getTime()" />
                                </span>
                                <!--<p>(请避免在公共使用的电脑上进行操作)</p> -->
                            </li>
                            <li class="loginbtn">
                                <input type="submit" onclick="$(this).closest('form').submit();return false;" title="登录" class="btn btn_login" value="" data-bind="visible:!isSubmitting()" />
                                <span data-bind="visible:isSubmitting">正在登录中，请稍后...</span>
                            </li>
                                <li class="loginbtn">
                                    <a title="免费开户" class="btn btn_register" href="/Register?Intr="></a>
                                </li>
                            <li class="login_others">
                                <a href="javascript:;" id="forgetBtn" class="login_forgetpassword" style="line-height:40px;color:#eaeaec;display:inline-block;">忘记密码?</a>
                                <span class="separate">|</span>
                                <a href="http://tb.53kf.com/webCompany.php?arg=10147846&style=1&fromthirdservice=webapp" target="_blank" class="online_service" style="text-align:right;margin-top: 12px;color:#eaeaec;text-decoration:underline;font-size:14px;text-decoration:none;display:inline-block;">在线客服</a>
                                <span class="separate separate_hidden">|</span>
                                <a href="http://www.ltc1688.com/lt.html" target="_blank" class="btn-detection" style="text-align:right;margin-top: 12px;color:#eaeaec;text-decoration:underline;font-size:14px;text-decoration:none;">线路检测</a>

                            </li>
                            <li class="browser_hidden">
                                <p>推荐使用浏览器：</p>
                                <a href="http://rj.baidu.com/soft/detail/14744.html?ald" class="chrome_icon">Chrome</a>
                                <a href="http://rj.baidu.com/soft/detail/11843.html" class="firefox_icon">Firefox</a>
                            </li>
                        </ul>
                    </form>
                    <div clsas="clear_both"></div>
                </div>
            </div>
        </div>
        <!-- <div class="login_exhibition">
            
            <div class="download_link">
                <div class="advantages">
                    <div class="payment_date">
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
                    <div class="payment_date">
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
                    <p>移动互联网时代，机会一手把握</p>
                    <p>全面支持苹果APP 安卓APP 手机全部浏览器</p>
                    <div class="down">
                        <span class="apple"><a href="#"></a></span>
                        <span class="android"><a href="#"></a></span>
                        <span class="browser"><a href="#"></a></span>
                    </div>
                </div>
                <div id="EWMBOX" class="mobile_client">
                    <h2>手机客户端</h2>
                    <div class="client_downloads">
                        <p>下载地址：</p>
                        <a class="login_ios on" href="javascript:;"></a>
                        <a class="login_android" href="javascript:;"></a>
                    </div>
                    <div class="client_erweima">
                        <p style="display:block;"><img src="/Home/QrcodeImage?fID=2" alt="IOS" width="104" height="104" /></p>
                        <p><img src="/Home/QrcodeImage?fID=1" alt="ANDROID" width="104" height="104" /></p>
                    </div>
                </div>
            </div>
            
            
            <div class="footbox">

                <div class="footcon">

                    <div class="fotleft">
                        <div class="new-box new_titile">
                            <h1><em>技术支持</em><span class="lx_ico"></span></h1>
                            <div class="new-con clear">
                                <div class="footer_logo"></div>
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
                                            <a href="http://rj.baidu.com/soft/detail/14917.html" target="_blank"><i class="icon icon-browser icon-browserIE"></i><span>IE新版下载</span></a>
                                        </li>
                                        <li>
                                            <a href="http://rj.baidu.com/soft/detail/14744.html?ald" target="_blank"><i class="icon icon-browser icon-browserFF"></i><span>Chrome浏览器</span></a>
                                        </li>
                                        <li>
                                            <a href="http://rj.baidu.com/soft/detail/11843.html" target="_blank"><i class="icon icon-browser icon-browserGL"></i><span>Firefox浏览器</span></a>
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
                    <div class="fotright">
                        <div class="payments"></div>
                        <p class="fottxt2">未满18周岁禁止购买</p>
                        <p class="fottxt2">Copyright © 2010-2017 御都彩票版权所有</p>
                    </div>
                    <div class="clear_both"></div>
                </div>
            </div>
            

        </div> -->

    </div>
    <!-- <div class="QRcode" style="position:fixed;right:0;top:50%;margin-top:-82px;">
        <img src="/Home/QrcodeImage?fID=2" alt="IOS" width="100" height="100" />
    </div> -->
    <!-- <script type="text/javascript" src="/js_new/common/jquery-1.11.3.min.js"></script> -->
    <script type="text/javascript" src="/js/nsc/jquery-1.7.min.js?v=1.16.11.5"></script>
	
    <script type="text/javascript" src="/js_new/common/knockout-3.4.0.js"></script>
    <script src="/js_new/common/jquery.md5.min.js?b9a2f4d724"></script>
    <script type="text/javascript" src="/js_new/common/artDialog/jquery.artDialog.min.js"></script>
    <script src="/js_new/Home/reg.common.js"></script>
    <script src="/js_new/Home/WG.Home.UnRember.js"></script>

    <script type="text/javascript" src="/js/common/jquery.md5.js?v=1.16.11.5"></script>
    <script type="text/javascript" src="/js/nsc/dialogUI/jquery.dialogUI.js?v=1.16.11.5"></script>
    <script type="text/javascript" src="/js/nsc/dialogUI/jquery.dragdrop.js?v=1.16.11.5"></script>
    <script language="javascript" type="text/javascript" src="/js/common/jquery.md5.js?v=1.16.11.5"></script>
	
    <script type="text/javascript" src="/js/keypad/jquery.keypad.js?v=1.16.11.5"></script>
    <script type="text/javascript" src="/js/nsc/login.js?v=1.16.11.5"></script>
	<script type="text/javascript" src="/images/down/swfobject.js?v=1.16.11.5"></script>
    <script type="text/javascript" src="/skin/main/onload.js"></script>
    <script type="text/javascript" src="/skin/main/reglogin.js"></script>
    <script type="text/javascript">
         $(function () {
             var qc = $("#EWMBOX").children(".client_erweima")
             $("#EWMBOX").children(".client_downloads").delegate("a", "click", function () {
                 var index = $(this).index();
                 $(this).addClass("on").siblings("a.on").removeClass("on");
                 qc.children().eq(index - 1).show().siblings().hide();
             });
         });
    </script>
</body>
</html>