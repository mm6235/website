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
<link rel="stylesheet" type="text/css" href="./time/jquery.datetimepicker.css">
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
				<li class="active"><a href="/user/">账户总览<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_financial.php">我的理财<i class="am-icon-angle-right"></i></a></li>
				<li><a href="loanmin.php">借款管理<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_card.php">我的卡券<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_mc.php">消息中心<i class="am-icon-angle-right"></i></a></li>
				<li><a href="my_security.php" >账户安全<i class="am-icon-angle-right"></i></a></li>
			</ul>
		</div>
  		<div class="am-u-sm-10 zt-profile">
			<div class="con">
				<h3 class="title">账户总览</h3>
				<div class="am-g zhhzl">
					<div class="verify">
						<div class="rz">
							<a class="am-u-sm-3 not" href=""><i class="am-icon-mobile-phone"></i><em class="icon iconfont">&nbsp;</em>手机认证</a>
							<a class="am-u-sm-3" href=""><i class="icon iconfont">&#xe69a;</i><em class="icon iconfont">&nbsp;</em>实名认证</a>
							<a class="am-u-sm-3 not" href=""><i class="icon iconfont">&#xe60f;</i><em class="icon iconfont">&nbsp;</em>交易密码</a>
							<a class="am-u-sm-3" href=""><i class="am-icon-credit-card"></i><em class="icon iconfont">&nbsp;</em>绑定银行卡</a>
						</div>
						<div class="bar">
							<div class="am-progress u-bar">
							  <div class="am-progress-bar am-progress-bar-warning" style="width: 20%"></div>
							</div><span>安全等级：高</span><a href="">提高等级</a>	
						</div>
						
					</div>
					<div class="money"  id="js-withdrawal">
						<div>可用金额：<em class="mny">¥ 50</em></div>
						<a class="btn btn-warning" data-id='3' href="javascript:void(0);">充值</a>
						<a class="btn btn-yellow" data-id='2' href="javascript:void(0);">投资</a>
						<a class="btn btn-primary" data-id='2' href="javascript:void(0);">提现</a>
					</div>
					<div class="money lx">
						<div>待还本金：<em class="mny">¥ 5000000</em></div>
						<div>待收利息：<em class="mny">¥ 20</em></div>
					</div>
				</div>
			</div>
			<div class="con">
				<h3 class="title">众投活期</h3>
				<div class="am-g zthq">
					<div class="am-u-sm-4">活期总额：<p class="mny"> ¥ 500.00</p></div>
					<div class="am-u-sm-4">昨日收益：<p class="mny"> ¥ 5000.00 </p></div>
					<div class="am-u-sm-4" id="js-earnings"><a class="btn btn-warning" data-id="1" href="javascript:void(0);">转入</a><a class="btn btn-primary" data-id="1" href="javascript:void(0);">转出</a></div>
				</div>				
			</div>
			<div class="con">
				<h3 class="title">交易记录</h3>
				<form class="am-form am-form-horizontal" id="js-tagselect">
					<div class="am-form-group period">
					    <span class="am-u-sm-1">起止时间</span>
					    <div class="am-u-sm-11">
					    	<input type="text" value="2016-2-18" ><em>-</em>
					    	<input type="text" value="2016-3-18" >
					    	<a class="btn" href="JavaScript:void(0);">全部</a>
					    	<a class="btn"  href="JavaScript:void(0);">今天</a>
					    	<a class="btn active" href="JavaScript:void(0);">最近一个月</a>
					    </div>
					</div>
					<div class="am-form-group">
					    <span class="am-u-sm-1">交易类型</span>
					    <div class="am-u-sm-11">
					    	<a class="btn active" href="">全部</a>
					    	<a class="btn" href="JavaScript:void(0);">充值</a>
					    	<a class="btn" href="JavaScript:void(0);">提现</a>
					    	<a class="btn" href="JavaScript:void(0);">投资</a>
					    	<a class="btn" href="JavaScript:void(0);">回款</a>
					    	<a class="btn" href="JavaScript:void(0);">活期转入</a>
					    	<a class="btn" href="JavaScript:void(0);">活期转出</a>
					    </div>
					</div>
					<div class="recordcon">
						<p class="note">暂无交易记录</p>
					</div>
				</form>
			</div>			
  		</div>
  		<div class="am-u-sm-10 zt-profile u-hide">
			<div class="con zt-basicform">
				<h3 class="title">账户总览</h3>
				<form class="am-form am-form-horizontal">
					<h3 class="tle">众投活期-转入</h3>
					<div class="am-form-group">
						<span class="am-u-sm-2 am-form-label">可用金额：</span>
						<label class="am-u-sm-10">1000</label>
					</div>
					<div class="am-form-group">
						<span class="am-u-sm-2 am-form-label">活期总额：</span>
						<label class="am-u-sm-10">200</label>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-3" class="am-u-sm-2 am-form-label">转入金额：</label>
						<div class="am-u-sm-10">
						  <input type="number" id="doc-ipt-3" placeholder="请输入转入金额 ">
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-2 am-form-label">交易密码：</label>
						<div class="am-u-sm-10">
						  <input type="password" id="doc-ipt-pwd-2" placeholder="请输入交易密码 ">
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
  		<div class="am-u-sm-10 zt-profile u-hide">
			<div class="con zt-basicform">
				<h3 class="title">余额提现</h3>
				<form class="am-form withdraw am-form-horizontal" id="js-balance">
					<div class="am-form-group">
						<span class="am-u-sm-2 am-form-label">礼金余额：</span>
						<label class="am-u-sm-10">1000.00</label>
					</div>
					<div class="am-form-group">
						<span class="am-u-sm-2 am-form-label">可提金额：</span>
						<label class="am-u-sm-10 sum">1000.00</label>
					</div>
					<div class="am-form-group">
						<span class="am-u-sm-2 am-form-label">提现方式：</span>
						<div class="am-u-sm-10 wtype">普通提现（T+1工作日到账，节假日除外）</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-3" class="am-u-sm-2 am-form-label">提现金额：</label>
						<div class="am-u-sm-10">
						  <input type="text" id="doc-ipt-3" placeholder="请输入提现金额 ">
						  <span></span>
						</div>
					</div>
					<div class="am-form-group">
						<label class="am-u-sm-2 am-form-label">银行卡：</label>
						<div class="am-u-sm-10 bank">
							<select>
								<option value="1536********15643121">招商银行1536********15643121</option>
								<option value="1536********15643121">招商银行1536********3121</option>
							</select>
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-2 am-form-label">交易密码：</label>
						<div class="am-u-sm-10">
						  <input type="password" id="doc-ipt-pwd-2" placeholder="请输入交易密码 ">
						</div>
					</div>
					<div class="am-form-group">
						<div class="am-u-sm-10 am-u-sm-offset-2">
						  <button type="submit" class="btn btn-warning">确定</button>
						</div>
					</div>
					<div class="prompt">
						<h3 class="h">温馨提示</h3>
						<p>1.为了您的账户安全，请在充值前进行身份认证、手机绑定以及支付密码设置。</p>
						<p>2.您的账户资金将通过第三方平台进行充值。</p>
						<p>3.请注意您的银行卡充值限制、以免造成不便。</p>
						<p>4.禁止洗钱、信用卡套现、虚假交易等行为，一经发现并确认，将终止该账户的使用。</p>
						<p>5.如果充值金额没有及时到账，请联系客服，4001-158-851。</p>
					</div>									
				</form>


			</div>			
  		</div>
  		<div class="am-u-sm-10 zt-profile u-hide">
			<div class="con zt-basicform">
				<h3 class="title">账户充值</h3>
				<form class="am-form withdraw am-form-horizontal"  id="js-recharge">
					<div class="am-form-group">
						<span class="am-u-sm-2 am-form-label">账户余额：</span>
						<label class="am-u-sm-10">1000.00</label>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-3" class="am-u-sm-2 am-form-label">充值金额：</label>
						<div class="am-u-sm-10">
						  <input type="text" id="doc-ipt-3" placeholder="请输入充值金额 ">
						  <span></span>
						</div>
					</div>
					<div class="am-form-group">
						<label for="doc-ipt-pwd-2" class="am-u-sm-2 am-form-label">网银充值：</label>
						<div class="am-u-sm-10 partner" id="js-recharge">
						  <a href="JavaScript:void(0);"><img src="/assets/image/partner/gsyh.png" alt=""></a>
						  <a href="JavaScript:void(0);"><img src="/assets/image/partner/zgyh.png" alt=""></a>
						  <a href="JavaScript:void(0);"><img src="/assets/image/partner/jsyh.png" alt=""></a>
						  <a href="JavaScript:void(0);"><img src="/assets/image/partner/zsyh.png" alt=""></a>
						  <a href="JavaScript:void(0);"><img src="/assets/image/partner/jtyh.png" alt=""></a>
						  <a href="JavaScript:void(0);"><img src="/assets/image/partner/msyh.png" alt=""></a>
						  <a href="JavaScript:void(0);"><img src="/assets/image/partner/gdyh.png" alt=""></a>
						  <a href="JavaScript:void(0);"><img src="/assets/image/partner/xyyh.png" alt=""></a>
						  <a href="JavaScript:void(0);"><img src="/assets/image/partner/shyh.png" alt=""></a>
						  <a href="JavaScript:void(0);"><img src="/assets/image/partner/bjyh.png" alt=""></a>
						</div>
					</div>
					<div class="am-form-group">
						<div class="am-u-sm-10 am-u-sm-offset-2">
						  <button type="submit" class="btn btn-warning">充值</button>
						</div>
					</div>
					<div class="prompt">
						<h3 class="h">温馨提示</h3>
						<p>1.为了您的账户安全，请在充值前进行身份认证、手机绑定以及支付密码设置。</p>
						<p>2.您的账户资金将通过第三方平台进行充值。</p>
						<p>3.请注意您的银行卡充值限制、以免造成不便。</p>
						<p>4.禁止洗钱、信用卡套现、虚假交易等行为，一经发现并确认，将终止该账户的使用。</p>
						<p>5.如果充值金额没有及时到账，请联系客服，4001-158-851。</p>
					</div>									
				</form>
			</div>			
  		</div>
  		<input id="date_timepicker_start" type="text">
  		<input id="date_timepicker_end" type="text">
	</section>
	<?php include_once("../assets/common/footer.html") ?>
