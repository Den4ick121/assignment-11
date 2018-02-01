<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpass = "";

// connect database
$link = mysqli_connect($dbhost, $dbusername, '', 'Den4');
if (!$link) {
    die('Could not connect: ' . mysqli_error(link));
}


?>