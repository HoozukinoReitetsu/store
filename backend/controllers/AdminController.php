<?php 
// use
include_once('models/LoginForm.php');
include_once('models/Product.php');
include_once('models/Category.php');
class AdminController{
	// public function __construct()
	// {
	// 	require 'views/login.php';
	// }
	public function actionIndex(){
		require 'views/layout/login.php';
	}
	public function actionLogin(){
		$login = new LoginForm();
		$login = $login->login();
		$_SESSION['id_admin'] = $login[0]['id'];
		if(isset($login)){
			// var_dump($login);
			header('location: ?mod=index&act=home');
		}else{
			header('location: ?mod=index&act=err');
		}
	}
	public function actionLogout(){
		unset($_SESSION['id_admin']);
		if(empty($_SESSION['id_admin'])){
			header('location: ?mod=index&act=index');
		}
		echo "fdsf";
	}
	// list product
	public function actionHome(){
		$products = new Product();
		$products = $products->list_prodct();
		require 'views/layout/home.php';
	}

	public function actionCreateProduct(){
		include_once('views/layout/create_product.php');
	}

	public function actionSaveProdcut(){
		$insert = new Product();
		$insert = $insert->insert_product();
		if(isset($insert)){
			header('location: views/layout/success.php');
		}else{
			header('location: ?mod=index&act=err');
		}
	}
	//list category

	public function actionListCategory(){
		$categorys = new Category();
		$categorys = $categorys->list_category();
		require_once 'views/layout/category.php';
	}

	public function actionCreateCategory(){
		include_once('views/layout/create_category.php');
	}

	public function actionSaveCategory(){
		$insert = new Category();
		$insert = $insert->insert_category();
		if(isset($insert)){
			header('location: views/layout/success.php');
		}else{
			header('location: ?mod=index&act=err');
		}
	}

	public function actionSearch(){
		$result = new Product();
		$result = $result->search_product();
		var_dump($result);
	}
}
?>