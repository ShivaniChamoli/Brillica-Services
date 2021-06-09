<?php
include 'header.php';
include 'header2.php';
include 'navbar.php';
include_once 'floatingbuttons.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Brillica Services</title>
  <style>
    .carousel-wrap {
  margin: 40px auto -50px;
  padding: 0 5%;
  width: 80%;
  position: relative;
}

/* fix blank or flashing items on carousel */
.owl-carousel .item {
  position: relative;
  z-index: 100; 
  -webkit-backface-visibility: hidden; 
}

/* end fix */
.owl-nav > div {
  margin-top: -26px;
  position: absolute;
  top: 50%;
  color: #cdcbcd;
}

.owl-nav i {
  font-size: 52px;
}

.owl-nav .owl-prev {
  left: -30px;
}

.owl-nav .owl-next {
  right: -30px;
}
    </style>
</head>
<body>
  <div class="container-fluid">
   <div class="row">
   <div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
  <li data-target="#demo" data-slide-to="3"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active" >
    <img class="xq" src="./img/N1.jpg" alt="Los Angeles">
  </div>
  <div class="carousel-item">
    <img  class="xq" src="./img/1st.jpg" alt="Chicago" >
  </div>
  <div class="carousel-item">
    <img class="xq" src="./img/2nd.jpg" alt="Chicago" >
  </div>
  <div class="carousel-item">
    <img class="xq" src="./img/3rd.jpg" alt="Chicago" >
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>
   </div>
   
</div>
   <div class="container">
   <div>
       <h1 class="industry-assoc-services">Our Services</h1>
    </div>

   
   <div class="row">
    <img src="img/Component 10 – 1.svg"
    class="Component-10-2">
</div>

<div class="row">
  <div class="col-xl-2 col-lg-2 rect1">
      <a href="./course4.php" > <img src="img/Group 2250.png"
        srcset="img/Group 2250@2x.png 2x,
                img/Group 2250@3x.png 3x"
        class="serv1">
        <div>
            <h2 class="card2">Technology Training</h2>
        </div>
        <div class="card-content-2">
            <p>
                An internship is the best way to<br>
put classroom knowledge to <br>
practice.
            </p>
        </div>
        <div >
            <a class="redirect" href="./course4.php">Know More&nbsp&nbsp></a>
        </div>
      </a>
    </div>
  
    <div class="col-xl-2 col-lg-2 rect2">
    <a href="./webandapp.php" >  <img src="img/Group 2251.png"
        srcset="img/Group 2251@2x.png 2x,
                img/Group 2251@3x.png 3x"
                class="serv1" >
        <div>
            <h2 class="card2">Web and App Development Services</h2>
        </div>
        <div class="card-content-3">
            <p>
                An internship is the best way to<br>
put classroom knowledge to <br>
practice.
            </p>
        </div>
        <div >
            <a class="redirect" href="./webandapp.php">Know More&nbsp&nbsp></a>
        </div>
    </a>
    </div>
  
    <div class="col-xl-2 col-lg-2 rect3">
    <a href="#" >   <img src="img/Group 2252.png"
        srcset="img/Group 2252@2x.png 2x,
                img/Group 2252@3x.png 3x"
                class="serv1"  >
        <div>
            <h2 class="card2">Recruitment Services</h2>
        </div>
        <div class="card-content-2">
            <p>
                An internship is the best way to<br>
put classroom knowledge to <br>
practice.
            </p>
        </div>
        <div >
            <a class="redirect" href="#">Know More&nbsp&nbsp></a>
        </div>
    </a>
    </div>

    <div class="col-xl-2 col-lg-2 rect4">
    <a href="./internship.php" >   <img src="img/Group 2253.png"
        srcset="img/Group 2253@2x.png 2x,
                img/Group 2253@3x.png 3x"
                class="serv1">
        <div>
            <h2 class="card2">Internship</h2>
        </div>
        <div class="card-content-4">
            <p>
                An internship is the best way to<br>
put classroom knowledge to <br>
practice.
            </p>
        </div>
        <div >
            <a class="redirect" href="./internship.php">Know More&nbsp&nbsp></a>
        </div>
    </a>
    </div>
    <div class="col-xl-2 col-lg-2 rect5">
    <a href="./facultydevelopment.php" >   <img src="img/Group 2254.png"
        srcset="img/Group 2254@2x.png 2x,
                img/Group 2254@3x.png 3x"
                class="serv1" >
        <div>
            <h2 class="card2">Faculty Development Program</h2>
        </div>
        <div class="card-content-5">
            <p>
                An internship is the best way to<br>
