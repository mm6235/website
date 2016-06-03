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
<link rel="stylesheet" type="text/css" href="/assets/css/user.css">
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
	<section  class="g-warp zt-zhoverview" id="zt-zhoverview">
		<div class="am-u-sm-2 zt-unav">
			<div class="name">
				<p>下午好，13296622514</p>
				<div>账户余额<span> 暂无余额<a href="">充值</a></span></div>
				<div>昨日理财师收益（元）<em> 0 </em></div>
			</div>
			<ul class="nav">
				<li><a href="/user/">账户总览<i class="am-icon-angle-right"></i></a></li>
				<li class="active"><a href="my_financial.php">我的理财<i class="am-icon-angle-right"></i></a></li>
				<li><a href="loanmin.php">借款管理<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_card.php">我的卡券<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_mc.php">消息中心<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_security.php">账户安全<i class="am-icon-angle-right"></i></a></li>
			</ul>
		</div>
  		<div class="am-u-sm-10 zt-profile">
			<div class="con zt-financial">
				<h3 class="title">理财总览</h3>
				<div class="am-g">
					<div class="am-u-sm-4 income">
						<div class="tzsy">投资收益：<em>0.00</em></div>
						<div>待收收益：<em>¥ 0.00</em></div>
						<div>待收本金：<em>¥ 0.00</em></div>
					</div>
					<div class="am-u-sm-8 pgxz" id="js-financial">
						<a href="javasctipt:void(0)" data-id="1"><i class="icon"></i>票据宝<em>¥ 0.00</em></a>
						<a href="javasctipt:void(0)" data-id="1"><i class="icon"></i>供应链<em>¥ 0.00</em></a>
						<a href="javasctipt:void(0)" data-id="1"><i class="icon"></i>项目宝<em>¥ 0.00</em></a>
						<a href="javasctipt:void(0)" data-id="1"><i class="icon"></i>资产宝<em>¥ 0.00</em></a>
					</div>
				</div>
			</div>
			<div class="con autotz">自动投资<a class="u-blue" href="">一键托管，立即开启</a>
			</div>
			<div class="con zt-financial">
				<h3 class="title">投资记录</h3>
				<form class="am-form tzstate am-form-horizontal"id="js-tagselect">
					<div class="am-form-group">
					    <span class="am-u-sm-1">投资状态:</span>
					    <div class="am-u-sm-11">
					    	<a class="btn active" href="javascript:void(0)">全部</a>
					    	<a class="btn" href="javascript:void(0)">筹款中</a>
					    	<a class="btn" href="javascript:void(0)">回款中</a>
					    	<a class="btn" href="javascript:void(0)">已结清</a>
					    	<a class="btn" href="javascript:void(0)">可转让</a>
					    	<a class="btn" href="javascript:void(0)">转让中</a>
					    	<a class="btn" href="javascript:void(0)">已转让</a>
					    </div>
					</div>					
					<div class="recordcon">
						<table class="am-table am-table-hover">
							<thead>
								<tr>                                           
									<th>投标项目</th>
									<th>投标时间</th>
									<th>年化利率</th>
									<th>投资期限</th>
									<th>回款方式</th>
									<th>投标金额</th>
									<th>操作</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>1</td>
									<td>1</td>
									<td>1</td>
									<td>1</td>
									<td>1</td>
									<td>1</td>
								</tr>
							</tbody>
						</table>
						<p class="note">暂无投资记录，<a href="" class="u-blue">立即投资</a></p>
					</div>
				</form>
			</div>		
  		</div>
  		<div class="am-u-sm-10 zt-profile u-hide">
			<div class="con zt-financial">
				<h3 class="title">票据宝</h3>
				<div class="am-g pjb">
					<div class="am-u-sm-4 income">
						<div>已赚取</div>
						<div class="tzsy"><em>0.00</em></div>
					</div>
					<div class="am-u-sm-8">
						<div class="am-u-sm-4">投资本金
							<p>¥ 0.00</p>
						</div>
						<div class="am-u-sm-8">待收收益
							<p>¥ 0.00</p>
						</div>
					</div>
				</div>
			</div>
			<div class="con zt-financial">
				<h3 class="title">转让项目</h3>
				<form class="am-form tzstate am-form-horizontal"id="js-tagselect">
					<div class="am-form-group">
					    <span class="am-u-sm-1">投资状态:</span>
					    <div class="am-u-sm-11">
					    	<a class="btn active" href="javascript:void(0)">全部</a>
					    	<a class="btn" href="javascript:void(0)">持有中</a>
					    	<a class="btn" href="javascript:void(0)">已结清</a>
					    </div>
					</div>					
					<div class="recordcon">
						<table  class="am-table am-table-hover">
							<thead>
								<tr>                                           
									<th>投标项目</th>
									<th>年化利率</th>
									<th>投资本金</th>
									<th>待收收益</th>
									<th>到期时间</th>
									<th>状态</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>1</td>
									<td>1</td>
									<td>1</td>
									<td>1</td>
									<td>1</td>
								</tr>
							</tbody>
						</table>
						<p class="note">暂无投资记录，<a href="" class="u-blue">立即投资</a></p>
					</div>
				</form>
			</div>		
  		</div>
	</section>
	<?php include_once("../assets/common/footer.html") ?>
</div>
<script type="text/javascript">
  seajs.use(['JS/global','JS/user.js']);
</script>
</body>
</html>