<?php
include_once('views/layout/partial/header.php');
?>
<div id="main-container" class="main-container">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="login-container">
				<div class="center">
					<h1>
						<i class="icon-cog green"></i>
						<span class="white">Bảng quản trị</span>
					</h1>
				</div>
				<div class="space-6"></div>
				<div class="position-relative">
					<div id="login-box" class="login-box visible widget-box no-border">
						<div class="widget-body">
							<div class="widget-main">
								<h4 class="header blue lighter bigger">
									<i class="icon-coffee green"></i>
									Xin vui lòng điền thông tin                            
								</h4>
								<div class="space-6"></div>
								<form class="form-horizontal" id="login-form" action="?mod=index&act=login" method="POST">                      
									<fieldset>
										<div class="success">
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input class="form-control" placeholder="Tên đăng nhập" name="username" id="LoginForm_username" type="text">
													<i class="icon-user"></i>
												</span>
											</label>
										</div>
										<div class="success">
											<label class="block clearfix">
												<span class="block input-icon input-icon-right">
													<input class="form-control" placeholder="Mật khẩu" name="password" id="LoginForm_password" type="password">
													<i class="icon-lock"></i>
												</span>
											</label>
										</div>
										<div class="space"></div>
										<div class="clearfix">
											<label class="inline">
												<input id="ytLoginForm_rememberMe" type="hidden" value="0" name="LoginForm[rememberMe]"><input class="ace" name="" id="LoginForm_rememberMe" value="1" type="checkbox">
												<span class="lbl"> Nhớ đăng nhập</span>
											</label>
											<input class="pull-right btn btn-sm btn-primary" type="submit" name="login" value="Đăng nhập">                                
										</div>
										<input type="hidden" name="currPage" value="/quantri/login/login/login">
									</fieldset>
								</form>                        
							</div>
							<div class="toolbar clearfix">
								<div>
									<a class="forgot-password-link" href="/quantri/login/login/forgotpassword">
										<i class="icon-arrow-left"></i>
										Quên mật khẩu                                
									</a>
								</div>
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