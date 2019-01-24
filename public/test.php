<?php

//connection for site 1
$servername1 = "192.168.1.102";
$username1 = "Suha12";
$password1 = "1234";
$dbname1 = "site 12";

$conn1 = new mysqli($servername1 , $username1 , $password1 , $dbname1);
if($conn1->connect_error)
{
    die("connection failed: " . $conn1->connect_error);
}
echo "connected successfully";

//connection for headquarter
$servername2 = "localhost";
$username2="root";
$password2 = "";
$dbname2 = "headquarter";

$conn2 = new mysqli($servername2 , $username2 , $password2 , $dbname2);
if($conn2->connect_error)
{
    die("connection failed: " . $conn2->connect_error);
}
echo "connected successfully";
?>