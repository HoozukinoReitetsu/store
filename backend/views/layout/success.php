
<!doctype html>
<html lang="en">
<head>
	<title>Trang chủ</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge" >
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="../../views/web/css/vensdor/plugin.css">
	<link rel="stylesheet" href="../../views/web/css/vensdor/slick.css">
	<link rel="stylesheet" href="../../views/web/css/style.css">
	<link rel="stylesheet" href="../../views/web/css/defaul.min.css">
	<link rel="stylesheet" href="../../views/web/css/fix.css">
</head>
<body>
<div class="container">
	<div class="wap-order-success">
		<div class="img">
			<img src="images/success.png" alt="">
		</div>
		<div class="text-success">
			<h2>Thành công</h2>
		</div>
		<div class="btn-control">
			<div class="go-back">
				<a href="http://localhost/bookstore/backend/?mod=index&act=home"> Quay lại</a>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
</div>
<script src="../../views/web/js/jquery.min.js" type="text/javascript" ></script>
<script src="../../views/web/js/bootstrap.min.js" type="text/javascript" ></script>
<script src="../../views/web/js/wow.min.js" type="text/javascript"></script>
<script src="../../views/web/js/slick.min.js" type="text/javascript" ></script>
<script src="../../views/web/js/magiczoomplus.js"></script>
<script src="../../views/web/js/main.js" type="text/javascript" ></script>
<script>
	$(document).ready(function(e){
		wow = new WOW(
		{
			animateClass: 'animated',
			offset:       0,
			callback:     function(box) {
				console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
			}
		}
		);
		wow.init();
	});
</script>
</body>
</html>