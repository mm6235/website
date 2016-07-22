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
				<h3 class="title"><span>&nbsp;</span>联系我们</h3>
				<div class="con">
					11111
					<div>
						<style type="text/css">

						</style>
						<div>
							<canvas id="js-canvas" width="300" height="150"></canvas>
						</div>
						<script type="text/javascript">
							window.onload = function(){
								var canvas = document.getElementById('js-canvas');
								if (canvas.getContext) {
									var ctx = canvas.getContext('2d');
									ctx.strokeStyle = '#336600';
									ctx.lineWidth = 5;
									ctx.fillStyle='#ff0000';
									ctx.beginPath();
									ctx.arc(80,80,50,0,Math.PI*2,true);
									ctx.closePath();
									ctx.fill();
									ctx.stroke();

									// ctx.fillRect(20,30,150,75);

									ctx.fillStyle = 'rgba(0,0,200,0.5)';
									ctx.fillRect(50,50,150,75);

							        ctx.font = 'bold 14px consolas';
							        ctx.textAlign = 'left';
							        ctx.textBaseline = 'top';
							        ctx.strokeStyle = '#DF5326';
							        ctx.strokeText('Hello', 80, 10);
							        ctx.font = 'bold 16px arial';
							        ctx.fillStyle = 'red';
							        ctx.fillText('hello World ', 100,30);

								}
								// alert(canvas.getContext);
							}
						</script>
					</div>
				</div>
			</article>
		</section>
	</div>
	<?php include_once '../assets/common/footer.html'; ?>
</body>
</html>