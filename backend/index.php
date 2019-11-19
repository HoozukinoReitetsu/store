<?php 
session_start();
if(isset($_GET['mod'])){
	$mod = $_GET['mod'];
}else{
	$mod = 'index';
}
if(isset($_GET['act'])){
	$act = $_GET['act'];
}else{
	$act = 'index';
}
switch ($mod) {
	case 'index':{
		include_once('controllers/AdminController.php');
		$admin = new AdminController();
		switch ($act) {
			case 'index':
			$admin->actionIndex();
			break;

			case 'login';
			$admin->actionLogin();
			break;

			case 'home';
			if(isset($_SESSION['id_admin'])){
				$admin->actionHome();
			}else{
				require 'views/layout/err.php';
			}
			break;

			case 'err';
			require 'views/layout/err.php';
			break;
			
			case 'logout':
			$admin->actionLogout();
			break;

			case 'save_product':
			$admin->actionSaveProdcut();
			break;
			
			case 'category':
			$admin->actionListCategory();
			break;

			case 'create_product':
			$admin->actionCreateProduct();
			break;

			case 'create_category':
			$admin->actionCreateCategory();
			break;

			case 'save_category':
			$admin->actionSaveCategory();
			break;

			case 'search';
			$admin->actionSearch();
			break;
		}
	}
}
?>