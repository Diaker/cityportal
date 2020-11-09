<?
	session_start();

	require 'php/Medoo.php';
	 
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

	if ($_SESSION["id"]) {
		$user = $database->select("user", "*", ["id" => $_SESSION["id"]])[0];
	}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Улучши свой город</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slider.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Городской портал</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Главная</a></li>
                <li><a href="register.php">Зарегистрироваться</a></li>
                <li><a href="login.php">Войти</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">
                       <?
                       	if ($user) {
                       		echo $user["firstname"];
                       		echo " ";
                       		echo $user["lastname"];
                       		echo '<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="list.php">Мои заявки</a></li>
                        <li><a href="new.php">Новая заявка</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/php/logout.php">Выход</a></li>
                    </ul>';
                       	}
                       ?>
                        
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
