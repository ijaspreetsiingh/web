
<?php
    require 'conn.php';
$name1=$_POST['NAME'];
$last1=$_POST['last'];
$MAIL=$_POST['email'];
$loc=$_POST['location'];
$MSG=$_POST['message'];
// $query="INSERT INTO `form` (`ID`, `NAME`, `PHONE`, `EMAIL`, `DATE`) VALUES (NULL, '$name', '$phn', '$MAIL', current_timestamp());";

$query="INSERT INTO `feedback` (`ID`, `name`, `last`, `email`, `location`, `msg`, `Time`) VALUES (NULL, '$name1', '$last1', '$MAIL', '$loc', '$MSG', current_timestamp());";



$run=mysqli_query($conn,$query);
if ($run) {
   header("location: thanks.html");
   echo "thanks";
} else {
    echo "Not done";
}


?>