</div>
<script type="text/javascript" src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
  seajs.use(['JS/global','JS/user.js','./time/jquery.datetimepicker'],function(){
  	// 提现验证
  	$("#js-balance").on('click','.btn',function(){
  		var text =$("#js-balance").find("input[type=text]");
		if(!(/^([+-]?)\d*\.?\d+$/.test(text.val())) || text.val() == ""){
			text.val(' ').focus().next('span').text('请输入正确的提现金额！');
			return false;
		}
		if(text.val() > Number($("#js-balance .sum").html())){
			text.val(Number($("#js-balance .sum").html()));
			console.log(text.val());
		}
		text.next('span').text('');
  		return false;
  	});
  	// 充值验证
  	$("#js-recharge").on('click','.btn',function(){
  		var text =$("#js-recharge").find("input[type=text]");
  			
		if(!(/^([+-]?)\d*\.?\d+$/.test(text.val())) || text.val() == ""){
			text.val('').next('span').text('请输入正确的金额！');
			return false;
		}
		text.next('span').text('');
  		return false;
  	});

	jQuery('#date_timepicker_start').datetimepicker({
		format:'Y/m/d',
		onShow:function( ct ){
		this.setOptions({
		maxDate:jQuery('#date_timepicker_end').val()?jQuery('#date_timepicker_end').val():false
		})
		},
		timepicker:false
	});
	jQuery('#date_timepicker_end').datetimepicker({
		format:'Y/m/d',
		onShow:function( ct ){
		this.setOptions({
		minDate:jQuery('#date_timepicker_start').val()?jQuery('#date_timepicker_start').val():false
		})
		},
		timepicker:false
	});
  });
</script>
</body>
</html>