
define(function(require, exports, module){
	require('jquery');

	$(function () {	
		var personal =  $("#js-personal");  //信息DOM
		var register =  $("#js-register");  //用户注册DOM
		var login =  $("#js-login"); 		//登录DOM
		var retrieve =  $("#js-retrieve");  //密码找回DOM
		var triggerstars = false;			// 防止循环点击

		// 手机动态密码登录点击获取验证码
		login.on("click",'a[data-id="teldylogin"]',function(){
			var phone = login.find('input[name="tel"]'); //获取手机号
			if(!dynapwdver(phone,phone.data('type'))){
				console.log("error");
				return false;
			};
			// 重发验证码
			jgTime($(this),10);
			console.log("手机动态登录");
		});


		// 手机动态密码注册点击获取验证码
		register.on("click",'a[data-id="teldyreg"]',function(){
			var phone = register.find('input[name="tel"]'); //获取手机号
			if(!dynapwdver(phone,phone.data('type'))){
				console.log("error");
				return false;
			};
			// 重发验证码
			jgTime($(this),10);
			console.log("手机验证注册");
		});



		// 手机密码找回点击获取验证码
		retrieve.on("click",'a[data-id="telforgotpwd"]',function(){
			var phone = retrieve.find('input[name="tel"]');
			if(!dynapwdver(phone,phone.data('type'))){
				console.log("error");
				return false;
			};
			// 重发验证码
			jgTime($(this),10);
			console.log("手机密码密码找回");
		});

		// 用户登录提交表单
		$("#js-userlogin").on("submit",function(){		
			if (!verifyCode('#js-userlogin')) {
				console.log('error');
				return false;
			};
			console.log($(this).serialize());
			console.log('done');
			return false;
		});
		// 用户注册提交表单
		$("#js-userregister").on("submit",function(){
			if (!verifyCode('#js-userregister')) {
				console.log('error');
				return false;
			};
			console.log($(this).serialize());
			console.log('done');
			return false;
		});
		// 密码重置提交表单
		$("#js-forgotpwd").on("submit",function(){
			if (!verifyCode('#js-forgotpwd')) {
				console.log('error');
				return false;
			};
			console.log($(this).serialize());
			console.log('done');
			return false;
		});


		/**
		 *动态加载动画类
		 *box 动画类id claName动画类 time间隔时间
		 */
		function loadAnimat(box,claName,time){
			box.addClass(claName);
			setTimeout(function(){
				box.removeClass(claName);
			},time);
		};

		/**
		 *时间间隔函数
		 * btn 按钮触发，time时间停止
		 */
		function jgTime(btn,time){		
			// 时间
			var time = time;
			var Interval = setInterval(function(){
				time--;
				// 添加禁用
				btn.addClass("disabled").text('重发验证码（'+time+'）');
				if (time <= 0) {
					// 清除禁用状态
					btn.removeClass("disabled").text('重发验证码');
					//清除时间
					clearInterval(Interval); 
				};
			},1000);
		};
		/**
		 *num 获取号码对象
		 *type 类型
		 *动态密码验证
		 */
		function dynapwdver(num,type){
			var number = num; //获取手机号
			var rxpOBJ = {
				'm' 	: /^0?(11|12|13|14|15|16|17|18|19)[0-9]{9}$/, 	// 手机号码
				'e' 	: /\w+((-w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+/ // 邮件
			};
			// 预设错误提示
			var rxpOBJ_tips = {
				'm' 	: '手机号码格式错误', 	// 手机号码
				'e' 	: '输入邮箱不正确'		// 邮件
			};
			if (number.val() == '') {
				if (type == "m") {
					number.focus().next("span").text("请输入手机号");
				};
				if (type == "e") {
					number.focus().next("span").text("请输入邮箱");
				};			
				return false;
			};
			if (!(rxpOBJ[type].test(number.val()))) {
				number.focus().val('').next("span").text(rxpOBJ_tips[type]);
				return false;			
			};		
			number.next("span").text("");
			return true;
		};
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
				'n' 	: '只能输入数字', 		// 数字类型
				'u' 	: '请输入正确的用户名',	// 用户名验证
				'zh' 	: '只能输入中文', 		// 仅中文
				'm' 	: '手机号码格式错误', 	// 手机号码
				'e' 	: '错误的邮件地址',		// 邮件
				'p'		: '请输入正确的密码',	// 密码
				'v'		: '验证码输入错误',		// 验证码
				'rp'		: '两次密码不一致'
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

	/***************************************************************************
	 * 图片背景切换
	 ***************************************************************************/
	$(document).ready(function(){
		var bimg = ['../../assets/image/flg_02.jpg','../../assets/image/flg_02.jpg','../../assets/image/flg_03.jpg'];
		// 执行图片加载函数并使用回调函数
		loadImg(bimg,function(){
			$('#js-bg').find('li').eq(0).fadeIn(2000);
			setInterval(function(){
				$('#js-bg').find('li').eq(0).fadeOut(2000,function(){
					$(this).appendTo('#js-bg');
				});
				$('#js-bg').find('li').eq(1).fadeIn(2000);
			},2000);
		});
		// 图片加载函数
		function loadImg(arr,callback){
			$(arr).each(function(i,k){
				var index = 0;
				var img = new Image();
	   			img.src = k;
				img.onload = function () { //图片下载完毕时异步调用callback函数。
					index ++;
					$('#js-bg').append('<li style="background:url('+k+')"></li>');
					if (index == 1) {
						callback();//将回调函数的this替换为Image对象
					}
				}; 
			});
		}
	});
	
});


