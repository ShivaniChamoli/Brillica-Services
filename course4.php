<?php
include_once 'header.php';
include_once 'header2.php';
include_once 'navbar.php';
include_once 'config.php';
include_once 'floatingbuttons.php';

$stmt = $conn->prepare("SELECT * FROM course");
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pics[] = $row;
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>course</title>
  
</head>
<body>
    <div class="container-fluid">
       <div class="row">
        <img src="./img/Group 36.png"
     srcset="./img/Group 36@2x.png 2x ,
             ./img/group 36@3x.png 3x"
     class="Group-36">
     <h1 class="catalog">Course Catalog</h1>
     <p class="catalog-p">Learn Highly demanded IT Training Programs with us. ONLINE | OFFLINE both modes available.</p>
    </div>
    </div>
    
  <div class="container-fluid" id="c">
 <div class="row">
      <h1 class="courses-heading">Top-Ranked & Highly Demanded IT Courses</h1>
      
  </div>
  <div class="row">
    <img src="img/Component 10 – 1.svg"
    class="bar">
</div>
<div class="row">
        <div class="col-lg-3 col-xl-3 col-md-3 col-sm-12">
    <h1 class="courses-training-courses">Training Courses</h1></div>
    <div class="col-xl-7 col-lg-7">
        <input type="text" id="myInput" class="form-control rounded searchbar" onkeyup="myFunction()" placeholder="Search" title="Type in a name">
        
    </div>
    <div class="col-xlg-2 col-lg-2">
       
        
    </div>
   
</div>
  </div>

<div class="container" id="myTable">

	<div class="row" >
    <?php if (isset($pics)) {
        



        foreach ($pics as $pic) {
            $cid = $pic['course_no'];
    ?>
		<div class="col-lg-3 col-md-4 col-xl-3 col-xs-6 col-sm-6 thumbxc anch ">
			<a href="course_description2.php?detail=<?= $cid; ?>">
				<img class="abcimg"  src="<?=$pic['course_img']?>"
                                >
                    <p class="course-col-1" ><?=$pic['course_name']?>  <i class="fa fa-angle-right icon-angle"></i> </p>     
			</a>
		
            </div>

            <?php
                }
            }
            ?>
        
	</div>
    
<br><br><br><br><br><br>
    
</div>

<div class="container-fluid training-container2">
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
<script type="text/javascript">
 
    $(document).ready(function(){
      $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable div").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
    </script>
        
  

    <?php
include_once 'footer.php';
    ?>