<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">

<title>众投+</title>
<meta name="author" content="">
<meta name="keywords" content="">
<meta name="description" content="">

<link rel="stylesheet" type="text/css" href="/assets/plugins/amazeui/css/amazeui.min.css">
<link rel="stylesheet" type="text/css" href="/assets/common/common.css">
<link rel="stylesheet" type="text/css" href="/assets/css/user.css">
  <!--[if lte IE 9]>
    <script type="text/javascript"src="/assets/plugins/html5shiv/html5shiv.js"></script>
  <![endif] -->
  <!-- fxpx.css -->
<script  type="text/javascript" src="/assets/plugins/seajs/sea.js"></script>
<script  type="text/javascript" src="/assets/js/config.js"></script>
</head>
<body>
<div class="warp">
	<?php include_once("../assets/common/top.html") ?>
	<section  class="g-warp zt-payment">
		<!-- 支付页面 -->
  		<div class="zt-profile">
			<!-- 支付内容 -->
			<div class="header con">
				<div class="dealtime">您正在进行交易，创建时间：2013-03-15 13:59:42 <span class="note">（交易在60分钟后关闭，请及时付款！）</span></div>
				<div class="tle"><h3>项目：众投+165431235435132444</h3><span><em>1200.00</em>元</span></div>
			</div>  		
			<!-- 支付表单 -->
			<div class="con zt-basicform">
				<h3 class="title">立即付款</h3>				
				<div class="am-form am-form-horizontal">
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-2 am-form-label">银行卡号：</label>
						<div class="am-u-sm-10">
						  <input type="text"  data-type="n" placeholder="请输入银行卡号"><span></span>
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-2 am-form-label">开户姓名：</label>
						<div class="am-u-sm-10">
						  <input type="text"  data-type="n" placeholder="请输入开户姓名"><span></span>
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-2 am-form-label">预留手机号：</label>
						<div class="am-u-sm-10">
						  <input type="text" data-type="m"  placeholder="请输入银行预留手机号 "><span></span>
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-2 am-form-label">交易密码：</label>
						<div class="am-u-sm-10">
						  <input type="password" data-type="p"   placeholder="请输入交易密码 ">
						</div>
					</div>
					<div class="am-form-group">
						<div class="am-u-sm-10 am-u-sm-offset-2">
						  <button type="submit" class="btn btn-warning">立即付款</button>
						</div>
					</div>
				</div>
			</div> 
		</div>
		<!-- 支付页面结束 -->
	</section>
	<?php include_once("../assets/common/footer.html") ?>
</div>
<script type="text/javascript">
	seajs.use('JS/global.js');
</script>
</body>
</html>