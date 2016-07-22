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
	<?php include_once './UsTop.html'; ?>
	<div class="wraper">
		<section  class="g-warp g-main">
			<article class="m-page">
				<h3 class="title"><span>&nbsp;</span>服务内容</h3>
				<div class="con">
					11111
					<form id="js-serialize" method="post">
						<input type="text" data-type="u" name="name" value="mm">
						<input type="text" data-type="n" name="tel" value="132">
						<input type="text" data-type="u" name="age" value="20"><span></span>
						<input type="text" data-type="p" name="pwd" value="123456">
						<button type="submit">提交</button>
					</form>
					<div>
						<div id="js-splice">5,是的发送到 防守打法</div>
						<button type="button" id="js-btn">提交</button>
					</div>
					<script type="text/javascript" src="/assets/plugins/jquery/jquery-1.11.3.min.js"></script>
					<script type="text/javascript" src="/assets/js/dony.js"></script>
					<script type="text/javascript">
						$(function () {
							var jsonStr ={
								'1':'阿斯顿发送到',
								'5':'奋斗改变下',
								'2':'上的方便吧',
								'8':'闪电风暴'
							};
							$('#js-btn').on('click',function(){
								var arrStr = ($('#js-splice').text()).split(',');
								// var arrStr = str.split(',');
								console.log(jsonStr[arrStr[0]]+arrStr[1]);
								// console.log(str);
							});
							console.log(mm.verifyCode('#js-serialize'));
							$('#js-serialize').on('submit',function(){
								mm.verifyCode('#js-serialize');
								if (!mm.verifyCode('#js-serialize')) {
									return false;
								}
								console.log(mm.serializeObject(this));
								return false;
							});
					});

					</script>
				</div>
			</article>
		</section>
	</div>
	<?php include_once '../assets/common/footer.html'; ?>
</body>
</html>