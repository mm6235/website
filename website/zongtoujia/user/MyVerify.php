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
	<section  class="g-warp zt-verify">
  		<div class="zt-profile">
			<div class="con zt-basicform">
				<h2 class="tltie"><i class="icon am-icon-check-circle-o "></i>
						恭喜您注册成功！<em>388元红包、2000元体验金</em>已放入您的账户！ 
						<p>完成身份认证才能投标和借款，现在开始<a class="u-blue" href="">实名认证>></a></p>
				</h2>
				<div class="am-form withdraw am-form-horizontal">
					<h3 class="tle">普通投资人实名认证<span>(非真实身份信息将不能绑定银行卡)</span></h3>
					<div class="am-form-group">
						<label for="doc-ipt-3" class="am-u-sm-4 am-form-label">姓名：</label>
						<div class="am-u-sm-8">
						  <input type="text" id="doc-ipt-3" placeholder="请输入姓名 ">
						</div>
					</div>
					<div class="am-form-group">
						<label class="am-u-sm-4 am-form-label">证件类型：</label>
						<div class="am-u-sm-8 bank">
							<select>
								<option value="身份证">身份证</option>
								<option value="护照">护照</option>
							</select>
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-4 am-form-label">证件号码：</label>
						<div class="am-u-sm-8">
						  <input type="number" id="doc-ipt-pwd-2" placeholder="请输入您的证件号码 ">
						</div>
					</div>
					<div class="am-form-group">
						<div class="am-u-sm-8 am-u-sm-offset-4">
						  <button type="submit" class="btn btn-warning">提交</button>
						  <a class="u-blue" href="/">暂不验证</a>
						</div>
					</div>								
				</div>
			</div>
			<div class="con zt-basicform u-hide">
				<h2 class="tltie"><i class="icon am-icon-check-circle-o "></i>
						恭喜您实名认证成功！绑定银行卡<em>即可领大奖！</em>
						<p>提现，须先绑定银行卡，现在<a class="u-blue" href="">绑定银行卡>></a></p>
				</h2>
				<div class="am-form withdraw am-form-horizontal">
					<h3 class="tle">绑定银行卡</span></h3>
					<div class="am-form-group">
						<label for="doc-ipt-3" class="am-u-sm-4 am-form-label">银行卡号：</label>
						<div class="am-u-sm-8">
						  <input type="number" id="doc-ipt-3" placeholder="请输入银行卡号 ">
						</div>
					</div>
					<div class="am-form-group">
						<label class="am-u-sm-4 am-form-label">开户银行：</label>
						<div class="am-u-sm-8 bank">
							<select>
								<option value="身份证">招商银行</option>
							</select>
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-4 am-form-label">开户人姓名：</label>
						<div class="am-u-sm-8">
						  <input type="text" id="doc-ipt-pwd-2" placeholder="请输入您的证件号码 ">
						</div>
					</div>
					<div class="am-form-group">
						<div class="am-u-sm-8 am-u-sm-offset-4">
						  <button type="submit" class="btn btn-warning">提交</button>
						  <a class="u-blue" href="/">暂不绑定</a>
						</div>
					</div>								
				</div>
			</div>			
  		</div>
  		<div class="u-togglebg"></div>
	</section>
	<?php include_once("../assets/common/footer.html") ?>
</div>
<script type="text/javascript">
  seajs.use(['JS/global','JS/user.js']);
</script>
</body>
</html>