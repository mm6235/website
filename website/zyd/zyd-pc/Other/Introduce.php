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
				<h3 class="title"><span>&nbsp;</span>平台介绍</h3>
				<div class="con">
					<div class="btn btn-default sct" id="js-dropdown" ><span class="text">请选择</span><span class="caret"></span></div>
					<ul class="menu hide">
						<li data-id='1'>Separd link1</li>
						<li data-id='2'>Sepaink2</li>
						<li data-id='3'>Separink3</li>
						<li data-id='4'>Separatink4</li>
						<li data-id='5'>Separateink5</li>
						<li data-id='6'>Separaink6</li>
					</ul>
				</div>
				<div class="con">
					<style type="text/css">
						.rotate a{display: block; width: 25px; height: 20px; text-align: center; background-color: green; border-radius: 10px; color: #FFF; 
							animation: rotate 2s linear 1s;
							transition: all 0.5s ease-in;}
						@keyframes rotate{
							0%{transform: rotateZ(0deg);}
							100%{transform: rotateZ(180deg);}
						}
						@keyframes navbwidth{
							0%{transform: rotate(0deg); }
							100%{transform: rotate(180deg);}
						}

						.robg{width: 223px; height: 80px; background:url(../../assets/image/logo.png) no-repeat; transition: all 0.2s ease-out;animation: scales 1s linear 0.5s; }
						@keyframes scales{
							0%{transform: rotateZ(3deg); transform: scale(1);}
							20%{transform: rotateZ(-3deg);}
							40%{transform: rotateZ(3deg);}
							60%{transform: rotateZ(-3deg); transform: scale(1.05);}
							80%{transform: rotateZ(3deg);}
							100%{transform: rotateZ(-3deg);}
						}
					</style>
					<div  class="rotate">
						<a href="javascript:void(0)">2</a>
					</div>
					<div class="robg">
						<div>
							4561
							<p>45</p>
						</div>
					</div>
				</div>
			</article>
		</section>
	</div>
	<?php include_once '../assets/common/footer.html'; ?>
	<script type="text/javascript">
		$(function(){
		})
	</script>
</body>
</html>