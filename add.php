<?php
 require_once 'backend/config/db.php';
 require_once 'backend/functions/insert.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Test form</title>
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
  <!-- Font-Awesome Core CSS -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Noto Serif' rel='stylesheet' >
   <link rel="icon" type="image/x-icon" href="http://projektarbete-kldnoren.codeanyapp.com/assets/images/logo.png" />

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">

			$(document).ready(function() {

				$('.datepicker').datepicker({
					dateFormat:"yy-mm-dd",
          buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
				});

			});
	</script>
</head>
<body>

    <!-- NAV -->
	<div class="container">
      <nav class="navbar fixed-top navbar-light bg-light">
      <div class= nav navbar-left>
			<a class="navbar-brand ml-5" href="index.php">
          <img src="assets/images/logo.png" height="100" alt="DIY logo">
        </a>
			<li class="nav-item mt-4">
        <a class="nav-link" href="#popup1">DIY's</a>
      </li>
      <li class="nav-item mt-4">
        <a class="nav-link" href="events.php">Events</a>
      </li>
				</div>
				<div class="nav navbar-right mr-5">
				<button type="button" class="btn btn-primary btn-sm mr-3"data-toggle="modal" data-target="#signupModal"type="submit"><i class="far fa-heart mr-1"></i>JOIN US</button>
				<button type="button" class="btn btn-primary btn-sm mr-3" data-toggle="modal" data-target="#loginModal"type="submit "><i class="fas fa-sign-in-alt mr-1"></i>LOGIN</button>
				<a href="#popup1" class="btn btn-primary btn-sm mr-3"type="submit"><i class="fas fa-search mr-1"></i>SEARCH</a>
         <a href="add.php" type="submit" class="btn btn-primary btn-sm mr-3"> <i class="fa fa-plus mr-1"></i>CREATE </a>
      </nav>
    </div>
     <header class= "create-event">
   <div class="boxed mt-3">
<h1>
 CREATE AN EVENT
   </h1>
   </div>
</header>

<form action="add.php" method="post" enctype="multipart/form-data">

	<h2>ADD A NEW EVENT</h1>

  <div class="form-group">
    <label for="exampleFormControlInput1">Event Title:</label>
    <input id="title" name="title" class="form-control" placeholder="Name your event" required>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Event Category:</label>
    <select id="category" name="category" class="form-control" required>
			<option> Food</option>
      <option> Craft</option>
      <option> Beauty</option>
      <option> Knitting</option>
      <option> Art</option>
    </select>
  </div>

	<div class="form-group">
		<label for="inputDate">Event Date:</label>
		<input name="date" id="date" class="datepicker form-control" placeholder="add the date of your event" required>
	</div>

	<div class="form-group">
			<label for="description">Event Description:</label>
			<textarea id="description" name="description" class="form-control" rows="3" required></textarea>
	</div>

  <div class="form-group">
    <label for="customFile">Upload a picture</label>
    <input type="file" class="form-control" rows="3" id="customFile" name="image" required>
  </div>

  <button class="btn btn-primary" name="create" type="submit">Save</button>
  <a href="index.php" class="btn btn-primary" name="cancel" type="button">Cancel</a>
</form>

<br>

<?php
  require_once 'backend/includes/notifications.upload.php';
?>

	       <!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">
  
  <!-- Footer Links -->
  <div class="container text-center text-md-left">
 
    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">
       <!-- Grid column -->
      
      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">DIY COMMUNITY</h6>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">GET TO KNOW US</h6>
        <p>
          <a class="footer-link" href="#!">About</a>
        </p>
        <p>
          <a class="footer-link" href="#!">Contact Us</a>
        </p>
        <p>
          <a class="footer-link" href="#!">FAQ's</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful Links</h6>
        <p>
          <a class="footer-link" href="#!">Your Account</a>
        </p>
        <p>
          <a class="footer-link" href="#!">Lorem</a>
        </p>
        <p>
          <a class="footer-link" href="#!">Help</a>
        </p>
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <a href="index.php">
          <img class="footer-logo" src="assets/images/DIY.png" height="200" alt="DIY logo">
        </a>
      </div>
       
      </div>
      <!-- Grid column -->

    </div>
</footer>
