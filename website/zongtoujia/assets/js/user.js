define(function(require, exports, module){
	// 个人中心充值和提现；
	$("#js-withdrawal").on('click','a',function(){
		$("#zt-zhoverview").find('.zt-profile').addClass('u-hide').eq($(this).data("id")).removeClass("u-hide");
	});
		// 个人中心充值和提现；
	$("#js-earnings").on('click','a',function(){
		$("#zt-zhoverview").find('.zt-profile').addClass('u-hide').eq($(this).data("id")).removeClass("u-hide");
	});
	// 账户安全页面修改跳转
	$("#js-security .am-u-sm-4").on('click','.btn',function(){
		$("#zt-zhoverview").find('.zt-profile').addClass('u-hide').eq($(this).data("id")).removeClass("u-hide");
	});
	// 借款管理申请
	$("#js-loanadmin").on('click','.btn',function(){
		$("#zt-zhoverview").find('.zt-profile').addClass('u-hide').eq($(this).data("id")).removeClass("u-hide");
	});
		// 借款管理申请
	$("#js-financial").on('click','a',function(){
		$("#zt-zhoverview").find('.zt-profile').addClass('u-hide').eq($(this).data("id")).removeClass("u-hide");
	});
	// 标签选中事件
	$("#js-tagselect .am-u-sm-11").on('click','.btn',function(){
		$(this).addClass('active').siblings('.btn').removeClass("active");
	});
	// 账户充值银行选中事件
	$("#js-recharge").on('click','a',function(){
		$(this).addClass('active').siblings('a').removeClass("active");
	});

	// 账户安全修改手机验证
  	$("#js-changemobile").on('click','button.btn',function(){
  		if (!verifyCode('#js-changemobile')) {
			console.log('error');
			return false;
		};
		console.log('done');
		return true;
  	});
  	// 用户名认证验证
  	$("#js-authentication").on('click','button.btn',function(){
  		if (!verifyCode('#js-authentication')) {
			console.log('error');
			return false;
		};
		console.log('done');
		return true;
  	});
  	// 修改交易密码
  	$("#js-changepwd").on('click','button.btn',function(){
  		if (!verifyCode('#js-changepwd')) {
			console.log('error');
			return false;
		};
		console.log('done');
		return true;
  	});
  	// 找回交易密码
  	$("#js-finddealpwd").on('click','button.btn',function(){
  		$("#js-finddealpwd").each(function(i,k){
			console.log($(k).val());
  			if ($(k).val() != '') {
		  		if (!verifyCode('#js-finddealpwd')) {
					console.log('error');
					return false;
				};
				return true;
  			}
  		});  		
		console.log('done');
		return true;
  	});
  	// 绑定银行卡
  	$("#js-bindingbank").on('click','button.btn',function(){
  		if (!verifyCode('#js-bindingbank')) {
			console.log('error');
			return false;
		};
		console.log('done');
		return true;
  	});

    // 手机验证号码
   var sendverify = $(".zt-profile");
    sendverify.on('click', 'a.btn', function () {
        var text = $(this).parents(".security").find("input[data-type='m']");
        if (!(/^1\d{10}$/.test(Number(text.val())))) {
            text.val(' ').focus().next('span').text('请输入正确的手机号码');
            return false;
        };
        jgTime($(this),60);
        text.next('span').text(' ');
        console.log(text.val());
        return false;
    });

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
			btn.attr("disabled","disabled").text('重发验证码（'+time+'）');
			if (time <= 0) {
				// 清除禁用状态
				btn.attr("disabled",false).text('重发验证码');
				//清除时间
				clearInterval(Interval); 
			};
		},1000);
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