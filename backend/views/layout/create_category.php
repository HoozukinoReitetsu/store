
<?php
include_once('views/layout/partial/header.php');
?>
<!-- value_product --$product-- -->
<div class="navbar navbar-default" id="navbar">
	<div class="navbar-container" id="navbar-container">
		<div class="navbar-header pull-left">
			<a href="/quantri/" class="navbar-brand">
				<small>
					Bảng quản trị (953)                
				</small>
			</a>
			<!-- /.brand -->
			<div class="pull-left">
			</div>
		</div>
		<!-- /.navbar-header -->
		<div class="navbar-header pull-right" role="navigation">
			<ul class="nav ace-nav">
				<li class="gray">
					<a href="/quantri/economy/order">
						<i class="icon-shopping-cart"></i>
						<span>
							Đơn hàng chờ xử lý (4)                            
						</span>
					</a>
				</li>
				<li class="green">
					<a href="http://w3ni841.nanoweb.com.vn" target="_blank">
						<i class="icon-globe"></i>
						<span>
							Xem website                        
						</span>
					</a>
				</li>
				<li class="light-blue">
					<a data-toggle="dropdown" href="#" class="dropdown-toggle">
						<i class="icon-user"></i>
						<span class="user-info">
							admin                        
						</span>
						<i class="icon-caret-down"></i>
					</a>
					<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="/quantri/useradmin/useradmin/changepass">
								<i class="icon-key"></i> Đổi mật khẩu 
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="?mod=index&act=logout">
								<i class="icon-off"></i> Đăng xuất 
							</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- /.ace-nav -->
		</div>
		<!-- /.navbar-header -->
	</div>
	<!-- /.container -->
</div>
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
						<li class="active">
							<a class="" href="?mod=index&act=home">
								<i class=""></i>
								<span class="menu-text">Quản lý sản phẩm</span>
							</a>
						</li>
						<li class="">
							<a class="" href="?mod=index&act=category">	
								<i class=""></i>
								<span class="menu-text">Danh mục sản phẩm</span>
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
					<form class="form-horizontal" enctype="multipart/form-data" id="product-form" action="?mod=index&act=save_category" method="post">
						<div class="widget-header">
							<h4>Đăng Danh mục</h4>
							<div class="widget-toolbar no-border">
								<input class="pull-right btn btn-sm btn-primary" type="submit" name="save_category" value="Lưu">
							</div>
						</div>
						<div class="widget-body no-padding">
							<div class="widget-main">
								<div class="row">
									<div class="col-xs-12 no-padding">
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
													<div class="form-group no-margin-left">
														<label class="col-sm-2 control-label no-padding-left required" for="Product_name">Tên danh mục
															<span class="required">*</span>
														</label>
														<div class="controls col-sm-10 error">
															<input class="span12 col-sm-12" name="name_cat"  type="text" >
															<div class="errorMessage" id="Product_name_em_" style="">Tên danh muc không được phép rỗng.</div>
														</div>
													</div>
													<div class="form-group no-margin-left">
														<label class="col-sm-2 control-label no-padding-left" for="Product_color">Mô tả ngắn</label>
														<div class="controls col-sm-10">
															<input class="span12 col-sm-12" name="description" type="text">
															<div class="errorMessage" id="Product_color_em_" style="display:none"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
include_once('views/layout/partial/footer.php'); 
?>
