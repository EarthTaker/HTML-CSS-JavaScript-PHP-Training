<?php
	session_start();
	
	if(!$_SESSION['user_data']['role']=="admin"){
		header('Location: index.php');
	}
	
	$action = $_GET['action'];
	
	switch($action){
		
		case "create_user":
			create_user();
			header('Location: index.php?message=created_user');
			break;
			
		case "view_user":
			view_user();
			header('Location: index.php');
			break;
			
		case "update_user":
			update_user();
			header('Location: index.php');
			break;
			
		case "delete_user":
			delete_user();
			header('Location: index.php');
			break;
			
		case "login_authenticate":
			login_authenticate();
			
			header('Location: index.php?message');
			
			if($_SESSION['user_data']['role']=="admin")
			{
				header('Location: admin.php');
			}
			elseif($_SESSION['user_data']['role']=="member")
			{
				header('Location: index.php?member_signed_in');
			}
			break;
			
		default:
			echo "Ya, It broke...";
			break;	
	}
	
	function create_user(){
		require_once('Frameworks/database_connection.php');
		$database->insert("user", [
			"user_name" => $_POST["user_name"],
			"first_name" => $_POST["first_name"],
			"last_name" => $_POST["last_name"],
			"password" => md5($_POST["password"]),
			"email" => $_POST["email"],
			"tel" => $_POST["tel"],
			"role" => "member"
			
		]);
	}
	
	function login_authenticate(){
		require_once('Frameworks/database_connection.php');
		
		$user_name=$_POST['user_name'];
		$password_hash=md5($_POST['password']);
		
		//Query the database and fill the variable $data with the one data being fetched from the database
		$data = $database->query("SELECT * FROM user WHERE user_name='$user_name' AND password='$password_hash' LIMIT 1")->fetchAll();
		
		//if user is authenticated set session variables and redirect.
		if(count($data)==1){
			session_start();
			$_SESSION['logged_in']=true;
			$_SESSION['user_data']=$data[0];
		}
		else
		{
			//Send User back to Login
			header("Location: sign_in.php");
		}
	}
?>
