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
    category = :cat
    WHERE id = :id
    ';
    // Prepares a query
    $stmt = $dbh->prepare($sql);
    // Connects form fields with db containers 
    $stmt->bindValue(':title', $_POST['title']);
    $stmt->bindValue(':description', $_POST['description']);
    $stmt->bindValue(':date', $_POST['date']);
    $stmt->bindValue(':cat', $_POST['category']);
    $stmt->bindValue(':id', $_POST['id']);
    // Sends query to database
    if ($stmt->execute()) 
    {
        header('Location: ../../index.php?action=updated');
        exit(); 
    }
} 
?>