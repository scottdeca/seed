<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Seed | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/jquery.mobile.custom.structure.css" />
    <script src="js/vendor/modernizr.js"></script>
    
	<script type="text/javascript" src="//use.typekit.net/sqw4kfi.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
  </head>
  <body>
  
    <div data-role="page" id="home"> <!-- jQuery Mobile suggested page wrapper -->
      
      <?php include("parts/topbar.php"); ?>
    
    	<a name="about"></a>
    	<?php include("parts/intro.php"); ?>
    	
    	<div id="desktop-only" class="hide-for-small-only">
    		
    		<a name="our-people"></a>
    		<?php include("parts/our-people.php"); ?>
    		
    		<a name="events"></a>
    		<?php include("parts/events.php"); ?>
    		
    		<a name="join-us"></a>
    		<?php include("parts/join-us.php"); ?>
    		
    		<a name="blog"></a>
    		<?php include("parts/blog.php"); ?>
    		
    		<a name="contact-us"></a>
    		<?php include("parts/contact-us.php"); ?>
    		
    	</div> <!-- #desktop-only ends -->
    	
    	<?php include("parts/mobile-nav.php"); ?>
    	
    	<?php include("parts/footer.php"); ?>
    
    </div> <!-- data-role="page" ends -->
    
    <!-- Scripts -->
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/vendor/jquery.mobile.custom.min.js"></script>
    <script>$(document).foundation();</script>
    
  </body>
</html>
