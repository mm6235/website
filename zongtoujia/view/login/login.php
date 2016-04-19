<!DOCTYPE html>
<html class="ks-webkit537 ks-webkit ks-chrome45 ks-chrome">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="description" content="">
	<title>用户登录-登录</title>
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
		<section class="fl-personal " id="js-personal">
			<!-- 用户登录 -->
			<article class="row fl-login" id="js-login">
				<!--  表单 -->
				<!-- 切换 -->
				<ul class="tab col-md-12" id="js-lgtrigger">
					<li class="col-md-6" data-id="0">
						<span class="icon"></span>
						<a href="register.php">有奖注册</a>
					</li>
					<li class="col-md-6 active" data-id="1">
						<span class="icon animationtop"></span>
						<a href="login.php">快速登录</a>
					</li>
				</ul>				
				<form class="" id="js-userlogin" autocomplete="off">
					<!-- 抵消浏览器自动填充表单 -->
					<input type="password" class="sr-only">
					<!-- 登录 -->
					<div class="profil col-md-12">
						<div class="form-group">
							<input type="text"  class="form-control" data-type="m" name="user" value="" placeholder="请输入手机号码">
							<span></span>            
						</div>
						<div class="form-group">
							<input type="password" name="pwd" data-type="p" class="form-control" placeholder="请输入密码">
							<span></span>            
						</div>
					</div>
					<div class="resetpaw"><a href="retrieve.php">忘记密码？</a></div>
					<button type="submit" class="submit btn">立即登录</button>
				</form>
			</article> 
			<!-- 用户登录结束 -->
		</section>
		<ul id="js-bg" class="u-togglebg"></ul>
	</div>
	<script type="text/javascript">
	  seajs.use('JS/login.js');
	</script>
</body>
</html>