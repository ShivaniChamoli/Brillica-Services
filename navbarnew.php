

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
        color: rgb(255, 254, 254);
        
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
    	
    .nav-item{
      color:white !important;
      margin-left:auto !important;
      margin-right:auto !important;
      display: block !important;
      font-weight:600 !important;
      margin-top: -10px !important;
      width:280px !important;
      text-align: center !important;
      font-size:19px !important;
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
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="main_nav">
    
  
    <ul class="navbar-nav">
      <li class="nav-item active"> <a class="nav-link" style="color:white" href="./aboutus.php">ABOUT BRILLICA</a> </li>
      
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
      <li class="nav-item" > <a class="nav-link" style="color:white" href="./contactus.php">CONTACT US</a> </li>
      <li class="nav-item"> <a class="nav-link" style="color:white" href="./blog3.php">BLOG</a> </li>
    </ul>
  
  
  
    </div> <!-- navbar-collapse.// --> 
</nav>

</body>
</html>






<!--html code
-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <div class="menubar">
<ul>
  <li class="active">
    <a href="./aboutus.php">
    ABOUT BRILLICA
  </a></li>
  <li>
    <a href="./index.php">OUR SERVICES</a>
    <div class="sub-menu-1">
    <ul>
       <li class="hover-me">
         <a href="./course4.php">Technology Training</a>
         
       </li>
    <ul>
       <li class="hover-me">
         <a href="./webandapp.php">Web and App Development Services</a>
         
       </li>
       <li class="hover-me">
        <a href="#">Recruitment Services</a>
        
     
      </li>
      <li class="hover-me">
        <a href="./internship.php">
Internship</a>
        
     
      </li>
      <li class="hover-me">
        <a href="./facultydevelopment.php">
Faculty Development Program</a>
        
     
      </li>
    
     </ul>
   </div>
   
  </li>
  <li>
   <a href="./course4.php" class="green-bar">COURSE CATALOG</a> 
   <div class="sub-menu-1">
     <ul>
       <li class="hover-me">
         <a href="">Data Science Training program</a><i class="fa fa-angle-right"></i>
         <div class="sub-menu-2">
          <ul>
        <li><a href="course_description2.php?detail=1" class="aa1">Python Programming</a></li>
            <li><a href="course_description2.php?detail=2" class="aa1">Machine learning using python</a></li>
            <li><a href="course_description2.php?detail=3" class="aa1">AI and Deep learning</a></li>
            <li><a href="course_description2.php?detail=4" class="aa1">OpenCV Training</a> </li>
          </ul>
         </div>
       </li>
       <li class="hover-me">
        <a href="#">Data Analytics training program</a><i class="fa fa-angle-right"></i>
        <div class="sub-menu-2">
          <ul>
            <li><a href="course_description2.php?detail=5" class="aa1">R Using Python</a></li>
            <li><a href="course_description2.php?detail=6" class="aa1">SAS Training Course</a></li>
            <li><a href="course_description2.php?detail=7" class="aa1">Tableau</a></li>
            <li><a href="course_description2.php?detail=8" class="aa1">Microsoft Power
              BI Training Program</a></li>
              <li><a href="course_description2.php?detail=9" class="aa1">Advance Excel
                Training Program</a></li>

                <li><a href="course_description2.php?detail=10" class="aa1">Big Data Hadoop 
                  Administration Training
                  Course</a></li>
          </ul>
        </div>
     
      </li>
      <li class="hover-me">
        <a href="#">Cloud Computing</a><i class="fa fa-angle-right"></i>
        <div class="sub-menu-2">
          <ul>
            <li><a href="course_description2.php?detail=11" class="aa1">AWS Training and certification courses</a></li>
            <li><a href="course_description2.php?detail=12" class="aa1">Microsoft Azure
              Training</a></li>
            
          </ul>
        </div>
     
      </li>
      <li class="hover-me">
        <a href="#">Agile and Scrum</a><i class="fa fa-angle-right"></i>
        <div class="sub-menu-2">
          <ul>
            <li><a href="course_description2.php?detail=13" class="aa1">Certified Scrum 
              Master Training</a></li>
            
          
          </ul>
        </div>
     
      </li>
      <li class="hover-me">
        <a href="#">Project Management</a><i class="fa fa-angle-right"></i>
        <div class="sub-menu-2">
          <ul>
            <li><a href="course_description2.php?detail=21" class="aa1">PRINCE2 Foundation 
              & Practitioner
              Certification Training</a></li>
            <li><a href="course_description2.php?detail=22" class="aa1">ITIL v4 Training</a></li>
          </ul>
        </div>
     
      </li>
      <li class="hover-me">
        <a href="#">Development</a><i class="fa fa-angle-right"></i>
        <div class="sub-menu-2">
          <ul>
            <li><a href="course_description2.php?detail=23" class="aa1">Java Development</a></li>
            <li><a href="course_description2.php?detail=24" class="aa1">Full Stack Development Certification</a> </li>
          </ul>
        </div>
     
      </li>
      <li class="hover-me">
        <a href="#">Specialized Training</a><i class="fa fa-angle-right"></i>
        <div class="sub-menu-2">
          <ul>
            <li> <a href="course_description2.php?detail=25" class="aa1">Certified Blockchain Developer-Ethereum</a></li>
            <li> <a href="course_description2.php?detail=26" class="aa1">Certified Blockchain Developer Hyperledger Fabric(CBDH) Training</a></li>
            <li> <a href="course_description2.php?detail=27" class="aa1">Certified Blockchain Foundation</a> </li>
            <li> <a href="course_description2.php?detail=28" class="aa1">Certified Blockchain Solution Architect ( CBSA ) Training </a></li>
            <li> <a href="course_description2.php?detail=29" class="aa1"> IBM - SPSS Training1</a></li>
            <li> <a href="course_description2.php?detail=30" class="aa1">IOT Training Course</a></li>
          </ul>
        </div>
     
      </li>
      <li class="hover-me">
        <a href="#">Cyber Security</a>
        
     
      </li>
     </ul>
   </div>
  </li>
  <li>
  <a href="contactus.php">CONTACT US</a>

  </li>
  <li>
    <a href="./blog3.php">BLOG</a>
   
  </li>
 
</ul>
</div>
</body>
</html>



