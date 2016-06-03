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
				<li><a href="my_mc.php">消息中心<i class="am-icon-angle-right"></i></a></li>
				<li class="active"><a href="my_security.php">账户安全<i class="am-icon-angle-right"></i></a></li>
			</ul>
		</div>
  		<div class="am-u-sm-10 zt-profile">
			<div class="con zt-security">
				<h3 class="title">账户安全</h3>
				<div class="security" id="js-security">
					<ul>
						<li class="th">
							<div class="am-u-sm-8">
								<i class="am-icon-star"></i>
								<span>账户安全等级中等，请继续验证，提高安全等级！</span>
							</div>
							<div class="am-u-sm-4">
								<span>安全级别</span>
								<i class="am-icon-star-o act"></i>
								<i class="am-icon-star-o act"></i>
								<i class="am-icon-star-o act"></i>
								<i class="am-icon-star-o"></i>
								<i class="am-icon-star-o"></i>
							</div>
						</li>
						<li class="am-g first">
							<div class="am-u-sm-8">
								<div class="ico">
									<i class="am-icon-mobile-phone"></i>
									<em class="icon iconfont">&nbsp;</em>手机认证
								</div>
								<div class="passed">13*******14</div>
							</div>
							<div class="am-u-sm-4"><a class="btn" data-id="1" href="javascript:void(0);">修改</a></div>
						</li>
						<li class="am-g">
							<div class="am-u-sm-8">
								<div class="ico">
									<i class="icon iconfont">&#xe69a;</i>
									<em class="icon iconfont">&nbsp;</em>实名认证
								</div>
								<div class="passed">已通过</div>
							</div>
							<div class="am-u-sm-4"><a class="btn"  data-id="2" href="javascript:void(0);">修改</a></div>
						</li>
						<li class="am-g">
							<div class="am-u-sm-8">
								<div class="ico">
									<i class="icon iconfont">&#xe61d;</i>
									<em class="icon iconfont">&nbsp;</em>电子邮箱
								</div>
								<div class="passed">已通过</div>
							</div>
							<div class="am-u-sm-4"><a class="btn"  data-id="" href="javascript:void(0);">修改</a></div>
						</li>
						<li class="am-g not">
							<div class="am-u-sm-8">
								<div class="ico">
									<i class="icon iconfont">&#xe60f;</i>
									<em class="icon iconfont">&nbsp;</em>
									交易密码
								</div>
								<div class="passed">未设置<span class="note">交易密码可以提高投资，提现的安全</span></div>
							</div>
							<div class="am-u-sm-4"><a class="btn"  data-id="3" href="javascript:void(0);">立即设置</a></div>
						</li>
						<li class="am-g">
							<div class="am-u-sm-8 lpaw">
								<div class="ico">
									<i class="icon iconfont">&#xe64e;</i>
									<em class="icon iconfont">&nbsp;</em>登录密码
								</div>
								<div class="passed">已通过</div>
							</div>
							<div class="am-u-sm-4"><a class="btn"  data-id="4" href="javascript:void(0);">修改</a></div>
						</li>
						<li class="am-g not">
							<div class="am-u-sm-8">
								<div class="ico">
									<i class="am-icon-credit-card"></i>
									<em class="icon iconfont">&nbsp;</em>绑定银行卡
								</div>
								<div class="passed">未绑定</div>
							</div>
							<div class="am-u-sm-4"><a class="btn"  data-id="5" href="javascript:void(0);">绑定</a></div>
						</li>
					</ul>
				</div>
			</div>	
  		</div>
  		<!-- 修改手机号 -->
  		<div class="am-u-sm-10 zt-profile u-hide">
			<div class="con zt-basicform">
				<h3 class="title">账户安全</h3>				
				<div class="am-form security am-form-horizontal" id="js-changemobile">
					<h3 class="tle">修改手机号</h3>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">手机号码：</label>
						<div class="am-u-sm-9">
						  <input type="text" data-type="m" value="" placeholder="请输入您的手机号码 "><span></span> 
						</div>
					</div>
					<div class="am-form-group verify">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">短信验证码：</label>
						<div class="am-u-sm-4">
						  <input type="password" data-type="p" placeholder="请输入短信验证码 "><span></span>
						</div>
						<a class="am-btn btn btn-primary am-u-sm-5" data-id="telforgotpwd" href="javascript:void(0)">发送短信验证码</a>
						<span></span>  
					</div>
					<div class="am-form-group">
						<div class="am-u-sm-9 am-u-sm-offset-3">
						  <button type="submit" class="btn btn-warning">确定</button>
						</div>
					</div>
				</div>
			</div>	
  		</div>
  		<!-- 实名认证 -->
  		<div class="am-u-sm-10 zt-profile u-hide">
			<div class="con zt-basicform">
				<h3 class="title">账户安全</h3>				
				<div class="am-form security am-form-horizontal" id="js-authentication">
					<h3 class="tle">实名认证</h3>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">姓名：</label>
						<div class="am-u-sm-9">
						  <input type="text" data-type="u"  placeholder="请输入姓名 ">
						  <span></span> 
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">证件类型：</label>
						<div class="am-u-sm-9">
							<select name="" id="">
								<option value="">身份证</option>
								<option value="">1</option>
								<option value="">1</option>
							</select>
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">证件号码：</label>
						<div class="am-u-sm-9">
						  <input type="text" data-type="n"  placeholder="请再次输入交易密码 "><span></span> 
						</div>
					</div>
					<div class="am-form-group">
						<div class="am-u-sm-9 am-u-sm-offset-3">
						  <button type="submit" class="btn btn-warning">提交</button>
						</div>
					</div>
				</div>
			</div>	
  		</div>
  		<!-- 修改交易密码 -->
  		<div class="am-u-sm-10 zt-profile u-hide">
			<div class="con zt-basicform">
				<h3 class="title">账户安全</h3>				
				<div class="am-form security am-form-horizontal" id="js-changepwd">
					<h3 class="tle">修改交易密码</h3>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">旧密码：</label>
						<div class="am-u-sm-9">
						  <input type="password"  data-type="n"   placeholder="请输入旧的交易密码 "><span></span>
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">交易密码：</label>
						<div class="am-u-sm-9">
						  <input type="password" data-type="p"   placeholder="请输入新的交易密码 "><span></span>
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">再次输入交易密码：</label>
						<div class="am-u-sm-9">
						  <input type="password" data-type="rp"   placeholder="请再次输入交易密码 "><span></span>
						</div>
					</div>
					<div class="am-form-group">
						<div class="am-u-sm-9 am-u-sm-offset-3">
						  <button type="submit" class="btn btn-warning">提交</button>
						</div>
					</div>
				</div>
			</div>	
  		</div>
  		<!-- 找回交易密码 -->
  		<div class="am-u-sm-10 zt-profile u-hide">
			<div class="con zt-basicform">
				<h3 class="title">账户安全</h3>				
				<div class="am-form security am-form-horizontal" id="js-finddealpwd">
					<h3 class="tle">找回交易密码</h3>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">手机号码：</label>
						<div class="am-u-sm-9">
						  <input type="text" data-type="m"  placeholder="请输入您的手机号码 "><span></span>
						</div>
					</div>
					<div class="am-form-group verify">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">短信验证码：</label>
						<div class="am-u-sm-4">
						  <input type="password"  data-type="v" placeholder="请输入短信验证码 "><span></span>
						</div>            
						<a class="btn btn-primary am-u-sm-5"  data-id="telforgotpwd" href="javascript:void(0)">发送短信验证码</a>
						<span></span>  
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">身份证号：</label>
						<div class="am-u-sm-9">
						  <input type="text"  data-type="n" placeholder="请输入您的身份证号 "><span></span>
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">新交易密码：</label>
						<div class="am-u-sm-9">
						  <input type="password" data-type="p"   placeholder="请输入新的交易密码 ">
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">再次输入交易密码：</label>
						<div class="am-u-sm-9">
						  <input type="password"  data-type="rp" placeholder="请再次输入交易密码 ">
						</div>
					</div>
					<div class="am-form-group">
						<div class="am-u-sm-9 am-u-sm-offset-3">
						  <button type="submit" class="btn btn-warning">确定</button>
						</div>
					</div>
				</div>
			</div>	
  		</div>
  		<!-- 绑定银行卡 -->
  		<div class="am-u-sm-10 zt-profile u-hide">
			<div class="con zt-basicform">
				<h3 class="title">账户安全</h3>				
				<div class="am-form security am-form-horizontal" id="js-bindingbank">
					<h3 class="tle">绑定银行卡</h3>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">银行卡号：</label>
						<div class="am-u-sm-9">
						  <input type="text"  data-type="n" placeholder="请输入银行卡号 "><span></span> 
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">开户银行：</label>
						<div class="am-u-sm-9">
						  <input type="text"  data-type="zh" value="招商银行" placeholder=" "><span></span>
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">开户人姓名：</label>
						<div class="am-u-sm-9">
						  <input type="text"  value="江婉珍" data-type="u"  placeholder=" "><span></span> 
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">手机号码：</label>
						<div class="am-u-sm-9">
						  <input type="text" data-type="m"  placeholder="请输入您的手机号码 "><span></span> 
						</div>
					</div>					
					<div class="am-form-group verify">
						<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">再次输入交易密码：</label>
						<div class="am-u-sm-4">
						  <input type="password"  data-type="p" placeholder="请再次输入交易密码 "><span></span>
						</div>            
						<a class="btn btn-primary am-u-sm-5"  data-id="telforgotpwd" href="javascript:void(0)">发送短信验证码</a>
						<span></span>  
					</div>
					<div class="am-form-group">
						<div class="am-u-sm-9 am-u-sm-offset-3">
						  <button type="submit" class="btn btn-warning">提交</button>
						</div>
					</div>
				</div>
			</div>	
  		</div>
	</section>
	<?php include_once("../assets/common/footer.html") ?>
</div>
<script type="text/javascript">
  seajs.use(['JS/global','JS/user.js'],function(){
  });
</script>
</body>
</html>