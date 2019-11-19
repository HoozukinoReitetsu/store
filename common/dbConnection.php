<?php
	class dbConnection extends PDO
	{
		private $host = 'localhost';
		private $user = 'root';
		private $password = "";
		private $database_name = 'bookstore';
		private $connec = null;
		private $stmt;

		public function __construct(){
			$this->connect();
		}
		public function connect(){
			if($this->connec == null){
				try{
					$this->connec = new PDO('mysql:host=' .$this->host. ';dbname=' .$this->database_name , $this->user , $this->password);
					$this->connec->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}catch(Exception $ex){
					echo $ex->getMessage();
					die();
				}
			}
			return $this->connec ;
		}
		public function query($sql){
			$this->stmt = $this->connec->prepare($sql);
		}

		public function bindValue($arr){
		    foreach ($arr as $key => $value){
		        $this->stmt->bindValue($key,$value);
            }
        }

        // insert into table_name (id , name) values (:id,:name);
        public function insert($table_name,$arr){
                $key = array_keys($arr);
                $param = ':' . implode(', :',$key);
                $key = implode(',',$key);
                $sql = " INSERT INTO $table_name ($key) VALUES  ($param) ";
                $this->query($sql);
                $arr = $this->renameKey($arr,':');
                $this->bindValue($arr);
                try{
                    $this->execute();
                }catch(Exception $e){
                    echo $e->getMessage();
                }
                return true;
                exit();
        }


        public function delete($sql){
		    $this->query($sql);
            try{
                $this->execute();
            }catch (Exception $ex){
                echo $ex->getMessage();
            }
        }

        public function upDate($sql){
		    $this->query($sql);
		    try{
		        $this->execute();
            }catch (Exception $ex){
		        echo $ex->getMessage();
            }
        }

        public function lastWhere($arr){
		    $result = [];
		    for($i = 0 ; $i< count($arr) ; $i++){
		        $result[] = $arr[$i]. '=:_' . $arr[$i];
            }
		    return implode(',',$result);
        }
        // param cho ham bindValue
        public function renameKey($arr,$param){
		    foreach ($arr as $key => $value){
		        $arr[$param.$key] = $value;
		        unset($arr[$key]);
            }
		    return $arr;
        }

		public function execute(){
			return $this->stmt->execute();
		}

		public function setFetchMode(){
			return $this->stmt->setFetchMode(PDO::FETCH_ASSOC);
		}
		public function rowCount(){
			return $this->stmt->rowCount();
		}
		public function findAll(){
			$this->execute();
			return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}


?>