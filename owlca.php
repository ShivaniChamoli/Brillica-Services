<?php
include 'header.php';
include 'header2.php';
?>
<head>
<link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">
</script>
 <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">
   </script>

    <style>
   
    </style>
</head>
<body>







<!----------HTML code starts here------->

<div class="owl-carousel owl-theme owl-loaded owl-drag">
            
       <div class="owl-stage-outer">
         
         <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s;">
           
           <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
           <img src="img/certified.png"
          srcset="img/certified@2x.png 2x,
                  img/certified@3x.png 3x"
          class="certified1">
          <p class="heading1x">
            Certified & Experienced
    Instructors
        </p>
       
          
            </div>
         </div>
         
         <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
         <img src="img/guarantee.png"
          srcset="img/guarantee@2x.png 2x,
                  img/guarantee@3x.png 3x"
          class="certified1">
          <p class="heading1x">
        100% Guarantee to Run 
Batch Schedules
    </p>
   
            </div></div>
           
           <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
           <img src="img/video-tutorials.png"
          srcset="img/certified@2x.png 2x,
                  img/certified@3x.png 3x"
          class="certified1">
          <p class="heading1x">
            Focused on Specialized Technical
 Training in All Verticals
        </p>
        
            </div></div>
           
           <div class="owl-item cloned"><div class="item">
           <img src="img/teacher.png"
          srcset="img/guarantee@2x.png 2x,
                  img/guarantee@3x.png 3x"
          class="certified1">
          <p class="heading1x">
           Blended learning modes
        </p>
            </div></div>
           
           
          
           </div></div><div class="owl-nav disabled">
  
  </div>
  
</div>



</body>
<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
owl.owlCarousel({
    items:2, 
  // items change number for slider display on desktop
  
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});


});
</script>