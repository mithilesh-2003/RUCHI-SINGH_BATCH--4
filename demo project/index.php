<html>
    <head>
        <title>
          Online Voting System-Home Page
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" 
 integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="stylesheet.css">
        <style>
        
        </style>
    </head>
    <body >
    <div id="headerSection">
            <h1>Online Voting System</h1>
        </div>
        <hr>
        
        <div id="headerSection">
        <?php include 'nav.php'?>
          
    </div>
    
     <div id="bodySection">
      <section>
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner t">
          <div class="carousel-item active">
            <img src="slide1.png" style="height:600px" class="d-block w-100" alt="first slide">
          </div>
          <div class="carousel-item">
            <img src="slide2.png" style="height:600px;" class="d-block w-100" alt="second slide">
          </div>
          <div class="carousel-item">
            <img src="slide3.png" style="height:600px;" class="d-block w-100" alt="third slide">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <br/><br/>
    <div class="row">
        <div class="col-sm-2">
          <img src="voter-services.jpeg" class="rounded-circle img-thumbnail" style="height:150px; width:200px;"/>
          <p class="text-center fw-bold">Voters Service<i class="fa fa-arrow-right" aria-hidden="true"></i></p>
        </div>
        <div class="col-sm-2">
          <img src="voter-education.jpeg" class="rounded-circle img-thumbnail" style="height:150px; width:200px;"/>
          <p class="text-center fw-bold">Voters Education<i class="fa fa-arrow-right" aria-hidden="true"></i></p>
        </div>
        <div class="col-sm-2">
          <img src="icon1.jpeg" class="rounded-circle img-thumbnail" style="height:150px; width:200px;"/>
          <p class="text-center fw-bold">Election<i class="fa fa-arrow-right" aria-hidden="true"></i></p>
        </div>
        <div class="col-sm-2">
          <img src="candidate.jpeg" class="rounded-circle img-thumbnail" style="height:150px; width:200px;"/>
          <p class="text-center fw-bold">Candidate<i class="fa fa-arrow-right" aria-hidden="true"></i></p>
        </div>
        <div class="col-sm-2">
          <img src="publication.png" class="rounded-circle img-thumbnail" style="height:150px; width:200px;"/>
          <p class="text-center fw-bold">Publication<i class="fa fa-arrow-right" aria-hidden="true"></i></p>
        </div>
        <div class="col-sm-2">
          <img src="ict apps.jpg" class="rounded-circle img-thumbnail" style="height:150px; width:200px;"/>
          <p class="text-center fw-bold">ICT Apps<i class="fa fa-arrow-right" aria-hidden="true"></i></p>
        </div>
      </div>
      <br/><br/>
      <section>
        <div class="card border-success mb-3" style="width:100%;">
          <div class="card-header bg-transparent border-success"></div>
          <div class="card-body" style="background-color:green;">
            <h5 class="card-title">Welcome</h5>
            <p class="card-text">Thanks for visit us</p>
          </div>
          <ul type="none">
          <li>
          <div class="card-footer bg-transparent border-success">Help</div>
          <a href="#">
          <img src="twit.png" type="icon" style="height:50px; width:50px;">
           </a>
           <a href="#">
          <img src="whatsapp.png" type="icon" style="height:50px; width:50px;">
           </a>
           <a href="#">  
          <img src="telegram.png" type="icon" style="height:50px; width:50px;">
           </a>
           <a href="#">
          <img src="insta.png" type="icon" style="height:50px; width:50px;">
           </a>
          </li>
          <br/><br/>
          <li><img src= "call.png" type="icon" style="height:50px; width:50px;"></li>
          <li><h6>contact us</h6></li>
          <li> mob-no: 91-7379900119</li>
          <li> mob-no: 91-7389932118</li>
          </ul>
        </div>
      </section>
     </div>
    </body>
</html>