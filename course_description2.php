<?php
include_once 'header.php';
include_once 'header2.php';
include_once 'navbar.php';
include_once 'config.php';
include_once 'floatingbuttons.php';

$id=$_GET['detail'];
$stmt = $conn->prepare("SELECT * FROM course_description where id=?");
$stmt->bind_param('i',$id);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $course1[] = $row;
    }
}

$stmt2 = $conn->prepare("SELECT * FROM c_objectives where id=?");
$stmt2->bind_param('i',$id);
$stmt2->execute();
$result2 = $stmt2->get_result();
if ($result2->num_rows > 0) {
    while ($rowx = $result2->fetch_assoc()) {
        $objective[] = $rowx;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>course</title>
  
</head>
<body>
    <div class="container-fluid"><div class="row">
    <?php
                                    if(isset($course1)){
                                        foreach($course1 as $course1){

                                      

                                ?>   
    <img src="<?=$course1['image']?>"
     class="Group-75">
    
     <h1 class="description-heading"><?=$course1['name'];?></h1>
     <span id="star-span">  <img src="img/star.svg"
     class="star"> <img src="img/star.svg"
     class="star1"><img src="img/star.svg"
     class="star1"><img src="img/star.svg"
     class="star1"><img src="img/star.svg"
     class="star1"></span>
     <div>
     <img src="img/Rectangle 203.svg"
     class="course-line">
     </div>
     <div class="course-bod">
     
     </div>
     <p class="catalog-p1"><?=$course1['course_para'];?></p>
     


    </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-xlg-6">
                <div class="highlights-box">
                    <h1 class="high-heading">Course Highlights</h1>
                    <div class="highlights">
                    <?=$course1['highlights'];?>
                                        </div>
                </div>

                <div class="prerequisite">
                    <h1 class="pre-heading">Pre-Requisite</h1>
                    <p class="pre-para"> 

                    <?=$course1['prerequisite'];?></p>
                </div>
            </div>

            <div class="col-lg-6 col-xlg-6">
                <div class="content-box">
                <h1 class="high-heading2">Course Content</h1>
              <div class="content-2" > <?=$course1['course_content'];?></div>
            </div>
        </div>
    </div>
    </div>
    </div>
<div class="container-fluid">
    <div class="row">
<img src="img/Rectangle 221.png" class="bod-cou">
    </div>
</div>
    <div class="container-fluid">
        <div class="about-course">
            <h1 class="course-head">Course Description</h1>
<div class="row">
<div class="col-lg-5 col-xlg-5">
    <p class="desc-para">
    <?=$course1['description'];?>
    </p>
</div>
<div class="col-lg-2 col-xlg-3">
    <div class="cont-bod"><img src="img/Rectangle 206.svg"
     class=""></div>
</div>
<div class="col-lg-5 col-xlg-5">
    <p class="desc-para1">
    <?=$course1['description2'];?></p>
</div>
        </div>
    </div>
    </div>



<div class="container-fluid obj">
    <div class="row">
        <h1 class="objective">Course Objectives</h1>
        <p class="objective-para">The Python Programming Course at Brillica Services Helps You to :</p>
    </div>
    <div class="row">
    <img src="img/Component 10 – 1.svg"
    class="bar2">
</div>


<div class="row">
                                <?php
                                    if(isset($objective)){
                                        foreach($objective as $objective){

                                      

                                ?>
    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12 thumbxc2 anch" style="margin-bottom:40px">
        <div class="cobod"></div>            <h3 class="c_obj cbv"  ><?=$objective['objective'];?>   </h3>     
			
		
            </div>
         
            <?php
                                        }
                                    }
                                        ?>
                                </div>

                              

</div>  

<div class="container-fluid">
    <div class="row">
        <div class="col-xlg-6 col-lg-6 col-sm-12">
        <img src="img/project-managment-approach.jpg"
     srcset="img/project-managment-approach@2x.jpg 2x,
             img/project-managment-approach@3x.jpg 3x"
     class="project-managment-approach">
        </div>
        <div class="col-xlg-6 col-lg-6 col-sm-12">
        <h1 class="tad">Target Audience</h1>
<p class="sub-h">This course is ideal for :</p>
<p class="par-c">
<?=$course1['audience'];?></p>
        </div>
    </div>
    
                               

</div>
<?php
                                        }
                                    }
                                        ?>
                                         
</body>

  

    <?php
include_once 'footer.php';
    ?>
