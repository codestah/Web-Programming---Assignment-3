<!DOCTYPE html>
<html>

<head> 
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-9">
  	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />  
 
 	<title>Movies</title>

  	<link rel="stylesheet" type="text/css" href="css/screen_style.css" />
  	<link rel="stylesheet" type="text/css" href="css/screen_layout_large.css" />
	<link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:500px)" href="css/screen_layout_small.css" />
	<link rel="stylesheet" type="text/css" media="only screen and (min-width:501px) and (max-width:900px)" href="css/screen_layout_medium.css" />
	
	<!-- This is the Google CDN Script for JQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>

	<div class="page">

		<header>
			<a class="members" href="#" onclick="return false">Log in / Register</a>
		</header>







<!--  Contact Page Container  -->
<div class="contactcontainer">
	<h3>Please get in contact, we'd love to hear from you!</h3>

<!--  Contact Form  -->
	<form action="http://titan.csit.rmit.edu.au/~e54061/wp/form-tester.php" method="post">

		<label class="label">Name: </label><br>
		<input type="text" name="name" required><br>

		<label>Email: </label><br>
		<input type="text" name="email" required><br>

			<select name="subject">
		    	<option>General Enquiry</option>
		    	<option>Group and Corporate Bookings</option>
		    	<option>Suggestions and Complaints</option>                            
			</select><br><br>

		<textarea name="message" rows="10" cols="30" placeholder="Write message here..." required></textarea><br>
		<input name="submit" type="submit" value="Submit"><br><br>

		<label>Check this box to test if the email submitted is responding.</label><br>
		<input type="checkbox" name="test-email" value="true" />
	</form>
</div>







		<nav>
			<a href="index.html">Home</a>
			<a href="error404.html">3D Cinema</a>
            <a href="movies.html">Movies</a>
            <a href="error404.html">Rewards</a>
            <a class="onPage" href="contact.html">Contact</a>
		</nav>




		<footer>

			<p>&copy; Silverado Cinemas<br>
				100 Main Street, 
				Whoop Whoop<br>
				VIC 3000<br>
				0398 4567 9834<br>
				Site Design: Peta Costello s3465614</p>

			<a href="http://validator.w3.org/check?uri=referer"><img style="border:0;height:31px"
      		src="http://www.w3.org/html/logo/downloads/HTML5_Logo_32.png" alt="HTML Validator" /></a>
      
      		<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0; height:31px"
      		src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Validator"/></a>


		</footer>



	</div><!-- End Page -->
<script type="text/javascript" src="js/myScript.js"></script>
<script type="text/javascript" src="js/bookingForm.js"></script>
</body>
</html>