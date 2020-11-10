<?php
session_start();
	// If you installed via composer, just use this code to require autoloader on the top of your projects.
	require 'Medoo.php';
	 
	// Using Medoo namespace
	use Medoo\Medoo;
	 
	$database = new Medoo([
		// required
		'database_type' => 'mysql',
		'database_name' => 'gorod',
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',
	]);
	
	if($database->count("user", ["login" => $_POST["login"]]) > 0) {
		$user = $database->select("user", "*", ["login" => $_POST["login"]])[0];
		if( $user["password"] == $_POST["password"]) {
			$_SESSION["id"] = $user["id"];
			header("location: /");
		} else {
			$_SESSION['error'] = "Неверный пароль";
			header('location: /login.php');
		}
	} else {
		$_SESSION['error'] = "Неверный логин";
		header('location: /login.php');
	}
?>
