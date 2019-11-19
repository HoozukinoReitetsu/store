<?php
include_once ('/../../common/dbConnection.php');
include_once ('/../../common/input.php');
include_once ('/../../common/validate.php');
class Category {
	public function list_category(){
		$db = new dbConnection();
		$sql_product = "SELECT * FROM category";
		$db->query($sql_product);
		// $db->excute();
		$db->setFetchMode();
		$products = $db->findAll();
		return $products;
	}

	public function get_item($id){
		$db = new dbConnection();
		$param = "SELECT * FROM category WHERE id_cat = $id";
		$db->query($param);
		$db->setFetchMode();
		$prodcut = $db->findAll();
		return $prodcut;
	}
	public function delete_category($id){
		$db = new dbConnection();
		$sql_delete = "DELETE FROM category WHERE id_cat = $id";
		try{
			$db->delete($sql_delete);
			header('location: success.php');
			return true;
		}
		catch(Exception $ex){
			echo $ex->getMessage();
		}

	}

	public function update_category($id,$name_cat,$description){
		$db = new dbConnection();
		$sql = "UPDATE category SET name_cat = '$name_cat' , description ='$description' WHERE id_cat = $id ";
		try{
			$db->upDate($sql);
			header('location: success.php');
			return true;	
		}
		catch(Exception $ex){
			echo $ex->getMessage();
		}
	}

	public function insert_category(){
		$db = new dbConnection();
		if(isset($_POST['save_category'])){
			if(isset($_POST['name_cat']) && isset($_POST['description']) && checkEmpty($_POST['name_cat']) && checkEmpty($_POST['description'])){
				$name_cat = checkInput($_POST['name_cat']);
				$description = checkEmpty($_POST['description']);
				$value = array(
					'name_cat' => $name_cat,
					'description' => $description
				);
				if($db->insert('category',$value)){
					return true;
				}else{
					return false;
				}
			}
		}
	}
}
?>