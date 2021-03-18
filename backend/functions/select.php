<?php
    //Get upcoming events
    //NOTE - In real life we would add a WHERE statement to be > today()
    $sql_upcoming = 'SELECT * FROM diy_events order by date DESC limit 8';
    $stmt_upcoming = $dbh->prepare($sql_upcoming);
    $stmt_upcoming->execute();

    //Get past events
    //NOTE - In real life we would add a WHERE statement to be < today()
    $sql_past = 'SELECT * FROM diy_events order by date ASC limit 8';
    $stmt_past = $dbh->prepare($sql_past);
    $stmt_past->execute();
?>