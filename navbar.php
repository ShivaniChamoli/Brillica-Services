<?php
 include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
  <style type="text/css">
   .navbar{
      margin-bottom: 0px !important;
      border-radius: 0px !important;
  }
    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
    .bxcc{
      background-color: black !important;
    }
    .navbar li a:hover{
      color:#749b3f !important;
    }
 
    .navbar-nav{
      height:25px !important;
    }
  
    .navbar-nav .nav-item .nav-link:hover{
      color:#749b3f !important;
    }
      .dropdown-menu li{
        position: relative !important;
      }
      .dd{
        background-color: black !important;
      }
      .cd{
        background-color: white !important;
        
      }
    .dd  .cd li a{
        color:black !important; 
        font-family:'Segoe UI semibold' !important;
        font-size:16px!important;
      }
      .dd .cd li a:hover{
        background-color:#749b3f !important;
        transition: transform 0.3s ease ;
        transform: translateX(2px);
        color:white !important;
        
      }
      .dd li a{
        color:white !important;
        font-family:'Segoe UI semibold'!important;
        font-size:19px !important;
        margin-bottom:5px;
      }
      .dd li a:hover{
        color:#749b3f !important;
        transition: transform 0.3s ease !important;
        transform: translateX(2px) !important;
        background-color: black !important;
        
      }
      .dropdown-menu .submenu{ 
        display: none !important;
        position: absolute !important;
        left:100%; top:-7px !important;
      }
      .dropdown-menu .submenu-left{ 
        right:100%; left:auto;
      }
      .dropdown-toggle:hover{
        display:block;
      }
    
      .dropdown-menu > li:hover{ background-color: black !important;
        color:white !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important; 
    }
      .dropdown-menu > li:hover > .submenu{
        display: block !important; 
      }
      .mnp{
        width:101% !important;
      }
    	
    .nav-item{
      color:white !important;
      display: block !important;
      font-weight:600 !important;
      margin-top: -19px !important;
      text-align: center;
      font-size:16px !important;
     margin-left: 13% !important;
    
         }
    
    
    .navbar .nav-item:hover .dd
    { 
      display: block !important;
     }
    }

  
  
    /* ============ desktop view .end// ============ */
    
    /* ============ small devices ============ */
    @media (max-width: 991px) {
        .dropdown-menu.dd {
            background: black;
      }
    .nav-link{
      color:white;
      margin-left:auto;
      margin-right:auto;
      display: block;
      font-weight:600 ;
      margin-top: 5px;
      width:100%;
      text-align:left;
     
    }
   .xnp:hover{
     color:#749b3f;
   }
    .dropdown-menu .dropdown-menu{
        margin-left:0.7rem; margin-right:0.7rem; margin-bottom: .5rem;
    }
    .dd{
        background-color: black;
        
      }
      .bxcc{
      background-color: black;
    }
      .dropdown-menu li{
        position: relative;
      }
      .dd{
        background-color: black;
      }
      .cd{
        background-color: white;
      }
      .dd .cd li a{
        color:black ;
        font-family:'Segoe UI semibold' !important;
      }
      .dd .cd li a:hover{
        background-color:#749b3f !important;
        transition: transform 0.3s ease !important;
        transform: translateX(2px) !important;
        color: rgb(255, 254, 254) !important;
        color:white !important;
      }
      .dd li a{
        color:white !important;
        font-family:'Segoe UI semibold'!important;
      }
      .dd li a:hover{
        color:#749b3f !important ;
        transition: transform 0.3s ease !important;
        transform: translateX(2px) !important;
        background-color: black !important;
        
      }
      .dropdown-menu .submenu{ 
        display: none ;
        position: absolute !important;
        left:100% !important; top:-7px !important;
      }
      .dropdown-menu .submenu{ 
        
        position: relative !important;
        left:0px !important; top:-7px !important;
        background-color:#749b3f !important;
        color:white!important;
      }
    
      .dropdown-menu > li:hover{ background-color: black !important;
        color:white !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif!important;
    }
      .dropdown-menu > li:hover > .submenu{
        display: block !important;
      }
      
   
.nav-item{
      color:white;
      margin-left:auto !important;
      margin-right:auto !important;
      display: block !important;
      font-weight:600!important ;
      margin-top: 5px !important;
      width:100% !important;
      text-align: left !important;
    }
} 	
    /* ============ small devices .end// ============ */
    
    </style>
    
    
    <script type="text/javascript">
    //	window.addEventListener("resize", function() {
    //		"use strict"; window.location.reload(); 
    //	});
    
    
      document.addEventListener("DOMContentLoaded", function(){
            
    
          /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element){
          element.addEventListener('click', function (e) {
            e.stopPropagation();
          });
        })
    
    
    
        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {
    
          // close all inner dropdowns when parent is closed
          document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
            everydropdown.addEventListener('hidden.bs.dropdown', function () {
              // after dropdown is hidden, then find all submenus
                this.querySelectorAll('.submenu').forEach(function(everysubmenu){
                  // hide every submenu as well
                  everysubmenu.style.display = 'none';
                });
            })
          });
          
          document.querySelectorAll('.dropdown-menu').forEach(function(element){
            element.addEventListener('click', function (e) {
        
                let nextEl = this.nextElementSibling;
                if(nextEl && nextEl.classList.contains('submenu')) {	
                  // prevent opening link if link needs to open dropdown
                  e.preventDefault();
                  console.log(nextEl);
                  if(nextEl.style.display == 'block'){
                    nextEl.style.display = 'none';
                  } else {
                    nextEl.style.display = 'block';
                  }
    
                }
            });
          })
        }
        // end if innerWidth
    
      }); 
      // DOMContentLoaded  end
    </script>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bxcc">
  
  <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse mn" id="main_nav">
    
  
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <a class="nav-link" style="color:white" href="./aboutus.php">ABOUT&nbspBRILLICA</a> </li>
      
      <li class="nav-item dropdown" href="./index.php">
        <a class="nav-link dropdown-toggle" style="color:white" href="#" data-toggle="dropdown">OUR SERVICES</a>
          <ul class="dropdown-menu dd">
            <li><a class="dropdown-item" href="./index.php"> Our Services</a></li>
          <li><a class="dropdown-item" href="./course4.php"> Technology Training </a></li>
          <li><a class="dropdown-item" href="./webandapp.php">Web and App Development </a></li>
          <li><a class="dropdown-item" href="#"> Recruitment Service </a></li>
          <li><a class="dropdown-item" href="./internship.php">Internship</a></li>
          <li><a class="dropdown-item" href="./facultydevelopment.php"> Faculty Development </a>
          </li></ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"style="color:white"  href="#" data-toggle="dropdown" > COURSE CATALOG  </a>
          <ul class="dropdown-menu dd">
            <li><a class="dropdown-item" href="./course4.php"> Our Courses</a></li>
          <li><a class="dropdown-item" href="#"> Data Science Training Program </a>
             <ul class="submenu dropdown-menu cd">
              <li><a class="dropdown-item" href="course_description2.php?detail=1">Python Programming</a></li>
              <li><a class="dropdown-item" href="course_description2.php?detail=2">Machine learning using python</a></li>
              <li><a class="dropdown-item" href="course_description2.php?detail=3">AI and Deep learning</a></li>
              <li><a class="dropdown-item" href="course_description2.php?detail=4">OpenCV Training</a></li>
           </ul>
          </li>
          <li><a class="dropdown-item" href="#">Data Analytics training program</a>
             <ul class="submenu dropdown-menu cd">
              <li><a class="dropdown-item" href="course_description2.php?detail=5">R Using Python</a></li>
              <li><a class="dropdown-item" href="course_description2.php?detail=6">SAS Training Course</a></li>
              <li><a class="dropdown-item" href="course_description2.php?detail=7">Tableau</a></li>
              <li><a class="dropdown-item" href="course_description2.php?detail=8">Microsoft Power
                BI Training Program</a></li>
                <li><a class="dropdown-item" href="course_description2.php?detail=9">Advance Excel
                  Training Program</a></li>
                  <li><a class="dropdown-item" href="course_description2.php?detail=10">Big Data Hadoop 
                    Administration Training
                    Course</a></li>
           </ul>
          </li>
          <li><a class="dropdown-item" href="#"> Cloud Computing</a>
             <ul class="submenu dropdown-menu cd">
              <li><a class="dropdown-item" href="course_description2.php?detail=11">AWS Training and certification courses</a></li>
              <li><a class="dropdown-item" href="course_description2.php?detail=12">Microsoft Azure
                Training</a></li>
           </ul>
          </li>
          <li><a class="dropdown-item" href="#"> Agile and Scrum</a>
            <ul class="submenu dropdown-menu cd">
             <li><a class="dropdown-item" href="course_description2.php?detail=13">Certified Scrum 
              Master Training</a></li>
          </ul>
         </li>
         <li><a class="dropdown-item" href="#">Project Management</a>
          <ul class="submenu dropdown-menu cd">
           <li><a class="dropdown-item" href="course_description2.php?detail=21">PRINCE2 Foundation 
            & Practitioner
            Certification Training</a></li>
            <li><a class="dropdown-item" href="course_description2.php?detail=22">ITIL v4 Training</a></li>
        </ul>
       </li>
       <li><a class="dropdown-item" href="#">Development</a>
        <ul class="submenu dropdown-menu cd">
         <li><a class="dropdown-item" href="course_description2.php?detail=23">Java Development</a></li>
          <li><a class="dropdown-item" href="course_description2.php?detail=24">Full Stack Web Development</a></li>
      </ul>
     </li>

     <li><a class="dropdown-item" href="#">Specialised Training</a>
      <ul class="submenu dropdown-menu cd">
       <li><a class="dropdown-item" href="course_description2.php?detail=25">Certified Blockchain Developer-Ethereum</a></li>
        <li><a class="dropdown-item" href="course_description2.php?detail=25">Certified Blockchain Developer Hyperledger Fabric(CBDH) Training</a></li>
        <li><a class="dropdown-item" href="course_description2.php?detail=27">Certified Blockchain Foundation</a></li>
        <li><a class="dropdown-item" href="course_description2.php?detail=28">Certified Blockchain Solution Architect ( CBSA ) Training </a></li>
        <li><a class="dropdown-item" href="course_description2.php?detail=29">IBM - SPSS Training1</a></li>
        <li><a class="dropdown-item" href="course_description2.php?detail=30">IOT Training Course</a></li>
    </ul>
   </li>
          <li><a class="dropdown-item" href="#"> Cyber Security</a></li>
          
          </ul>
</li>
     
      <li class="nav-item"> <a class="nav-link" style="color:white" href="./blog3.php">BLOG</a> </li>
      <li class="nav-item"> <a class="nav-link" style="color:white" href="https://pages.razorpay.com/pl_DpExGgOHtCpfuW/view">PAY&nbspONLINE</a> </li>
      <li class="nav-item" > <a class="nav-link" style="color:white" href="./contactus.php">CONTACT&nbspUS</a> </li>
    </ul>
  
  
  
    </div> <!-- navbar-collapse.// --> 
</nav>

</body>
</html>


