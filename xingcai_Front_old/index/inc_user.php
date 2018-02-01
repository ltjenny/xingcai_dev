

<link href="/css/nsc/reset.css" rel="stylesheet" type="text/css" />
<link href="/css/nsc/warp.css" rel="stylesheet" type="text/css" />
<link href="/css/nsc/foot.css" rel="stylesheet" type="text/css" />

<!--link href="/css/nsc/lottery.css" rel="stylesheet" type="text/css" /-->


</head>
<body>
	<div class="warpBg">
		<div class="warp">
	<div class="top">
	<div class="lot_info right">
	<div class="welcome left">
		<span class="username right"><?=$this->user['username']?></span>
		<span class="welcome_msg right">欢迎您，</span>
	</div>
	<div class="top_msg left re">
		<a href="/index.php/box/receive" icon="usermsg" title="用户消息" class="msg_icon" id="userMessage" target="_blank"></a>
		<span class="msg_num"><a href="/index.php/box/receive" target="_blank"><?php $this->display('index/inc_msg.php');?></a></span>	</div>
	<div class="top_skin left re"><i class="ic-skin t_skin"></i></div>
	<div class="logout left">
		<a href="javascript:loginout()">退出</a>
	</div>
	<!--<div class="obligate left">
		预留信息:<a class="edit" href="/?controller=user&action=main&tag=changename" target="_blank"></a>
	</div>-->
    </div>

	<div class="logo left"><a href="">杏彩娱乐</a></div>

	<div class="left nav navList">
		<ul>
			<li><a href="/">首页</a></li>
			<li class="cpyx re"><a href="javascript:void(0);">彩票游戏</a>
				<div class="nav_child">
				  	<dl>
						<dt>高频彩</dt>
								<dd><a data="L-1" href="/index.php/index/game/1/6/37/重庆时时彩">重庆时时彩<i class="hot"></i></a></dd>
                                <dd><a data="L-6" href="/index.php/index/game/12/6/37/新疆时时彩">新疆时时彩</a></dd>
                                <dd><a data="L-13" href="/index.php/index/game/60/6/37/天津时时彩">天津时时彩</a></dd>
								<dd><a data="L-13" href="/index.php/index/game/61/72/215/澳门时时彩">澳门时时彩<i class="hot"></i></a></dd>
								<dd><a data="L-13" href="/index.php/index/game/62/72/215/台湾时时彩">台湾时时彩<i class="hot"></i></a></dd>
								<dd><a data="L-14" href="/index.php/index/game/14/72/215/河内5分彩">河内5分彩</span></a></dd>
								<dd><a data="L-19" href="/index.php/index/game/26/72/215">河内2分彩</a></dd>
                                <dd><a data="L-19" href="/index.php/index/game/5/72/215">河内1分彩</a></dd>
								<dd><a data="L-19" href="/index.php/index/game/75/72/215">巴西快乐彩</a></dd>
                                <dd><a data="L-25" href="/index.php/index/game/76/72/215/巴西1.5分彩">巴西1.5分彩<i class="new"></i></a></dd>
								<dd><a data="L-19" href="/index.php/index/game/69/16/澳门3D">澳门3D</a></dd>
								<dd><a data="L-19" href="/index.php/index/game/70/16/台湾3D">台湾3D</a></dd>
							<!--	<dd><a data="L-13" href="/index.php/index/game/77/高速六合彩">高速六合彩<i class="hot"></i></a></dd>  -->
						
								
                            </dl>
                            <dl>
                               <dt >快乐八&PK拾</dt>
                                <dd><a data="L-9" href="/index.php/index/game/78/北京快乐8">北京快乐8<i class="new"></i></a></dd>
								<dd><a data="L-9" href="/index.php/index/game/73/澳门快乐8">澳门快乐8</a></dd>
								<dd><a data="L-9" href="/index.php/index/game/74/韩国快乐8">韩国快乐8</a></dd>
								<dd><a data="L-24" href="/index.php/index/game/20/29/北京PK拾">北京PK拾<i class="new"></i></a></dd>
								<dd><a data="L-23" href="/index.php/index/game/66/29/台湾PK拾">台湾PK拾<i class="new"></i></a></dd>
								<dd><a data="L-23" href="/index.php/index/game/65/29/澳门PK拾">澳门PK拾<i class="new"></i></a></dd>
                            </dl>
                            <dl>
							
                                <dt>乐透彩</dt>
                                <dd><a data="L-8" href="/index.php/index/game/15/上海11选5">上海11选5</a></dd>
                                <dd><a data="L-8" href="/index.php/index/game/6/广东11选5">广东11选5<i class="hot"></i></a></dd>
                                <dd><a data="L-7" href="/index.php/index/game/16/江西11选5">江西11选5</a></dd>
                                <dd><a data="L-5" href="/index.php/index/game/7/山东11选5">山东11选5</a></dd>
								<dd><a data="L-5" href="/index.php/index/game/67/澳门11选5">澳门11选5<i class="hot"></i></a></dd>
								<dd><a data="L-5" href="/index.php/index/game/68/台湾11选5">台湾11选5<i class="new"></i></a></dd>
                            </dl>
                            <dl >
                                <dt>低频彩</dt>
                                <dd><a data="L-11" href="/index.php/index/game/9/3D福彩">3D福彩<i class="hot"></i></a></dd>
                                <dd><a data="L-12" href="/index.php/index/game/10/排列3">排列3</a></dd>
							<!--	<dd><a data="L-20" href="/index.php/index/game/34/香港六合彩">香港六合彩<i class="new"></i></a></dd>  -->
							</dl>
							<dl>
                                <dt>快三&幸运农场</dt>
                                <dd><a data="L-15" href="/index.php/index/game/79/江苏快三">江苏快三<i class="new"></i></a></dd>
                                <dd><a data="L-11" href="/index.php/index/game/63/澳门快三">澳门快三</a></dd>
								<dd><a data="L-12" href="/index.php/index/game/71/澳门幸运农场">澳门幸运农场</a></dd>
								<dd><a data="L-12" href="/index.php/index/game/64/台湾快三">台湾快三<i class="hot"></i></a></dd>
								<dd><a data="L-12" href="/index.php/index/game/72/台湾幸运农场">台湾幸运农场<i class="new"></i></a></dd>
                            </dl>
				</div>
			</li>
		
			<li><a href="javascript:void(0);">账户管理</a>
				<div class="nav_child nav_child2">
							<p><a href="/index.php/record/search" icon="yxbb">投注记录</a></p>
                            <p><a href="/index.php/report/coin" data="T-bdkh" icon="bdkh">帐变记录</a></p>
                            <p><a href="/index.php/report/count" data="T-czxx" icon="czxx">盈亏报表</a></p>
							<p><a href="/index.php/safe/passwd" data="T-mmaq" icon="mmaq">密码安全</a></p>
							<p><a href="/index.php/safe/info" data="T-bdkh" icon="bdkh">绑定卡号</a></p>
				</div>
			</li>
			<?php if($this->user['type']){ ?>
						<li><a href="javascript:void(0);">团队管理</a>
				<div class="nav_child nav_child2">
							<p><a href="/index.php/team/memberList" data="T-tdbb" icon="tdbb">会员列表</a></p>
							<p><a href="/index.php/team/gameRecord" data="T-zcgl" icon="zcgl">团队记录</a></p>
							<p><a href="/index.php/team/coin" data="T-bdkh" icon="bdkh">团队帐变</a></p>
                            <p><a href="/index.php/team/report" data="T-yhlb" icon="yhlb">团队盈亏</a></p>
                            <p><a href="/index.php/team/addlink" data="T-tgsd" icon="tgsd">推广设定</a></p>
				</div>
			</li>
			    <?php } ?>
						<li><a href="javascript:void(0);">活动公告</a>
				<div class="nav_child nav_child2">
							<p><a href="/index.php/score/rotate">热门活动</a></p>
							<p><a href="/index.php/cash/card">点卡充值</a></p>
                            <p><a class="notice" href="javascript:void(0)" url="/index.php/notice/info">系统公告</a></p>				
				</div>
			</li>
		</ul>
	</div>
</div>

</div>

</body>
</html>
