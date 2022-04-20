<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "cmt_4";

$connection = mysqli_connect($host, $user, $pass, $db);
if (!$connection) {
    echo "Connection failed";
}
