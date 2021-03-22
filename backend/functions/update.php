<?php
// Checks whether the update button has been pressed 
if (isset($_POST['update'])) 
{
    // Creates a query 
    $sql = '
    UPDATE diy_events
    SET title = :title,
    description = :description,
    date = :date,
    category = :cat,
    image = :image
    WHERE id = :id
    ';

    $existing_image = $_POST['image_existing'];
    $file_changed = $_POST['check_file_changed'];

    //This is a function that upload the image to the images/ folder and returns bacl the path to store in the database
    //$file_save comes from 'backend/functions/upload-image.php'
    require('backend/functions/upload-image.php');
   
    if ($file_changed == 'no') {
        $image_path_to_save_in_db = $existing_image;
    } else {
        // if (file_exists($existing_image)) {
        //     unlink($existing_image); //Delete the old image file
        // }
        $image_path_to_save_in_db = $file_save;
    }

    // Prepares a query
    $stmt = $dbh->prepare($sql);
    // Connects form fields with db containers 
    $stmt->bindValue(':title', $_POST['title']);
    $stmt->bindValue(':description', $_POST['description']);
    $stmt->bindValue(':date', $_POST['date']);
    $stmt->bindValue(':cat', $_POST['category']);
    $stmt->bindValue(':id', $_POST['id']);
    $stmt->bindValue(':image', $image_path_to_save_in_db);
    // Sends query to database
    if ($stmt->execute()) 
    {
        header('Location: ../../index.php?action=updated');
        exit(); 
    }
} 
?>