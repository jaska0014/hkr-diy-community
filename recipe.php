<?php
  require_once 'backend/config/db.php';
  require_once 'backend/functions/select-food.php';
?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="utf-8">
  <title>DIY COMMUNITY</title>

  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
 <link rel="icon" type="image/x-icon" href="http://projektarbete-kldnoren.codeanyapp.com/assets/images/logo.png" />
  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-ui.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    
			$(document).ready(function() {
				
				
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
    
 <header class= "salmonforfour">
   <div class="boxed mt-5">
<h1>
 SALMON FOR 4
   </h1>
   </div>
   <br><br>
      <br><br>
  <img src="thisisme2.jpg" class="rounded-circle" alt="Cinque Terre" width="50" height="50"> 
               <img src="thisisme2.jpg" class="thisisme" alt="thisisme" width="70" height="70">

   
</header>  
     <br>
       <ul class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li><a href="events.php">Events</a></li>
        <li><a href="food.php">Food</a></li>
  <li>Salmon for 4</li>
</ul>
    
<?php
  require_once 'backend/includes/notifications.index.php'; 
?>




  <div class="my-card-scrollable">
   
</div>
    
       <div class="container"> 

    <div class=""style="width:100%;height:300px;background-color:#f9f9f9;margin-bottom:20px;" >
      <h4>
        <br>
        SALMON FOR 4
      </h4>
      <br>
      <button type="button" class="btn btn-sm btn-outline-dark">#FOOD #PESCETARIAN</button>
<button type="button" class="btn btn-sm btn-outline-dark">STARTS IN: 3H55M</button>
<button type="button" class="btn btn-sm btn-outline-dark">I WANNA JOIN!!!</button>
<br>
      <p>
        <br>
         Hi! my name is Jennifer and on thursday I´m going to teach you how to make a delicous salmon meal for 4 people. <br>
        The perfect dish to make on your next dinner for friends or family. Below I will list the items you need to join <br>
        this event. If you have any questions before the event you can reach me at kontakt.jennifer@hotmail.com. <br>
        Hope to see you on thursday! Have a lovely week until then.
      </p>
      </div>

    </div>
       <div class="container"> 

    <div class=""style="width:100%;height:450px;background-color:#f9f9f9;margin-bottom:20px;" >
       <h4>
         <br>
WHAT YOU WILL NEED: </h4>
<p>
   1 pound (500 g) fingerling potatoes halved (or Yukon golds or halved white/red baby potatoes) <br>
2 tablespoons olive oil <br>
1 1/2 teaspoons salt, divided<br>
1/2 teaspoon cracked black pepper, divided <br>
4 (6 oz | 170 g) skinless salmon fillets <br>
2 1/2 tablespoons minced garlic, divided <br>
2 tablespoons fresh chopped parsley <br>
1/3 cup freshly squeezed lemon juice <br>
1/2 cup melted unsalted butter <br>
3 bunches asparagus, (18 spears, woody ends removed) <br>
2 tablespoons dry white wine (substitute with 1/4 cup low-sodium chicken broth) <br>
      1 lemon sliced to garnish <br>
      </p>
      <button type="button" class="btn btn-sm btn-outline-dark">JOIN EVENT NOW!</button>
    </div>

    </div>
    
     <!-- UNDER CONSTRUCTION MODAL -->
       <div id="popup1" class="overlay">
	<div class="popup">
		<h4>THIS WEBSITE IS UNDER CONSTRUCTION</h4>
		<a class="close" href="#">&times;</a>
		<div class="content">
			We are a work in progress and hope to have this function<br>
      up and running in no time!
		</div>
	</div>
    </div>
    
  
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
        <p>A community of crafters connecting virtually.</p>
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
          <a class="footer-link" href="add.php">Create Event</a>
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
    </div>
</footer>
</html>
