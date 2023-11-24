<?php 

include '../connection.php';




$connection=mysqli_connect($hostname,$username,$password,$dbname);


$email=$_POST['email'];

$password=$_POST['password'];

$sql="select*from admin where email='$email' && password='$password'";

$result=$connection->query($sql);

$count=mysqli_num_rows($result);

if($count==1){
   header('location:dashboard.php');
}
else{
    echo ('location:admin.php');
}