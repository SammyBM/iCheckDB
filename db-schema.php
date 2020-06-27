<?php 

include 'models.php';

class Database{	
	private $connection;

	public function __construct(){
	 	$hostname="localhost";
		
	 	$database="icheck";
	 	$username="root";
	 	$password="";
		$this->connection = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
	}

	public function getUser($username, $password){
		$sql = $this->connection->prepare("SELECT * FROM user WHERE user.username = '{$username}' AND user.password = '{$password}' ");
		$sql->execute();
		$table = $sql->fetchAll();
		if (count($table)>0){
			foreach ($table as $row) {
				$usuario = new user();
				$usuario->username = $row['username'];
				$usuario->password = $row['password'];
				return $usuario;
			}
		}	
	}
}

 ?>