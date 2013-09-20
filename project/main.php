<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>The Fog</title>
	<meta name="description" content="The Fog Home Page">
	<meta name="author" content="The Fog">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	<script src="js/modernizr-2.6.2.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
</head>

<body>
	<div class="container">
		<header class="grid_12">
			<section class="grid_6" >
			  <article>
					<a href="index.php" >
					<section class="img"><img src="images/logo.png" alt="Water Services LTD Logo" /></section>
					</a>
				</article>
			</section>
			<div class="grid_4">
				<nav class="clearfix">
					<ul class="clearfix">
						<li class="current"><a href="index.php">Home</a></li>
						<li><form id="form1" name="_xclick" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="sherribjackson@att.net">
<input type="submit" value="" class="button" />
<input type="hidden" name="display" value="1">
</form></li>
<li><a href="contact.php">Contact</a></li>
					</ul>
					<a href="#" id="pull">Menu</a>
				</nav>
			</div>
		</header>
	</div>
	<div class="container">
		<section class="maincontent grid_12">
				<article>
					<h2>The F. O. G.</h2>
				</article>
			<article>
				<section class="grid_9 alpha" >
						<img src="images/home.png" alt="The Fog TShirt" />
				</section>
				<section class="grid_3 omega" >
						Join Our Newsletter!
						
			
			
			<?php
			
		if ($_POST['signupbtn']) {
			$getemail2 = $_POST['getemail2'];
			$draudu = 'KayGraham123@gmail.com';
			
			if ( (strlen($getemail2) >= 7) && (strstr($getemail2, "@")) && (strstr($getemail2, ".") ) ){
													
					$site = "http://themistyfog.com";
					$webmaster = "TheMistyFog.com";
					$headers = "From: $webmaster";
					$subject = "A NEW user has just Signed Up!";
					$message = "A new user has just Signed Up for The Fog Newsletter.\n ";
					$message .= "Email: $getemail2\n";
					
													
							if (mail($draudu, $subject, $message, $headers) ){
								$errormsg = "Thank You<br>";
								$getemail2 = '';
								
													}
													else
														$errormsg = "<section class='error'>An error has occured.<br></section>";
													
												
			}
				else
					$errormsg = "<section class='error'>You must enter a valid email address.<br></section>";
			} 
				
				
			$form = "<form action='./main.php' method='post'>
			<section class='signup'><input type='text' name='getemail2' value='$getemail2' placeholder='Email Address'/></section>
			<section class='signup'><input type='image' name='signupbtn' value='Submit' src='images/signup.png' alt='Sign Up'/></section>
			</form>";	
			
			echo $form;
			echo $errormsg;
			?>
					
						<p>Follow Us:<br>
						<a href="http://facebook.com/pages/Misty-Fog/614707801882913?ref=hl" target="_blank"><img src="images/facebook.png" alt="The Fog Facebook" /></a>
						<a href="http://twitter.com/sbjfog" target="_blank"><img src="images/twitter.png" alt="The Fog Twitter" /></a>
						</p>
				</section>
				<section class="grid_9 suffix_3">
					<p>The fog is being blessed in the mist,
					above and beyond others. The Heavenly Father if partial to
					those who obey His commands; Giving them special portions in
					large servings of everything that’s good in life. The FOG! Get in
					it!</p>
				</section>
				<section class="grid_2 alpha suffix_1 prefix_1 women">
						<p><a href="product_adult.php"><img src="images/women.png" alt="Women" /></a></p>
				</section>
				<section class="grid_2 suffix_1">
						<p><a href="product_adult.php"><img src="images/men.png" alt="Men" /></a></p>
				</section>
				<section class="grid_2 omega">
					<p><a href="product_youth.php"><img src="images/kids.png" alt="Kids" /></a></p>
				</section>
			</article>
		</section>
		<footer class="footercontent grid_12">
			<section class="grid_8 "><p>Copyright &copy; 2013 TheMistyFog.com</p></section>
			<section class="grid_3" ><p><a href="faq.php">FAQs</a> |
			    <a href="about.php">About</a> |
			<a href="contact.php"> Contact</a></p></section>
		
		</footer>
	</div><!-- .container -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>