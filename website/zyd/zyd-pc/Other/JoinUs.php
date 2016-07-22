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
				<h3 class="title"><span>&nbsp;</span>加入我们</h3>
				<div class="con">
					11111
					<div>
						<button class="btn btn-warning" id="js-btn">时间</button>
						<span id="js-span"></span>
					</div>
					<script type="text/javascript">
						window.onload = function () {
							var btn = document.getElementById('js-btn');
							var span = document.getElementById('js-span');
							var t = new Date().getTime();
							var d=Math.floor(t/1000/60/60/24); 
								t-=d*(1000*60*60*24); 
							var h=Math.floor(t/1000/60/60); 
								t-=h*60*60*1000; 
							var m=Math.floor(t/1000/60); 
								t-=m*60*1000; 
							var s=Math.floor(t/1000);
							var Timecon = d + "天"+h+"小时"+m+"分"+s+"秒";
							btn.prototype = function(){
								console.log(t.prototype);
							};
							btn.onclick = function(e){
								span.innerHTML =  Timecon;
								btn.prototype();
							}
						} 
					</script>
				</div>
				<div class="con">
					<div hidden>21313</div>
					<div>
						<textarea name="name" id="" spellcheck="true" cols="20" rows="2"></textarea>
						<p contenteditable="true">可编辑区域</p>
						<table contenteditable="true">
							<tr>
								<th>标题1</th>
								<th>标题2</th>
							</tr>
							<tr>
								<td>内容11</td>
								<td>内容2</td>
								<td>内容3</td>
							</tr>
						</table>
					</div>
				</div>
			</article>
		</section>
	</div>
	<?php include_once '../assets/common/footer.html'; ?>
</body>
</html>