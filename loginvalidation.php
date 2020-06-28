<?php

include 'db-schema.php';

if (isset($_GET['username']) && isset($_GET['password'])){
	$username = $_GET['username'];
	$password = $_GET['password'];

	$database = new Database();
	$usuario = $database->getUser($username, $password);
	if ($usuario) {
			echo "<script>window.location.href='ICheck_homepage_AboutUs.php'</script>";
	} else {
		echo "<script>window.location.href='ICheck_login.php?alert=no+user+find';</script>";
	}

} else {
	echo 'Faltan datos';
}

 ?>
