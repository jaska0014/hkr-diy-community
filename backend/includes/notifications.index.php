<?php
// Checks if an action is set 
if (isset($_GET['action'])) 
{
    // Checks which action is set 
    switch ($_GET['action'])
    {
        case 'inserted': echo '
            <div class="alert alert-success"> Posten har lagts till i databasen!
            </div> ';
        break;
        case 'updated':
        echo '
            <div class="alert alert-success">
            Posten har uppdaterats i databasen! </div>
        ';
        break;
        case 'deleted':
        echo '
            <div class="alert alert-danger">
            Posten har raderats från databasen! </div>
        ';
        break; 
        }
} 
?>