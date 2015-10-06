<?php
	session_start();
	
	if($_SESSION['logged_in']){
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sync-X Sign-Up</title>
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
				<h1>Sync-X Registration</h1>
				<p>Please fill out the information below and if there are any problems please send us an email: <a href="#">Sync-X</a>.</p>
			</header>
			
			<article>
				<form action="user_actions.php?action=create_user" method="post">
					<input name="sign_up_validator" id="sign_up_validator" value="process" type="hidden">
					<label for="first_name">First Name:</label>
					<input name="first_name" id="first_name" type="text" required>
					<br><br>
							
					<label for="last_name">Last Name:</label>
					<input name="last_name" id="last_name" type="text" required>
					<br><br>
							
					<label for="user_name">User Name:</label>
					<input id="user_name" name="user_name" type="text" required>
					<br><br>
							
					<label for="password">Password:</label> 
					<input type="password" id="password" name="password" required>
					<br><br>
							
					<label for="email">Email:</label> 
					<input type="email" id="email" name="email" required>
					<br><br>
							
					<label for="phone">Phone:</label>
					<input id="tel" name="tel" type="tel" required>
					<br><br>
					
					
						
					<input type="submit" value="Submit" />
				</form>
			</article>
			<?php 
				include "footer.php";
			?>
		</div>
	</body>
</html>