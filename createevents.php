<?php
 // Opens database connection
 require_once 'assets/config/db.php';
 // Gets information from database
 require_once 'assets/functions/select.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DIY COMMUNITY</title>
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Font-Awesome Core CSS -->
  <link rel="stylesheet" href="assets/css/all.min.css">
  <!-- Custom styles -->
 <link rel="stylesheet" href="assets/css/album.css?<?php echo hash_file('md5',
'./css/album.css'); ?>">
  <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Noto Serif' rel='stylesheet' >
</head>
  

		
  <body> 
    
     <!-- JAVASCRIPT LÄNKAD, SKA LIGGA I BODY INTE I HEAD -->
    <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
  
    
<div class="container">
      <nav class="navbar fixed-top navbar-light bg-light">
      <div class= nav navbar-left>
			<a class="navbar-brand ml-5" href="index.php">
          <img src="assets/images/logo.png" height="100" alt="DIY logo">
        </a>
			<li class="nav-item mt-4">
        <a class="nav-link" href="DIY.php">DIY's</a>
      </li>
      <li class="nav-item mt-4">
        <a class="nav-link" href="events.php">Events</a>
      </li>
				</div>
				<div class="nav navbar-right mr-5">
				<button type="button" class="btn btn-primary btn-sm mr-3"data-toggle="modal" data-target="#signupModal"type="submit"><i class="far fa-heart mr-1"></i>JOIN US</button>
				<button type="button" class="btn btn-primary btn-sm mr-3" data-toggle="modal" data-target="#loginModal"type="submit "><i class="fas fa-sign-in-alt mr-1"></i>LOGIN</button>
				<button type="button" class="btn btn-primary btn-sm mr-3"type="submit"><i class="fas fa-search mr-1"></i>SEARCH</button>
      </nav>		
				</div>	
    
 <header class="create-event">
   <div class="boxed mt-5">
<h1>
  CREATE AN EVENT OR DIY
   </h1>
   <p>
     Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum <br>
   </p>
   </div>
</header>  
    
    <!-- FORM -->
    <form>
      <h2>
        Please fill out this form to publish your DIY or event!
      </h2>
    <form method="post">
     <div class="form-group ">
      <label class="control-label requiredField" for="name">
       Name your project!
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="name" name="name" placeholder="What do you want to call your project?" type="text"/>
      <span class="help-block" id="hint_name">
      </span>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="message">
       Description
       <span class="asteriskField">
        *
       </span>
      </label>
      <textarea class="form-control" cols="40" id="message" name="message" placeholder="Write a little about what the event or DIY will entail and what the participants will need to follow along. Add a link for the virtual meeting if its an event." rows="5"></textarea>
      <span class="help-block" id="hint_message">
      </span>
     </div>
     <div class="form-group ">
        <label class="control-label requiredField" for="select">
       Is this a virtual event or a DIY?
       <span class="asteriskField">
        *
       </span>
      </label>
       <select class="select form-control" id="select" name="select">
       <option value="Event">
        Event
       </option>
       <option value="DIY">
        DIY
       </option>
      </select>
     </div>
      <div class="form-group ">
        <label class="control-label requiredField" for="select">
       What category will it be?
       <span class="asteriskField">
      <select class="select form-control" id="select" name="select">
       <option value="Knitting">
        Knitting
       </option>
       <option value="Food">
        Food
       </option>
       <option value="Macrame">
        Macrame
       </option>
      </select>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="date">
       Date
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="number">
       Time of event
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="number" name="number" placeholder="00:00" type="text"/>
      <span class="help-block" id="hint_number">
      </span>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary" name="submit" type="submit">
        Create!
       </button>
      </div>
     </div>
    </form>   
      </form>
      
      <!-- LOGIN MODAL -->
    
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">        
        <div class="form-title text-left">
          <h4>Login</h4>
        </div>
        <div class="d-flex flex-column text-left">
          <form>
            <div class="form-group">
                   <label class="control-label requiredField" for="email1">
       EMAIL ADRESS
      </label>
              <input type="email" class="form-control" id="email1"placeholder="Your email address...">
            
            </div>
            <div class="form-group">
                  <label class="control-label requiredField" for="password1">
       PASSWORD
      </label>
              <input type="password" class="form-control" id="password1" placeholder="Your password...">
            </div>
            <button type="button" class="btn btn-primary btn-sm mr-3">Login</button>
          </form>
        </div>
         <img class="modal-image" src="assets/images/logo.png" height="100" alt="DIY logo">
      </div>
       <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Not a member yet? <a href="#a" class="nav-link"> Sign Up!</a></div>
      </div>
    </div>
     
  </div>
</div>
    
    
 <!-- LOGIN MODAL -->

    
    
 <!-- SIGNUP MODAL -->

    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">        
        <div class="form-title text-left">
          <h4>Sign Up</h4>
        </div>
        <div class="d-flex flex-column text-left">
          <form>
            <div class="form-group">
                   <label class="control-label requiredField" for="email1">
       EMAIL ADRESS
      </label>
              <input type="email" class="form-control" id="email1"placeholder="Your email address...">
            
            </div>
            <div class="form-group">
                  <label class="control-label requiredField" for="password1">
       PASSWORD
      </label>
              <input type="password" class="form-control" id="password1" placeholder="Your password...">
            </div>
            <button type="button" class="btn btn-primary btn-sm mr-3">Sign Up</button>
          </form>
        </div>
         <img class="modal-image" src="assets/images/logo.png" height="100" alt="DIY logo">
      </div>
       <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Already a member? <a href="#loginModal" class="nav-link"> Login</a></div>
      </div>
    </div>
     
  </div>
</div>
     <!-- SIGNUP MODAL -->
</body>
      
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
<!-- Footer -->
      
</html>