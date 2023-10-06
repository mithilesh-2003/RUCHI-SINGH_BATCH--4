<?php
$conn=mysqli_connect("localhost","root","","php1db");
$sel = "select * from voteregistration1";
$rel = mysqli_query($conn,$sel);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>adharnumber</th>
            <th>mobile</th>
            <th>address</th>
            <th>email</th>
            <th>password</th>
            <th>age</th>
            <th>image</th>
            <th>date</th>
            <th>time</th>
</tr>
<?php 
     while ($k=mysqli_fetch_array($rel,MYSQLI_BOTH))
     { 
        ?>
        <tr>
        <td><?php echo $k['0']?></td>
        <td><?php echo $k['1']?></td>
        <td><?php echo $k['2']?></td>
        <td><?php echo $k['3']?></td>
        <td><?php echo $k['4']?></td>
        <td><?php echo $k['5']?></td>
        <td><?php echo $k['6']?></td>
        <td><?php echo $k['7']?></td>
        <td><?php echo $k['8']?></td>
        <td><?php echo $k['9']?></td>
        <td><a href = "delete.php?idd=<?php echo $k['0']?>">delete</a></td>
        <td><a href = "edit.php?idd=<?php echo $k['0']?>">update</a></td>
        </tr>
        <?php
     }
     ?>

     

    
</body>
</html>