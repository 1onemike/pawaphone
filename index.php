<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Pawafon</title>

<!--META-->
<meta name="viewport" content="width=device-width initial-scale=1.0">

<!--FONTS-->
<link href='css/font.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/font-awesome.css">
<!--CSS-->
<link rel="stylesheet" type="text/css" href="css/grid.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="css/menu.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">

<link rel="stylesheet" type="text/css" href="css/animate.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--JS-->
<script src="js/responsive-nav.js"></script>
</head>


<body>

  <header class="sticky">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="logo">
                    <h1><a href="index.php"><img src="images/logo2.png" alt=""/></a></h1>
                    </div>
                    <nav class="nav-collapse">
                      <ul>
                          <li class="menu-item active"><a href="index.php" data-scroll>HOME</a></li>
                            <li class="menu-item"><a href="#partners" data-scroll>PARTNERS</a></li>
                            <li class="menu-item"><a href="#news" data-scroll>NEWS</a></li>

                            <li class="menu-item"><a href="about.php" data-scroll>ABOUT US</a></li>

                        </ul>
                    
                    </nav>
                    
              
                </div>  
        </div>  
      </div>
    </header>
    

     <div class="banner" id="home" >
      <br><br><br>  <br><br><br> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/s9.jpg" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/m9.jpg" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="leagoo/img/s8/1.jpg" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/t5.jpg" alt="" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="lorem center members clearfix col-lg-12" id="partners">
   <center>
   <h2>Our Partners</h2>
               <div class="team1 os-animation col-lg-4" data-os-animation="fadeInLeft" data-os-animation-delay="0.1s"><img src="images/leagoo.png" alt=""/>
                    <a class="btn"href="leagoo/">See Product Range</a>
               </div>
               <div class="team1 os-animation col-lg-4" data-os-animation="zoomIn" data-os-animation-delay="0.2s"><img src="images/chuwi2.png" alt=""/>
                   <a class="btn"href="chuwi/">See Product Range</a>
               </div>
               <div class="team1 os-animation col-lg-4" data-os-animation="fadeInRight" data-os-animation-delay="0.3s"><img src="images/woc2.png" alt=""/>
                    <a class="btn"href="woc/">See Product Range</a>
               </div>
    </center> 
           
</div>    
    


   
    
    <div class="testimonials clearfix" id="news">
      <div class="container">
        <div class="row">
              <div class="col-lg-12 os-animation" data-os-animation="pulse" data-os-animation-delay="0.5s">
                    <h2>Latest News</h2>
                  <ul class="bxslider">
                      <li>
                           <!--  <img src="images/person.png" alt="" /> -->
                            <h2><span>Pawafon</span> New shop opening soon at North Kaneshie </h2>
                            <p>CEO & Founder at Pawafon</p>
                        </li><li>
                           <!--  <img src="images/person.png" alt="" /> -->
                            <h2><span>Pawafon</span> New shop opening soon at North Kaneshie </h2>
                            <p>CEO & Founder at Pawafon</p>
                        </li><li>
                           <!--  <img src="images/person.png" alt="" /> -->
                            <h2><span>Pawafon</span> New shop opening soon at North Kaneshie </h2>
                            <p>CEO & Founder at Pawafon</p>
                        </li>
                        
                            <!-- <img src="images/person.png" alt="" /> -->
                         
                    </ul>
                </div>
            </div>
      </div>
    </div>



  <?php include "footer.php" ?>

  
<script src="js/jquery-min.js"></script>
<script src="js/fastclick.js"></script>
<script src="js/scroll.js"></script>
<script src="js/fixed-responsive-nav.js"></script>
<script src="js/jquery.bxslider.js"></script>
<script src="js/script.js"></script>
<script src="js/waypoints.min.js"></script>


</body>
</html>
