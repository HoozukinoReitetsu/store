
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
				<div class="widget-box">
					<div class="widget-header">
						<h4>
							Quản lý sản phẩm        
						</h4>
						<div class="widget-toolbar no-border">
							<a href="?mod=index&act=create_product" class="btn btn-xs btn-primary" style="margin-right: 20px;">
								<i class="icon-plus"></i> Thêm Sản phẩm mới 
							</a>
						</div>
					</div>
					<div class="widget-body">
						<div class="widget-main">
							<div class="search-active-form" style="position: relative; margin-top: 10px;">
								<div class="form-search">
									<form action="?mod=index&act=search" method="post">
										<input class="" placeholder="Tên sản phẩm" name="name_item"  type="text" maxlength="400">        
										<input class="btn btn-sm" type="submit" name="search" value="Tìm kiếm">
									</form>
								</div>
							</div>
							<!-- search-form -->
							<div id="product-grid" class="grid-view">
								<table class="table table-bordered table-hover vertical-center">
									<thead>
										<tr>
											<th id="product-grid_c1">Mã sản phẩm</th>
											<th id="product-grid_c3">Tên sản phẩm</th>
											<th id="product-grid_cprice">Giá sản phẩm</th>
											<th id="product-grid_cprice_market">Giá thị trường</th>
											<th id="product-grid_cproduct_category_id">Danh mục</th>
											<th id="product-grid_c4">Số Lương</th>
											<th class="button-column" id="product-grid_c6">&nbsp;</th>
										</tr>
									</thead>
									<tbody>
										<?php if(isset($products)){ ?>
											<?php foreach ($products as $product){ 
												?>
												<tr class="odd">
													<td>
														<img src="http://w3ni841.nanoweb.com.vn/mediacenter/media/images/953/products/953/1/s50_50/images-1572419748.jpg">
													</td>
													<td><?php echo $product['name_item'] ?></td>
													<td><?php echo $product['price'] ?></td>
													<td><?php echo $product['price_maket'] ?></td>
													<td><?php echo $product['name_cat'] ?></td>
													<td><?php echo $product['quantity'] ?></td>
													<td style="width: 130px;" class="button-column">
														<a style="padding: 0px 5px;font-size: 15px;" class="icon-search" title="Preview" target="_blank" href="">

														</a> 
														<a style="padding: 0px 5px;font-size: 15px;" class="icon-edit" title="Cập nhật" href="views/layout/update_product.php?id=<?= $product['id'] ?>">

														</a>  
														<a style="padding: 0px 5px;font-size: 15px;" class="icon-trash" title="Xóa" href="views/layout/delete_confirm.php?id=<?= $product['id'] ?>">
														</a>
													</td>
												</tr>
											<?php } ?>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
include_once('views/layout/partial/footer.php'); 
?>
