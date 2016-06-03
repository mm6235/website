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
				<li><a href="loanmin.php">借款管理<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_card.php">我的卡券<i class="am-icon-angle-right"></i></a></li>
				<li class="active"><a href="my_mc.php">消息中心<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_security.php">账户安全<i class="am-icon-angle-right"></i></a></li>
			</ul>
		</div>
  		<div class="am-u-sm-10 zt-profile">
			<div class="con zt-message">
				<h3 class="title">消息中心</h3>
				<form class="am-form message am-form-horizontal">				
					<div class="recordcon">
						<table class="am-table am-table-hover">
							<thead>
								<tr>                                           
									<th>状态</th>
									<th>内容</th>
									<th>时间</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><label><input type="checkbox" value="">已查看</label></td>
									<td><a href="MyMsgDetails.php"><p>公司的公司V型从vv这种V字形</p></a></td>
									<td><a href="MyMsgDetails.php">2016-4-18 &nbsp;14：14:14</a></td>
								</tr>
								<tr>
									<td class="not"><label><input type="checkbox" value="">未查看</label></td>
									<td><a href="MyMsgDetails.php"><p>公司的公司V型司的公司司V型司的公司V型司的公司V型从vv这</p></a></td>
									<td><a href="MyMsgDetails.php"> 2016-4-18 &nbsp;14：14:14</a></td>
								</tr>
								<tr>
									<td><label><input type="checkbox" value="">已查看</label></td>
									<td><a href="MyMsgDetails.php"><p>三个地方高大上度VCD飞洒沙发上放阿萨德法师撒旦飞洒大法师电风扇放萨芬大是大非暗示法大师萨法是否安抚 阿萨德法师放啥地方安抚撒旦法师</p></a></td>
									<td><a href="MyMsgDetails.php"> 2016-4-18 &nbsp;14：14:14</a></td>
								</tr>
							</tbody>
						</table>
						<button type="button" class="btn am-btn-warning">标为已读</button>&nbsp;
						<button type="button" class="btn am-btn-default">删除</button>
						<!-- <p class="note">暂无消息内容</p> -->
					</div>
				</form>
			</div>
			<div class="m-pagination">
				<strong class="prev pag disabled" href="" ><</strong>
				<a class="active"  href="" >1</a>
				<a class=""  href="#" >2</a>
				<a class=""  href="#" >3</a>
				<a class=""  href="#" >4</a>
				<a class=""  href="#" >...</a>
				<a class="next pag"  href="#" >></a>
				<a class="first pag"  href="#" >首页</a>
				<a class="last pag"  href="#" >末页</a>
			</div>	
  		</div>
	</section>
	<?php include_once("../assets/common/footer.html") ?>
</div>
<script type="text/javascript">
  seajs.use('JS/global.js');
</script>
</body>
</html>