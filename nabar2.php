<?php
 include 'config.php';
$stmt = $conn->prepare("SELECT * FROM course_category");
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $course1[] = $row;
    }
}

$stmtd = $conn->prepare("SELECT * FROM course_description");
$stmtd->execute();
$resultd = $stmtd->get_result();
if ($resultd->num_rows > 0) {
    while ($rowd = $resultd->fetch_assoc()) {
        $course2[] = $rowd;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>navbar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
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
    <a href="./services.php">OUR SERVICES</a>
    <div class="sub-menu-1">
    <ul>
       <li class="hover-me">
         <a href="./course4.php">Technology Training</a>
         
       </li>
    <ul>
       <li class="hover-me">
         <a href="#">Web and App Development Services</a>
         
       </li>
       <li class="hover-me">
        <a href="#">Recruitment Services</a>
        
     
      </li>
      <li class="hover-me">
        <a href="#">
Internship</a>
        
     
      </li>
      <li class="hover-me">
        <a href="#">
Faculty Development Program</a>
        
     
      </li>
    
     </ul>
   </div>
   
  </li>
  <li>
   <a href="./course4.php" class="green-bar">COURSE CATALOG</a> 
   <div class="sub-menu-1">
     <ul>
         <?php 
            if(isset($course1)){
                foreach($course1 as $course1){
                    $token=$course1['category_token'];
         ?>
       <li class="hover-me">
         <a href="#"><?=$course1['category_name']?></a><i class="fa fa-angle-right"></i>
         <div class="sub-menu-2">
          <ul>
<?php

        $stmt2 = $conn->prepare("SELECT * FROM course_description where category=?");
        $stmt2->bind_param('i',$token);
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) {
                $t[] = $row2;
            }
        } 
        foreach($t as $t){

?>

            <li href="./course_description2.php?id=1">
            
            <?=$t['name']?>
        
        
        </li>
        <?php
                }
            
 ?>
          </ul>
         </div>
       </li>
       <?php
                }
            }
 ?>
     </ul>
   </div>
  </li>
  <li>
  <a href="contactus.php">CONTACT US</a>

  </li>
  <li>
    <a href="./blog.php">BLOG</a>
   
  </li>

</ul>
</div>
</body>
</html>