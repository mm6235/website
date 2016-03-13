seajs.config({
	// 文件编码
	charset:"utf-8",
	// 文件资源根目录
	base:"../assets/",
	// 资源路径配置
	paths:{
		"plugins":"/tuobar/website/assets/plugins/",
		"js":"/tuobar/website/assets/mi/js/",
	},
	// 文件别名，方便加载使用
	alias:{
		"jquery":"plugins/jquery/jquery-1.10.2.min",
		"amazeui":"plugins/amazeui/js/amazeui.min"
	},
	// 预加载模块
	preload:["jquery"]
});