<?php
 require_once 'backend/config/db.php';
 require_once 'backend/functions/update.php';
 require_once 'backend/functions/select-id.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit your event</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto Serif' rel='stylesheet' >

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function() {
            
            $('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
            });

            $("#customFile").change(function (){
              var fileName = $(this).val();
              $('#check_file_changed').val('yes');
            });

        });

    </script>

</head>


<form action="edit.php" method="post" enctype="multipart/form-data">
	
  <h2>Edit an existing event</h1>
  
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <input type="hidden" name="image_existing" value="<?php echo $row['image']; ?>">
	<input type="hidden" name="check_file_changed" id="check_file_changed" value="no">

  <div class="form-group">
    <label for="exampleFormControlInput1">Event Title:</label>
    <input id="title" name="title" class="form-control" placeholder="name your event" required
    value="<?php echo $row['title']; ?>"
    >
  </div>
	
  <div class="form-group">
    <label for="category">Event Category:</label>
    <select name="category" class="form-control" id="category" required
    value="<?php echo $row['category']; ?>"
    >
			<option value="food"<?php if ($row['category'] == 'food') echo ' selected="selected"'; ?>>Food</option>
      <option value="craft"<?php if ($row['category'] == 'craft') echo ' selected="selected"'; ?>>Craft</option>
      <option value="beauty"<?php if ($row['category'] == 'beauty') echo ' selected="selected"'; ?>>Beauty</option>
      <option value="knitting"<?php if ($row['category'] == 'knitting') echo ' selected="selected"'; ?>>Knitting</option>
      <option value="art"<?php if ($row['category'] == 'artS') echo ' selected="selected"'; ?>>Art</option>
    </select>
  </div>
	
	<div class="form-group"> 
		<label for="date">Event Date:</label>
    <input name="date" id="date" class="datepicker form-control" data-date-format="mm/dd/yyyy" placeholder="add the date of your event" required
    value="<?php echo $row['date']; ?>"
    >
	</div>
	
	<div class="form-group">
			<label for="description">Event Description:</label>
      <textarea id="description" name="description" class="form-control" rows="3" required>
      <?php echo trim($row['description']); ?>
      </textarea>
	</div>

  <div class="form-group">  
    <label for="customFile">Current Image - <?php echo $row['image']; ?></label>
    <input type="file" class="form-control" id="customFile" name="image">
  </div>
		
	<button class="btn btn-primary" name="update" type="submit">
    <i class="fas fa-pencil-alt"></i> Update
  </button>

  <a href="index.php" class="delete btn btn-sm btn-primary">Cancel</a>
</form>

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