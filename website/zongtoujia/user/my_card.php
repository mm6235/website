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
	<section  class="g-warp zt-zhoverview">
		<div class="am-u-sm-2 zt-unav">
			<div class="name">
				<p>下午好，13296622514</p>
				<div>账户余额<span> 暂无余额<a href="">充值</a></span></div>
				<div>昨日理财师收益（元）<em> 0 </em></div>
			</div>
			<ul class="nav">
				<li><a href="/user/">账户总览<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_financial.php">我的理财<i class="am-icon-angle-right"></i></a></li>
				<li><a href="loanmin.php">借款管理<i class="am-icon-angle-right"></i></a></li>
				<li class="active"><a href="my_card.php">我的卡券<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_mc.php">消息中心<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_security.php">账户安全<i class="am-icon-angle-right"></i></a></li>
			</ul>
		</div>
  		<div class="am-u-sm-10 zt-profile">
			<div class="con zt-financial">
				<h3 class="title">我的卡券</h3>
				<div class="am-form zt-card am-form-horizontal">
					<div class="am-form-group">
					    <span class="am-u-sm-1">卡券状态:</span>
					    <div class="am-u-sm-11">
					    	<a class="btn active" href="">全部</a>
					    	<a class="btn" href="">未使用</a>
					    	<a class="btn" href="">已使用</a>
					    	<a class="btn" href="">已过期</a>
					    </div>
					</div>
					<div class="am-form-group">
					    <span class="am-u-sm-1">卡券类型:</span>
					    <div class="am-u-sm-11">
					    	<a class="btn active" href="">加息券</a>
					    	<a class="btn" href="">代金券</a>
					    	<a class="btn" href="">体验金</a>
					    </div>
					</div>
					<ul class="card">
						<li class="unused">
							<a href="dd">
								<h5 class="type">加息券</h5>
								<em class="cost">200</em>
								<div class="yield">
									<p>12%加息率</p>
									<p>有效期：2014-04-30</p>
									<p class="cdn">投资1000元以上可用</p>
								</div>								
							</a>					
						</li>
						<li class="used">
							<a href="dd">
								<h5 class="type">加息券</h5>
								<em class="cost">200</em>
								<div class="yield">
									<p>12%加息率</p>
									<p>有效期：2014-04-30</p>
									<p class="cdn">投资1000元以上可用</p>
								</div>								
							</a>
						</li>
						<li class="expired">
							<a href="javascript:void(0);">
								<h5 class="type">加息券</h5>
								<em class="cost">200</em>
								<div class="yield">
									<p>12%加息率</p>
									<p>有效期：2014-04-30</p>
									<p class="cdn">投资1000元以上可用</p>
								</div>								
							</a>
						</li>
					</ul>
						<!-- <p class="note">暂无借款记录</p> -->
				</div>
			</div>
			<div class="con zt-financial">
				<h3 class="title">借款记录</h3>
				<form class="am-form zt-card am-form-horizontal">
					<div class="am-form-group">
					    <h3 class="tle">理财师 <span>请先实名认证，未实名认证时邀请的用户不计入邀请人数，也不会算提成奖励！</span></h3>
					    <div class="yqm">我的邀请码<input type="text" value="1038797"> <span>好友注册时，输入邀请码，您即可获得0.1%的专属利率</span></div>
					    <input type="text" class="yqlj" value="https://www.migang.com/reg.php?uid=1038797" />
					    <div class="share">
					    	<a href="" class="btn btn-weixin"><i class="am-icon-weixin"></i>微信分享</a>
					    	<a href="" class="btn btn-qq"><i class="am-icon-qq"></i>QQ空间</a>
					    	<a href="" class="btn btn-weibo"><i class="am-icon-weibo"></i>微博分享</a>
					    	<a href="" class="btn btn-files"><i class="am-icon-files-o"></i>复制链接</a>
					    </div>
					</div>					
					<div class="recordcon">
						<div class="sy">
							<span>奖励总额（<i>元</i>）<em>0.00</em></span>
							<span>昨日收益（<i>元</i>）<em>0.00</em></span>
							<a class="btn btn-primary" href="">转出</a>
							<a class="am-fr" href="">了解理财师规则</a></div>
						<table class="am-table am-table-hover">
							<thead>
								<tr>                                           
									<th>推荐注册手机号</th>
									<th>注册时间</th>
									<th>首笔投资时间</th>
									<th>奖励金额（元）</th>
									<th>已发奖励（元）</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>1融资中 </td>
									<td>1审核失败</td>
									<td>1审核中 </td>
									<td> 融资失败</td>
								</tr>
							</tbody>
						</table>
						<p class="note">暂无推荐记录</p>
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