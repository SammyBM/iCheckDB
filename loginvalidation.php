<?php 

include 'db-schema.php';

if (isset($_GET['username']) && isset($_GET['password'])){	 
	$username = $_GET['username'];
	$password = $_GET['password'];

	$database = new Database();
	$usuario = $database->getUser($username, $password);
	if ($usuario) {
		echo json_encode($usuario);
	} else {
		echo "<script>window.location.href='ICheck_homepage.php?alert=no+user+find';</script>";
	}

} else {
	echo 'Faltan datos';
}

 ?>