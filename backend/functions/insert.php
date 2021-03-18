<?php
 // Checks whether the registration button has been pressed
 if (isset($_POST['create'])) 
 {
    $sql = "
    INSERT INTO `diy_events` (`title`, `description`, `date`, `image`,`category`)
    VALUES (:title, :description, :date, :image, :cat)
    ";

    // Prepares a query
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':title', $_POST['title']);
    $stmt->bindValue(':description', $_POST['description']);
    $stmt->bindValue(':date', $_POST['date']);
    $stmt->bindValue(':image', 'none.jpg');
    $stmt->bindValue(':cat', $_POST['category']);
    
    // Sends query to database
    if ($stmt->execute()) {
        header("location: ../index.php?action=inserted");
        exit();
    }
 }
?>