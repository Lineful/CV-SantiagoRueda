<?php

$servername = "localhost";
$database = "decimoa2";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,
$username, $password, $database);

if (!$conn) {
    die("connection failed: " .mysqli_connect_error());
}else{
    //print "<p> connection succesful </p>\n";
    //header("location: ../index.html", true, 301);
}

?>
