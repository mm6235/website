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
	<!-- 自动投资 -->
	<section  class="g-warp zt-zhoverview" id="js-zhoverview">
		<!-- 自动投资页面 -->
  		<div class="zt-autotz">
			<div class="con opentz">
				<div class="pgxz">
					<a class="o" href="javasctipt:void(0)"><em>充值</em></a>
					<a class="t" href="javasctipt:void(0)"><em>开启自动投资</em></a>
					<a class="th" href="javasctipt:void(0)"><em>为您自动投资</em></a>
					<a class="f" href="javasctipt:void(0)"><em>坐等数钱</em></a>
				</div>
				<a class="btn btn-warning" href="javascript:void(0)">立即开启</a>
			</div>
			<div class="con zt-basicform">
				<h3 class="title">关于自动投资</h3>
				<div class="prompt">
					<h3 class="h">什么是自动投资</h3>
					<p>自动投资是众投+推出的一项投资托管服务。</p>
					<p>您开启自动投资后，当您的可用余额大于起投金时，我们会根据您所选择的产品和回款方式为您自动购买相应的投资产品。</p>
				</div>
				<div class="prompt">
					<h3 class="h">什么是起投金额</h3>
					<p>起投金额是指用于单个项目的最低金额，默认为100元。</p>
					<p>设置较高的起投金额可以帮您避免资金被分散投资于多个项目。</p>
				</div>									
			</div>		
  		</div>
		<!-- 自动投资内容 -->
  		<div class="zt-autotz u-hide">
  			<form id="js-submit" action="">
			<div class="con autotzcon zt-basicform">
				<div class="group">
					<div class="type">选择产品：</div>
					<div class="itmes etp" id='js-choiceetp'>
						<span class="tl">短期</span>
						<span class="tl">中期</span>
						<span class="tl">中长期</span>
						<span class="tl">长期</span>
						<a class="cp act" data-id='11' href="javascript:void(0)" >15天 <em>年华收益：<b>6.8%</b></em></a>
						<a class="cp" data-id='21' href="javascript:void(0)">3个月<em>年华收益：<b>7.2%</b></em></a>
						<a class="cp" data-id='31' href="javascript:void(0)">6个月<em>年华收益：<b>8.0%</b></em></a>
						<a class="cp" data-id='41' href="javascript:void(0)">9个月<em>年华收益：<b>8.6%</b></em></a>
						<a class="cp" data-id='12' href="javascript:void(0)" >30天 <em>年华收益：<b>6.8%</b></em></a>
						<a class="cp" data-id='22' href="javascript:void(0)">4个月<em>年华收益：<b>7.4%</b></em></a>
						<a class="cp" data-id='32' href="javascript:void(0)">7个月<em>年华收益：<b>8.2%</b></em></a>
						<a class="cp" data-id='42' href="javascript:void(0)">10个月<em>年华收益：<b>8.8%</b></em></a>
						<a class="cp" data-id='13' href="javascript:void(0)" >2个月<em>年华收益：<b>7.0%</b></em></a>
						<a class="cp" data-id='23' href="javascript:void(0)">5个月<em>年华收益：<b>7.6%</b></em></a>
						<a class="cp" data-id='33' href="javascript:void(0)">8个月<em>年华收益：<b>8.4%</b></em></a>
						<a class="cp" data-id='43' href="javascript:void(0)">11，12个月<em>年华收益：<b>9.0%</b></em></a>
					  	<input type="hidden" name="product" value="11"><span></span>
					</div>
				</div>
				<div class="group">
					<div class="type">回款方式：</div>
					<div class="itmes back" id="js-backtype">
						<a href="javascript:void(0)" data-type="1" class="act">按月付息，到期还本</a>
						<a href="javascript:void(0)" data-type="2">到期还本付息</a>
						<a href="javascript:void(0)" data-type="3">等额本息</a>
						<a href="javascript:void(0)" data-type="4">等额本金</a>
						<a href="javascript:void(0)" data-type="5">等本等息</a>
						<a href="javascript:void(0)" data-type="6">等额本息（气球货）</a>
					  	<input type="hidden" name="backtype" value="1"><span></span>
					</div>
				</div>
				<div class="group">
					<div class="type">起投金额：</div>
					<div class="itmes">
					  <input type="text" name="amount" placeholder="请输入起投金额 "><span></span><em class="unit">元</em>  
					  <p class="note">*起投金额是指用于单个项目的最低金额</p>
					</div>
				</div>
				<div class="group">
					<div class="type">交易密码：</div>
					<div class="itmes">
					  <input type="password" name="pwd"placeholder="交易密码 ">
					  <span></span>
					</div>
				</div>
				<div class="group">
					<div class="type">&nbsp;</div>
					<div class="itmes">
					  	<button type="submit" class="btn btn-warning">提交</button>
					</div>
				</div>
			</div>  				
  			</form>
  		</div>
	</section>
	<?php include_once("../assets/common/footer.html") ?>
</div>
<script type="text/javascript">
	seajs.use(['JS/global','JS/user.js'],function(){
		// 立即开启自动投资
		$('#js-zhoverview .opentz').on('click','a',function(){
			$('#js-zhoverview').find('.zt-autotz').eq(1).removeClass('u-hide').siblings('.zt-autotz').addClass('u-hide');
		});
		// 选择的产品
		$('#js-choiceetp').on('click','a',function(e){
			$(this).addClass('act').siblings('a').removeClass('act');
			$('#js-choiceetp').find('input').val($(this).data('id'));
		});
		// 回款方式选择
		$('#js-backtype').on('click','a',function(e){
			$(this).addClass('act').siblings('a').removeClass('act');
			$('#js-backtype').find('input').val($(this).data('type'));
		});
		$('#js-submit').on('submit',function(){
			var product =  $(this).find('input[name="product"]'); //选择产品
			var backtype =	$(this).find('input[name="backtype"]');//选择回款方式
			var amount =	$(this).find('input[name="amount"]');//起投金额
			var pwd =	$(this).find('input[name="pwd"]');//交易密码
			$(this).find('input').next('span').text('');
			if (amount.val() == '') {
				amount.next("span").text('请输入您的起投金额!');
				return false;
			}else if (!(/^([+-]?)\d*\.?\d+$/.test(amount.val()))) {
		        amount.val('').focus().next("span").text('您的起投金额输入错误!');
		        return false;
		    }
			if (pwd.val() == '') {
				pwd.next("span").text('请输入您的交易密码!');
				return false;
			}else if (!(/^([+-]?)\d*\.?\d+$/.test(Number(pwd.val())))) {
		        pwd.val('').focus().next("span").text('交易密码输入错误!');
		        return false;
		    };
			
			console.log('done');
			return false;
		});
	});
</script>
</body>
</html>