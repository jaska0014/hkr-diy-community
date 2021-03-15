<?php
 // Checks whether the registration button has been pressed
 if (isset($_POST['register'])) {
 // Creates a query
 $sql = '
 INSERT INTO users (firstname, lastname, email, password, regdate)
 VALUES (:firstname, :lastname, :email, :password, NOW())
 ';
 // Prepares a query
 $stmt = $dbh->prepare($sql);
 // Connects form fields with db containers
 $stmt->bindValue(':firstname', $_POST['firstname']);
 $stmt->bindValue(':lastname', $_POST['lastname']);
 $stmt->bindValue(':email', $_POST['email']);
 $stmt->bindValue(':password', $_POST['password']);
 // Sends query to database
 if ($stmt->execute()) {
 header('Location: ../../index.php?action=inserted');
 exit();
 }
 }
?>