<?php
 // Opens database connection
 require_once 'assets/config/db.php';
 // Gets information from database
 require_once 'assets/functions/insert.php';
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
  <!-- Custom styles -->
 <link rel="stylesheet" href="assets/css/album.css?<?php echo hash_file('md5',
'assets/css/album.css'); ?>">
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
				
			});
	</script>
</head>


<form action="assets/functions/insert.php" method="post">
	
	<h2>Add a new event</h1>
	
  <div class="form-group">
    <label for="exampleFormControlInput1">Event Title:</label>
    <input name="title" class="form-control" id="exampleFormControlInput1" placeholder="name your event" required>
  </div>
	
  <div class="form-group">
    <label for="exampleFormControlSelect1">Event Category:</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1" required>
			<option>food</option>
      <option>craft</option>
      <option>beauty</option>
      <option>knitting</option>
      <option>art</option>
    </select>
  </div>
	
	<div class="form-group"> 
		<label for="inputDate">Event Date:</label>
		<input name="date" id="inputDate" class="datepicker form-control" data-date-format="mm/dd/yyyy" placeholder="add the date of your event" required>
	</div>
	
	<div class="form-group">
			<label for="exampleFormControlTextarea1">Event Description:</label>
			<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
	</div>
		
	<button class="btn btn-primary" name="create" type="submit">Save</button>
</form>