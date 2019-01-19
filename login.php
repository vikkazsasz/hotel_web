<?php
session_start();



$servername = "localhost";
$username = "root";
$password = '';
$dbname="web";

$conn=mysqli_connect("localhost","root","","web");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



    $email = $_POST['email'];
    $password = $_POST['pass'];

    $query = "SELECT email,psw FROM sign_in WHERE email='$email' AND psw='$password'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);


    if($rows== 1){

        session_start();
        $_SESSION['email'] = $email;
        //$_SESSION['pass'] = $password;
        $_SESSION['log']=1234;
        header("location:user.php");
    }
    else
            echo " NOT LOGGED IN!";
        
       

$conn->close();

?>