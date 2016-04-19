define(function(require, exports, module){
	  // 导航栏获取焦点功能
	var urlStr = window.location.pathname;
	console.log(urlStr.search("index"));
	if(urlStr.search("index") > 0){ // 首页
		$('#js-nav li').eq(0).addClass('active');
	}
	if(urlStr.search("user") > 0 || urlStr.search("login") > 0){ // 首页
		$('#js-nav li').last().addClass('active');
	}
	var ksdh = $("#js-kuaishudaohang>li"); //获取快速导航栏菜单
	// 鼠标移入快速导航栏菜单时出现相对应的产品
	ksdh.on("mouseenter",function(){
		$(this).siblings('li').find('.m-xxcplist').hide().stop();
		$(this).find(".m-xxcplist").show();
	});
	// 鼠标移入快速导航栏菜单时隐藏产品
	ksdh.on("mouseleave",function(){
		ksdh.find(".m-xxcplist").stop().hide();
	});
});