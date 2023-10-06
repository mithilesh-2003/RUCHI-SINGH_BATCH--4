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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


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
                    <div class="row">
                        <div class="col-sm-12" style="background-color: rgb(24, 24, 86); height:40px;">
                    <h2 style="color:white;">Admin Panel</h2>
                        </div>
                        <div class="col-sm-3" style="background-color: black; color:white; height: 1000px;;">
                            <ul class="t1">
                              <li><a href="dashboard.php" style="text-decoration:none;">Dashboard</a></li>
                              <li><a href="dataTable.php" style="text-decoration:none;">Voters</a></li>
                                <li><a href="dataTable2.php" style="text-decoration:none;">Show Party</a></li>
                                 <li><a href="dataTable3.php" style="text-decoration:none;">Voting</a></li>
                                   <li><a href="logoutpage.php" style="text-decoration:none;">Log Out</a></li>
                            </ul>
                              </div>
                      
                              <div class="col-sm-9">
                                <center>
                               <h5>Party List</h5> 
                               <table border="1" style=" border:3px solid black;">
                                <tr style="color:white;">
                                  <td>Sr No</td>
                                  <td>Party Name</td>
                                  <td>Party Symbol</td>
                                  <td>Party president</td>
                                  <td>Date</td>
                                  <td>Time</td>
                                  <td>Edit</td>
                                  <td>Delete</td>
                              
                                </tr>
                                <table>
  </center>
                              </div>
                    </div>
            

            </div>
    </body>
</html>