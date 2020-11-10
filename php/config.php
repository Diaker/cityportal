<?
	session_start();

	require 'Medoo.php';

	use Medoo\Medoo;
	 
	$database = new Medoo([
		// required
		'database_type' => 'mysql',
		'database_name' => 'gorod',
		'server' => 'localhost',
		'username' => 'root',
		'password' => '',
	]);
?>