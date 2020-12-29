<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'viraj';

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    if(!$conn) {
        die('Error: '.$mysqli_error($conn));
    }
?>