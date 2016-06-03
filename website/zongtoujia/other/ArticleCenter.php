<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">

<title>众投+</title>
<meta name="author" content="">
<meta name="keywords" content="">
<meta name="description" content="">

<link rel="stylesheet" type="text/css" href="/assets/plugins/amazeui/css/amazeui.min.css">
<link rel="stylesheet" type="text/css" href="/assets/common/common.css">
<link rel="stylesheet" type="text/css" href="/assets/css/project.css">
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
	<section  class="g-warp zt-zhoverview">
		<nav class="nav"><a href="/">首页</a><em class="icon am-icon-angle-right"></em><a href="javascript:void(0)">帮助中心</a></nav>
		<div class="am-u-sm-2 zt-unav">
			<ul class="nav">
				<li><a href="/other/">关于我们<i class="am-icon-angle-right"></i></a></li>
				<li><a href="MediaReport.php">媒体报道<i class="am-icon-angle-right"></i></a></li>
				<li><a href="Announcement.php">平台公告<i class="am-icon-angle-right"></i></a></li>
				<li class="active"><a href="ArticleCenter.php">帮助中心<i class="am-icon-angle-right"></i></a></li>
				<li><a href="ContactUs.php">联系我们<i class="am-icon-angle-right"></i></a></li>
			</ul>
		</div>
  		<div class="am-u-sm-10 zt-synopsis" id="zt-synopsis">
			<div class="con">
				<h3 class="title">帮助中心</h3>
				<div class="am-g news">
			  		<ol>
			  			<li>
			  				<a href="javascript:void(0);">阿斯蒂芬啥地方</a>
			  				<div class="details">
			  					<h3 class="tle">芬啥地</h3>
			  					<p>阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方</p>
			  				</div>
			  			</li>
			  			<li>
			  				<a href="javascript:void(0);">阿斯蒂芬啥地方</a>
			  				<div class="details">
			  					<h3 class="tle">芬啥地</h3>
			  					<p>阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方</p>
			  				</div>
			  			</li>
			  			<li>
			  				<a href="javascript:void(0);">阿斯蒂芬啥地方</a>
			  				<div class="details">
			  					<h3 class="tle">芬啥地</h3>
			  					<p>阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方</p>
			  				</div>
			  			</li>
			  			<li>
			  				<a href="javascript:void(0);">阿斯蒂芬啥地方</a>
			  				<div class="details">
			  					<h3 class="tle">芬啥地</h3>
			  					<p>阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方</p>
			  				</div>
			  			</li>
			  			<li><a href="javascript:void(0);">阿斯蒂芬啥地方</a></li>
			  			<li><a href="javascript:void(0);">阿斯蒂芬啥地方</a></li>
			  			<li><a href="javascript:void(0);">阿斯蒂芬啥地方</a></li>
			  			<li><a href="javascript:void(0);">阿斯蒂芬啥地方</a></li>
			  			<li><a href="javascript:void(0);">阿斯蒂芬啥地方</a></li>
			  		</ol>
				</div>
			</div>		
  		</div>
	</section>
	<?php include_once("../assets/common/footer.html") ?>
</div>
<script type="text/javascript">
	seajs.use('JS/global.js', function(){
		// 点击列表出现详细内容
		$('#zt-synopsis .news').on('click','li',function(){
			$(this).toggleClass('act').siblings('li').removeClass('act');
		});
	});
</script>
</body>
</html>