<?php
session_start();
$mail=$_SESSION['email'];
$rate=$_POST["rate1"];
$com=$_POST["com1"];
$default=$_POST["hnum"];;

$link=mysqli_connect("localhost","root","","web");
$query="INSERT INTO feedbacks VALUES('$default','$mail','$com','$rate')";
$data=mysqli_query($link,$query);
echo "data passed";







?>