<div class="mobile_nav">
	<i id="fa-gamepad" class="fa fa-gamepad"></i>
	<nav>
		<div>
			<a href="sign_up.php">Sign Up</a>
			
			<?php if($_SESSION['logged_in']){ ?>
				<a href="logout.php">Sign Out</a>
			<?php } elseif(!$_SESSION['logged_in']) { ?>
				<a href="sign_in.php">Sign In</a>
			<?php } ?>
		</div>
		
		<ul>
			<li class="Home-Nav"><a href="index.php">Home</a></li>
							
			<li class="About-Us-Nav"><a href="about_us.php">About Us</a></li>
							
			<li class="Content-Nav"><a href="content.php">Content</a>
				<ul>
					<li><a href="content_movies.php">Our Movies</a></li>
										
					<li><a href="content_games.php">Our Games</a></li>
										
					<li><a href="content_music.php">Our Music</a></li>
										
					<li><a href="content_shows.php">Our Shows</a></li>
				</ul>
			</li>
							
			<li class="Employment-Nav"><a href="job_opportunities.php">Employment</a>
				<ul>
					<li><a href="job_opportunities_animation.php">Animation</a></li>
										
					<li><a href="job_opportunities_music_production.php">Music Production</a></li>
										
					<li><a href="job_opportunities_programming.php">Programming</a></li>
								
					<li><a href="job_opportunities_artist.php">Artist</a></li>
				</ul>
			</li>
					
			<li class="Contact-Us-Nav"><a href="contact_us.php">Contact Us</a></li>
		</ul>
	</nav>
</div>