
<?php
include_once ('/../../common/dbConnection.php');

class Product {

	public function list_prodct(){
		$db = new dbConnection();
		$sql_product = "SELECT * FROM item INNER JOIN category ON item.id_cat = category.id_cat ";
		$db->query($sql_product);
		// $db->excute();
		$db->setFetchMode();
		$products = $db->findAll();
		return $products;
	}

	public function get_item($id){
		$db = new dbConnection();
		$param = "SELECT * FROM item WHERE id = $id";
		$db->query($param);
		$db->setFetchMode();
		$prodcut = $db->findAll();
		return $prodcut;
	}
	public function deleteitem($id){
		$db = new dbConnection();
		$sql_delete = "DELETE FROM item WHERE id = $id";
		try{
			$db->delete($sql_delete);
			header('location: success.php');
			return true;
		}
		catch(Exception $ex){
			echo $ex->getMessage();
		}

	}

	// demo
	public function insert_product(){
		$db = new dbConnection();
		if(isset($_POST['save_product'])){
			if(isset($_POST['name_item']) && isset($_POST['id_cat']) && checkEmpty($_POST['name_item']) && checkEmpty($_POST['id_cat'])){
				$name_item = checkInput($_POST['name_item']);
				$id_cat = checkInput($_POST['id_cat']);
				$price = checkInput($_POST['price']);
				$price_maket = checkInput($_POST['price_maket']);
				$quantity = checkInput($_POST['quantity']);
				$item_sortdesc = checkInput($_POST['item_sortdesc']);
				$author = checkInput($_POST['author']);
				$item_desc = checkInput($_POST['item_desc']);
				$manufacturer = checkInput($_POST['manufacturer']);
				$value = array(
					'name_item' => $name_item,
					'id_cat' => $id_cat,
					'price' => $price,
					'price_maket' => $price_maket,
					'quantity' => $quantity,
					'item_sortdesc' => $item_sortdesc,
					'author' => $author,
					'item_desc' => $item_desc,
					'manufacturer' => $manufacturer
				);
				if($db->insert('item',$value)){
					return true;
				}else{
					return false;
				}
			}
		}
	}

	public function update_product($id){
		$db = new dbConnection();
		if(isset($_POST['name_item']) && isset($_POST['id_cat']) && checkEmpty($_POST['name_item']) && checkEmpty($_POST['id_cat'])){
			$name_item = checkInput($_POST['name_item']);
			$id_cat = checkInput((int) $_POST['id_cat']);
			$price = checkInput( (float) $_POST['price']);
			$price_maket = checkInput((float) $_POST['price_maket']);
			$quantity = checkInput($_POST['quantity']);
			$item_sortdesc = checkInput($_POST['item_sortdesc']);
			$author = checkInput($_POST['author']);
			$item_desc = checkInput($_POST['item_desc']);
			$manufacturer = checkInput($_POST['manufacturer']);
			$value = array(
				'name_item' => $name_item,
				'id_cat' => $id_cat,
				'price' => $price,
				'price_maket' => $price_maket,
				'quantity' => $quantity,
				'item_sortdesc' => $item_sortdesc,
				'author' => $author,
				'item_desc' => $item_desc,
				'manufacturer' => $manufacturer
			);
							// var_dump($value);
							// die();
			$sql = "UPDATE item SET name_item = '$name_item', 
			id_cat = $id_cat , price = $price ,
			price_maket = $price_maket, quantity = $quantity, 
			item_sortdesc = '$item_sortdesc' , author = '$author' , 
			item_desc = '$item_desc' , manufacturer = '$manufacturer'
			WHERE id = $id" ;
			try{
				$db->upDate($sql);
				header('location: success.php');
				return true;
			}
			catch (Exception $e){
				header('location: err.php');
				echo $e->getMessage();
			}
		}
	}

	// search ten
	public function search_product(){
		$db = new dbConnection();
		if(isset($_POST['search'])){
			$param = $_POST['name_item'];
			$sql_search = "SELECT * FROM item WHERE name_item LIKE '$param' ";
			$db->query($sql_search);
			$db->setFetchMode();
			$products = $db->findAll();
			return $products;
		}

	}
}
?>