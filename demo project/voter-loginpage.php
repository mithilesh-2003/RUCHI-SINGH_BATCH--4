<html>
    <head>
  <title>Online voting system-login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
  integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="stylesheet.css">
  <style>

    #box1{
        height:400px;
        width:400px;
        border-radius: 20px;
        float:left;
        margin-left: 250px;
        margin-top:50px; 
        
    }
      #box2{
         height:500px;
        width:500px;
       background-color: rgb(18, 218, 215);
        border-radius: 15px;
        float:left;
        margin-left:100px;
    }
    #dropbox{
        width: 80px;
    }
   
  </style>
    </head>
    <body>
        <div id="headerSection">
            <h1>Online Voting System</h1>
        </div>
        <hr>
        <div id="headerSection">
        <?php include 'nav.php'?>
            </div>
        <br/><br/>
        <div id="bodySection">
            <div class="row">
                <div class="col-sm-6">
           
            <div id="box1">
                <img src="voters.jpeg" style="height:400px; width:400px;"/>
            </div>
        </div>
            <br/<br/>
            <div class="col-sm-6">
                        <div id="box2">
                          <br/><br/>
            <form action="voterlogin_code.php" method="post">
                <h3> Voter's Login</h3><br/><br/>
                <input type="Number" name="Adhar" placeholder="Enter Your Adhar Number"/><br/><br/>
               
                <select id="dropbox" name="role">
                    <option value="1">Voter</option>
                    <option value="2">Admin</option>
                </select><br/><br/>
                <button id="loginbtn" name="btn"><a href="votingpage.php">Login</a></button><br/><br/>
                New User?<a href="registration-page.php">Register here</a>
             </form>
            </div>
        </div>
    </div>
</div>
    
    </body>
    </html>