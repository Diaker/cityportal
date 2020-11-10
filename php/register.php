<?php
	require "config.php";
	
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