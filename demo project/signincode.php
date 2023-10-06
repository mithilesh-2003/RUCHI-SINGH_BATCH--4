<?php
$a=$_POST['email'];
$b=$_POST['password'];
$conn=mysqli_connect("localhost","root","","php4db");
$sel = "select * from g  where  email = '$a' and  password = '$b'";
$rel = mysqli_query($conn,$sel);
$check = mysqli_num_rows($rel);
if($check>0){ 
session_start();
$_SESSION['user']=$a;
header("location:dashbord.php");
}
else{ 
    echo "data not founds";
}

?>