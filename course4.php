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
        <img src="./img/group 36.png"
     srcset="./img/group 36@2x.png 2x,
             ./img/group 36@3x.png 3x"
     class="Group-36">
    <div> <h1 class="catalog">Course Catalog</h1></div>
    <div> <p class="catalog-p">Top-Ranked and Highly Demanded IT Courses</p></div>
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
        <div class="col-lg-3 col-xlg-3 col-md-3 col-sm-12">
    <h1 class="courses-training-courses">Training Courses</h1></div>
    <div class="col-xlg-7 col-lg-7">
        <input type="text" id="myInput" class="form-control rounded searchbar" onkeyup="myFunction()" placeholder="Search" title="Type in a name">
        
    </div>
    <div class="col-xlg-2 col-lg-2">
       
        
    </div>
   
</div>
  </div>

<section class="container" id="myTable">

	<div class="row" >
    <?php if (isset($pics)) {
        



        foreach ($pics as $pic) {
            $cid = $pic['course_no'];
    ?>
		<div class="col-lg-3 col-md-4 col-xs-6 col-sm-6 thumbxc anch ">
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
    
</section>

<div class="container-fluid training-container2">
   <div class= "row">
      <h1 class="training-text">Why Choose Brillica Services for IT Training </h1>
   </div>
   <div class="row">
      <img src="img/Component 10 – 1.svg"
         class="Component-10-1">
   </div>
   <div class="row align">
      <div class="col-lg-6">
         <img src="img/Component 11 – 1.svg"
            class="green-content">
         <div>
            <p class="t-content">
               We guarantee high-quality training with our  large pool of in-house certified instructors, 
               who bring on-board massive training and education
               industry experience and walk you through the certification success.
            </p>
         </div>
      </div>
      <div class="col-lg-6">
         <img src="img/Component 12 – 1.svg"
            class="green-content2">
         <div>
            <p class="t-content2">
               Every student counts for us and we ensure to conduct our batches as scheduled, irrespective ofthe number of participants. Unlike others, we do
               not postpone or cancel the training because we
               value your decision and time you make out to fulfil your training needs.
            </p>
         </div>
      </div>
   </div>
   <div class="row align">
      <div class="col-lg-6">
         <img src="img/Component 13 – 1.svg"
            class="green-content">
         <div>
            <p class="t-content">
               We concenter our training to develop the industry-demanded technical skills for all 
               verticals rather than sticking to 
               topic-specific training deliveries. We invest 
               dedicated efforts to add rich value to your technical training experience and your profile for making you best-fit for the corporate world.
            </p>
         </div>
         <br>
         <br>
      </div>
      <div class="col-lg-6">
         <img src="img/Component 14 – 1.svg"
            class="green-content2">
         <div>
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
         </div>
      </div>
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