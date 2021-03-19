<?php
 require_once 'backend/config/db.php';
 require_once 'backend/functions/update.php';
 require_once 'backend/functions/select-id.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Test form</title>

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
            
        });

    </script>

</head>


<form action="backend/functions/update.php" method="post">
	
  <h2>Edit an existing event</h1>
  
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
	
  <div class="form-group">
    <label for="exampleFormControlInput1">Event Title:</label>
    <input id="title" name="title" class="form-control" placeholder="name your event" required
    value="<?php echo $row['title']; ?>"
    >
  </div>
	
  <div class="form-group">
    <label for="exampleFormControlSelect1">Event Category:</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1" required
    value="<?php echo $row['category']; ?>"
    >
			<option>food</option>
      <option>craft</option>
      <option>beauty</option>
      <option>knitting</option>
      <option>art</option>
    </select>
  </div>
	
	<div class="form-group"> 
		<label for="inputDate">Event Date:</label>
    <input name="date" id="inputDate" class="datepicker form-control" data-date-format="mm/dd/yyyy" placeholder="add the date of your event" required
    value="<?php echo $row['date']; ?>"
    >
	</div>
	
	<div class="form-group">
			<label for="description">Event Description:</label>
      <textarea id="description" name="description" class="form-control" rows="3" required
      value="<?php echo $row['description']; ?>"
      ></textarea>
	</div>
		
	<button class="btn btn-primary" name="update" type="submit">
    <i class="fas fa-pencil-alt"></i> Update
  </button>

  <a href="index.php" class="delete btn btn-sm btn-primary">Cancel</a>
</form>