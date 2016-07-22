<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>众雅贷</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/common/style.css">
	<!--[if lte IE 9]>
		<script type="text/javascript"src="/assets/plugins/html5shiv/html5shiv.js"></script>
	<![endif] -->

</head>
<body>
	<?php include_once '../../assets/common/top.html'; ?>
	<div class="wraper  zyd-applyloan">
		<!-- banner开始 -->
		<div class="g-advertisement g-applyloan_bg1"><img src="/assets/image/apply_loan.png" alt=""></div>
		<!-- banner结束 -->
		<section  class="g-warp">
			<div class="applyloan form-horizontal" id="js-applyloan">
				<h3 class="tle">申请人资历</h3>
				<div class="form-group">
					<label class="col-sm-3 control-label">姓名：</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="请输入您的姓名">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">贷款金额：</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="请输入万元">
					</div>
				</div>
				<div class="form-group select">
					<label class="col-sm-3 control-label">贷款期限：</label>
					<div class="col-sm-9 btn-group">
						<!-- Single button -->
						<div class="btn btn-default dropdown-toggle sct" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text">请选择</span><span class="caret"></span></div>
						<ul class="dropdown-menu">
							<li data-id='1'>Separd link1</li>
							<li data-id='2'>Sepaink2</li>
							<li data-id='3'>Separink3</li>
							<li data-id='4'>Separatink4</li>
							<li data-id='5'>Separateink5</li>
							<li data-id='6'>Separaink6</li>
						</ul>
						<input type="hidden" value="0"/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label">有无房产：</label>
					<div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="property" checked="checked"  value="1">有</label>
						<label class="radio-inline"><input type="radio" name="property"  value="0">无</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">是否深户：</label>
					<div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="family" checked="checked"  value="1">是</label>
						<label class="radio-inline"><input type="radio" name="family"  value="0">否</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">本地社保是否满一年：</label>
					<div class="col-sm-9">
						<label class="radio-inline"><input type="radio" name="sose" checked="checked"  value="1">是</label>
						<label class="radio-inline"><input type="radio" name="sose"  value="0">否</label>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">月银行代发工资：</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" placeholder="请输入万元">
					</div>
				</div>
				<div class="form-group select">
					<label class="col-sm-3 control-label">职业身份：</label>
					<div class="col-sm-9 btn-group">
						<!-- Single button -->
						<div class="btn btn-default dropdown-toggle sct" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text">请选择</span><span class="caret"></span></div>
						<ul class="dropdown-menu">
							<li data-id='1'>Separatelink1</li>
							<li data-id='2'>Separatelink2</li>
							<li data-id='3'>Separatelink3</li>
							<li data-id='4'>Separatelink4</li>
							<li data-id='5'>Separatelink5</li>
							<li data-id='6'>Separatelink6</li>
						</ul>
						<input type="hidden" value="0"/>
					</div>
				</div>
				<div class="form-group select">
					<label class="col-sm-3 control-label">您的信用情况：</label>
					<div class="col-sm-9 btn-group">
						<!-- Single button -->
						<div class="btn btn-default dropdown-toggle sct" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text">请选择</span><span class="caret"></span></div>
						<ul class="dropdown-menu">
							<li data-id='1'>Separated link1</li>
							<li data-id='2'>Separated link2</li>
							<li data-id='3'>Separated link3</li>
							<li data-id='4'>Separated link4</li>
							<li data-id='5'>Separated link5</li>
							<li data-id='6'>Separated link6</li>
						</ul>
						<input type="hidden" value="0"/>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-3 col-sm-9">
						<button type="submit" class="btn btn-warning">立即申请</button>
					</div>
				</div>
			</div>
		</section>
	</div>
	<?php include_once '../../assets/common/footer.html'; ?>
	<script type="text/javascript" src="/assets/plugins/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript">
		$(function(){
			var applyloan =  $('#js-applyloan').find('.select');
			applyloan.find('ul').on('click','li',function(){
				// console.log($(this).parent('ul').prevAll('.sct').text());
				$(this).parents('ul').prevAll('.sct').find('.text').html($(this).text());
				$(this).parents('ul').next().val($(this).data('id'));
			});
		});
	</script>
</body>
</html>