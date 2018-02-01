
<!--script type="text/javascript" src="/js/nsc/common.js"></script-->
<!-- 切换背景功能 -->
<link rel="stylesheet" href="/css/nsc/bg_skin.css" rel="stylesheet" type="text/css">
<div class="skin-mask"></div>
<div class="skin-box">
    <span class="close_box"></span>
    <div class="skin_tit"><i></i>更换背景</div>
    <div class="skin_main">
        <div class="skin_div">
        <ul class="skin_ulbox clerafix">
            <li data="nsc_background01"><a href="javascript:(0);"><img src="/images/nsc/skin_bg/skin-img01.jpg"></a><span>默认</span></li>
            <li data="nsc_background02"><a href="javascript:(0);"><img src="/images/nsc/skin_bg/skin-img02_small.jpg"></a><span>云樱</span></li>
            <li data="nsc_background03"><a href="javascript:(0);"><img src="/images/nsc/skin_bg/skin-img03_small.jpg"></a><span>春桃</span></li>
            <li data="nsc_background04"><a href="javascript:(0);"><img src="/images/nsc/skin_bg/skin-img04_small.jpg"></a><span>都市</span></li>
            <li data="nsc_background05"><a href="javascript:(0);"><img src="/images/nsc/skin_bg/skin-img05_small.jpg"></a><span>歌剧魅影</span></li>
            <li data="nsc_background06"><a href="javascript:(0);"><img src="/images/nsc/skin_bg/skin-img06_small.jpg"></a><span>梦幻</span></li>
            <li data="nsc_background07"><a href="javascript:(0);"><img src="/images/nsc/skin_bg/skin-img07_small.jpg"></a><span>魔境</span></li>
            <li data="nsc_background08"><a href="javascript:(0);"><img src="/images/nsc/skin_bg/skin-img08_small.jpg"></a><span>蔚蓝</span></li>
            <li data="nsc_background09"><a href="javascript:(0);"><img src="/images/nsc/skin_bg/skin-img09_small.jpg"></a><span>午夜</span></li>
            <li data="nsc_background10"><a href="javascript:(0);"><img src="/images/nsc/skin_bg/skin-img10_small.jpg"></a><span>足球宝贝</span></li>
        </ul>
        </div>
        <div class="skin_page"><a href="javascript:(0);" class="btn_default"><i class="ic-hfmr"></i>恢复默认</a><a href="javascript:(0);" class="btn_cancel">取 消</a><a href="javascript:(0);" class="btn_set"><i class="ic-bcsz"></i>保存设置</a></div>
    </div>
</div>

<div class="login_main clearfix">
	<div class="warp980">
		<div class="air_box">
			<div class="air_box_t">
				<div class="airflash" id="air_top">
    				<div id="flashcontent" style=" width:220px; height:140px; margin:0 auto;">
    				</div>
    				
    			</div>
    			<dl class="download-line">
			    	<dt>手动下载地址</dt>
			        <dd>
			        	<a href="javascript:void(0)" onclick="jjtc();" target="_blank">
			        		线路1
			        	</a>
			        </dd>
			        <dd>
			        	<a href="javascript:void(0)" onclick="jjtc();" target="_blank">
			        		线路2
			        	</a>
			        </dd>
			        <dd>
			        	<a href="javascript:void(0)" onclick="jjtc();" target="_blank">
			        		线路3
			        	</a>
			        </dd>
			    </dl>
			</div>
			<div class="air_box_b">
				<p class="line_hint">
					线路失效？请
					<a href="javascript:void(0);" onclick="return isclient('<?=$this->settings['kefuGG']?>');" title="在线客服">
						联系客服
					</a>
				</p>
				<a href="javascript:void(0)" onclick="jjtc();" target="_blank" class="adobe_download">
					下载Adobe Air
				</a>
			</div>
		</div>
		<div class="same_box phone_box">
			<div class="left">
	    		<h3>安卓客户端</h3>
	    		<p>下载地址：</p>
	    		<a href="javascript:void(0)" onclick="jjtc();" class="icon-Android" target="_blank">
	    			Android
	    		</a>
	    		<a href="javascript:void(0)" onclick="jjtc();" class="icon-PC" target="_blank">
			    	PC端下载
			    </a>
    		</div>
    		<div class="img">
    			<img src="/images/nsc/login/anzuo.png?v=1.16.11.5" />
    		</div>
		</div>
		<div class="same_box pt_box">
			<div class="left">
			    <h3>苹果客户端</h3>
			    <p>下载地址：</p>
			    <a href="javascript:void(0)" onclick="jjtc();" class="icon-iPhone" target="_blank">
	    			iPhone
	    		</a>
			    <a href="javascript:void(0)" onclick="jjtc();" class="icon-PC" target="_blank">
			    	PC端下载
			    </a>
		    </div>
		    <div class="img">
		    	<img src="/images/nsc/login/iPhone.png?v=1.16.11.5" />
		    </div>
		</div>
	</div>
