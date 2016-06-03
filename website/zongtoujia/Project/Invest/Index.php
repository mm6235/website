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
		<nav class="nav"><a href="">首页</a><em class="icon am-icon-angle-right"></em><a href="">我要投资</a></nav>
		<article class="zt-content">
			<h3 class="tle con">
				<a class="btn active" href="/Project/Invest/">项目列表</a>
				<a class="btn" href="/Project/Transfer/">债权转让</a>
			</h3>
			<div class="con ">
				<ul class="tab" id="js-taglist">
					<li>
						<strong>项目状态:</strong>
						<a class="am-btn active" href="JavaScript:void(0);">全部</a>
						<a class="am-btn" href="JavaScript:void(0);">未开始</a>
						<a class="am-btn" href="JavaScript:void(0);">投标中</a>
						<a class="am-btn" href="JavaScript:void(0);">已满标</a>
						<a class="am-btn" href="JavaScript:void(0);">已审核</a>
						<a class="am-btn" href="JavaScript:void(0);">还款中</a>
						<a class="am-btn" href="JavaScript:void(0);">已还款</a>
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
						<a class="am-btn" href="JavaScript:void(0);">8%及以下</a>
						<a class="am-btn" href="JavaScript:void(0);">9%~10%</a>
						<a class="am-btn" href="JavaScript:void(0);">10%~12%</a>
						<a class="am-btn" href="JavaScript:void(0);">12%~14%</a>
						<a class="am-btn" href="JavaScript:void(0);">14%~16%</a>
						<a class="am-btn" href="JavaScript:void(0);">16%以上</a>
					</li>
					<li>
						<strong>项目类型:</strong>
						<a class="am-btn active" href="JavaScript:void(0);">全部</a>
						<a class="am-btn" href="JavaScript:void(0);">新手项目</a>
						<a class="am-btn" href="JavaScript:void(0);">票据宝</a>
						<a class="am-btn" href="JavaScript:void(0);">供应链</a>
						<a class="am-btn" href="JavaScript:void(0);">项目宝</a>
						<a class="am-btn" href="JavaScript:void(0);">资金宝</a>
					</li>
					<li>
						<strong>还款方式:</strong>
						<a class="am-btn active" href="JavaScript:void(0);">全部</a>
						<a class="am-btn" href="JavaScript:void(0);">按月付息</a>
						<a class="am-btn" href="JavaScript:void(0);">到期本息</a>
						<a class="am-btn" href="JavaScript:void(0);">等额本息</a>
						<a class="am-btn" href="JavaScript:void(0);">等额本金</a>
					</li>
				</ul>
			</div>				
			<div class="am-g con bid">
				<a href="JavaScript:void(0);">全部<em> 420</em>|</a>
				<a href="JavaScript:void(0);">未开始<em> 420</em>|</a>
				<a href="JavaScript:void(0);">投标中<em> 420</em> |</a>
				<a href="JavaScript:void(0);">已满标<em> 40</em> |</a>
				<a href="JavaScript:void(0);">已审核<em> 20</em> |</a>
				<a href="JavaScript:void(0);">还款中<em> 40</em> |</a>
				<a href="JavaScript:void(0);">已还款<em> 40</em></a>
			</div>
			<!-- 产品列表 -->
			<div class="newarea con">
		  		<div class="head">
		  				<span>众投+165431235435132444<i>新手专享</i><i>本息保障</i></span>
		  				<sapn class="am-fr">先息后本</sapn>
		  		</div>
		  		<div class="progress">
		  			<div class="state state-3">
			  			<div class="loty"><span><em>10.0</em>%</span>年化收益</div>
			  			<div class="loty"><span><em>3</em>个月<em>30</em>天</span>借款期限 </div>
			  			<div class="loty sum"><span><em>10,000,00 </em>元</span>借款金额</div>
		  			</div>
		  			<div class="bar">
		  				<span></span>
		  			</div>
		  			<div class="plan">进度20.00%</div>
		  			<a class="nowinvest" href="MyInvest.php">立即购买</a>
		  		</div>					
			</div>
			<div  id="js-projectlist"></div>
			<script type="text/template" id="prjlist">
				{{for(var i=0; i<list.length; i++){ }}
					<div class="newarea con">
				  		<div class="head">
				  			<span>{{:=list[i]['title']}}<i>新手专享</i></span>
				  			<sapn class="am-fr">{{:=list[i]['PayBackType']}}</sapn>
				  		</div>
				  		<div class="progress">
				  			{{ if(list[i].BType == ""){ }}
					  			<div class="state state-3">
						  			<div class="loty"><span><em>{{:=list[i]['Yield']}}</em>%</span>年化收益</div>
						  			<div class="loty"><span><em>3</em>个月<em>30</em>天</span>借款期限 </div>
						  			<div class="loty sum"><span><em>{{:=list[i]['sum']}}</em>元</span>借款金额</div>
					  			</div>
							{{ }else{ }}
					  			<div class="state">
						  			<div class="loty"><span><em>{{:=list[i]['Yield']}}</em>%</span>年化收益</div>
						  			<div class="loty"><span><em>3</em>个月<em>30</em>天</span>借款期限 </div>
						  			<div class="loty sum"><span><em>{{:=list[i]['sum']}}</em>元</span>借款金额</div>
						  			<div class="loty"><span>{{:=list[i]['BType']}}</span>保障方式</div>		  				
					  			</div>
							{{ } }}
				  			<div class="bar">
				  				<span style="width:{{:=list[i]['bar']}}%"></span>
				  			</div>
				  			<div class="plan">进度{{:=list[i]['bar']}}%</div>
				  			<a class="nowinvest" href="MyInvest.php">立即购买</a>
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