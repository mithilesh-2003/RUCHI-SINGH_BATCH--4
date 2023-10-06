<html>
    <head>
        <title>
            Dashboard
        </title>
    </head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="stylesheet.css">
  <style  type="text/css">
    .t1{
        list-style:none;
        line-height: 3;
        text-align: left;
    }
    .t1 li:hover{
      background-color:rgb(148, 165, 221);
    }
    
     .main{
        width: 80%;
        height: 1200px;
        position: absolute;
        top: 10px;
        left: 100px;
        border:2px rgb(18, 218, 215);
    }
     .img1 {
       border-radius:5px;
       margin-top:20px;
     }    
     
     h3{
        background-color: rgb(126, 180, 19);
        border-radius:3%;
        color: black;
        width: 200px;
        margin-left: 40px;
        margin-top: 20px;
        text-align: center;
        
     }
     span{
        margin: 0;
        padding: 0;
     }
     .name{
        float: left;
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
                        <div class="col-sm-3" style="background-color: black; color:white; height:1250px;">
                            <ul class="t1">
                              <li><a href="dashboard.php" style="text-decoration:none;">Dashboard</a></li>
                              <li><a href="dataTable.php" style="text-decoration:none;">Voters</a></li>
                                <li><a href="dataTable2.php" style="text-decoration:none;">Show Party</a></li>
                                 <li><a href="dataTable3.php" style="text-decoration:none;">Voting</a></li>
                                   <li><a href="logoutpage.php" style="text-decoration:none;">Log Out</a></li>
                            </ul>
                              </div>
                      
                              <div class="col-sm-9">
                              <div class="main">
<section class="my-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 ">
        <div class="card  bg-info"  style="height:100%;">
       <div class="img1" style="margin: center;">
            <img src="pic.png" class="rounded-circle img-thumbnail" >
            </div>
            <div>
            <h3>CONTACT ME</h3>

            <div>      
            <i class="bi bi-telephone-fill"> +91 8917055419</i><br><br>
            <i class="bi bi-envelope-open-fill"> ruchisingh0000248@gmail.com</i><br><br>
            <i class="bi bi-pc-display-horizontal"> www.abc.com</i><br><br>
            <i class="bi bi-geo-alt-fill"> Sijhauliya, Akbarpur,Ambedkar Nagar (UP) 45</i>
            </div>
            <h3>EDUCATION</h3>
              <h5>Diploma in Computer Science & Engineering</h5>
              <p>CSJM Government Polytechnic Ambedkar Nagar</p>
              <p>2021-2023</p>

              <h5>Intermidiate</h5>
              <p>MBDRS Sainik Inter College</p>
              <p>2020-2021</p>

              <h5>High School</h5>
              <p>MBDRS Sainik Inter College</p>
              <p>2018-2019</p>  
            <h3>SKILLS</h3>
            <ul>
                <div>
              <li>Visual design</li>
              <li>Storyboards</li>
              <li>User Flows</li>
              <li>Process Flows</li>  
          </div>
            </ul>
            </div>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-12" class="col2" style="background-color:grey;">
        <span style="font-size: 50px; font-weight: 700;">RUCHI<br></span>
        <span style="font-size:40px; font-weight: 500;">Singh</span><br>
        <span>Trainee at Digicders Technologies private limited</span>
        <h4 style="padding-top: 80px;">WORK EXPERIENCE    _______________</h4>
        <div>Employee <span style="margin-left:500px;"> 2022-2023 </span>  
        <h6>Digicoders Technologies Private limited! Lucknow</h6>
        <p>Digicoders Technologies Best Software Company in Lucknow.Software company today operates on many different buisness model.</p></div>

        <div>Job position here  <span style="margin-left:500px;"> 2017-2019 </span>  
        <h6>DigicodersTechnologies Private limited ! Lucknow</h6>
        <p>Digicoders Technologies Best Software Company in Lucknow.Software company today operates on many different buisness model.</p></div>

        <div>Trainee  <span style="margin-left:500px;"> 2015-2017 </span>  
        <h6>DigicodersTechnologies Private limited ! Lucknow</h6>
        <p>Digicoders Technologies Best Software Company in Lucknow.Software company today operates on many different buisness model.</p></div>

        <div>Job position here  <span style="margin-left:500px;"> 2013-2015 </span>  
        <h6>DigicodersTechnologies Private limited ! Lucknow</h6>
        <p>Digicoders Technologies Best Software Company in Lucknow.Software company today operates on many different buisness model.</p></div>

     <h4 style="padding-top: 60px;">WORK EXPERIENCE    _______________</h4>
     <div class="name">
     <h5>Er. Gopal Singh</h5>
      Training Head
     <p>Phone:  639-429-6293</p>
     <p>Email: thedigicoders543@gmail.com</p>
     </div>
     <div class="name" style="margin-left: 300px;">
     <h5>Er. Himanshu Kashyap</h5>
     Project Manager
     <p>Phone:  914-096-7607</p>
     <p>Email: thedigicoders543@gmail.com </p>
     </div>
         
        </div>
      </div>
    </div>
  </div>
</section>
</div>
       </div>
     </div>
            
    </div>
    </body>
</html>