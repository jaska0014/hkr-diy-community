<?php
    // Gets specific post from database
    $sql = 'SELECT * FROM `diy_events` WHERE category = \'food\'';
    $stmt = $dbh->prepare($sql);
    // Sends query to database
    $stmt->execute();
    // Adds all information about user to variable 
    $row = $stmt->fetch();
?>