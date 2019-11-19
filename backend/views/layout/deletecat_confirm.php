<?php 
include_once('../../models/Category.php');
$cat = new Category();
$id = $_GET['id'];
$item = $cat->get_item($id);
if(isset($_POST['delete_cat'])){
	$cat->delete_category($id);
}
?>
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
	<div id="main-container" class="main-container">
		<div class="main-container-inner">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>
			<div id="sidebar" class="sidebar">
				<!-- #sidebar-shortcuts -->
				<ul class="nav nav-list">
					<li class="active">
						<a class="dropdown-toggle" href="/quantri/economy/product">
							<i class="icon-file-powerpoint-o"></i>
							<span class="menu-text">Sản phẩm</span>
							<b class="arrow icon-angle-down"></b>
						</a>
						<ul class="submenu">
							<li >
								<a class="" href="economy/manufacturer">
									<i class=""></i>
									<span class="menu-text">Quản lý hãng sản xuất</span>
								</a>
							</li>
							<li class="active">
								<a class="" href="/quantri/economy/product">
									<i class=""></i>
									<span class="menu-text">Quản lý sản phẩm</span>
								</a>
							</li>
							<li class="">
								<a class="" href="/quantri/economy/productcategory">
									<i class=""></i>
									<span class="menu-text">Danh mục sản phẩm</span>
								</a>
							</li>
							<li class="">
								<a class="" href="/quantri/economy/productgroups">
									<i class=""></i>
									<span class="menu-text">Nhóm sản phẩm</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="">
						<a class="" href="">
							<i class="icon-folder-open"></i>
							<span class="menu-text">Danh mục bài viết</span>
						</a>
					</li>
				</ul>
				<!-- /.nav-list -->
				<div id="sidebar-collapse" class="sidebar-collapse">
					<i data-icon2="icon-double-angle-right" data-icon1="icon-double-angle-left" class="icon-double-angle-left"></i>
				</div>
			</div>
			<div class="main-content">
				<div class="page-content">
					<div class="widget widget-box">
						<div class="widget-header">
							<h4>Confirm</h4>
						</div>
						<div class="widget-body no-padding">
							<div class="widget-main">
								<div class="widget-main">
									<div class="row">
										<div class="col-sm-12 col-xs-12 no-padding">
											<?php foreach ($item as $i) {
												?>
												<form class="form-horizontal" id="news-form" action="" method="post">
													<div class="tabbable">
														<ul class="nav nav-tabs" id="myTab">
															<li class="active">
																<a data-toggle="tab" href="#basicinfo">
																	Thông tin cơ bản                           
																</a>
															</li>
														</ul>
														<div class="tab-content">
															<div id="basicinfo" class="tab-pane active">
																<div class="control-group form-group">
																	<label class="col-sm-2 control-label no-padding-left required" for="News_news_title">Danh muc<span class="required">*</span></label>
																	<div class="controls col-sm-10">
																		<?php echo $i['name_cat'] ?>
																	</div>
																</div>
																<div class="control-group form-group">
																	<label class="col-sm-2 control-label no-padding-left" for="News_news_sortdesc">Mô tả vắn tắt</label>
																	<div class="controls col-sm-10">
																		<?php echo $i['description'] ?>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="control-group form-group buttons">
														<input class="btn btn-info" id="savenews" type="submit" name="delete_cat" value="Xóa">
													</div>
												</form>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
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