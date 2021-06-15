<?php
   include_once 'header.php';
   include_once 'header2.php';
   include_once 'navbar.php';
   include_once 'floatingbuttons.php';
   ?>
 <head>
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
        });
        </script>
 </head>
<div class="container-fluid header-3">
   <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-xl-12">
      <h1 class="about-us-content1">About us</h1>
      </div>
   </div>
   <div class="row">
      <p class="Build-your-door-to-opportunities-with-Brillica-M">
      Build your door to opportunities with Brillica – Master IT Skills<br>
      Today! For a bright future is ahead of you
      </p>
   </div>
</div>
<div class="container">
   <div class= "row">
      <div class="col-lg-6 col-sm-12 col-xs-12 col-xl-6 ">
         <p class="brillica-aboutpage-content">
            Brillica Services Private Limited is a trusted training provider and leading provider at high quality
            , innocatiove and industry relevant IT skills, empowering and budding IT aspirants with across-the-board
            knowledge with a vision to create a fleet  of the smarter workforce for global organizations.
            
            With a team of dedicated and knowledgeable learning professionals having profound subject-matter expertise,
            we provide blended IT training solutions to map all your IT learning needs.
            
         </p>
      </div>
      <div class="col-lg-1 col-xl-1">
         <div> <img src="img/Component 7 – 1.svg"
            class="line-between-aboutpage-content"></div>
      </div>
      <div class="col-lg-5 col-xl-5 col-sm-12 col-xs-12">
         <p class="brillica-content-2">
            Brillica Services brings forth an array of specialized and in-demand IT training courses in diverse domains
            including Data Science, Data Analytics, Project Management, Cloud Computing, Cyber Security, Development and Robotics and much more.
            
            <br>
            Brillica Services maintains strategic partnerships with top IT certification providers like IBM, 
            Microsoft, CloudEra Connect , Blockchain Training Alliance and many more.
         </p>
      </div>
   </div>
</div>

<div>
   <img src="img/Component 19 – 1.png"
      srcset="img/Component 19 – 1@2x.png 2x,
      imgComponent 19 – 1/component-19-1@3x.png 3x" 
      width="100%" class="bannerx" >
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

<div class="container-fluid training-container">
<div class= "row">
      <h1 class="training-text">Why Choose Brillica Services for IT Training </h1>
   </div>  
   <div class= "row">
   <img src="img/Component 10 – 1.svg"
    class="Component-10-1">
   </div> 
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel2" data-slide-to="1"></li>
      <li data-target="#myCarousel2" data-slide-to="2"></li>
      <li data-target="#myCarousel2" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
   
    <div class="carousel-inner">
   <div class="item active">
        <img src="./img/Component 11 – 1.svg" alt="Los Angeles" class="c-it2">
        
       <p class="t-content2">
               We guarantee high-quality training with our  large pool of in-house certified instructors, 
               who bring on-board massive training and education
               industry experience and walk you through the certification success.
            </p>
        <br><br><br><br>
      </div>
     
      <div class="item">
        <img src="./img/Component 12 – 1.svg" alt="Chicago" class="c-it2">
        <p class="t-content2">
               Every student counts for us and we ensure to conduct our batches as scheduled, irrespective ofthe number of participants. Unlike others, we do
               not postpone or cancel the training because we
               value your decision and time you make out to fulfil your training needs.
            </p>
        <br><br><br><br>
      </div>
      <div class="item">
        <img src="./img/Component 13 – 1.svg" alt="Chicago" class="c-it2">
       
        <p class="t-content2">
               We concenter our training to develop the industry-demanded technical skills for all 
               verticals rather than sticking to 
               topic-specific training deliveries. We invest 
               dedicated efforts to add rich value to your technical training experience and your profile for making you best-fit for the corporate world.
            </p>
        <br><br><br><br>
      </div>
      <div class="item">
        <img src="./img/Component 14 – 1.svg" alt="Chicago" class="c-it2">
        <p class="t-content2">
               We offer holistic learning
               solutions, best to fit the unique
               learning needs of every
               corporate and individual. All
               authorized and official IT
               trainings are offered to you in
               diverse blended modes to help 
               you comprehend and learn 
               better, suiting your
               conveniences.
            </p>
        <br><br><br><br>
      </div>
      
   
    </div>
    <!-- Left and right controls -->
   
  </div>
</div>
</body>
<?php
   include_once 'footer.php'
   ?>