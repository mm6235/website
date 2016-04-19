<!DOCTYPE html>
<html class="ks-webkit537 ks-webkit ks-chrome45 ks-chrome">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="description" content="">
	<title>用户登录-密码找回</title>
	<link rel="stylesheet" type="text/css" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/common/common.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/login.css">
	  <!--[if lte IE 9]>
	    <script type="text/javascript"src="../assets/plugins/html5shiv/html5shiv.js"></script>
	  <![endif] -->
	  <!-- fxpx.css -->
	<script  type="text/javascript" src="../../assets/plugins/seajs/sea.js"></script>
	<script  type="text/javascript" src="../../assets/js/config.js"></script>	
</head>
<body>
	<div class="warp">	
		<?php include_once("../../assets/common/top.html") ?>

		<!-- 找回密码 -->
		<section class="row fl-personal fl-retrieve " id="js-retrieve">
			<article class="retrieve">
				<ul class="tab col-md-12" id="js-zhhtrigger">
					<li class="active" data-id="0">
						<span class="icon"></span>
						<span>找回密码</span>
					</li>
				</ul>			
				<!--  表单 -->
				<form class="" id="js-forgotpwd" autocomplete="off">
					<!-- 抵消浏览器自动填充表单 -->
					<input type="password" class="sr-only">

					<!-- 手机找回 -->
					<div class="profil col-md-12 ">
						<div class="form-group">
							<input type="text" name="tel" data-type="m" class="form-control" placeholder="您之前注册的手机号">
							<span></span>            
						</div>
						<div class="form-group verify">
							<div class=" col-md-8">
								<input type="password" name="telver" data-type="v" class="form-control" placeholder="收到的短信验证码">
							</div>            
							<a class="btn col-md-4"  data-id="telforgotpwd"  href="javascript:void(0)">获取验证码</a>
							<span></span>            
						</div>
					</div>
					<button type="submit" class="submit btn">立即找回</button>
					<a href="login.php" class="btn btn-primary backtrack">返回登录</a>
				</form>
			</article>
		</section>  
		<!-- 找回密码结束 -->
		<ul id="js-bg" class="u-togglebg"></ul>
	</div>
	<script type="text/javascript">
	  seajs.use('JS/login.js');
	</script>
</body>
</html>