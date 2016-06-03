define(function(require, exports, module){
	require('jquery');
	require('Amazeui');
	  // 导航栏获取焦点功能
	var urlStr = window.location.pathname;
	var url = urlStr.split('/');
	console.log(url[1]);

	if(urlStr == '/' || url[1] == "index.php"){ // 首页
		$('#js-nav li').eq(0).addClass('active');
	}
	if(urlStr.search("Invest") > 0){ // 首页
		$('#js-nav li').eq(1).addClass('active');
	}
	if(urlStr.search("Financing") > 0){ // 首页
		$('#js-nav li').eq(2).addClass('active');
	}
	if(urlStr.search("Transfer") > 0){ // 首页
		$('#js-nav li').eq(3).addClass('active');
	}
	if(urlStr.search("Safety") > 0){ // 首页
		$('#js-nav li').eq(4).addClass('active');
	}
	if(urlStr.search("user") > 0 || urlStr.search("login") > 0){ // 首页
		$('#js-nav li').last().addClass('active');
	}

	var ksdh = $("#js-kuaishudaohang>li"); //获取快速导航栏菜单
	// 鼠标移入快速导航栏菜单时出现相对应的产品
	ksdh.on("mouseenter",function(){
		$(this).siblings('li').find('.cplist').hide().stop();
		$(this).find(".cplist").show();
	});
	// 鼠标移入快速导航栏菜单时隐藏产品
	ksdh.on("mouseleave",function(){
		ksdh.find(".cplist").stop().hide();
	});
	// 首页登录切换
	$("#js-lgtrigger").on('click','li',function(){
		$("#js-lgtrigger").find('li').eq($(this).index()).addClass('active').siblings("li").removeClass("active");
		$("#js-triggerlogin").find('.login').eq($(this).data('id')).removeClass('u-hide').siblings(".login").addClass("u-hide");
	});
	// 理财专区切换
	$("#js-moneyforum").on('click','.list',function(){
		$("#js-moneyforum").find('.list').eq($(this).index()).addClass('active').siblings("li").removeClass("active");
	});
	// 投资产品详情内容标签切换
	$("#js-tag").on('click','a',function(){
		$(this).addClass('active').siblings("a").removeClass("active");
		$("#js-content").find('.con').eq($(this).index()).addClass('active').siblings(".con").removeClass("active");
	});

	// 项目安全保障滑动
	$("#zt-safety").on('click','a',function(){
		if ($(this).data('id') != undefined) {
			var top = $("#"+$(this).data('id')+"-safety").position().top;
			$('html,body').animate({scrollTop: (top-100)+'px'}, 500);			
		}
	});


	sliderInit();
	// 幻灯片函数
	function sliderInit(){
		var slider = $("#js-slider"); //幻灯片
		var advertisement = $("#js-advertisement"); //广告轮播图背景
		var banner = slider.find(".banner").children(); //轮播图
		var carousel = slider.find(".carousel").children();  //列表显示
		var index = 0; //当前值
		var timer ; //定时器
		var time = 4000; //动画间隔时间
		// 侦听点击事件
		carousel.on("click",function(){
		  	index = $(this).index();
		  	lunbotu();
		});
		// 点击向左切换移动
		slider.on("click","a.left",function(){
		  	index--;
		  	lunbotu();
		});
		// 点击向右切换移动
		slider.on("click","a.right",function(){
		  	index++;
		  	lunbotu();
		});
		timer = setInterval(aototime,time); //设置设置定时器
		// 鼠标移入清除定时器，移出恢复定时器
		slider.hover(function(){
			  	clearInterval(timer);
			},function(){
			  	timer = setInterval(aototime,time);
		});
		// 定时器函数
		function aototime(){
		  	index++;
		  	lunbotu();
		};
		function lunbotu(){
			if (index > banner.length-1) {
			    index = 0; 
			}else if (index < 0) {
			    index = banner.length-1;
			};
			// 当前列表切换
			carousel.removeClass("now").eq(index).addClass("now");
			  // 幻灯片播放
			banner.stop(true,false).fadeOut(500).removeClass("active").eq(index).fadeIn(500).addClass("active");
			// 切换背景
			advertisement.removeClass().addClass("g-advertisement g-advertisement_bg"+(index+1));
		}
	};

	// 
	$('#js-alert').on('click',function(){
		promptPopup('系统提示',0);
	});

	// 底部客服服务
	// 显示返回顶部
	$(document).scroll(function(){
		backTop();
	});
	function backTop(){
		var top = $(document).scrollTop();
		if(top < 100){
			$('#js-service').find('div.act').fadeOut();
		}else if(top > 260){
			$('#js-service').find('div.act').fadeIn();
		};
	}
	backTop();
	// 点击返回顶部
	$('#js-service').on('click','div.act',function(){
		$('html,body').animate({scrollTop: '0px'}, 500);
	});	
	// 显示微信二维码
	$('#js-service').on('mouseenter','div.weixin',function(){
		$(this).find('div').stop(true,false).slideDown();
	}).on('mouseleave','div.weixin',function(){
		$(this).find('div').stop(true,false).slideUp();
	});
	
	// 微信理财显示微信二维码
	$('#js-header').on('mouseover','a.sx',function(){
		$('#js-header').find('div.Kik').stop(true,false).show();
	}).on('mouseout','a.sx',function(){
		$('#js-header').find('div.Kik').stop(true,false).hide();
	});
});

/*系统提示弹出框
 *con 内容 time显示时间(默认为0) head显示标题(默认为空) type类型(默认为空)
*/
function promptPopup(param) {
    var prompt = $('#js-footer');
    if (param.con == undefined) {return false;}
    var btn = '<div class="am-modal-footer"><span class="am-modal-btn confirm" data-am-modal-confirm>确定</span></div>';
    if (param.type == undefined) { btn = ""; };
    if (param.type == 1) { btn = '<div class="am-modal-footer"><span class="am-modal-btn cancel" data-am-modal-cancel>取消</span><span class="am-modal-btn confirm" data-am-modal-confirm>确定</span></div>'; };
    if (param.head == undefined) { head = ""; };
    var dimmer = "<div class='am-dimmer am-active' id='js-dimmer' style='display: block;'></div>";
    var state = '';
     if (param.state == 'success') {
    	state = '完成';
    }else if (param.state == 'warning') {
		state = '警告';
    }else if (param.state == 'danger') {
    	state = '错误';
    }
    var modal = '<div class="am-modal am-modal-confirm am-modal-active" tabindex="-1" id="my-confirm" style="display: block; margin-top: -29px;">';
    modal += '<div class="am-modal-dialog"><div class="am-modal-hd '+param.state+'">'+state+'</div><div class="am-modal-bd">' + param.con + '</div>' + btn + '</div></div>';
    $('#js-footer').prepend(modal);
    $('body').append(dimmer);
    if (typeof param.event == 'function' && param.event != undefined) {
    	if (param.type != undefined) {
		    $('#my-confirm').on('click', '.confirm', function () {
		        param.event();
		        promptClose('#js-footer');
		    });    		
    	}else if (param.time != undefined){
    		setTimeout(function () {param.event(); promptClose('#js-footer'); }, param.time);
    	};
    };

    if (param.time != 0 && param.time != undefined) { setTimeout(function () { promptClose('#js-footer'); }, param.time); }
    $('#js-dimmer').on('click', function () {
        promptClose('#js-footer');
    });
    $('#my-confirm').on('click', '.cancel', function () {
        promptClose('#js-footer');
    });
};
//  关闭系统提示弹出框
function promptClose(id) {
    $(id).find('#my-confirm').remove();
    $('body').find('#js-dimmer').remove();
}

