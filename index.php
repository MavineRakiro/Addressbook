<?php include('core/init.php'); ?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Address Book</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
		<div class="large-6 columns">
			<h1>Address Book</h1>
		</div>
		<div class="large-6 columns">
			<a class="add-btn button right small" data-reveal-id="addModal">Add Contact</a>
			<div id="addModal" class="reveal-modal" data-reveal>
				<h2>Add your Contact</h2>
				<form id="addContact" action="/add_contact.php" method="post">
						  <div class="row">
							<div class="large-6 columns">
							  <label>First Name
								<input name="first_name" type="text" placeholder="Enter First Name" />
							  </label>
							</div>
							 <div class="large-6 columns">
							  <label>Last Name
								<input name="last_name" type="text" placeholder="Enter Last Name" />
							  </label>
							</div>
						  </div>
						  <div class="row">
							<div class="large-4 columns">
							  <label>Email
								<input name="email" type="email" placeholder="Enter Email Address" />
							  </label>
							</div>
							<div class="large-4 columns">
							  <label>Phone Number
								<input name="phone" type="text" placeholder="Enter Phone Number" />
							  </label>
							</div>

						  <div class="row">
							<div class="large-4 columns">
							  <label>Country
								<input name="Country" type="text" placeholder="Enter Country" />
							  </label>
							</div>
							</div>
							<div class="row">
							<div class="large-6 column">
							  <label>Address
								<input name="Address" type="text" placeholder="Enter Address" />
							  </label>
							</div>
						  </div>
						
						  <input name="submit" type="submit" class="add-btn button right small" value="Submit">
							<a class="close-reveal-modal">&#215;</a>
						</form>
			</div>
		</div>
	</div>
    
	<!-- Loading Image -->
	<div id="loaderImage">
		<img src="img/ajax-loader.gif">
	</div>
	
	<!-- Main Content -->
	<div id="pageContent"></div>
	
    <script src="js/vendor/jquery.js"></script>
	<script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
