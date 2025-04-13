<?php

error_reporting(0);
session_start();
$host="localhost";
$user="root";
$password="";
$db="ecotracks";
$data=mysqli_connect($host,$user,$password,$db);
if ($data==false)
{
echo "connection error";
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from registeration where username='".$username."' AND password='".$password."'";
$result=mysqli_query($data,$sql);
$row =mysqli_fetch_array($result);
$_SESSION['username']=$row['username'];

if(mysqli_num_rows($result))
{
header("location:logout.php");
}

else
{
session_start();
$message= "username or password does not match";
$_SESSION['loginMessage']=$message;
header("location:login.php");
}



}
?>