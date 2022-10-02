<?php
$server="localhost";
$username="root";
$password="";
$database="website";
$conn=mysqli_connect($server,$username,$password,$database);
if (!$conn) {
echo "connection is fail";
}

?>
