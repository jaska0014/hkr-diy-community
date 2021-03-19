<?php
    $host = '127.0.0.1'; // Must chnage back to localhost use 127.0.0.1 for docker
    $db   = 'diy_community';
    $user = 'root';
    $pass = 'Password1';
    $port = "3308"; // Must change to 3306 use 3308 for docker
    $charset = 'utf8';

    $options = [
        \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES   => false,
    ];

   // Connects to database
   $dbh = new PDO("mysql:host=$host;dbname=$db;charset=$charset;port=$port",$user,$pass,$options);
?>