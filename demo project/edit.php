<?php 
$conn = mysqli_connect("localhost","root","","php1db");
$editid=$_REQUEST['idd'];
$edit="select  * from voteregistration1 where id = $editid";
$rel = mysqli_query($conn,$edit);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3> Voter's Registration</h3>
   <form action="update.php" method="post" enctype="multipart/form-data">
   <input type="text" name="name" placeholder="Enter Name"/>
   <input type="number" name="mobile" placeholder="Enter mobile"/><br/><br/>
   <input type="email" name="email" placeholder="Enter Your Email"/>
   <input type="password" name="password" placeholder="Password"/><br/><br/>
   <input type="number" name="adhar" placeholder="Adhar-Number"/>
   <textarea id="address" type="textarea" name="address" placeholder="Address"></textarea><br/><br/>
   <center>
   <div id="role">
    Select your age: <input type="number" name="role"  placeholder="age" minlength="18" style="width:70px;"/>    
</div><br/><br/>

   <div id="imagepart">
  Upload image: <input type="file" name="photo" />
</div>
<br/><br/>

   </center>
    <br/><br/>
    <button style="padding:5px;
    font-size: 15px;
    border-radius: 5px;
    background-color: rgb(10, 154, 244);
    color:white;">Register</button><br/><br/>
    Already user?<a href="voter-loginpage.php">Login here</a>
   </form>
    
</body>
</html>