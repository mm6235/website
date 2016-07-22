$(function(){
	function GetNav(id){
		var nav = $(id).find('li');
		var urlStr = window.location.pathname;
		$(id).find('a').each(function(i,k){
			if (urlStr.search($(k).attr('href')) >= 0) {
				$(id).find('li').eq(i).addClass('active').siblings().removeClass('active');
			}
			if ( i == 0 ) {
				$(id).find('li').eq(i).addClass('active').siblings().removeClass('active');
			}
		});
	}
	GetNav('#js-nav');

	// 产品项目类型选择 
	var ItemType =  getQueryString('type') == null ? 1 : getQueryString('type');
	$('#js-itmetabs').find('li').eq(ItemType-1).addClass('act').siblings('li').removeClass('act');
	// 显示返回顶部
	$(document).scroll(function(){
		backTop();
	});
	function backTop(){
		var top = $(document).scrollTop();
		if(top < 80){
			$('#js-service').find('div.act').fadeOut();
		}else if(top > 120){
			$('#js-service').find('div.act').fadeIn();
		};
	}
	backTop();
	// 点击返回顶部
	// 点击返回顶部
	$('#js-service').on('click','div.act',function(){
		$('html,body').animate({scrollTop: '0px'}, 500);
	});

});
// 刷新图文验证码
function ImgCode(e){
	$(e).attr('src',$(e).attr('src')+'?data='+Math.random());
};

//获取url参数
//调用方式：GetQueryString("参数名")
function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]); return null;
}