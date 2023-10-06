<?php 

$a= $_POST['name'];
$b=$_POST['mobile'];
$c=$_POST['email'];
$d=$_POST['password'];
$e=$_POST['adhar'];
$f=$_POST['address'];
$g=$_FILES['photo']['name'];
$h=$_FILES['photo']['tmp_name'];
$i=$_FILES['role'];
$conn=mysqli_connect("localhost","root","","php1db");
$up = "update voteregistration1 set name = '$a', mobile = '$b',email='$c', password = '$d', adharnumber='$e', address = '$f' 
photo = '$g' age='$i'";
 if(mysqli_query($conn,$up))
 { 
    move_uploaded_file('$g,$loc.$h');
    header("location:show.php");
 }
    
?>