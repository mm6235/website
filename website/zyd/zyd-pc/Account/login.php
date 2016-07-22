<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>众雅贷</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/common/style.css">
	<!--[if lte IE 9]>
		<script type="text/javascript"src="/assets/plugins/html5shiv/html5shiv.js"></script>
	<![endif] -->

</head>
<body>
	<?php include_once '../assets/common/top.html'; ?>
	<div class="wraper">
		<section  class="m-login">
			<!-- 用户注册 -->
			<article class="row g-warp">
				<!--  表单 -->
				<form class="login">
					<h5>30秒立即申请贷款服务</h5>
					<!-- 手机注册 -->
					<div class="profil col-md-12">
						<div class="form-group">
							<input type="text"  name="tel" class="form-control" data-type="m" placeholder="您的称呼">
							<span></span>            
						</div>
						<div class="form-group">
							<input type="text"  name="tel" class="form-control" data-type="m" placeholder="请输入手机号码">
							<span></span>            
						</div>
						<div class="form-group verify">
							<div class=" col-md-8">
								<input type="password" name="imgcode" class="form-control" data-type="n" placeholder="图形验证码">
								<span></span>            
							</div>
							<img class="col-md-4" onclick="ImgCode(this)" src="http://www.niwodai.com/validatecode/refresh.htm" alt="">
						</div>
						<div class="form-group nt">
							<div class="col-md-8">
								<input type="password" name="telver" class="form-control" data-type="v" placeholder="短信验证码">
								<span></span>            
							</div>            
							<a class="btn col-md-4"  data-id="teldyreg" href="javascript:void(0)">获取验证码</a>
						</div>
						<p class="note">未成功放款，绝不收取任何费用！</p>
						<button type="submit" class="submit btn">立即申请</button>
					</div>
				</form>
			</article>
			<!-- 用户注册结束 -->
		</section>
	</div>
	<?php include_once '../assets/common/footer.html'; ?>
</body>
</html>