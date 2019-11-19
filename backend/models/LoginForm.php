<?php
include_once ('/../../common/dbConnection.php');
include_once ('/../../common/input.php');
include_once ('/../../common/validate.php');
class LoginForm {

	public function login(){
		$db = new dbConnection();
		if(isset($_POST['login'])){
			if(isset($_POST['username']) || isset($_POST['password'])){
				$username = checkInput($_POST['username']);
				$password = md5(checkInput($_POST['password']));
			}
			$sql = "SELECT * FROM user WHERE user_name = '$username'  AND password = '$password' " ;
			$db->query($sql);
			$db->setFetchMode();
			$db -> findAll();
			if($db->rowCount() > 0){
				$row = $db->findAll();
				if($row[0]['role'] == 1){
					return $row;
				}
			}else{
				return false;
			}
		}
	}
}
?>