<?php 
	session_start();

	if($_SESSION["logged_in"] && $_SESSION['user_data']['role']=="admin"){
		header('Location: admin.php');
	}
	elseif($_SESSION["logged_in"] && $_SESSION['user_data']['role']=="member"){
		header('Location: member.php');
	}
	else {
		//header('Location: sign_in.php');
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sign In</title>
		<?php 
			include "head-tag.php";		
		?>
	</head>

	<body class="sub">
		<div id="container">
			<?php 	
				include "nav.php";
				include "logo.php";
			?>
		<header>
			<h3>Sign In</h3>
		</header>
		<article>
			<form name="login_form" id="login_form" method="post" action="user_actions.php?action=login_authenticate">
				<label for="user_name">Username</label>
				<input type="text" id="user_name" name="user_name" />
				<label for="password">Password</label>
				<input type="password" id="password" name="password" />
				<input type="submit"  id="submit" name="submit" value="Log In" />
			</form>
		</article>
		<?php 
			include "footer.php";
		?>
		</div>
	</body>
</html>