<?php
include 'header.php';
include 'header2.php';
include 'navbar.php';
include_once 'floatingbuttons.php';
?>


<html lang="en">
<head>
  <title>Brillica Services</title>
  <style>
    
.slick-slide {
    margin: 0px 20px;
}


.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}

.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
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
        <script>
        $(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
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
});
});
    </script>
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
    <img class="xq" src="./img/N1.jpg" alt="">
  </div>
  <div class="carousel-item">
    <img  class="xq" src="./img/1st.jpg" alt="" >
  </div>
  <div class="carousel-item">
    <img class="xq" src="./img/2nd.jpg" alt="" >
  </div>
  <div class="carousel-item">
    <img class="xq" src="./img/3rd.jpg" alt="" >
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
  <div class="col-xl-2 col-lg-3 col-md-4 rect1">
      <a href="./course4.php" > <img src="img/Group 2250.png"
        srcset="img/Group 2250@2x.png 2x,
                img/Group 2250@3x.png 3x"
        class="serv1">
        <div>
            <h2 class="card2">Technology Training</h2>
        </div>
        <div class="card-content-2">
            <p>
            Learn Highly demanded IT Training Programs with us. 
            <br>ONLINE | OFFLINE both modes available.
            </p>
        </div>
        <div >
            <a class="redirect" href="./course4.php">Know More&nbsp&nbsp></a>
        </div>
      </a>
    </div>
  
    <div class="col-xl-2 col-lg-3 col-md-4 rect2">
    <a href="./webandapp.php" >  <img src="img/Group 2251.png"
        srcset="img/Group 2251@2x.png 2x,
                img/Group 2251@3x.png 3x"
                class="serv1" >
        <div>
            <h2 class="card2">Web and App Development Services</h2>
        </div>
        <div class="card-content-3">
            <p>
            Brillica Services Company provides design and technology services to help companies create a great,
             cohesive experience across complex systeams.
            </p>
        </div>
        <div >
            <a class="redirect" href="./webandapp.php">Know More&nbsp&nbsp></a>
        </div>
    </a>
    </div>
  
    <div class="col-xl-2 col-lg-3 col-md-4 rect3">
    <a href="#" >   <img src="img/Group 2252.png"
        srcset="img/Group 2252@2x.png 2x,
                img/Group 2252@3x.png 3x"
                class="serv1"  >
        <div>
            <h2 class="card2">Recruitment Services</h2>
        </div>
        <div class="card-content-2">
            <p>
            Make your future part of ours. Join the Brillica Services today.
            </p>
        </div>
        <div >
            <a class="redirect" href="#">Know More&nbsp&nbsp></a>
        </div>
    </a>
    </div>

    <div class="col-xl-2 col-lg-3 col-md-4 rect4">
    <a href="./internship.php" >   <img src="img/Group 2253.png"
        srcset="img/Group 2253@2x.png 2x,
                img/Group 2253@3x.png 3x"
                class="serv1">
        <div>
            <h2 class="card2">Internship</h2>
        </div>
        <div class="card-content-4">
            <p>
            Get IT Internships and Work Experience Guidance by Experts and work on live projects.
            </p>
        </div>
        <div >
            <a class="redirect" href="./internship.php">Know More&nbsp&nbsp></a>
        </div>
    </a>
    </div>
    <div class="col-xl-2 col-lg-4 col-md-4 rect5">
    <a href="./facultydevelopment.php" >   <img src="img/Group 2254.png"
        srcset="img/Group 2254@2x.png 2x,
                img/Group 2254@3x.png 3x"
                class="serv1" >
        <div>
            <h2 class="card2">Faculty Development Program</h2>
        </div>
        <div class="card-content-5">
            <p>
               Faculty Development Program is a skill development program specially designed for academic educators.
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
         <section class="customer-logos slider">
            <div class="slide"><img src="./img/m1.png" alt="" class="c-it"> <br><br></div>
       
            <div class="slide"><img src="./img/m2.png" alt="" class="c-it"><br><br></div>
           
            <div class="slide"> <img src="./img/INTEL.png" alt="" class="c-it"><br><br></div>
        
            <div class="slide"><img src="./img/CLOUDERAX.png" alt="" class="c-it"><br><br></div>
        
            <div class="slide"><img src="./img/CERT.png" alt="" class="c-it"><br><br></div>
        
            <div class="slide"><img src="./img/MAPR.png" alt="" class="c-it"><br><br></div>
        
            <div class="slide"><img src="./img/BLOCKCHAIN.png" alt="" class="c-it"><br><br></div>
        
            <div class="slide"><img src="./img/AWS.png" alt="" class="c-it"><br><br></div>
        
         </section>
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
               Our Team has an ambitious vision and a strong
               track record of performance. This drives the innovative
               and people-focused business we are today.
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
              Make your future part of ours. Join the Brillica Services today.
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
            Let's find possible ways of collaboration.
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
</body>

<?php
include 'footer.php';
?>
<script>

</script>
