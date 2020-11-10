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
	
	if ($_POST["password"] && $_POST["login"] && $_POST['firstname'] && $_POST['lastname']) {
		if ($_POST['password'] == $_POST['password2']) {
			$database->insert("user", [
			"login" => $_POST["login"],
			"password" => $_POST["password"],
			"firstname" => $_POST["firstname"],
			"lastname" => $_POST["lastname"]

			]);

			$_SESSION["id"] = $database->select("user", "*", ["login" =>$_POST["login"]])[0]["id"];

			header("location: /");
		} else {
			$_SESSION['error'] = "Пароли не совпадают";
		header("location: /register.php");
		}
		
	} else {
		$_SESSION['error'] = "Введены не все данные!";
		header("location: /register.php");
	}
?>