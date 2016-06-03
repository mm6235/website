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
				<li><a href="my_financial.php">我的理财<i class="am-icon-angle-right"></i></a></li>
				<li class="active"><a href="loanmin.php">借款管理<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_card.php">我的卡券<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_mc.php">消息中心<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_security.php">账户安全<i class="am-icon-angle-right"></i></a></li>
			</ul>
		</div>
  		<div class="am-u-sm-10 zt-profile">
			<div class="con zt-financial">
				<h3 class="title">借款管理</h3>
				<div class="am-g loanmin">
					<div class="am-u-sm-4 income">
						<div>待还总额</div>
						<div class="tzsy"><em>0.00</em></div>
					</div>
					<div class="am-u-sm-8">
						<div class="am-u-sm-4">逾期金额：
							<p> ¥ 500.00</p>
						</div>
						<div class="am-u-sm-4">近30天应还金额：
							<p> ¥ 5000.00 </p>
						</div>
						<div class="am-u-sm-4 end">近10天应还金额：
							<p> ¥ 5000.00 </p>
						</div>
						<div class="loan" id="js-loanadmin">
							<a class="btn btn-warning" data-id="1" href="javascript:void(0);">借款资格申请</a>
							<a class="btn btn-yellow" data-id="2" href="javascript:void(0);">申请借款</a>
							<a class="btn btn-primary" data-id="2" href="javascript:void(0);">我要还款</a>
						</div>
					</div>
				</div>
			</div>
			<div class="con zt-financial">
				<h3 class="title">借款记录</h3>
				<form class="am-form tzstate am-form-horizontal">
					<div class="am-form-group">
					    <span class="am-u-sm-1">借款状态:</span>
					    <div class="am-u-sm-11">
					    	<a class="btn active" href="">全部</a>
					    	<a class="btn" href="">借款申请</a>
					    	<a class="btn" href="">还款中</a>
					    	<a class="btn" href="">已还清</a>
					    	<a class="btn" href="">借款记录</a>
					    	<a class="btn" href="">还款记录</a>
					    </div>
					</div>					
					<div class="recordcon">
						<table class="am-table am-table-hover">
							<thead>
								<tr>                                           
									<th>借款标题</th>
									<th>借款金额</th>
									<th>年利率</th>
									<th>借款期限</th>
									<th>还款计划</th>
									<th>状态</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>1</td>
									<td>1融资中 </td>
									<td>1审核失败</td>
									<td>1审核中 </td>
									<td> 融资失败</td>
								</tr>
							</tbody>
						</table>
						<p class="note">暂无借款记录</p>
					</div>
				</form>
			</div>		
  		</div>
  		<div class="am-u-sm-10 zt-profile u-hide">
			<div class="con zt-basicform">
				<h3 class="title">借款管理</h3>
				<form class="am-form am-form-horizontal zt-financial">
					<h3 class="tle">借款资格申请</h3>
					<div class="am-form-group">
						<label for="doc-ipt-3" class="am-u-sm-2 am-form-label">联系人：</label>
						<div class="am-u-sm-10">
						  <input type="text" id="doc-ipt-3" placeholder="请输入联系人名字">
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-3" class="am-u-sm-2 am-form-label">手机号码：</label>
						<div class="am-u-sm-10">
						  <input type="text" id="doc-ipt-3" placeholder="请输入手机号码">
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-3" class="am-u-sm-2 am-form-label">月均收入：</label>
						<div class="am-u-sm-10">
						  <input type="text" id="doc-ipt-3" placeholder="请输入您的月均收入">
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-3" class="am-u-sm-2 am-form-label">地区：</label>
						<div class="am-u-sm-10">
						  <input type="text" id="doc-ipt-3" placeholder="请输入您的居住地区">
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-2 am-form-label">备注说明：</label>
						<div class="am-u-sm-10">
							<textarea class="" rows="8" id="doc-ta-1"  placeholder="请输入"></textarea>
						</div>
					</div>
					<div class="am-form-group">
						<div class="am-u-sm-10 am-u-sm-offset-2">
						  <button type="submit" class="btn btn-warning">提交</button>
						</div>
					</div>
				</form>
			</div>			
  		</div>
	</section>
	<?php include_once("../assets/common/footer.html") ?>
</div>
<script type="text/javascript">
  seajs.use(['JS/global.js','JS/user.js']);
</script>
</body>
</html>