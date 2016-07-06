/*!
 * Dony feng  Date: 2016-6
 */
function dony(e){
	// 预设正则匹配
	var Verify = {
		rxpOBJ : {
			'*' 	: /^\S/,						// 非空
			'n' 	: /^([+-]?)\d*\.?\d+$/, 		// 数字类型
			'u' 	: /^[A-Za-z0-9_\-\u4e00-\u9fa5]+$/, // 用户名验证
			'zh' 	: /^[\u4e00-\u9fa5]+$/, 		// 仅中文
			'm' 	: /^0?(11|12|13|14|15|16|17|18|19)[0-9]{9}$/, 	// 手机号码
			'e' 	: /\w+((-w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+/, // 邮件
			'p'		: /^([A-Za-z0-9]){6,16}$/,		// 密码
			'v'		: /^([A-Za-z0-9]){4,8}$/,		// 验证码
			'rp'	: /^\S/
		},
		rxpOBJ_tips : {
			'*' 	: '不能为空',			// 非空
			'n' 	: '只能输入数字', 		// 数字类型
			'u' 	: '请输入正确的用户名',	// 用户名验证
			'zh' 	: '只能输入中文', 		// 仅中文
			'm' 	: '手机号码格式错误', 	// 手机号码
			'e' 	: '错误的邮件地址',		// 邮件
			'p'		: '请输入正确的密码',	// 密码
			'v'		: '验证码输入错误',		// 验证码
			'rp'	: '两次密码不一致'
		}
	};
	dony.prototype.verifyCode = function(form){
		/**
		 * 表单提交验证码函数 form 表单id
		 ******/
		var form = $(form);
		var formState = false; //验证状态
		form.find('input[data-type]:enabled').each(function(i,k){
			var type = $(this).data('type');	// 验证类型
			var rxp = (type == 'rxp') ? $(this).data('rxp') : Verify.rxpOBJ[type]; // 获取验证规则
			rxp = new RegExp(rxp);
			formState = rxp.test($(this).val()); // 验证
			if (!formState) {
				$(this).focus().val('').next("span").text(Verify.rxpOBJ_tips[type]);
				return formState;
			}
			// 如果是是重复密码
			if(type == "rp" && $(this).val() != form.find('input[data-type=p]').val()){
				$(this).focus().val('').next("span").text(Verify.rxpOBJ_tips[type]);
				return formState = false;
			}
			$(this).next("span").text('');
		});
		return  formState;
	},
	dony.prototype.BlurVerify = function(form){
		/**
		 * 表单失去焦点 form 表单id
		 ******/
		var put = $('#'+form).find('input[data-type]:enabled');
		var formState = false; //验证状态
		put.on('blur',function(){
			// $('#js-form').find('input[data-type]:enabled').next("span").text('');
			var type = $(this).data('type');	// 验证类型
			var rxp = (type == 'rxp') ? $(this).data('rxp') : Verify.rxpOBJ[type]; // 获取验证规则
			rxp = new RegExp(rxp);
			formState = rxp.test($(this).val()); // 验证
			if (!formState) {
				$(this).val('').next("span").text(Verify.rxpOBJ_tips[type]);
				return formState;
			}
			// 如果是是重复密码
			if(type == "rp" && $(this).val() != form.find('input[data-type=p]').val()){
				$(this).val('').next("span").text(Verify.rxpOBJ_tips[type]);
				return formState = false;
			}
			$(this).next("span").text('');
		});				
	},
	dony.prototype.serializeObject = function(form){
		/**
		 * 获取表单提交序列化转换为json格式函数 form 表单id
		 ******/
		var o = {};
		var data = $(form).serializeArray();
		if (data.length != 0) {
			$.each(data,function(){
				if (o[this.name] !== undefined) {
					if (!o[this.name].push) {
						o[this.name] = [o[this.name]];
					}
					o[tnis.name] = this.value || '';
				}else{
					o[this.name] = this.value || '';
				}
			});			
		}
		return o;
	}
};
var mm = new dony(); //创建对象