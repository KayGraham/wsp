<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> <html
xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title>My Miracle TV</title>
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<META 
content='HOME - MyMiracleTV.org: "TV-Shows where GOD Speaks the Language of Real MIRACLES" Bringing your marketing &amp; PR strategy into focus' 
property="og:title">
<META content=website property="og:type">
<META 
content='MyMiracleTV.org: "TV-Shows where GOD Speaks the Language of Real MIRACLES" Bringing your marketing &amp; PR strategy into focus' 
property="og:site_name">
<META content=&amp;nbsp; property="og:description">
<META content=http://cdn.initial-website.com/s/img/cc/icons/blank.gif 
property="og:image">
<META name=description content=&amp;nbsp;>
<META name=language content=en>
<link rel="stylesheet" type="text/css" href="main.css" /> 
<link rel="shortcut icon" href="favicon.ico"> 
<link rel="icon" type="image/gif" href="favicon.ico"> 
</head>
<body>

<?php
			
			
			
		if ($_POST['signupbtn']) {
			$getuser2 = $_POST['getuser2'];
			$getemail2 = $_POST['getemail2'];
			$getnumber2 = $_POST['getnumber2'];
			$draudu = 'KayGraham123@gmail.com';
			
			if ( (strlen($getemail2) >= 7) && (strstr($getemail2, "@")) && (strstr($getemail2, ".") ) ){
													
					$site = "http://mymiracletv.org";
					$webmaster = "MyMiracleTV.org";
					$headers = "From: $webmaster";
					$subject = "A NEW user has just Signed Up!";
					$message = "A new user has just Signed Up for a copy of Believers that Make the Devils Nervous.\n ";
					$message .= "Name: $getuser2\n";
					$message .= "Email: $getemail2\n";
					$message .= "Phone Number: $getnumber2\n";
					
													
							if (mail($draudu, $subject, $message, $headers) ){
								$errormsg = "Thank You";
								$getuser2 = '';
								$getemail2 = '';
								$getnumber2 = '';
								
													}
													else
														$errormsg = "An error has occured.";
													
												
			}
				else
					$errormsg = "You must enter a valid email address.";
			} 
				
				
			$form = "<form action='./index.php' method='post'>
			<table>
			<tr>
				<td>Name:</td>
			</tr>
			<tr>
				<td><input type='text' name='getuser2' value='$getuser2' /></td>
			</tr>
			<tr>
				<td>Email:</td>
			</tr>
			<tr>
				<td><input type='text' name='getemail2' value='$getemail2' /></td>
			</tr>
			<tr>
				<td>Phone Number:</td>
			</tr>
			<tr>
				<td><input type='text' name='getnumber2' value='$getnumber2' /></td>
			</tr>
			<tr>
				<td><input type='submit' name='signupbtn' value='Submit' /></td>
			</tr>
			</table>
			</form>";	
			
			echo $form;
			echo $errormsg;
		
			
			
			?>
			
			</body>