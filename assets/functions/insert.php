<?php
 // Checks whether the registration button has been pressed
 if (isset($_POST['create'])) {
 // Creates a query
 $sql = '
 INSERT INTO `diy_events` (`title`, `description`, `date`, `image`) VALUES
 VALUES (:title, :description, :date, :image)
 ';
 // Prepares a query
 $stmt = $dbh->prepare($sql);
 // Connects form fields with db containers
 $stmt->bindValue(':title', $_POST['title']);
 $stmt->bindValue(':description', $_POST['description']);
 $stmt->bindValue(':date', $_POST['date']);
 $stmt->bindValue(':image', $_POST['image']);
 // Sends query to database
 if ($stmt->execute()) {
 header('Location: ../../index.php?action=inserted');
 exit();
 }
 }
?>