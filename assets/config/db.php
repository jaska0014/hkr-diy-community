<?php
 // Defines information for database connection
 define('DB_HOST', 'localhost');
 define('DB_NAME', 'codeanywhere');
 define('DB_USER', 'root');
 define('DB_PASS', '');
 // Connects to database
 $dbh = new PDO(
 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=utf8',
 DB_USER,
 DB_PASS,
 array(
 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
 PDO::ATTR_EMULATE_PREPARES => false,
 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
 PDO::MYSQL_ATTR_FOUND_ROWS => true
 )
 );
?>
