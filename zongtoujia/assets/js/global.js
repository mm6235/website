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
});