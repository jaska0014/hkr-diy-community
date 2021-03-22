<?php
 // Checks whether the registration button has been pressed
 if (isset($_POST['create'])) 
 {
    $sql = "
    INSERT INTO `diy_events` (`title`, `description`, `date`, `image`,`category`)
    VALUES (:title, :description, :date, :image, :cat)
    ";

    //This is a function that upload the image to the images/ folder and returns bacl the path to store in the database
    //$file_save comes from 'backend/functions/upload-image.php'
    require('backend/functions/upload-image.php');
    $image_path_to_save_in_db = $file_save;

    // Prepares a query
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':title', $_POST['title']);
    $stmt->bindValue(':description', $_POST['description']);
    $stmt->bindValue(':date', $_POST['date']);
    $stmt->bindValue(':cat', $_POST['category']);
    //$stmt->bindValue(':image', 'none.jpg');
    $stmt->bindValue(':image', $image_path_to_save_in_db);
    
    // Sends query to database
    if ($stmt->execute()) {
        header('Location: ../../index.php?action=inserted');
        exit(); 
    }

}
?>