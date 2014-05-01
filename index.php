<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Seed | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/jquery.mobile-1.4.2.css" />
    <script src="js/vendor/modernizr.js"></script>
    
	<script type="text/javascript" src="//use.typekit.net/sqw4kfi.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
  </head>
  <body>
	<div data-role="page" id="home">
	    
	    <?php include("parts/topbar.php"); ?>
		
		<div id="intro">
	
			<h1 class="intro-statement">Join Toledo’s original cowork community and rub elbows with some of the brightest innovators in the region.</h1>
			
			<img src="http://placehold.it/640x600" class="show-for-small-only" alt="Welcome to seed" />
			
			<ul class="intro-slider hide-for-small-only" data-orbit>
			  <li>
			    <img src="http://placehold.it/1600x456" alt="slide 1" />
			    <ul class="orbit-caption">
			    	<li class="name">Name</li>
			    	<li class="job">Job</li>
			    	<li class="membership">Member since</li>
			    </ul>
			  </li>
			  <li>
			    <img src="http://placehold.it/1600x456" alt="slide 2" />
			    <ul class="orbit-caption">
			    	<li class="name">Name</li>
			    	<li class="job">Job</li>
			    	<li class="membership">Member since</li>
			    </ul>
			  </li>
			  <li>
			    <img src="http://placehold.it/1600x456" alt="slide 3" />
			    <ul class="orbit-caption">
			    	<li class="name">Name</li>
			    	<li class="job">Job</li>
			    	<li class="membership">Member since</li>
			    </ul>
			  </li>
			</ul>
			
		</div>
		
	<div class="lets-connect hide-for-small-only">
		<p>Seed Coworking is a for designers, developers and other independent contractors — or anyone who needs a professional work environment that isn’t your typical office.</p>
		<p>Let’s connect!</p>
		<input type="email" name="email">
		<button>Contact Me</button>
	</div>
		
		<div id="desktop-only" class="hide-for-small-only">
		
			<!-- <?php include("parts/our-people.php"); ?> -->
			
			<?php include("parts/events.php"); ?>
			
			<?php include("parts/join-us.php"); ?>
			
			<?php include("parts/blog.php"); ?>
			
			<?php include("parts/contact-us.php"); ?>
			
		</div> <!-- #desktop-only ends -->
		
		<div id="mobile-only" class="show-for-small-only">
			<ul class="mobile-nav no-bullet">
				<li class="our-people">
					<!-- <a href="#our-people"> -->
					<a href="pages/our-people.php" data-transition="slide" data-prefetch="true">
						<h2>Our People</h2>
						<p>Meet the folks who put "unity" in community.</p>
					</a>
				</li>
				<li class="events">
					<a href="#our-people">
						<h2>Events</h2>
						<p>Meet the folks who put "unity" in community.</p>
					</a>
				</li>
				<li class="join-us">
					<a href="#our-people">
						<h2>Join Us</h2>
						<p>Meet the folks who put "unity" in community.</p>
					</a>
				</li>
				<li class="blog">
					<a href="#our-people">
						<h2>Blog</h2>
						<p>Meet the folks who put "unity" in community.</p>
					</a>
				</li>
				<li class="contact-us">
					<a href="#our-people">
						<h2>Contact Us</h2>
						<p>Meet the folks who put "unity" in community.</p>
					</a>
				</li>
			</ul>
				
		</div> <!-- mobile-only -->
		
		<!--
		<div data-role="page" id="our-people" class="mobile-page">
			<div data-role="header"><?php include("parts/mobile-sub-nav.php"); ?></div>
			<div role="main" class="ui-content"><?php include("parts/our-people.php"); ?></div>
			<div data-role="footer"><?php include("parts/footer.php"); ?></div>
		</div>
		
		<div data-role="page" id="events" class="mobile-page">
			<div data-role="header"><?php include("parts/mobile-sub-nav.php"); ?></div>
			<div role="main" class="ui-content"><?php include("parts/events.php"); ?></div>
			<div data-role="footer"><?php include("parts/footer.php"); ?></div>
		</div>
		-->
		
		<footer>
			<form>
				<div class="row collapse">
					<p><b>Stay connected.</b><br />Sign up for our newsletter, <b><i>Dripfeed</i></b>™</p>
					<div class="small-7 columns">
						<input type="email" placeholder="Your email address" name="email" />
					</div>
					<div class="small-5 columns">
						<a href="#" class="postfix radius">Sign me up</a>
					</div>
				</div>
			</form>
			
			<p class="copyright">Copyright ® Seed Coworking LLC. <br class="show-for-small-only" /><a href="#">Privacy & Terms.</a></p>
		</footer>
		
		
		</div> <!-- data-role="page" ends -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.js"></script>
    <!-- <script src="js/vendor/jquery.mobile.custom.min.js"></script> -->
    <script src="js/vendor/jquery-center-vertical.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
