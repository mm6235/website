define(function(require, exports, module){
	require('jquery');
	
	//项目列表选择切换
	$("#js-taglist li").on('click','.am-btn',function(){
		$(this).addClass('active').siblings("a").removeClass("active");
		var res = {};
		var item = $("#js-taglist li").find('.active');
		for (var i = 0; i < item.length; i++) {
			res.Status =  item.eq(0).index(); //项目状态		
			res.Period =  item.eq(1).index(); //项目期限		
			res.Yield 	=  item.eq(2).index(); //项目收益		
			res.PrjType =  item.eq(3).index(); //项目类型		
			res.PayBackType = item.eq(4).index(); //还款方式
		}
		projectlist(res);
	});

	function projectlist(res){
		if (res.PayBackType != -1) {
			// 我要投资
			console.log(res);
			$.ajax({
				type : 'GET',
				url : '/assets/js/data.js',
				dataType : 'json',
				data : res
			})
			.done(function(data){
				
				//设置左分隔符为 <!
				baidu.template.LEFT_DELIMITER='{{';
				//设置右分隔符为 <!  
				baidu.template.RIGHT_DELIMITER='}}';
				// 装载模板
				var listHTML = baidu.template('prjlist',data);
				$('#js-projectlist').html(listHTML);
			})
			.error(function(data){
				console.log('error');
			});	
		}else{
			// 转让市场
			console.log(res);
			$.ajax({
				type : 'GET',
				url : '/assets/js/tfdata.js',
				dataType : 'json',
				data : res
			})
			.done(function(data){				
				//设置左分隔符为 <!
				baidu.template.LEFT_DELIMITER='{{';
				//设置右分隔符为 <!  
				baidu.template.RIGHT_DELIMITER='}}';
				// 装载模板
				var listHTML = baidu.template('prjlist',data);
				$('#js-projectlist').html(listHTML);
			})
			.error(function(data){
				console.log('error');
			});			
		}

	}
});