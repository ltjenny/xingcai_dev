<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>杏彩娱乐-官方网站</title>
<style>
html,body{width:100%; height:100%; margin:0; padding:0; background:#ebebed}
.main{width:100%; height:100%; color:#fff; font-family:'Microsoft YaHei'; text-align:center; background:url('/images/bg_xianlu.png') center 200px no-repeat;}
.main div{padding-top:370px; padding-bottom:20px; color:#C4B8EE;}
.main a{color:#c07dd1; font-size:16px; border:#c07dd1 solid 1px; border-radius:3px; padding:5px 15px 6px; text-decoration:none; opacity:0; transition:all .3s;}
.main a:hover{background-color:#c07dd1; color:#fff}
</style>
</head>
<body>
<div class="main">
	<div>LOADING <span id='load1'>.</span> <span id='load2'>.</span> <span id='load3'>.</span></div>
	<p><a href="/?st=0" id="enter">直接进入</a></p>
</div>
<div id="listDomain" style="display:none"><!--必须--></div>

<script id="domainResponseTpl" type="text/template">
<img class="item-img" tplISrc="#url#" stime="#stime#" src="#url#/point.bmp?#uid#" onload="domainResultSuccess(this,'#url#')" /> 
</script>

<script type="text/javascript">
(function(){ 
	var load1 = document.getElementById('load1').style,
		load2 = document.getElementById('load2').style,
		load3 = document.getElementById('load3').style,
		enter = document.getElementById('enter').style
	function loadNone(){ 
		load1.visibility = 'hidden';
		load2.visibility = 'hidden';
		load3.visibility = 'hidden';
	}
	setInterval(function(){
		loadNone();
		setTimeout(function(){load1.visibility = 'visible'},400)
		setTimeout(function(){load2.visibility = 'visible'},800)
		setTimeout(function(){load3.visibility = 'visible'},1200)
	},1500)
	setTimeout(function(){enter.opacity = '1'},3000)
})()
</script>

<script type="text/javascript">
var oUrls = "http://m.bb0044.com,http://m.xc0168.com,http://www.bb0044.com,http://www.xc0168.com,";
var Config = {DomainUrls:oUrls.split(',')}; 

function renderTpl(tpl, op) {  
	return tpl.replace(/#(\w+)#/g, function(e1, e2) {return op[e2] != null ? op[e2] : '';});
}

function setCookie(last_speedtest){
	var exdate = new Date();
	var ndate = Date.parse(exdate).toString();
	document.cookie= last_speedtest+ "=" + ndate.substring(0,10);
}

var SpeedTest = function(urls){
	var common={
		empty:function(){
		console.log("empty");
		}
	}
	var $ = function(id){
		var ele = document.getElementById(id);
		ele.empty=function(){
			var childs=this.childNodes;    
			for(var i=childs.length-1; i>=0; i--){    
				this.removeChild(childs.item(i));    
			}
		}
		return ele;
	}

	var init  = function(){
		this.complete      = [], 
		this.urls          = urls,
		this.completeKeyvalue = {},
		this.totalCount    = urls.length,
		this.listDomain    = $("listDomain"); 
		this.checkTpl      = $("domainResponseTpl").innerHTML;
		this.stopCount     = 20; 
		this.createDomainResponse();   
		this.timer(500);
	}

	init.prototype={ 
		uuid:function(){
			return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
		    	var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8);
		    	return v.toString(16);
			});
		},
		createDomainResponse:function(){
			this.listDomain.empty();
			var urlHtml = "";
				for(var i=0; i<this.totalCount; i++){ 
					var timelong = new Date().getTime();
					urlHtml +=  renderTpl(this.checkTpl,{url:urls[i], i:i, stime:timelong, uid:timelong});
			   } 
			this.listDomain.innerHTML=urlHtml;
		}, 
		
		loadingCompletedad:function(img, url){
			this.complete.push({
				"url":url, 
				"dif":parseInt((new Date().getTime()-img.getAttribute("stime"))/10)
			});
		},
		
		sort:function(){
			this.complete.sort(function sortNumber(a,b){
				return a.dif - b.dif;
			});
		},
		
		display:function(){
			var createCount = 1;
			var j = 0;
			setCookie('last_speedtest');
			for(var i=0, len=this.complete.length; i<len; i++){
				if(createCount >= 10){
					this.stopTimer();
					break;
				}
				if(this.totalCount<4){j = Math.floor(Math.random()*this.totalCount)}
				else {j = Math.floor(Math.random()*4);}
				window.location=this.complete[j].url+"/?st=0";
				console.log(this.complete[j].url)
				createCount ++;
			} 
		},
		
		timer:function(interval){
			var self = this, timerIntervalCount=1;
			self.Interval = setInterval(function(){
				if(self.complete.length >= self.totalCount || timerIntervalCount >= self.stopCount){
					self.stopTimer();
				}
				self.sort();
				self.display();
				timerIntervalCount++; 
			},interval) 
		},
		stopTimer:function(){ 
			clearInterval(this.Interval);
		}
	}
	return new init();
}

var speedTest = new SpeedTest(Config.DomainUrls); 

function domainResultSuccess(img, url){ 
	if(this.speedTest.completeKeyvalue[url] == undefined){
		this.speedTest.completeKeyvalue[url] = 0;
		this.speedTest.loadingCompletedad(img, url);
	}
}
</script>
</body>
</html>
