<!DOCTYPE html>
<html class="ks-webkit537 ks-webkit ks-chrome45 ks-chrome">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit">

	<title>众投+-用户登录-密码找回</title>
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	
	<link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/common/common.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/login.css">
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

		<!-- 找回密码 -->
		<section class="row m-personal" id="js-retrieve">
			<article class=" m-retrieve u-hide">
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
							<p class="ex">请输入您要找回登录密码的账户</p>							
							<span></span>            
						</div>
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
					<button type="submit" class="submit btn">下一步</button>
					<a href="login.php" class="btn btn-primary backtrack">返回登录</a>
				</form>
			</article>
			<article class=" m-retrieve u-hide">
				<ul class="tab col-md-12" id="js-zhhtrigger">
					<li class="active" data-id="0">
						<span class="icon"></span>
						<span>重置密码</span>
					</li>
				</ul>			
				<!--  表单 -->
				<form>
					<!-- 抵消浏览器自动填充表单 -->
					<input type="password" class="sr-only">
					<!-- 手机找回 -->
					<div class="profil col-md-12 ">
						<div class="form-group">
							<p class="ex">请输入您要重置的密码</p>							
							<span></span>            
						</div>
						<div class="form-group">
							<input type="text" name="tel" data-type="p" class="form-control" placeholder="请输入新的密码">
							<span></span>            
						</div>
						<div class="form-group">
							<input type="text" name="tel" data-type="vp" class="form-control" placeholder="请再次输入新的密码">
							<span></span>            
						</div>
					</div>
					<button type="submit" class="submit btn">确定</button>
				</form>
			</article>
			<div class=" m-retrieve">
				<ul class="tab col-md-12">
					<li class="active" data-id="0">
						<span class="icon"></span>
						<p>重置成功</p>
					</li>
				</ul>
				<div class="succeed">
					<h3>恭喜您密码找回成功！ </h3>
					<p>立即去<a href="login.php">登录>></a></p>
				</div>			
			</div>
		</section>  
		<!-- 找回密码结束 -->
		<ul id="js-bg" class="u-togglebg"></ul>
	</div>
	<script type="text/javascript">
	  seajs.use('JS/login.js');
	</script>
</body>
</html>