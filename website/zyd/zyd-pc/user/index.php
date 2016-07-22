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
	<div class="wraper g-user">
		<section  class="g-warp g-main">
			<article class="m-page m-user ">
				<div class="catalog">
					<h3 class="title"><span>&nbsp;</span>个人信息</h3>
					<div class="con avatar">
						<div class="av"><img src="/assets/image/avatar.jpg" alt=""></div>
						<div class="name">婉珍</div>
					</div>						
				</div>
				<div class="catalog u-fr">
					<h3 class="title"><span>&nbsp;</span>专属融资顾问</h3>
					<div class="con srevtel">
						<h2 class="tle">400-656-4642<strong>（工作日9:00-18:00）</strong></h2>
					</div>						
				</div>
			</article>
			<article class="m-page m-user">
				<h3 class="title"><span>&nbsp;</span>我的贷款</h3>
				<div class="con myloan">
					<div class="tabs" id="js-iloantypes">
						<a class="btn" href="index.php?t=1">信用贷</a>
						<a class="btn" href="index.php?t=2">装修贷</a>
						<a class="btn" href="index.php?t=3">抵押贷</a>
					</div>
					<table class="table table-hover">
						<tr>
							<th>贷款机构</th>
							<th>贷款产品</th>
							<th>月费率</th>
							<th>期限</th>
							<th>贷款额度</th>
							<th>申请时间</th>
							<th>操作</th>
						</tr>
						<tr>
							<td class="icon"><img src="/assets/image/zsyh_icon.jpg" alt=""></td>
							<td>招商银行-信用贷</td>
							<td>0.5-0.7%</td>
							<td>6-24个月</td>
							<td>10万</td>
							<td>2015-12-30</td>
							<td><a class="btn" href="">查看</a></td>
						</tr>
						<tr>
							<td class="icon"><img src="/assets/image/zsyh_icon.jpg" alt=""></td>
							<td>招商银行-信用贷</td>
							<td>0.5-0.7%</td>
							<td>6-24个月</td>
							<td>10万</td>
							<td>2015-12-30</td>
							<td><a class="btn" href="">查看</a></td>
						</tr>
					</table>
				</div>
									
			</article>
			<nav class="m-pagination">
				<span class="prev pag disabled">&lt;</span>
				<a class="active"  href="" >1</a>
				<a class=""  href="#" >2</a>
				<a class=""  href="#" >3</a>
				<a class=""  href="#" >4</a>
				<a class=""  href="#" >...</a>
				<a class="next pag"  href="#" >&gt;</a>
				<a class="first pag"  href="#" >首页</a>
				<a class="last pag"  href="#" >末页</a>
			</nav>
		</section>
	</div>
	<?php include_once '../assets/common/footer.html'; ?>
	<script type="text/javascript">
		$(function(){
			// 我的贷款类型选择 
			var ItemType =  getQueryString('t') == null ? 1 : getQueryString('t');
			$('#js-iloantypes').find('a').eq(ItemType-1).addClass('act').siblings('a').removeClass('act');
		})
	</script>
</body>
</html>