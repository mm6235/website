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
	<?php include_once './UsTop.html'; ?>
	<div class="wraper">
		<section  class="g-warp g-main">
			<article class="m-page">
				<h3 class="title"><span>&nbsp;</span>法律声明</h3>
				<div class="con">
					11111
					<style type="text/css">
						.capture #header{display: none;}
						.capture #footer{display: none;}

					</style>
					<div class="capture">
						<?php
							// $Url = 'http://fun.html5.qq.com/?g=4';
							$url = "http://www.cnblogs.com/rainheader/p/4599750.html";
							$contents = file_get_contents($url);
							//如果出现中文乱码使用下面代码
							// $getcontent = iconv("gb2312", "utf-8",$contents);
							echo $contents;
						?>
						<?php
							// $handle = fopen ("http://www.cnblogs.com/rainheader/p/4599750.html", "rb");
							// $contents = "";
							// do {
							// $data = fread($handle, 1024);
							// if (strlen($data) == 0) {
							// break;
							// }
							// $contents .= $data;
							// } while(true);
							// fclose ($handle);
							// echo $contents;
						?> 
					</div>
				</div>
			</article>
		</section>
	</div>
	<?php include_once '../assets/common/footer.html'; ?>
</body>
</html>