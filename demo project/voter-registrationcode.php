<?php

$a=$_POST ['name'];
$b=$_POST['mobile'];
$c=$_POST['email'];
$d=$_POST['password'];
$e=$_POST['adhar'];
$f=$_POST['address'];
$g=$_FILES['photo']['name'];
$h=$_FILES['photo']['tmp_name'];
$i=$_POST['role'];


$date=date("d/m/y");
date_default_timezone_set("asia/kolkata");
$time=date("h:i:sa");

$loc="demo project/"



$conn=mysqli_connect("localhost","root","","php1db");

$ins="insert into voteregistration1(name,mobile,email,password,adharnumber,address,image,age,date,time) values('$a','$b','$c','$d','$e','$f','$g','$i','$date','$time')";

if(mysqli_query($conn,$ins))
{
    move_uploaded_file($h,$loc.$g);
   // header("location:registration-page.php");
    
}
else {
   echo "<script>window.location.href='registration-page.php';alert('data not store');</script>";
}

?>