put classroom knowledge to <br>
practice.
            </p>
        </div>
        <div >
            <a class="redirect" href="./facultydevelopment.php">Know More&nbsp&nbsp></a>
        </div>
    </a>
    </div>
   
</div>

   </div>
<div class="row">
    
</div>

<div class="container-fluid bx3">
  <h2 class="industry-association">Our Industry Association</h2>  
 
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel2" data-slide-to="1"></li>
      <li data-target="#myCarousel2" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
   
    <div class="carousel-inner">
   <div class="item active">
        <img src="./img/m1.png" alt="Los Angeles" class="c-it">
        <h1 class="indus-title">MICROSOFT</h1>
        <h1 class="indus-title1">Authorised Education Partner</h1>
        <br><br><br><br>
      </div>
     
      <div class="item">
        <img src="./img/m2.png" alt="Chicago" class="c-it">
        <h1 class="indus-title">IBM</h1>
        <h1 class="indus-title1">Registered Business Partner</h1>
        <br><br><br><br>
      </div>
    
      
   
    </div>
    <!-- Left and right controls -->
   
  </div>
</div>

<div class="container-fluid">

    <h1 class="brillica-services-for-it-training">Why choose Brillica Services for IT training</h1>
 


<div class="row">
 <img src="img/Component 10 – 1.svg"
 class="Component-10-2">
</div>



</div>   







<div class="container-fluid">
   <div class="carousel-wrap">
  <div class="owl-carousel">
    <div class="item"><img src="./img/Group 173.svg"></div>
    <div class="item"><img src="./img/Group 174.svg"></div>
    <div class="item"><img src="./img/Group 175.svg"></div>
    <div class="item"><img src="./img/Group 176.svg"></div>
    <div class="item"><img src="./img/Group 177.svg"></div>
  </div>
</div>
   
</div>
</div>







<div class="container-fluid  box">

    <div class="row">
<div class="col-xl-8 col-lg-8 col-md-12">
    <p class="corporate-learning">
        Corporate Learning solutions @Brillica Services
    </p>
    <p class="corporate-paragraph">Realize the best results from your investments in up-skilling your workforce on upcoming
         challenging and diverse IT technologies including cyber security, data science, project 
        management, cloud, AI and machine learning. Leverage our customized corporate training 
        solutions and optimize the workforce proficiency with globally-recognized certification 
        training, delivered by subject matter experts and lead the market upfront.</p>
</div>
<div class="col-xl-4 col-lg-4 col-md-12">
<img class="image" src="img/Certificate-Stock-Photo.png"
srcset="img/Certificate-Stock-Photo@2x.png 2x,
        img/Certificate-Stock-Photo@3x.png 3x"
class="certified">
</div>
    </div>
   <br>
   <br>

</div>



<div class="container" style="margin-bottom:100px">
    <div class="row">
        <h1 class="explore-more-about-brillica">Explore more about Brillica :</h1>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6  col-xl-4 col-sm-12 box3">
          <a href="./leadership2.php">
              <div><img class="Group-2255" src="./img/Group 2260.png">
              <h1 class="text-hover leadx">Our Team</h1>
              <div class="card-content-9">
            <p>
                An internship is the best way to<br>
put classroom knowledge to <br>
practice.
            </p>
        </div>
        <div >
            <a class="redirect2" href="./leadership.php">Know More&nbsp&nbsp></a>
        </div>
            </div>
     
         
    </a> 
        </div>
        



        <div class="col-lg-4 col-md-6 col-xl-4 col-sm-12 box3 ">
           
        <div><img src="./img/Group 2259.png" class="Group-2259">

        <h1 class="text-hover2 leadx2">Career</h1>
        <div class="card-content-10">
            <p>
                An internship is the best way to<br>
put classroom knowledge to <br>
practice.
            </p>
        </div>
        <div >
            <a class="redirect3" href="#">Know More&nbsp&nbsp></a>
        </div>
      </div>
    
       
        
     
        </div>
        
        <div class="col-lg-4 col-md-6 col-xl-4 col-sm-12 box3">
        <a href="./contactus.php"> 
            <div><img class="Group-2258" src="./img/Group 2258.png" class="Group-2258">
            <h1 class="text-hover1 leadx3">Contact</h1>
            <div class="card-content-11">
            <p>
                An internship is the best way to<br>
put classroom knowledge to <br>
practice.
            </p>
        </div>
        <div >
            <a class="redirect4" href="./contactus.php">Know More&nbsp&nbsp></a>
        </div>
          </div>
     
      </a>
    </div>
</div>
</div>

<div class="container">

</div>


</body>

<?php
include 'footer.php';
?>
<script>
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 40,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 3
    }
  }
})
</script>
