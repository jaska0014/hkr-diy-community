<?php
  require_once 'backend/config/db.php';
  require_once 'backend/functions/select.php';
  require_once 'backend/includes/notifications.index.php'; 
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
  <link href='https://fonts.googleapis.com/css?family=Noto Serif' rel='stylesheet' >

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-ui.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    
			$(document).ready(function() {
				
        $("div.card-body a.delete").click(function() {
          alert("You clicked delete");
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
         <a href="add.php" type="submit" class="btn btn-primary btn-sm mr-3"> <i class="fa fa-plus mr-1"></i>CREATE </a>
      </nav>		
    </div>	
    
<header class="carousel-header">
<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="assets/images/flower.jpg" alt="First slide">
       <div class="carousel-text mb-5">
    <h5 class="card-text">HOMEMADE PASTA COURSE</h5>
  </div>      
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/knitting.jpg" alt="Second slide">
          <div class="carousel-text mb-5">
    <h5 class="card-text">HOMEMADE PASTA COURSE</h5>
  </div> 
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="assets/images/learning.jpg" alt="Third slide">
       <div class="carousel-text mb-5">
    <h5 class="card-text">HOMEMADE PASTA COURSE</h5>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</header> 
      
<br>

<?php
  // Checks if an action is set 
  if (isset($_GET['action'])) 
  {
    // Checks which action is set 
    switch ($_GET['action']) 
    {
      case 'inserted': echo '
        <div class="alert alert-success"> Posten har lagts till i databasen!
        </div> ';
      break;
      case 'updated': echo '
        <div class="alert alert-success"> Posten har uppdaterats i databasen!
        </div> ';
      break;
      case 'deleted': echo '
        <div class="alert alert-danger"> Posten har raderats från databasen!
        </div> ';
      break;
    } 
  }
?>

<div class="upcoming-events mt-5">

  <h4>UPCOMING EVENTS</h4>
  <br>

  <div class="my-card-scrollable">
  
      <?php
        if ($stmt_upcoming->rowCount() > 0) 
        {
          while ($row = $stmt_upcoming->fetch()) {
            echo "<div class='card card-event' style='min-width: 18rem ;width: 18rem; height: 18rem;'>";
            echo "<img src='assets/images/".$row['image']."'class='card-img-top' alt='green'>";
            echo "<a href='edit.php?id=".$row['id']."' class='update btn btn-sm btn-primary'>Update</a>";
            echo "<a href='delete.php?id=".$row['id']."' class='delete btn btn-sm btn-danger'>Delete</a>";
            echo "<div class='card-body'>";
            echo "<p class='card-text'>".strtoupper($row['title'])."</p>";
            echo "<p class='card-under'>Starts on ".date_format(date_create($row['date']),"Y/m/d")."</p>";
            echo "</div>";
            echo "</div>";
          }
        } 
        else {
            echo "<div class='card card-event' style='width: 18rem;'>";
            echo "<img src='assets/images/none.jpg'class='card-img-top' alt='green'>";
            echo "<div class='card-body'>";
            echo "<p class='card-text'>Nothing found?</p>";
            echo "</div>";
            echo "</div>";
        }
      ?>
  <br>
  </div>

</div>
       
<div class="upcoming-events">

  <h4>RECENT EVENTS</h4>
  <br>

  <div class="my-card-scrollable">
   
      <?php
        if ($stmt_past->rowCount() > 0) 
        {
          while ($row = $stmt_past->fetch()) {
            echo "<div class='card card-event' style='min-width: 18rem ;width: 18rem; height: 18rem;'>";
            echo "<img src='assets/images/".$row['image']."'class='card-img-top' alt='green'>";
            echo "<a href='edit.php?id=".$row['id']."' class='update btn btn-sm btn-primary'>Update</a>";
            echo "<a href='delete.php?id=".$row['id']."' class='delete btn btn-sm btn-danger'>Delete</a>";
            echo "<div class='card-body'>";
            echo "<p class='card-text'>".strtoupper($row['title'])."</p>";
            echo "<p class='card-under'>Starts on ".date_format(date_create($row['date']),"Y/m/d")."</p>";
            echo "</div>";
            echo "</div>";
          }
        } 
        else {
            echo "<div class='card card-event' style='width: 18rem;'>";
            echo "<img src='assets/images/none.jpg'class='card-img-top' alt='green'>";
            echo "<div class='card-body'>";
            echo "<p class='card-text'>Nothing found?</p>";
            echo "</div>";
            echo "</div>";
        }
      ?>
  </div>
  <br>

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
 <div action="add.php" method="post" class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                   <label class="control-label requiredField" for="email">
       EMAIL ADRESS
      </label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Your email address...">
            
            </div>
            <div class="form-group">
                  <label class="control-label requiredField" for="password">
       PASSWORD
      </label>
              <input type="text" class="form-control" id="password" name="password" placeholder="Your password...">
            </div>
            <input href="add.php" type="submit" class="btn btn-primary btn-sm mr-3" value="Sign Up" name="register">
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