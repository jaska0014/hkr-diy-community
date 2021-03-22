<?php
 require_once 'backend/config/db.php';
 require_once 'backend/functions/delete.php';
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
            
            // $('.datepicker').datepicker({
            //     format: 'dd/mm/yyyy',
            //     buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
            // });
            
        });

    </script>

</head>


<form action="remove.php" method="post">

    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="hidden" name="image_existing" value="<?php echo $row['image']; ?>">

    <div class="form-group">
        <p>Are you sure you want to delete this event?</p>
        <p><?php echo ucwords($row['title'] . ' ' . $row['description']); ?></p>
    </div>

    <button type="submit" class="btn btn-danger" name="delete"> 
        <i class="fas fa-trash-alt"></i> Delete
    </button>

    <a href="index.php" class="btn btn-secondary">
        <i class="fas fa-chevron-circle-left"></i> Cancel
    </a>
  

</form>