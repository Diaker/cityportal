<?php
	require "config.php";

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
