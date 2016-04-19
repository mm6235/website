<!DOCTYPE html>
<html class="ks-webkit537 ks-webkit ks-chrome45 ks-chrome">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="description" content="">
	<title>用户登录-注册</title>
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
			<!-- 用户注册 -->
			<article class="row fl-register"id="js-register">
				<!-- 切换 -->
				<ul class="tab col-md-12" id="js-rstrigger">
					<li class="col-md-6 active" data-id="0">
						<span class="icon animationtop"></span>
						<a href="register.php">有奖注册</a>
					</li>
					<li class="col-md-6" data-id="1">
						<span class="icon"></span>
						<a href="login.php">快速登录</a>
					</li>
				</ul>				
				<!--  表单 -->
				<form class="" id="js-userregister" autocomplete="off">
					<!-- 手机注册 -->
					<div class="profil col-md-12">
						<div class="form-group">
							<input type="text"  name="tel" class="form-control" data-type="m" placeholder="请输入手机号码">
							<span></span>            
						</div>
						<div class="form-group">
							<input type="password" name="pwd1" class="form-control" data-type="p" placeholder="请输入密码">
							<span></span>            
						</div>
						<div class="form-group">
							<input type="password" name="pwd2" data-type="rp" class="form-control" placeholder="请再次输入密码">
							<span></span>            
						</div>
						<div class="form-group verify">
							<div class=" col-md-8">
								<input type="password" name="imgcode" class="form-control" data-type="n" placeholder="右侧图文验证码">
								<span></span>            
							</div>
							<a class="btn btn-default col-md-4 teltxt" href="javascript:void(0)" onclick="this.childNodes[0].src = this.childNodes[0].src+'?'"><img src="http://www.tuobar.com/include/vdimgck.php" alt=""></a>
							<span></span>            
						</div>
						<div class="form-group">
							<input type="text"  name="invitation" class="form-control" data-type="n" placeholder="请输入邀请码或邀请人手机号">
							<span></span>            
						</div>
						<div class="form-group verify">
							<div class=" col-md-8">
								<input type="password" name="telver" class="form-control" data-type="v" placeholder="手机验证码">
								<span></span>            
							</div>            
							<a class="btn btn-default col-md-4"  data-id="teldyreg" href="javascript:void(0)">获取验证码</a>
							<span></span>            
						</div>
						<div class="form-group">
							<input type="checkbox"  name="invitation" checked="true">
							<span>同意《<a href="">众投家服务协议</a>》</span>            
						</div>
					</div>
					<button type="submit" class="submit btn">注册</button>
				</form>
			</article>
			<!-- 用户注册结束 -->
		</section>
		<ul id="js-bg" class="u-togglebg"></ul>
	</div>
	<script type="text/javascript">
	  seajs.use('JS/login.js');
	</script>
</body>
</html>