<?php
include 'header.php';
include 'header2.php';
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blogs</title>
  <style>
#text
 {
     display: none;
     }
</style>
</head>
<body>
    <div class="container-fluid">
    <div class="row" 
    >
    <img src="img/Group 70.jpg"
     srcset="img/Group 70@2x.jpg 2x,
             img/Group 70@3x.jpg 3x"
     class="blog">

   <h1 class="Blog1">Blog</h1>
   <p class="blog-p">Explore your learning potentials with Brillica Services.</p>
    </div>
    <div class="row">
        <div class="col-xlg-9 col-lg-9 col-md-9">
            <p class="blog-p2">GCP to AWS Migration: Why and How to 
                Make the Move
                </p>
                <p class="blog-p3">By <span style=" color: #000000;">Nora Winkens</span> on Dec 2, 2020 5:23:19 PM</p>
        </div>
    </div>



    <div class="row">
<div class="col-xlg-9 col-lg-9 ">
    <div class="blog-photo">

    </div>
    <div class="blog-photo-paragraph">
        AWS and GCP are two of the popular public cloud platforms. Although GCP gained momentum recently, AWS remains the dominant player in this market. Data is the backbone of all successful app deployments, analytics workflows, and machine learning practices. While migrating data between the clouds, you first need to understand the location where you will move the data for various use cases, the variety of data you are moving, and the available resources.
    </div>
    <div class="row">
        <button type="button" class="btn btn-dark blog-button"><span class="blog-btn-cr">Continue Reading</span></button> 
    </div>
    <div class="blog-border">
    
    </div>
</div>
    </div>


    <div class="row">
        <div class="col-xlg-9 col-lg-9 ">
            <div class="blog-photo">
        
            </div>
            <div class="blog-photo-paragraph">
            Tableau leverages the power to the enterprise management to see and understand data with utmost
             robustness and scalability and help in taking the right business decisions. For this reason, global organizations and the entire Business Intelligence industry hugely rely on Tableau developers. Now, who are they, what roles and responsibilities do they execute, what skills you need to acquire to become one? How Tableau training can help you achieve your career goal? 
            The article walks you through all this and much more.
            <div width="800px">    <span id="text">
<br><br>
            Who is a Tableau Developer?<br>

A Tableau Developer is the one who develops data visualization solutions to augment business processes. The role requires you to work with co-developers, create tableau dashboard reports, generate BI and visualization reports, take feedbacks and improve systems. The job is ideal for those who have strong business acumen, vast knowledge of mathematics and statistics fundamentals and exemplary data warehousing skills.

What are the responsibilities of a Tableau Developer?

Building Data Analytics Solutions:  A Tableau Developer is entrusted with the core responsibility of devising technical solutions based on the enterprise needs. Translating business requirements and finding innovative solutions to it is the primary role of a proficient Tableau developer.
Testing: Querying databases, identifying issues and conducting tests to troubleshoot them forms an ongoing process through the entire software development project.
OLAP: OLAP stands for Online Analytical Processing. All Tableau developers need to preserve and secure data for which they create tools. OLAP is the technology behind the Business Intelligence apps and software that helps analytics and developers in complex computing calculations, data modelling, making data predictions and conducting trend analysis to facilitate business decisions.
System Enhancement: Constantly evaluating and improving existing business systems is the critical job role of a Tableau Developer, which is expected to be executed with the utmost competency. This requires seamless collaboration with the other teams on-board such that new processes can be streamlined and workflows can be managed well.
Creating Technical Documentation: All completed projects if documented well can help management to draw inferences and also refer to them to overcome future project challenges effectively. Tableau Developers key responsibilities include preparing technical documentation of all successfully executed projects.
Forecasting: Forecasting and storytelling are powerful features of Tableau that helps representing business data like no other BI tool. It empowers users to connect with data personally and deeply analyze it, make close forecasts with the embedded technique called exponential smoothening.
            </span>
            <div class="blog-border">
            
            </div></div>
               
        
           <div class="btn-container"> 
                <button id="toggle" type="button" class="btn btn-dark blog-button"><span class="blog-btn-cr">Continue Reading</span></button>
           </div>   </div>
            </div>
</div>

</body>
</html>

<script>
$(document).ready(function() {
  $("#toggle").click(function() {
    var elem = $("#toggle").text();
    if (elem == "Continue Reading") {
      //Stuff to do when btn is in the read more state
      $("#toggle").text("Read Less");
      $("#text").slideDown();
    } else {
      //Stuff to do when btn is in the read less state
      $("#toggle").text("Continue Reading");
      $("#text").slideUp();
    }
  });
});
</script>



<?php
include 'footer.php';
?>