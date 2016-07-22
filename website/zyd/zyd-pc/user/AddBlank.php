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
				<h3 class="title"><span>&nbsp;</span>添加银行卡</h3>
				<div class="con personal">
					<div class="form-horizontal societas">
						<div class="form-group">
							<label class="col-sm-3 control-label">真实姓名：</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" placeholder="请输入您的真实姓名">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">开户银行：</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" placeholder="请选择">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">银行卡号：</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" placeholder="请输入您的银行卡号">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">所属分行：</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" placeholder="请选择">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">支行信息：</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" placeholder="请输入开户行关键字">
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