<html>
    <head>
        <title>
            Dashboard
        </title>
    </head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
  integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="stylesheet.css">
  <style>
    .t1{
        list-style:none;
        line-height: 3;
        text-align: left;
    }
    .t1 li:hover{
      background-color:rgb(148, 165, 221);
    }
    #box{
      height:300px;
      width:300px;
      border-radius: 10px;
      background-color: rgb(18, 218, 215);
      text-align: center;
    }
    
    
  </style>
    <body>
        <div id="headerSection">
            <h1>Online Voting System</h1>
        </div>
        <hr>
        <div id="headerSection">
        <?php include 'nav.php'?>
            </div>
            <br/>
            <div id="bodySection">
              <div class="container-fluid">
                      
                              <div class="col-sm-12">
                                <center>
                                <div id="box">
                                  <h5>Admin login</h5>
                                 <form action = "adminlogincode.php" method = "post">
                                 email: <input type = "text" name = "email"/><br/><br/>
                                 
                                  password: <input type = "text" name = "password"/><br><br/>
                                  <button><a href="dashboard.php">submit</a></button> 
                                 </form>
                                </div>
                              </center>
                              </div>
                    </div>
            

            </div>
    </body>
</html>