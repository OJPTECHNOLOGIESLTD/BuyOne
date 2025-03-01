<?php

//database configuration
$host = "localhost";
$username = "bpaycomp_server";
$password = "admin@25..25";
$database = "bpaycomp_server";

$connect = new mysqli($host, $username, $password, $database);

if (mysqli_connect_errno()) {
    die("Whoops! failed to connect to database : " . mysqli_connect_error());
} else {
    $connect->set_charset("utf8mb4");
}

$ENABLE_RTL_MODE = "false";

?>