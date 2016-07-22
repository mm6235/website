$(document).ready(function (){
		function hotSelect(){
	   		var select =  $('#js-hotlists .item-input').find('select');
	   		// 为我推荐选择下拉框事件
			var hotlist = $('#js-hotlists .item-input');
			hotlist.on('change','select',function(){
				console.log($(this).val());
				console.log($(this).find("option").eq($(this).val()).text());
				if ($(this).val()>0) {
					$(this).next(".value").text($(this).find("option").eq($(this).val()).text());
					$(this).next(".value").attr('data-value',$(this).val());
				}else{
					$(this).next(".value").text($(this).find("option").eq($(this).val()).text());
					$(this).next(".value").remove();
					var html = '<div class="value">请选择</div>';
					$(this).after(html);
				}
			});       			
		};
		hotSelect();
});  