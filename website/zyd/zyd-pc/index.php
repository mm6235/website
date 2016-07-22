<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>众雅贷</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="renderer" content="webkit">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/common/style.css">
	<!--[if lte IE 9]>
		<script type="text/javascript"src="/assets/plugins/html5shiv/html5shiv.js"></script>
	<![endif] -->

</head>
<body>
	<?php include_once 'assets/common/top.html'; ?>
	<div class="wraper">
		<!-- banner开始 -->
		<div class=" m-banner m-login">
			<!-- 用户登录 -->
			<aside class="g-warp banner">
				<!--  表单 -->
				<form class="login">
					<h5>30秒立即申请贷款服务</h5>
					<!-- 手机注册 -->
					<div class="profil col-md-12">
						<div class="form-group">
							<input type="text"  name="tel" class="form-control" data-type="m" placeholder="您的称呼">
							<span></span>            
						</div>
						<div class="form-group">
							<input type="text"  name="tel" class="form-control" data-type="m" placeholder="请输入手机号码">
							<span></span>            
						</div>
						<div class="form-group verify">
							<div class=" col-md-8">
								<input type="password" name="imgcode" class="form-control" data-type="n" placeholder="图形验证码">
								<span></span>            
							</div>
							<img class="col-md-4" onclick="ImgCode(this)" src="http://www.niwodai.com/validatecode/refresh.htm"alt="">
						</div>
						<div class="form-group nt">
							<div class="col-md-8">
								<input type="password" name="telver" class="form-control" data-type="v" placeholder="短信验证码">
								<span></span>            
							</div>            
							<a class="btn col-md-4"  data-id="teldyreg" href="javascript:void(0)">获取验证码</a>
						</div>
						<p class="note">未成功放款，绝不收取任何费用！</p>
						<button type="submit" class="submit btn">立即申请</button>
					</div>
				</form>
			</aside> 
			<!-- 用户登录结束 -->
		</div>
		<!-- banner结束 -->
		<!-- 内容列表 -->
		<section  class="g-warp m-main">
			<article class="zyd-content pledge">
			  	<div class="con con-l row">
		  			<div class="col-md-3">
		  				<h5>更大额度</h5>
		  				<p>百家银行组合贷款 放大额度</p>
		  			</div>
		  			<div class="col-md-3 two">
		  				<h5>更快速度</h5>
		  				<p>30秒申请<br/>最快1天放款</p>
		  			</div>
		  			<div class="col-md-3 three">
		  				<h5>更好服务</h5>
		  				<p>专业信贷经理提供 一对一贷款服务</p>
		  			</div>
		  			<div class="col-md-3 four">
		  				<h5>更低成本</h5>
		  				<p>优质贷款方案组合 更省钱</p>
		  			</div>
			  	</div>
			  	<div id="js-sliding" class="con con-r sliding carousel slide" data-ride="carousel">
				  	<!-- 幻灯片 -->
					<ul class="carousel-inner" role="listbox">
						<li class="item active">
			  				<div>合作机构</div>
			  				<span>100+</span>
			  			</li>
			  			<li class="item">
			  				<div>贷款产品</div>
			  				<span>200+</span>
			  			</li>
			  			<li class="item">
			  				<div>服务贷款</div>
			  				<span>100<strong>亿</strong>+</span>
			  			</li>
					</ul>
					<!-- 指标 -->
					<ol class="carousel-indicators">
						<li data-target="#js-sliding" data-slide-to="0" class="active"></li>
						<li data-target="#js-sliding" data-slide-to="1"></li>
						<li data-target="#js-sliding" data-slide-to="2"></li>
					</ol>			  
				</div>
			</article>
			<!-- 产品列表 -->
			<article class="zyd-content zyd-itme">
			  	<div class="con con-l">
			  		<h3 class="title"><span>热门推荐</span> <a href="Project/Hot/index.php?type=1">更多 >></a></h3>
			  		<ul class="list">
			  			<li class="th">
			  				<div>贷款机构</div>
			  				<div>贷款产品</div>
			  				<div>月费率</div>
			  				<div>期限</div>
			  				<div>贷款额度</div>
			  				<div>操作</div>  			
			  			</li>
			  			<li class="td">
			  				<div><img src="/assets/image/zsyh_icon.jpg" alt=""></div>
			  				<div>招商银行-信用贷</div>
			  				<div><em>0.5-0.7%</em></div>
			  				<div>6-24个月</div>
			  				<div><em>10-1000</em>万</div>
			  				<div class="apply">
			  					<a class="u-btntrs btn" href="/Project/Hot/product.php">立即申请</a>
			  					<p>已有<em>54人</em>贷款成功</p>
			  				</div>
			  			</li>
			  			<li class="td">
			  				<div><img src="/assets/image/zsyh_icon.jpg" alt=""></div>
			  				<div>招商银行-信用贷</div>
			  				<div><em>0.5-0.7%</em></div>
			  				<div>6-24个月</div>
			  				<div><em>10-1000</em>万</div>
			  				<div class="apply">
			  					<a class="u-btntrs btn" href="/Project/Hot/product.php">立即申请</a>
			  					<p>已有<em>54人</em>贷款成功</p>
			  				</div>
			  			</li>
			  			<li class="td">
			  				<div><img src="/assets/image/zsyh_icon.jpg" alt=""></div>
			  				<div>招商银行-信用贷</div>
			  				<div><em>0.5-0.7%</em></div>
			  				<div>6-24个月</div>
			  				<div><em>10-1000</em>万</div>
			  				<div class="apply">
			  					<a class="u-btntrs btn" href="/Project/Hot/product.php">立即申请</a>
			  					<p>已有<em>54人</em>贷款成功</p>
			  				</div>
			  			</li>
			  		</ul>
			  	</div>
			  	<div class="con con-r">
			  		<img src="/assets/image/index_r2.jpg" alt="">
			  	</div>
			</article>
			<article class="zyd-content zyd-itme">
			  	<div class="con con-l">
			  		<h3 class="title"><span>信用贷款</span> <a href="Project/Hot/index.php?type=2">更多 >></a></h3>
			  		<ul class="list">
			  			<li class="th">
			  				<div>贷款机构</div>
			  				<div>贷款产品</div>
			  				<div>月费率</div>
			  				<div>期限</div>
			  				<div>贷款额度</div>
			  				<div>操作</div>  			
			  			</li>
			  			<li class="td">
			  				<div><img src="/assets/image/zsyh_icon.jpg" alt=""></div>
			  				<div>招商银行-信用贷</div>
			  				<div><em>0.5-0.7%</em></div>
			  				<div>6-24个月</div>
			  				<div><em>10-1000</em>万</div>
			  				<div class="apply">
			  					<a class="u-btntrs btn" href="/Project/Hot/product.php">立即申请</a>
			  					<p>已有<em>54人</em>贷款成功</p>
			  				</div>
			  			</li>
			  			<li class="td">
			  				<div><img src="/assets/image/zsyh_icon.jpg" alt=""></div>
			  				<div>招商银行-信用贷</div>
			  				<div><em>0.5-0.7%</em></div>
			  				<div>6-24个月</div>
			  				<div><em>10-1000</em>万</div>
			  				<div class="apply">
			  					<a class="u-btntrs btn" href="/Project/Hot/product.php">立即申请</a>
			  					<p>已有<em>54人</em>贷款成功</p>
			  				</div>
			  			</li>
			  			<li class="td">
			  				<div><img src="/assets/image/zsyh_icon.jpg" alt=""></div>
			  				<div>招商银行-信用贷</div>
			  				<div><em>0.5-0.7%</em></div>
			  				<div>6-24个月</div>
			  				<div><em>10-1000</em>万</div>
			  				<div class="apply">
			  					<a class="u-btntrs btn" href="/Project/Hot/product.php">立即申请</a>
			  					<p>已有<em>54人</em>贷款成功</p>
			  				</div>
			  			</li>
			  		</ul>
			  	</div>
			  	<div class="con con-r">
			  		<img src="/assets/image/index_r3.jpg" alt="">
			  	</div>
			</article>
			<article class="zyd-content zyd-itme">
			  	<div class="con con-l">
			  		<h3 class="title"><span>装修贷款</span> <a href="Project/Hot/index.php?type=3">更多 >></a></h3>
			  		<ul class="list">
			  			<li class="th">
			  				<div>贷款机构</div>
			  				<div>贷款产品</div>
			  				<div>月费率</div>
			  				<div>期限</div>
			  				<div>贷款额度</div>
			  				<div>操作</div>  			
			  			</li>
			  			<li class="td">
			  				<div><img src="/assets/image/zsyh_icon.jpg" alt=""></div>
			  				<div>招商银行-信用贷</div>
			  				<div><em>0.5-0.7%</em></div>
			  				<div>6-24个月</div>
			  				<div><em>10-1000</em>万</div>
			  				<div class="apply">
			  					<a class="u-btntrs btn" href="/Project/Hot/product.php">立即申请</a>
			  					<p>已有<em>54人</em>贷款成功</p>
			  				</div>
			  			</li>
			  			<li class="td">
			  				<div><img src="/assets/image/zsyh_icon.jpg" alt=""></div>
			  				<div>招商银行-信用贷</div>
			  				<div><em>0.5-0.7%</em></div>
			  				<div>6-24个月</div>
			  				<div><em>10-1000</em>万</div>
			  				<div class="apply">
			  					<a class="u-btntrs btn" href="/Project/Hot/product.php">立即申请</a>
			  					<p>已有<em>54人</em>贷款成功</p>
			  				</div>
			  			</li>
			  			<li class="td">
			  				<div><img src="/assets/image/zsyh_icon.jpg" alt=""></div>
			  				<div>招商银行-信用贷</div>
			  				<div><em>0.5-0.7%</em></div>
			  				<div>6-24个月</div>
			  				<div><em>10-1000</em>万</div>
			  				<div class="apply">
			  					<a class="u-btntrs btn" href="/Project/Hot/product.php">立即申请</a>
			  					<p>已有<em>54人</em>贷款成功</p>
			  				</div>
			  			</li>
			  		</ul>
			  	</div>
			  	<div class="con con-r">
			  		<img src="/assets/image/index_r4.jpg" alt="">
			  	</div>
			</article>
			<article class="zyd-content zyd-itme">
			  	<div class="con con-l">
			  		<h3 class="title"><span>抵押贷款</span> <a href="Project/Hot/index.php?type=4">更多 >></a></h3>
			  		<ul class="list">
			  			<li class="th">
			  				<div>贷款机构</div>
			  				<div>贷款产品</div>
			  				<div>月费率</div>
			  				<div>期限</div>
			  				<div>贷款额度</div>
			  				<div>操作</div>  			
			  			</li>
			  			<li class="td">
			  				<div><img src="/assets/image/zsyh_icon.jpg" alt=""></div>
			  				<div>招商银行-信用贷</div>
			  				<div><em>0.5-0.7%</em></div>
			  				<div>6-24个月</div>
			  				<div><em>10-1000</em>万</div>
			  				<div class="apply">
			  					<a class="u-btntrs btn" href="/Project/Hot/product.php">立即申请</a>
			  					<p>已有<em>54人</em>贷款成功</p>
			  				</div>
			  			</li>
			  			<li class="td">
			  				<div><img src="/assets/image/zsyh_icon.jpg" alt=""></div>
			  				<div>招商银行-信用贷</div>
			  				<div><em>0.5-0.7%</em></div>
			  				<div>6-24个月</div>
			  				<div><em>10-1000</em>万</div>
			  				<div class="apply">
			  					<a class="u-btntrs btn" href="/Project/Hot/product.php">立即申请</a>
			  					<p>已有<em>54人</em>贷款成功</p>
			  				</div>
			  			</li>
			  			<li class="td">
			  				<div><img src="/assets/image/zsyh_icon.jpg" alt=""></div>
			  				<div>招商银行-信用贷</div>
			  				<div><em>0.5-0.7%</em></div>
			  				<div>6-24个月</div>
			  				<div><em>10-1000</em>万</div>
			  				<div class="apply">
			  					<a class="u-btntrs btn" href="/Project/Hot/product.php">立即申请</a>
			  					<p>已有<em>54人</em>贷款成功</p>
			  				</div>
			  			</li>
			  		</ul>
			  	</div>
			  	<div class="con con-r">
			  		<img src="/assets/image/index_r5.jpg" alt="">
			  	</div>
			</article>

			<!-- 产品列表结束 -->

			<article class="zyd-content">
				<div class="news">
				  	<div class="con mtpd con-l">
				  		<h3 class="title"><span>媒体报道</span> <a href="/Other/Media.php">更多 >></a></h3>
				  		<div class="list">
					  		<dl>
					  			<a href="">
						  			<dd class="avt"><img src="/assets/image/erwm.jpg" alt=""></dd>
						  			<dt class="tie">阿道夫沙发</dt>
						  			<dd class="note">阿萨德法师范振绪出现的v安分守拙放</dd>
						  			<dd class="time">2016.4.11</dd>			  				
					  			</a>
					  		</dl>
					  		<dl>
					  			<a href="">
						  			<dd class="avt"><img src="/assets/image/erwm.jpg" alt=""></dd>
						  			<dt class="tie">阿道夫沙发阿道夫沙发阿道夫沙发阿道夫沙发阿道夫沙发阿道夫沙发阿道夫沙发阿道夫沙发阿道夫沙发</dt>
						  			<dd class="note">阿萨德法师范振绪出现的v安分师范振绪出现的v安分师范振绪出现的v安分师范振绪出现的v安分师范振绪出现的v安师范振绪出分放</dd>
						  			<dd class="time">2016.4.11</dd>			  				
					  			</a>
					  		</dl>				  			
				  		</div>
				  	</div>
				  	<div class="con ptgg con-r">
				  		<h3 class="title"><span>贷款攻略</span> <a href="/Other/Raiders.php">更多 >></a></h3>
				  		<ol class="list">
				  			<li><a href="/Other/RaidersDetails.php"><strong>阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方蒂芬</strong><span>2016.4.11</span></a></li>
				  			<li><a href="/Other/RaidersDetails.php"><strong>阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯蒂芬啥地方阿斯</strong><span>2016.4.11</span></a></li>
				  			<li><a href="/Other/RaidersDetails.php"><strong>阿斯蒂芬啥地方阿斯蒂斯蒂芬啥地方</strong><span>2016.4.11</span></a></li>
				  			<li><a href=""><strong>阿斯蒂芬啥地方阿斯蒂斯蒂芬啥地方</strong><span>2016.4.11</span></a></li>
				  			<li><a href=""><strong>阿斯蒂芬啥地方阿斯蒂斯蒂芬啥地方</strong><span>2016.4.11</span></a></li>
				  			<li><a href=""><strong>阿斯蒂芬啥地方阿斯蒂斯蒂芬啥地方</strong><span>2016.4.11</span></a></li>
				  			<li><a href=""><strong>阿斯蒂芬啥地方阿斯蒂芬啥啥地方阿</strong><span>2016.4.11</span></a></li>
				  		</ol>
				  	</div>
				</div>
			</article>
			<article class="zyd-content">
				<div class="am-g partner">
				  	<h3 class="title"><span>热门机构</span><a href="">></a><a href=""><</a></h3>
				  	<div class="con">
					  	<a href=""><img src="/assets/image/partner/gsyh.png" alt=""></a>
					  	<a href=""><img src="/assets/image/partner/jtyh.png" alt=""></a>
					  	<a href=""><img src="/assets/image/partner/msyh.png" alt=""></a>
					  	<a href=""><img src="/assets/image/partner/nyyh.png" alt=""></a>
					  	<a href=""><img src="/assets/image/partner/pfyh.png" alt=""></a>
					  	<a href=""><img src="/assets/image/partner/shyh.png" alt=""></a>
					  	<a href=""><img src="/assets/image/partner/xyyh.png" alt=""></a>				  		
				  	</div>
				</div>
			</article>
		</section>
		<!-- 内容列表结束 -->
	</div>
	<?php include_once 'assets/common/footer.html'; ?>
	<script type="text/javascript" src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function () {
			$('#js-sliding').carousel()
		})
	</script>
</body>
</html>