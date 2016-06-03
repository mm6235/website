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
	<?php include_once("../../assets/common/top.html") ?>
	<section  class="g-warp zt-project">
		<nav class="nav"><a href="">首页</a><em class="icon am-icon-angle-right"></em><a href="">转让市场</a></nav>
		<article class="zt-content">
			<h3 class="tle con">
				<a class="btn" href="/Project/Invest/">项目列表</a>
				<a class="btn active" href="/Project/Transfer/">债权转让</a>
			</h3>
			<div class="con ">
				<ul class="tab" id="js-taglist">
					<li>
						<strong>项目状态:</strong>
						<a class="am-btn active" href="JavaScript:void(0);">全部</a>
						<a class="am-btn" href="JavaScript:void(0);">转让中</a>
						<a class="am-btn" href="JavaScript:void(0);">已转让</a>
					</li>
					<li>
						<strong>项目期限:</strong>
						<a class="am-btn active" href="JavaScript:void(0);">全部</a>
						<a class="am-btn" href="JavaScript:void(0);">30天以下</a>
						<a class="am-btn" href="JavaScript:void(0);">0~3个月</a>
						<a class="am-btn" href="JavaScript:void(0);">3~6个月</a>
						<a class="am-btn" href="JavaScript:void(0);">6~9个月</a>
						<a class="am-btn" href="JavaScript:void(0);">9~12个月</a>
						<a class="am-btn" href="JavaScript:void(0);">12个月以上</a>
					</li>
					<li>
						<strong>项目收益:</strong>
						<a class="am-btn active" href="JavaScript:void(0);">全部</a>
						<a class="am-btn" href="JavaScript:void(0);">9%及以下</a>
						<a class="am-btn" href="JavaScript:void(0);">9%~10%</a>
						<a class="am-btn" href="JavaScript:void(0);">10%~12%</a>
						<a class="am-btn" href="JavaScript:void(0);">12%~14%</a>
						<a class="am-btn" href="JavaScript:void(0);">14%~16%</a>
						<a class="am-btn" href="JavaScript:void(0);">16%以上</a>
					</li>
					<li>
						<strong>项目类型:</strong>
						<a class="am-btn active" href="JavaScript:void(0);">全部</a>
						<a class="am-btn" href="JavaScript:void(0);">票据宝</a>
						<a class="am-btn" href="JavaScript:void(0);">供应链</a>
						<a class="am-btn" href="JavaScript:void(0);">项目宝</a>
						<a class="am-btn" href="JavaScript:void(0);">资金宝</a>
					</li>
				</ul>
			</div>				
			<div class="am-g con bid">
				<a href="JavaScript:void(0);">全部<em> 420</em>|</a>
				<a href="JavaScript:void(0);">转让中<em> 420</em>|</a>
				<a href="JavaScript:void(0);">已转让<em> 420</em></a>
			</div>
			<!-- 产品列表 -->
			<div class="newarea con">
		  		<div class="head">
		  			<span>众投+165431235435132444</span>
		  			<sapn class="am-fr">按月付息（到期还本）</sapn>
		  		</div>
		  		<div class="progress">
		  			<div class="state">
			  			<div class="loty"><span><em>12.0</em>%</span>原标年化利率</div>
			  			<div class="loty"><span><em>100.0</em>%</span>转出折率</div>
			  			<div class="loty"><span><em>4</em>个月<em>30</em>天</span>原标剩余期限</div>
			  			<div class="loty sum"><span><em>10,000,00</em>元</span>债权本金</div>
		  			</div>
		  			<div class="bar">
		  				<span></span>
		  			</div>
		  			<div class="plan">进度20.00%</div>
		  			<a class="nowinvest" href="AssignmentMarket.php">立即购买</a>
		  		</div>
			</div>
			<div  id="js-projectlist"></div>
			<script type="text/template" id="prjlist">
				{{for(var i=0; i<list.length; i++){ }}
					<div class="newarea con">
				  		<div class="head">
				  			<span>{{:=list[i]['title']}}</span>
				  			<sapn class="am-fr">{{:=list[i]['PayBackType']}}</sapn>
				  		</div>
				  		<div class="progress">
				  			<div class="state">
					  			<div class="loty"><span><em>{{:=list[i]['Yield']}}</em>%</span>原标年化利率</div>
					  			<div class="loty"><span><em>{{:=list[i]['rate']}}</em>%</span>转出折率</div>
					  			<div class="loty"><span><em>{{:=list[i]['Period']}}</em>个月<em>30</em>天</span>原标剩余期限</div>
					  			<div class="loty sum"><span><em>{{:=list[i]['sum']}}</em>元</span>债权本金</div>
				  			</div>
				  			<div class="bar">
				  				<span style="width:{{:=list[i]['bar']}}%"></span>
				  			</div>
				  			<div class="plan">进度{{:=list[i]['bar']}}%</div>
				  			<a class="nowinvest" href="{{:=list[i]['url']}}">立即购买</a>
				  		</div>
					</div>
				{{ } }}
			</script>
			<!-- 产品列表结束 -->
		</article>
		<div class="m-pagination">
			<strong class="prev pag disabled" ><</strong>
			<a class="active"  href="" >1</a>
			<a class=""  href="#" >2</a>
			<a class=""  href="#" >3</a>
			<a class=""  href="#" >4</a>
			<a class=""  href="#" >...</a>
			<a class="next pag"  href="#" >></a>
			<a class="first pag"  href="#" >首页</a>
			<a class="last pag"  href="#" >末页</a>
		</div>	
	</section>
	<?php include_once("../../assets/common/footer.html") ?>
</div>
<script type="text/javascript">
  seajs.use(['JS/global.js','Plugins/baiduTemplate/baiduTemplate.js','JS/ulitem.js']);
</script>
</body>
</html>