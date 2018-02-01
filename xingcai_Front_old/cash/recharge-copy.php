<!--//复制程序 flash+js------end-->
<link rel="stylesheet" type="text/css" href="/newskin/css/game-index.css">
<link rel="stylesheet" type="text/css" href="/newskin/css/game-mian.css">
<link rel="stylesheet" type="text/css" href="/newskin/css/manager.css">
<link rel="stylesheet" href="/css/nsc/chong-list.css?v=1.16.11.5" />


<?php
$this->freshSession();
$mBankId=$args[0]['mBankId'];
$sql="select mb.*, b.name bankName, b.logo bankLogo, b.home bankHome from {$this->prename}sysadmin_bank mb, {$this->prename}bank_list b where b.isDelete=0 and mb.id=$mBankId and mb.bankId=b.id";
$memberBank=$this->getRow($sql);
if($memberBank['bankId']==12){
?>
<!--左边栏body-->
<script type="text/javascript">
function test() {
           
			window.open("/lbkpay/Req.php");
            mDaoJiShi();
}
        //截止倒计时
        function mDaoJiShi() {
            document.getElementById("addmenber").value = "已提交";
            document.getElementById("addmenber").readOnly = true;
            document.getElementById("addmenber").disabled = true;
        }
</script>
    <script language="javascript">
      document.getElementById("frm1").submit();
    </script>


<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr class='table_b_th'>

    </tr>
     <tr height=25 class='table_b_tr_b'>
     
      <th scope="col" style="background: #FFFFFF;color: #000000;font-size: 15px;border:1px solid #e9e9e9;width: 50%;height: 50px;text-indent: 16px;">充值金额：<?=$args[0]['amount']?></th>
      <th scope="col" style="background: #fff;height:55px;width: 50%;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值编号 ：<?=$args[0]['rechargeId']?></th>
   
    </tr>
	<tr height=25 class='table_b_tr_h'>
    <td colspan="2" align="right" class="copyss">
	<div id="subContent_bet_re">
	<div class="form_switch_main">
	  <form action="/lbkpay/Req.php" method="POST" name="a32" target="_blank" id="frm1">
	  
	   
	        <!--td width="72" height="40" valign="middle"-->
			<div class="form_switch_head">
			<div class="form_item clearfix">
	          <div class="switch_choose">
			<input type="radio" name="paytype" value="962" id="utype1" checked="checked" title="中信银行">
			<label class="bk_l active" for="utype1">中信银行</label>
			<input type="radio" name="paytype" value="963" id="utype2" title="中国银行">
			<label class="bk_r" for="utype2">中国银行</label>
			<input type="radio" name="paytype" value="964" id="utype3" title="中国农业银行">
			<label class="bk_r" for="utype3">中国农业银行</label>
			<input type="radio" name="paytype" value="965" id="utype4" title="中国建设银行">
			<label class="bk_r" for="utype4">中国建设银行</label>
			<input type="radio" name="paytype" value="967" id="utype5" title="中国工商银行">
			<label class="bk_r" for="utype5">中国工商银行</label>
			<input type="radio" name="paytype" value="968" id="utype6" title="浙商银行">
			<label class="bk_r" for="utype6">浙商银行</label>
			<input type="radio" name="paytype" value="970" id="utype7" title="招商银行">
			<label class="bk_r" for="utype7">招商银行</label>
			<input type="radio" name="paytype" value="971" id="utype8" title="中国邮政">
			<label class="bk_r" for="utype8">中国邮政</label>
			<input type="radio" name="paytype" value="972" id="utype9" title="兴业银行">
			<label class="bk_r" for="utype9">兴业银行</label>
			<input type="radio" name="paytype" value="973" id="utype10" title="顺德信用合作社">
			<label class="bk_r" for="utype10">顺德信用合作社</label>
			<input type="radio" name="paytype" value="974" id="utype11" title="深圳发展银行">
			<label class="bk_r" for="utype11">深圳发展银行</label>
			<input type="radio" name="paytype" value="975" id="utype12" title="上海银行">
			<label class="bk_r" for="utype12">上海银行</label>
			<input type="radio" name="paytype" value="976" id="utype13" title="上海农村商业银行">
			<label class="bk_r" for="utype13">上海农村商业银行</label>
			<input type="radio" name="paytype" value="977" id="utype14" title="浦东发展银行">
			<label class="bk_r" for="utype14">浦东发展银行</label>
			<input type="radio" name="paytype" value="978" id="utype15" title="平安银行">
			<label class="bk_r" for="utype15">平安银行</label>
			<input type="radio" name="paytype" value="979" id="utype16" title="南京银行">
			<label class="bk_r" for="utype16">南京银行</label>
			<input type="radio" name="paytype" value="980" id="utype17" title="民生银行">
			<label class="bk_r" for="utype17">民生银行</label>
			<input type="radio" name="paytype" value="981" id="utype18" title="交通银行">
			<label class="bk_r" for="utype18">交通银行</label>
			<input type="radio" name="paytype" value="982" id="utype19" title="华夏银行">
			<label class="bk_r" for="utype19">华夏银行</label>
			<input type="radio" name="paytype" value="983" id="utype20" title="杭州银行">
			<label class="bk_r" for="utype20">杭州银行</label>
			<input type="radio" name="paytype" value="985" id="utype21" title="广东发展银行">
			<label class="bk_r" for="utype21">广东发展银行</label>
			<input type="radio" name="paytype" value="986" id="utype22" title="光大银行">
			<label class="bk_r" for="utype22">光大银行</label>
			<input type="radio" name="paytype" value="988" id="utype23" title="渤海银行">
			<label class="bk_r" for="utype23">渤海银行</label>
			<input type="radio" name="paytype" value="987" id="utype24" title="东亚银行">
			<label class="bk_r" for="utype24">东亚银行</label>
			
			</div>
	</div>
			<div class="form_submit_box">
	<input type="submit" id="put_button_pass" class="button" value="确认支付" />
	<div class="form_submit_box1">
	<input class="button1" type="reset" onclick="window.location.reload();" value="返回">
	<input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
	<input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
	<input name="Bankco" type="hidden" value="1" />
	<input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />
	<!--p id="linkTip" style="color:#f00; margin-top:5px; position:absolute; top:55px;">*注意：在线充值付款成功后，请等待30s后再关闭充值的窗口，以防资金不到账。若付款后未到账，请联系客服。</p-->
</div>
</div>
</form>
</div>

<script type="text/javascript">
		//radio选择样式
        $(".switch_choose input[type=radio]").click(function(){
	        if($(".switch_choose input[type=radio]:checked").val()){
	       		$(this).next('label').addClass('active').siblings().removeClass('active');
	       	}
        })
</script>
 <!--左边栏body结束-----------------------支付宝------------------------------------------------------------->
<? }else if($memberBank['bankId']==2){  //支付宝 ?>
<!--左边栏body-->

<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <table width="950" height="55" align="center">
                  <tr>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">1.选择银行并输入金额</th>
                  <th scope="col" style="background: #f5f5f5;height:55px;color: #35aaff;font-size: 15px;border:1px solid #e9e9e9">2.确认充值信息</th>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">3.登录网上银行汇款</th>
                  </tr>
    </table><br>
	
	<div class="recharege-lb">
						<form action="/lbkpay/Req.php" method="POST" name="a32" target="_blank">
<input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
<input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
<input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />
<input name="paytype" type="hidden" value="992" />
							充值类别：<label>
								<img  src="/<?=$memberBank['bankLogo']?>"  />
							</label>			
							<div class="recharege-lb">
								充值金额：<?=$args[0]['amount']?>
							</div>
							<div class="recharege-lb">
								充值编号：<?=$args[0]['rechargeId']?>
							</div>
							<div class="recharege-lb">
								<input type="submit" id="put_button_pass" class="button" value="确认支付" />
							</div>
						</form></div>
<? }else if($memberBank['bankId']==21){  //支付宝 ?>
 <!--左边栏body结束-------------------------------------------支付宝结束--------------------------------------------------------->
 
 <!---------------------------------------------微信支付--------------------------------------------------------->
<? }else if($memberBank['bankId']==20){
?>
<!--左边栏body-->
<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <table width="950" height="55" align="center">
                  <tr>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">1.选择银行并输入金额</th>
                  <th scope="col" style="background: #f5f5f5;height:55px;color: #35aaff;font-size: 15px;border:1px solid #e9e9e9">2.确认充值信息</th>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">3.登录网上银行汇款</th>
                  </tr>
    </table><br>
	
	<div class="recharege-lb">
						<form action="/lbkpay/Req.php" method="POST" name="a32" target="_blank">
<input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
<input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
<input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />
<input name="paytype" type="hidden" value="1004" />
							充值类别：<label>
								<img  src="/<?=$memberBank['bankLogo']?>"  />
							</label>			
							<div class="recharege-lb">
								充值金额：<?=$args[0]['amount']?>
							</div>
							<div class="recharege-lb">
								充值编号：<?=$args[0]['rechargeId']?>
							</div>
							<div class="recharege-lb">
								<input type="submit" id="put_button_pass" class="button" value="确认支付" />
							</div>
						</form></div>
<? }else if($memberBank['bankId']==1212){  //支付宝 ?>
 <!---------------------------------------------微信支付结束--------------------------------------------------------->
 
 <!---------------------------------------------财付通--------------------------------------------------------->
<? }else if($memberBank['bankId']==3){
?>
<!--左边栏body-->
<style type="text/css">
<!--
.banklogo input{
height:15px; width:15px
}
.banklogo{}
-->
</style>
 <table width="100%" height="55" align="center">
                  <tr>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">1.选择银行并输入金额</th>
                  <th scope="col" style="background: #f5f5f5;height:55px;color: #35aaff;font-size: 15px;border:1px solid #e9e9e9">2.确认充值信息</th>
                  <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">3.完成充值</th>

                  </tr>
                  </table>
<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr height=25 class='table_b_tr_b' >
    
	<th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值类型：<img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" /></th>
    <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值金额：<?=$args[0]['amount']?></th>
    <th scope="col" style="background: #fff;height:55px;color: #000;font-size: 15px;border:1px solid #e9e9e9">充值编号：<?=$args[0]['rechargeId']?></th>
    </tr>
	<table width="100%" border="0" cellspacing="1" cellpadding="4" class="table_b">    
	<tbody><tr height="25" class="table_b_tr_h">
    <td colspan="2" align="center" class="copyss">
	<form action="/lbkpay/Req.php" method="post" name="a" target="_blank" > 
	<input name="submit" type="submit" style="margin-top: 50px;" class="button" value="确认支付">
    <input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
    <input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
    <input name="Bankco" type="hidden" value="3" />
    <input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />
    </tr>
    </table>
</form>
</td>
</tr>
</table>
 <!---------------------------------------------财付通结束--------------------------------------------------------->
 <!---------------------------------------------微信手动支付--------------------------------------------------------->
 <? }else if($memberBank['bankId']==21){
?>
 <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formTable">
              <tbody><tr>
                                
                 </tr>
    <tr>
      <td align="right" style="width:20%;">充值信息：</td>
    </tr>
	<tr>
      <td align="right">收款户名：</td>
      <td><input id="bank-username" readonly value="<?=$memberBank["username"]?>" /></td> 
    </tr>
    <tr>
      <td align="right">充值金额：</td>
      <td><input id="recharg-amount" readonly value="<?=$args[0]['amount']?>" /></td>
    </tr>
	<tr>
      <td align="right">充值编号：</td>
      <td><input id="username" readonly value="<?=$args[0]['rechargeId']?>" /></td>  
    </tr>
    <tr>
      <td align="right">扫码支付：</td>
	  <td>
     <div class="qrimage-wrap white b-a text-center">
	
	 <img id="qrimage" src="//qr.api.cli.im/qr?data=http%253A%252F%252Fbaidu.com&amp;level=H&amp;transparent=false&amp;bgcolor=%23ffffff&amp;forecolor=%23000000&amp;blockpixel=12&amp;marginblock=1&amp;logourl=&amp;size=280&amp;kid=cliim&amp;key=d44c420220c50c0a9fbbb91ddb1a769e">
	 </div>
	 </td>
	 
	 
    </tr>

<!--左边栏body结束-->

<tr>
<div class="tips">
	<dl>
        <dt>充值说明：</dt>
        <dd>1.每次"充值编号"均不相同,务必将"充值编号"正确复制填写到引号汇款页面的"说明"栏目中;</dd>
        <dd>2.帐号不固定，转帐前请仔细核对该帐号;</dd>
        <dd>3.充值金额与转账金额不符，充值将无法到账;</dd>
        <dd>4.转账后如10分钟未到账，请联系客服，告知您的充值编号和您的充值金额。</dd>
		<dd>5.支付宝，微信，财付通，手动充值可忽略以上几点。</dd>
    </dl>
</div>
</tr>
</table>  
<!---------------------------------------------支付宝手动支付--------------------------------------------------------->
 <? }else if($memberBank['bankId']==22){
?>
 <table width="100%" border="0" cellspacing="0" cellpadding="0" class="formTable">
              <tbody><tr>
                                
                 </tr>
    <tr>
      <td align="right" style="width:20%;">充值信息：</td>
    </tr>
	<tr>
      <td align="right">收款户名：</td>
      <td><input id="bank-username" readonly value="<?=$memberBank["username"]?>" /></td> 
    </tr>
    <tr>
      <td align="right">充值金额：</td>
      <td><input id="recharg-amount" readonly value="<?=$args[0]['amount']?>" /></td>
    </tr>
	<tr>
      <td align="right">充值编号：</td>
      <td><input id="username" readonly value="<?=$args[0]['rechargeId']?>" /></td>  
    </tr>
    <tr>
      <td align="right">扫码支付：</td>
	  <td>
     <div class="qrimage-wrap white b-a text-center">
	
	 <img id="qrimage" src="//qr.api.cli.im/qr?data=http%253A%252F%252Fbaidu.com&amp;level=H&amp;transparent=false&amp;bgcolor=%23ffffff&amp;forecolor=%23000000&amp;blockpixel=12&amp;marginblock=1&amp;logourl=&amp;size=280&amp;kid=cliim&amp;key=d44c420220c50c0a9fbbb91ddb1a769e">
	 </div>
	 </td>
	 
	 
    </tr>

<!--左边栏body结束-->

<tr>
<div class="tips">
	<dl>
        <dt>充值说明：</dt>
        <dd>1.每次"充值编号"均不相同,务必将"充值编号"正确复制填写到引号汇款页面的"说明"栏目中;</dd>
        <dd>2.帐号不固定，转帐前请仔细核对该帐号;</dd>
        <dd>3.充值金额与转账金额不符，充值将无法到账;</dd>
        <dd>4.转账后如10分钟未到账，请联系客服，告知您的充值编号和您的充值金额。</dd>
		<dd>5.支付宝，微信，财付通，手动充值可忽略以上几点。</dd>
    </dl>
</div>
</tr>
</table>  

 
 <?php }else if($memberBank['bankId']==23){
?>
<!--左边栏body-->
<style type="text/css">
<!--
.banklogo input{
height:15px; width:15px
}
.banklogo{}
-->
.table_b td  { padding:5px; }
#banklist td  { padding:1px; }
#banklist td * { vertical-align:middle; }
</style>

<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr class='table_b_th'>
      <td align="left" style="font-weight:bold;padding-left:10px;" colspan=2>充值信息</td> 
    </tr>
    <tr height=25 class='table_b_tr_b' >
      <td align="right" height="80" class="copys" style="width:100px;">充值银行2：</td>
      <td align="left" ><img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" /></td> 
    </tr>
     <tr height=25 class='table_b_tr_b'>
      <td align="right" class="copys">充值金额：</td>
      <td align="left" ><input id="recharg-amount" readonly value="<?=$args[0]['amount']?>" />
      <div class="btn-a copy" for="recharg-amount">
	 </div>      </td>
    </tr>
     <tr height=25 class='table_b_tr_b'>
      <td align="right" class="copys"> 充值编号 ：</td>
      <td align="left"><input id="username" readonly value="<?=$args[0]['rechargeId']?>" />
         <div class="btn-a copy" for="username">
            
            </div>			</td> 
    </tr>
	<tr height=25 class='table_b_tr_h'>
	<td align="right" class="copys"> 选择银行 ：</td>
    <td  align="left" class="copyss">
	  <form action="/dk101/req.php" method="POST" name="a32" target="_blank">
	    <table width="760" border="0" align="center"  cellpadding="2" cellspacing="0" id="banklist" >
	      <tr>
	        <td width="180" height="40" valign="middle">
	          <div class="banklogo">
	            <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="ICBC-NET" checked>
            <img src="/xingcai_Front/cash/images/gongshang.gif" title="工商银行" alt="工商银行"  border="0" style="border:1px solid #CCCCCC;" />										</div>									</td>
			  <td width="180" height="40" valign="middle">
			    <div class="banklogo">
			      <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="ABC-NET">
		        <img src="/xingcai_Front/cash/images/nongye.gif" title="中国农业银行"  alt="中国农业银行"  border="0" style="border:1px solid #CCCCCC;" /></div>									  </td>
              <td width="180" height="40" valign="middle">
                 <div class="banklogo">
                   <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="CCB-NET">
            <img src="/xingcai_Front/cash/images/jianshe.gif" title="建设银行" alt="建设银行"  border="0" style="border:1px solid #CCCCCC;" />										</div>									</td>
			
                      
	      </tr>
	      <tr>
			<td width="180" valign="middle"><div class="banklogo">
                        <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="BCCB-NET">
                        <img src="/xingcai_Front/cash/images/beijing.gif" title="北京银行" alt="北京银行"  border="0" style="border:1px solid #CCCCCC;" /> </div></td>
	        <td height="40">
	          <div class="banklogo">
	            <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="BOC-NET">
	            <img src="/xingcai_Front/cash/images/zhongguo.gif" title="中国银行" alt="中国银行"  border="0" style="border:1px solid #CCCCCC;" />										 </div>									</td>
            <td>
                <div class="banklogo">
                  <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="BOCO-NET">
                <img src="/xingcai_Front/cash/images/jiaotong.gif" title="交通银行" alt="交通银行"  border="0" style="border:1px solid #CCCCCC;" />										 </div>									</td>
            
	      </tr>
			<tr>
			<td>
                <div class="banklogo">
                  <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="CEB-NET">
                <img src="/xingcai_Front/cash/images/guangda.gif" title="光大银行" alt="光大银行"  border="0" style="border:1px solid #CCCCCC;" />										 </div>									</td>
                <td><div class="banklogo">
                                     <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="POST-NET">
                                     <img src="/xingcai_Front/cash/images/youzheng.gif" title="中国邮政" alt="中国邮政"  border="0" style="border:1px solid #CCCCCC;" /> </div></td>
			<td height="40">  <div class="banklogo">
	          <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="CMBCHINA-NET"  />
	          <img src="/xingcai_Front/cash/images/zhaohang.gif" title="招商银行" alt="招商银行"  border="0" style="border:1px solid #CCCCCC;" /> </div></td>
		</tr>
		<tr>
	        <td><div class="banklogo">
	            <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="CMBC-NET" />
              <img src="/xingcai_Front/cash/images/minsheng.gif" title="中国民生银行" alt="中国民生银行"  border="0" style="border:1px solid #CCCCCC;" /></div></td>
	        <td><div class="banklogo">
	            <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="GDB-NET" />
              <img src="/xingcai_Front/cash/images/guangfa.gif" title="广发银行" alt="广发银行"  border="0" style="border:1px solid #CCCCCC;" /> </div></td>
			          <td><div class="banklogo">
                        <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="BJRCB-NET">
                        <img src="/xingcai_Front/cash/images/nongcunshangye.gif" title="北京农村商业银行" alt="北京农村商业银行"  border="0" style="border:1px solid #CCCCCC;" /> </div></td>
	      </tr>
	      <tr>
	        <td height="40"><div class="banklogo">
	          <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="NJCB-NET" />
	          <img src="/xingcai_Front/cash/images/nanjing.gif" title="南京银行" alt="南京银行"  border="0" style="border:1px solid #CCCCCC;" /></div></td>
	        <td><div class="banklogo">
	            <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="NBCB-NET" />
              <img src="/xingcai_Front/cash/images/ningbo.gif" title="宁波银行" alt="宁波银行"  border="0" style="border:1px solid #CCCCCC;" /></div></td>
	        <td><div class="banklogo">
	            <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="PINGANBANK-NET" />
              <img src="/xingcai_Front/cash/images/pingan.gif" title="平安银行" alt="平安银行"  border="0" style="border:1px solid #CCCCCC;" /></div></td>
			  
			          
	      </tr>
	      <tr>
		  <td><div class="banklogo">
                        <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="HKBEA-NET">
                        <img src="/xingcai_Front/cash/images/dongya.gif" title="东亚银行" alt="东亚银行"  border="0" style="border:1px solid #CCCCCC;" /> </div></td>
	        <td height="40">
	          <div class="banklogo">
	            <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="SPDB-NET">
               <img src="/xingcai_Front/cash/images/shangpufa.gif"  title="上海浦东发展银行" alt="上海浦东发展银行"  border="0" style="border:1px solid #CCCCCC;" />										</div>									 </td>
            <td>
                <div class="banklogo">
                  <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="CIB-NET">
                <img src="/xingcai_Front/cash/images/xingye.gif" title="兴业银行" alt="兴业银行"  border="0" style="border:1px solid #CCCCCC;" />									     </div>									 </td>
				
		    
	      </tr>
			 <tr>
			 <td>
		        <div class="banklogo">
		          <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="SDB-NET">
	            <img src="/xingcai_Front/cash/images/shenfa.gif" title="深圳发展银行" alt="深圳发展银行"  border="0" style="border:1px solid #CCCCCC;" />									     </div>									 </td>
							       <td><div class="banklogo">
                                     <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="SHB-NET">
                                     <img src="/xingcai_Front/cash/images/shanghaibank.gif"  title="上海银行" alt="上海银行"  border="0" style="border:1px solid #CCCCCC;" /> </div></td>
			 <td height="40">
	          <div class="banklogo">
	            <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="ECITIC-NET">
               <img src="/xingcai_Front/cash/images/zhongxin.gif" title="中信银行" alt="中信银行"  border="0" style="border:1px solid #CCCCCC;" />										</div>									 </td>
		</tr>
		<tr>
            <td>
                <div class="banklogo">
                  <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="HXB-NET">
                <img src="/xingcai_Front/cash/images/huaxia.gif" title="华夏银行" alt="华夏银行"  border="0" style="border:1px solid #CCCCCC;" />									     </div>									 </td>
		    <td>
		        <div class="banklogo">
		          <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="CBHB-NET">
	            <img src="/xingcai_Front/cash/images/buohai.gif" title="渤海银行" alt="渤海银行"  border="0" style="border:1px solid #CCCCCC;" />									     </div>									 </td>
							       <td><div class="banklogo">
                                     <input name="rbPayMType" style="width:10px;margin:0;" type="radio" value="CZ-NET" />
                                     <img src="/xingcai_Front/cash/images/zheshang.gif" alt="浙商银行" width="154" height="33"  border="0" style="border:1px solid #CCCCCC;" title="浙商银行" /> </div></td>
	      </tr>
	      <tr>
	          <td height="40" colspan="3" align="left"><input name="submit" type="submit"   style="height:40px; line-height:20px; font-weight:bold; width:150px;" value="确认充值" /></td>
          </tr>
        </table>
		<input name="amount" type="hidden" value="<?=$args[0]['amount']?>" />
<input name="rechargeId" type="hidden" value="<?=$args[0]['rechargeId']?>" />
<input name="username" type="hidden" value="<?=$this->user['username']?>" />

	    <input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
	    <input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
	    <input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />
      </form></td>
	</td>
   </tr>
</table>
<?php }else if($memberBank['bankId']==24){
?>
<!--左边栏body-->
<style type="text/css">
<!--
.banklogo input{
height:15px; width:15px
}
.banklogo{}
-->
.table_b td  { padding:5px; }
#banklist td  { padding:1px; }
#banklist td * { vertical-align:middle; }
</style>
<script type="text/javascript">
 function mDaoJiShi() {
            document.getElementById("btnCC").value = "已提交";
            document.getElementById("btnCC").readOnly = true;
            document.getElementById("btnCC").disabled = true;
        }
</script>
<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr class='table_b_th'>
      <td align="left" style="font-weight:bold;padding-left:10px;" colspan=2>充值信息</td> 
    </tr>
    <tr height=25 class='table_b_tr_b' >
      <td align="right" height="80" class="copys" style="width:150px;">充值银行：</td>
      <td align="left" ><img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" /></td> 
    </tr>
     <tr height=25 class='table_b_tr_b'>
      <td align="right" class="copys">充值金额：</td>
      <td align="left" ><input id="recharg-amount" readonly value="<?=$args[0]['amount']?>" />
      <div class="btn-a copy" for="recharg-amount">
	 </div>      </td>
    </tr>
     <tr height=25 class='table_b_tr_b'>
      <td align="right" class="copys"> 充值编号 ：</td>
      <td align="left"><input id="username" readonly value="<?=$args[0]['rechargeId']?>" />
         <div class="btn-a copy" for="username">
            
            </div>			</td> 
    </tr>
	<tr height=25 class='table_b_tr_h'>
	<td align="right" class="copys"> </td>
    <td  align="left" class="copyss">
	  <form action="/dk101/req.php" method="POST" name="a32" target="_blank" onsubmit="mDaoJiShi()">
		<input id="btnCC" name="submit" type="submit"   style="height:40px; line-height:20px; font-weight:bold; width:150px;" value="确认充值" />
		
		<input name="rbPayMType" type="hidden" value="alipayd" />
		
		<input name="amount" type="hidden" value="<?=$args[0]['amount']?>" />
<input name="rechargeId" type="hidden" value="<?=$args[0]['rechargeId']?>" />
<input name="username" type="hidden" value="<?=$this->user['username']?>" />

	    <input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
	    <input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
	    <input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />
      </form></td>
	</td>
   </tr>
</table>
<?php }else if($memberBank['bankId']==25){
?>
<!--左边栏body-->
<style type="text/css">
<!--
.banklogo input{
height:15px; width:15px
}
.banklogo{}
-->
.table_b td  { padding:5px; }
#banklist td  { padding:1px; }
#banklist td * { vertical-align:middle; }
</style>
<script type="text/javascript">
 function mDaoJiShi() {
            document.getElementById("btnCC").value = "已提交";
            document.getElementById("btnCC").readOnly = true;
            document.getElementById("btnCC").disabled = true;
        }
</script>
<table width="100%" border="0" cellspacing="1" cellpadding="4" class='table_b'>
    <tr class='table_b_th'>
      <td align="left" style="font-weight:bold;padding-left:10px;" colspan=2>充值信息</td> 
    </tr>
    <tr height=25 class='table_b_tr_b' >
      <td align="right" height="80" class="copys" style="width:150px;">充值银行：</td>
      <td align="left" ><img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" /></td> 
    </tr>
     <tr height=25 class='table_b_tr_b'>
      <td align="right" class="copys">充值金额：</td>
      <td align="left" ><input id="recharg-amount" readonly value="<?=$args[0]['amount']?>" />
      <div class="btn-a copy" for="recharg-amount">
	 </div>      </td>
    </tr>
     <tr height=25 class='table_b_tr_b'>
      <td align="right" class="copys"> 充值编号 ：</td>
      <td align="left"><input id="username" readonly value="<?=$args[0]['rechargeId']?>" />
         <div class="btn-a copy" for="username">
            
            </div>			</td> 
    </tr>
	<tr height=25 class='table_b_tr_h'>
	<td align="right" class="copys"> </td>
    <td  align="left" class="copyss">
	  <form action="/dk101/req.php" method="POST" name="a32" target="_blank" onsubmit="mDaoJiShi()">
		<input id="btnCC" name="submit" type="submit"   style="height:40px; line-height:20px; font-weight:bold; width:150px;" value="确认充值" />
		
		<input name="rbPayMType" type="hidden" value="weixin" />
		
		<input name="amount" type="hidden" value="<?=$args[0]['amount']?>" />
<input name="rechargeId" type="hidden" value="<?=$args[0]['rechargeId']?>" />
<input name="username" type="hidden" value="<?=$this->user['username']?>" />

	    <input name="p2_Order" type="hidden" value="<?=$args[0]['rechargeId']?>" />
	    <input name="p3_Amt" type="hidden" value="<?=$args[0]['amount']?>" />
	    <input name="pa_MP" type="hidden" value="<?=$this->user['username']?>" />
      </form></td>
	</td>
   </tr>
</table>
 
<? }else{
?>
<!--左边栏body-->
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="formTable">
              <tbody><tr>
                                
                 </tr>
    <tr>
      <td align="right" style="width:20%;">充值信息：</td>
    </tr>
    
    <tr>
      <td align="right">充值类型：</td>
      <td><img id="bank-type-icon" class="bankimg" src="/<?=$memberBank['bankLogo']?>" title="<?=$memberBank['bankName']?>" style="height:3.74rem;"/>
            <a id="bank-link" target="_blank" href="<?=$memberBank['bankHome']?>" class="spn11" style="margin-left:50px;">进入银行网站>></a>
      </td> 
    </tr>
	<tr>
      <td align="right">收款户名：</td>
      <td><input id="bank-username" readonly value="<?=$memberBank["username"]?>" /></td> 
    </tr>
    <tr>
      <td align="right">收款账号：</td>
      <td><input id="bank-account" readonly value="<?=$memberBank["account"]?>" /></td> 
    </tr>
     <tr>
      <td align="right">充值金额：</td>
      <td><input id="recharg-amount" readonly value="<?=$args[0]['amount']?>" />*网银充值金额必须与网站填写金额一致方能到账！</td>
    </tr>
     <tr>
      <td align="right">充值编号：</td>
      <td><input id="username" readonly value="<?=$args[0]['rechargeId']?>" />
     *网银充值请务必将此编号填写到汇款“说明”里！</td>  
    </tr>
<!--左边栏body结束-->

<tr>
<div class="tips">
	<dl>
        <dt>充值说明：</dt>
        <dd>1.每次"充值编号"均不相同,务必将"充值编号"正确复制填写到引号汇款页面的"说明"栏目中;</dd>
        <dd>2.帐号不固定，转帐前请仔细核对该帐号;</dd>
        <dd>3.充值金额与转账金额不符，充值将无法到账;</dd>
        <dd>4.转账后如10分钟未到账，请联系客服，告知您的充值编号和您的充值金额。</dd>
    </dl>
</div>
</tr>
</table> 
<?php }?>