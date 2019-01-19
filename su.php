<?php
$conn=mysqli_connect('localhost','root','','web');
  if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['password']))    
{
  
  $name= $_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  
  if (!empty($name)&&!empty($email)&&!empty($password)) 
  {
    
    $query="INSERT INTO sign_in (name,email,psw) VALUES('".$name."','".$email."','".$password."')";
    mysqli_query($conn,$query);
    //echo "submited";
    header("location:index.php");
    
  }
  else
  {	
    echo "re-enter";
  }

}

?>