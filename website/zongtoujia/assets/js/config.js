// seajs 配置
seajs.config({
	charset: 'utf-8',
	// 根目录
	base: '/',

	// 路径配置
	paths: {
		'GLOBAL'	: 'assets/global',
		// JS 目录
		'JS'		: 'assets/js',
		// JS 插件
		'Plugins'	: 'assets/plugins',
		// CSS 目录
		'CSS'		: 'assets/css'
	},

	// 别名配置
	alias: {
		'jquery'	: 'http://libs.baidu.com/jquery/1.7.2/jquery.min.js', // jquery
		'global'	: 'JS/global.js', // global.js
		'Amazeui'	: 'Plugins/amazeui/js/amazeui.min.js' // amazeui.js
		// 'lazyload'	: 'GLOBAL/jquery.lazyload.min.js' // 图片懒加载插件
	},
	// 预加载模块
	preload: ['jquery', 'global','Amazeui']
});