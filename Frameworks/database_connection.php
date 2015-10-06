<?php 
	//include medoo framework.
	require "Frameworks/medoo.min.php";
	
	//connect to database.
	$database = new medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'sync-x inc.',
	'server' => 'localhost',
	'username' => 'garrison',
	'password' => 'root',
	'charset' => 'utf8'
	]);
?>