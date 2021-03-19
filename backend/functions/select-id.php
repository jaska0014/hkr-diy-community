<?php
    // Checks whether ID is available as GET 
    if (isset($_GET['id'])) 
    {
    // Gets specific post from database
    $sql = 'SELECT * FROM diy_events WHERE id = :id'; // Prepares a query
    $stmt = $dbh->prepare($sql);
    // Connects GET-variable with db containers 
    $stmt->bindValue(':id', $_GET['id']);
    // Sends query to database
    $stmt->execute();
    // Adds all information about user to variable 
    $row = $stmt->fetch();
} 
?>