</div>
<div class="login_footer">
	<div class="warp980">
		<div class="img"></div>
		<div class="clearfix">
			<p class="t-left">
				浏览器建议：首选为Google浏览器，其次为火狐和IE9或IE10浏览器<br />分辨率建议：使用1024×768以上的分辨率
			</p>
			<p class="t-right">
				未满18周岁禁止购买<br />
				Copyright © SinCai 2010-2016  杏彩娱乐 版权所有
			</p>
		</div>
	</div>
</div>
<script type='text/javascript'>
function zxkf(){
	 <?php if($this->settings['kefuStatus']){ ?>
	layer.open({
	  type: 2,
	  area: ['800px', '550px'],
	  zIndex:1999,
	  //fixed: false, //不固定
	  title:'在线客服',
	  scrollbar: false,//屏蔽滚动条
	  //maxmin: true,
	  content:'<?=$this->settings['kefuGG']?>'
	});
	<?php }else{?>
	$.alert("客服系统维护中");
	<?php }?>
	return false;
}
function qqkf(){
	<?php if($this->settings['qqkefuStatus']){ ?>
	layer.open({
	  type: 2,
	  area: ['800px', '550px'],
	  zIndex:1999,
	  //fixed: false, //不固定
	  title:'在线客服',
	  scrollbar: false,//屏蔽滚动条
	  //maxmin: true,
	  content:'http://wpa.qq.com/msgrd?uin=<?=$this->settings['qqkefuGG']?>'
	});
	<?php }else{?>
	$.alert("客服系统维护中");
	<?php }?>
	return false;
}
</script> 
<!--侧边栏-->
<script src="/js/nsc/velocity.min.js?v=1.16.11.5" charset="utf-8"></script>
<script src="/js/nsc/zr-script.js?v=1.16.11.5" charset="utf-8"></script>
<div class="sidebar" id="sidebar">
	<a href="/index.php" class="sidebar-div home"><i class="ic-home"></i>回到首页</a>
	<a  href="javascript:void(0)" onclick="zxkf();" class="sidebar-div"><i class="ic-online"></i>在线客服</a>
	<a datatype="json" call="indexSign" target="ajax" href="/index.php/display/sign" class="sidebar-div"><i class="iconfont">&#xe64d;</i>天天签到</a>
	<!--a  href="javascript:void(0);" url="/index.php/liaotian/chat" class="sidebar-div chongzhi"><i class="iconfont">&#xe60b;</i>多人聊天</a-->
	<!--a href="/?controller=help&action=main&tag=cjwt" class="sidebar-div"><i class="ic-help"></i>疑问解答</a-->
	<!-- <a href="javascript:void(0);" class="sidebar-div"><i class="ic-down"></i>专享下载</a> -->
	<a href="javascript:voiceKJ();" class="sidebar-div"><i class="ic-sound soundClickEvent"></i>声音控制</a>
	<a href="javascript:void(0);" class="sidebar-div" id="sidebarGoTop"><i class="ic-top"></i>返回顶部</a>
	<!--<div class="sidebar-div down" id="mdown-show">手机下载<i class="link"></i></div>-->
</div>

<div class="zr-mobile-down" align="center">
	<div class="zr-container" align="left">
		<ul>
			<li class="log"></li>
			<li class="text">
				<p>手机移动端APP 真实娱乐更便捷</p>
				<p class="t2">扫码下载！随时随地，想玩就玩</p>
			</li>
			<li class="QR-code"><img src="/images/nsc/login/wap.png?v=1.16.11.5" width="98" height="98"/></li>
			<!-- <li>
				<a href="#" class="down-link-iphone"></a>
				<a href="#" class="down-link-android"></a>
			</li> -->
		</ul>
		<button class="close" id="mdown-close"></button>
	</div>
	<div id="mdown-show" style="display: block;">手机下载<i class="link"></i></div>
</div>
<link rel="stylesheet" type="text/css" href="/css/nsc/guide.css?v=1.16.11.5">

<div id="wanjinDialog"></div>