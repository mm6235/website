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
<style type="text/css">
	body{background-color: #f6fbff;}
</style>
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
		<!-- banner开始 -->
	<div class="g-advertisement g-financing_bg1"><img src="/assets/image/financing_01.jpg" alt=""></div>
	<!-- banner结束 -->
	<section  class="g-warp zt-financing">
		<div class="am-form financing am-form-horizontal" id="js-financing">
			<h3 class="tle">申请融资</h3>
			<div class="am-form-group">
				<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">姓名：</label>
				<div class="am-u-sm-9">
				  <input type="text"  placeholder="请输入您的姓名 ">
				</div>
			</div>
			<div class="am-form-group">
				<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">年龄：</label>
				<div class="am-u-sm-9">
				  <input type="text"  placeholder="请输入您的年龄 ">
				</div>
			</div>
			<div class="am-form-group">
				<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">性别：</label>
				<div class="am-u-sm-9">
				  <label><input type="radio" name="sex" value="男"  checked="true">男</label>
			      <label><input type="radio" name="sex" value="女">女</label>
				</div>
			</div>
			<div class="am-form-group">
				<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">婚姻状况：</label>
				<div class="am-u-sm-9">
				  <label><input type="radio" name="mage" value="未婚"  checked="true">未婚</label>
			      <label><input type="radio" name="mage" value="已婚">已婚</label>
				</div>
			</div>
			<div class="am-form-group">
				<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">项目名称：</label>
				<div class="am-u-sm-9">
				  <input type="text"  placeholder="请输入项目名称 ">
				</div>
			</div>
			<div class="am-form-group">
				<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">项目金额：</label>
				<div class="am-u-sm-9">
				  <input type="text"  placeholder="请输入项目金额 "><em>元</em>
				</div>
			</div>
			<div class="am-form-group">
				<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">项目简介：</label>
				<div class="am-u-sm-9">
				  <textarea class="textarea" rows="2" id="doc-ta-1" placeholder="请说明项目内容"></textarea>
				</div>
			</div>

			<div class="am-form-group">
				<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">审核资料：</label>
				<div class="am-u-sm-9">
				 	<label><input type="radio" name="audit" value="个人借款" checked="true">个人借款</label>
			      	<label><input type="radio" name="audit" value="机构借款">机构借款</label>
				</div>
			</div>
			<div class="am-form-group">
				<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">审核项目资料：</label>
				<div class="am-u-sm-9">			
					<form id="pu-imageform" class="imageform" method="post" enctype="multipart/form-data" action="upload.php">
						<div id="pu-status" style="display:none"><img src="/assets/image/loader.gif" alt="uploading"/></div>
						<div id="pu-btn" class="btn">
							<span>上传项目资料</span>
							<input id="pu-photoimg" type="file" name="photoimg">
						</div>
						<div id="pu-preview" class="paper">
							<div class="filetype">
								<a class="del am-btn am-btn-danger am-round"href="javascript:void(0)">×</a>
								<input type="text" placeholder="请输入文件类型名称（例：身份证）">
								<div class="preview"><img src="image/1463115610772.jpg" class="preview"></div>
							</div>
							<div class="filetype">
								<a class="del am-btn am-btn-danger am-round"href="javascript:void(0)">×</a>
								<input type="text" placeholder="请输入文件类型名称（例：身份证）">
								<div class="preview"><img src="image/1463115610772.jpg" class="preview"></div>
							</div>
						</div>							
					</form>
				</div>
			</div>
			<div class="am-form-group">
				<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">审核项目图片：</label>
				<div class="am-u-sm-9">			
					<form id="imageform" class="imageform" method="post" enctype="multipart/form-data" action="upload.php">
						<div id="up_status" style="display:none"><img src="/assets/image/loader.gif" alt="uploading"/></div>
						<div id="up_btn" class="btn">
							<span>上传项目图片</span>
							<input id="photoimg" type="file" name="photoimg">
						</div>
						<div id="preview" class="paper">
							<div class="filetype">
								<a class="del am-btn am-btn-danger am-round"href="javascript:void(0)">×</a>
								<input type="text" placeholder="请输入文件类型名称（例：身份证）">
								<div class="preview"><img src="image/1463115610772.jpg" class="preview"></div>
							</div>
							<div class="filetype">
								<a class="del am-btn am-btn-danger am-round"href="javascript:void(0)">×</a>
								<input type="text" placeholder="请输入文件类型名称（例：身份证）">
								<div class="preview"><img src="image/1463115610772.jpg" class="preview"></div>
							</div>
						</div>							
					</form>
				</div>
			</div>
			<div class="am-form-group">
				<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">借款用途：</label>
				<div class="am-u-sm-9">
					<input type="text"  placeholder="请描述借款用途 ">
				</div>
			</div>

			<div class="am-form-group">
				<label for="doc-ipt-pwd-2" class="am-u-sm-3 am-form-label">还款来源：</label>
				<div class="am-u-sm-9">
					<textarea class="textarea" rows="2" id="doc-ta-1" placeholder="请描述还款来源"></textarea>
				</div>
			</div>

			<div class="am-form-group">
				<div class="am-u-sm-9 am-u-sm-offset-3">
				  <button type="submit" class="btn btn-warning" id="js-submit">提交</button>
				</div>
			</div>
		</div>
	</section>
	<?php include_once("../../assets/common/footer.html") ?>
</div>
<script type="text/javascript">
  	seajs.use(['JS/global.js','Plugins/jquery.wallform'],function () {

  		$('#js-submit').on('click',function(){
  			console.log(verifyCode('#js-financing'));
  		});

  		$('#photoimg').die('click').live('change', function(){
			var status = $("#up_status");
			var btn = $("#up_btn");
			$("#imageform").ajaxForm({
				target: '#preview', 
				beforeSubmit:function(){
					status.show();
					btn.hide();
					btn.find("span").text('继续上传文件资料');
				}, 
				success:function(){
					console.log('success');
					status.hide();
					btn.show();
				}, 
				error:function(){
					status.hide();
					console.log('error');
					btn.show();
			} }).submit();
		});
		$('#pu-photoimg').die('click').live('change', function(){
			var status = $("#up_status");
			var btn = $("#pu-btn");
			$("#pu-imageform").ajaxForm({
				target: '#pu-preview', 
				beforeSubmit:function(){
					status.show();
					btn.hide();
					btn.find("span").text('继续上传文件资料');
				}, 
				success:function(){
					console.log('success');
					status.hide();
					btn.show();
				}, 
				error:function(){
					status.hide();
					console.log('error');
					btn.show();
			} }).submit();
		});
		$('#js-financing .paper').on('click','.del',function(){
			$(this).parent().remove();
		});


		/*********************************************************************************
		 * form 表单id
		 * 表单提交验证码函数
		 ********************************************************************************/
		function verifyCode(form){
			var form = $(form);
			var formState = false;
			// 预设正则匹配
			var rxpOBJ = {
				'*' 	: /^\S/,						// 非空
				'n' 	: /^([+-]?)\d*\.?\d+$/, 		// 数字类型
				'u' 	: /^[A-Za-z0-9_\-\u4e00-\u9fa5]+$/, // 用户名验证
				'zh' 	: /^[\u4e00-\u9fa5]+$/, 		// 仅中文
				'm' 	: /^0?(11|12|13|14|15|16|17|18|19)[0-9]{9}$/, 	// 手机号码
				'e' 	: /\w+((-w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+/, // 邮件
				'p'		: /^([A-Za-z0-9]){6,16}$/,		// 密码
				'v'		: /^([A-Za-z0-9]){4,8}$/,		// 验证码
				'rp'		: /^\S/
			};
			// 预设错误提示
			var rxpOBJ_tips = {
				'*' 	: '不能为空',			// 非空
				'n' 	: '输入错误', 		// 数字类型
				'u' 	: '请正确的输入姓名',	// 用户名验证
				'zh' 	: '输入格式错误', 		// 仅中文
				'm' 	: '输入手机号码格式错误', 	// 手机号码
				'e' 	: '错误的邮件地址',		// 邮件
				'p'		: '请输入正确的密码',	// 密码
				'v'		: '验证码输入错误',		// 验证码
				'rp'	: '两次密码不一致'
			};
			form.find('input[data-type]:enabled').each(function(i,k){
				var type = $(this).data('type');	// 验证类型
				var val = $(this).val();			// 验证类型
				var state = false;					// 验证状态，默认为不通过验证
				var rxp = (type == 'rxp') ? $(this).data('rxp') : rxpOBJ[type]; // 获取验证规则
				rxp = new RegExp(rxp);
				state = rxp.test(val);
				if (!state) {
					$(this).focus().val('').next("span").text(rxpOBJ_tips[type]);
					return state;
				};
				// 如果是是重复密码
				if(type == "rp" && $(this).val() != form.find('input[data-type=p]').val()){
					$(this).focus().val('').next("span").text(rxpOBJ_tips[type]);
					return false;
				}
				$(this).next("span").text('');
				formState = state;
			});
			return  formState;
		};
  	});
</script>
</body>
</html>