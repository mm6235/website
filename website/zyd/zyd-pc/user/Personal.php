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
	<?php include_once './top.html'; ?>
	<div class="wraper">
		<section  class="g-warp g-main">
			<article class="m-page m-user">
				<h3 class="title"><span>&nbsp;</span>个人信息</h3>
				<div class="con personal">
					<div class="form-horizontal societas">
						<div class="form-group">
							<label class="col-sm-3 control-label">昵称：</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" placeholder="请输入">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">头像：</label>
							<div class="col-sm-9 avatar">
								<div class="av"><img src="/assets/image/avatar.jpg" alt=""></div>
								<div class="cg">
									<p class="note">支持jpg、gif、png或bmp格式的图片，建议小于20M，正方形尺寸</p>
									<input class="btn" type="button" value="修改头像">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="submit" class="btn btn-primary">保存</button>
							</div>
						</div>
					</div>
				</div>
			</article>
		</section>
	</div>
	<?php include_once '../assets/common/footer.html'; ?>
</body>
</html>