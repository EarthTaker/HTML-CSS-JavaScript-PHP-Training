<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Contact Us</title>
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
		<article>
		<h1>Contact Us</h1>
			<?php if($_SESSION['logged_in']){ ?>			
			<h1>Welcome <?php echo $_SESSION['user_data']['first_name']; ?>!</h1>
			<?php } ?>
		</article>
		</div>
		<?php 
			include "footer.php";
		?>
	</body>
</html>