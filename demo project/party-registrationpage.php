<html>
    <head>

        <title>
 Online Voting System-Registration page
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
              integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
              integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  
         
        <link rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <style>
            #address{
                width:26%;
            }
            #box{
              float:left;
              height: 400px;
              width:400px;
              border-radius: 20px;
             margin-left:200px ;
             margin-top: 150px;
            }
            #t1{
              float:left;
              height:600px;
              width:600px;
              border-radius: 15px;
              background-color: rgb(18, 218, 215);
              margin-left: 60px;
              margin-top: 10px;
            }
            #imagepart{
              border:2px solid black;
              border-radius: 5px;
              padding:10px;
              width:40%;

            }
            #role{
                border:2px solid black;
              border-radius: 5px;
              padding:10px;
              width:30%; 
            }
            #role select{
                border-radius: 5px;
              padding:10px;
            }
            @media only screen and (max-width: 600px) {
  body {
    background-color: lightblue;
  }
}

        </style>
        <div id="headerSection">
   <h1>Online Voting System</h1>
</div>
   <hr>
   <div id="headerSection">
   <?php include 'nav.php'?>
    </div>

   <div id="bodySection">
    <div id="box">
      <img src="voters.jpeg" style="height: 400px; width:400px;"/>
    </div>
    <br/><br/>
    <div id="t1">
   <h3> party Registration</h3>
   <form action="partyregistraioncode.php" method="post"  enctype = "multipart/form-data">
   <input type="text" name="name1" placeholder="Enter Party Name"/>
   <input type="text" name="name2" placeholder="Eneter party president name"/><br/><br/>
   <input type="email" name="email" placeholder="Enter Your Email"/>
   <input type="password" name="password" placeholder="Password"/><br/><br/>
   <textarea id="address" type="textarea" name="address" placeholder=" Party Office Address"></textarea><br/><br/>
   <center>
   <div id="imagepart">
  Upload Party Symbol: <input type="file" name="photo" />
</div>
<br/>
<div id="role">
    Select your role: <select name="role" >
        <option value="1">Admin</option>
        <option value="2">Party Member</option>
       </select>
</div>
   </center>
    <br/>
    <button style="padding:5px;
    font-size: 15px;
    border-radius: 5px;
    background-color: rgb(10, 154, 244);
    color:white;">Register</button><br/><br/>
    Already user?<a href="partylogin-page.php">Login here</a>
   </form>
</div>
</div>
    </body>
</html>