<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Sync-X Inc. Home Page</title>
		<?php 
			include "head-tag.php";
		?>
	</head>
	<body class="home">
		<div id="container">
			<?php 	
				include "nav.php";
				include "logo.php";
			?>
			<header>
				<h1>Welcome To Sync-X</h1>
				<p>We at Sync-X strive to work think faster and work harder. Our company is built on the grounds of blood, sweat, and tears. We believe that we bring something new to this industry. Our minds at Sync-X continue to work hard day in and day out in order to bring greatness to everyone.</p>
			</header>
			
			<article class="main-content">
				<h2>Sync-X Incorporated</h2>
				<?php if($_SESSION['logged_in']){ ?>			
					<h1>Welcome <?php echo $_SESSION['user_data']['first_name']; ?>!</h1>
				<?php } ?>
				<div class="content-container">
					<div class="loadable-content">
					
					</div>
					
					<div class="default-content">
						<div class="content-box-image">
							<img src="">
						</div>
						
						<div class="content-container-title">
							<a href="#">Little Wizards</a>
						</div>
						
						<div class="content-box-paragraph">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat ornare ex, sed fringilla enim. Nullam eu varius nibh, quis aliquam purus. Morbi malesuada, nibh ut euismod elementum, magna odio eleifend felis, sagittis convallis eros ex et.</p>
						</div>
					</div>
					
					<div class="second-a-content-container">
						<a class="overlay_trigger" id="overlay_trigger_1">Our Shows</a>
						<p id="slidedown_trigger_1">Show<br>More</p>
					</div>
					
					<div id="slidedown_1" class="slidedown">
						<p>Good Choice</p>
					</div>
				</div>
				
				<div class="content-container">
					<div class="loadable-content">
					
					</div>
					
					<div class="default-content">
						<div class="content-box-image">
							<img src="">
						</div>
						
						<div class="content-container-title">
							<a href="#">Echo</a>
						</div>
						
						<div class="content-box-paragraph">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat ornare ex, sed fringilla enim. Nullam eu varius nibh, quis aliquam purus. Morbi malesuada, nibh ut euismod elementum, magna odio eleifend felis, sagittis convallis eros ex et.</p>
						</div>
					</div>
					
					<div class="second-a-content-container">
						<a class="overlay_trigger" id="overlay_trigger_1">Our Games</a>
						<p id="slidedown_trigger_2">Show<br>More</p>
					</div>
					
					<div id="slidedown_2" class="slidedown">
						<p>Good Choice</p>
					</div>
				</div>	
				
				<div class="content-container">
					<div class="loadable-content">
					
					</div>
					
					<div class="default-content">
						<div class="content-box-image">
							<img src="">
						</div>
						
						<div class="content-container-title">
							<a href="#">House Of Shadows</a>
						</div>
						
						<div class="content-box-paragraph">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat ornare ex, sed fringilla enim. Nullam eu varius nibh, quis aliquam purus. Morbi malesuada, nibh ut euismod elementum, magna odio eleifend felis, sagittis convallis eros ex et.</p>
						</div>
					</div>
					
					<div class="second-a-content-container">
						<a class="overlay_trigger" id="overlay_trigger_1">Our Movies</a>
						<p id="slidedown_trigger_3">Show<br>More</p>
					</div>
					
					<div id="slidedown_3" class="slidedown">
						<p>Good Choice</p>
					</div>
				</div>	
				
				<div class="content-container">
					<div class="loadable-content">
					
					</div>
					
					<div class="default-content">
						<div class="content-box-image">
							<img src="">
						</div>
						
						<div class="content-container-title">
							<a href="#">TAW - Soundtrack</a>
						</div>
						
						<div class="content-box-paragraph">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat ornare ex, sed fringilla enim. Nullam eu varius nibh, quis aliquam purus. Morbi malesuada, nibh ut euismod elementum, magna odio eleifend felis, sagittis convallis eros ex et.</p>
						</div>
					</div>
					
					<div class="second-a-content-container">
						<a class="overlay_trigger" id="overlay_trigger_1">Our Music</a>
						<p id="slidedown_trigger_4">Show<br>More</p>
					</div>
					
					<div id="slidedown_4" class="slidedown">
						<p>Good Choice</p>
					</div>
				</div>	
			</article>
			<?php 
				include "footer.php";
			?>
		</div>
	</body>
</html>