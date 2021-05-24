<?php
include 'header.php';
include 'header2.php';
include 'navbar.php';
include 'floatingbuttons.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blogs</title>
  <style>
#more {display: none;}
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
    </div>
    <div class="container-fluid">
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
    <div class="blog-photo-paragraph more">
        AWS and GCP are two of the popular public cloud platforms. 
        Although GCP gained momentum recently, 
        AWS remains the dominant player in this market. 
        Data is the backbone of all successful app deployments, analytics workflows,
        and machine learning practices. While migrating data between the clouds, 
        you first need to understand the location where you will move the data for various use cases, the variety of data you are moving, and the available resources.
        AWS and GCP are two of the popular public cloud platforms. 
        Although GCP gained momentum recently, 
        AWS remains the dominant player in this market. 
        Data is the backbone of all successful app deployments, analytics workflows,
        and machine learning practices. While migrating data between the clouds, 
        you first need to understand the location where you will move the data for various use cases, the variety of data you are moving, and the available resources.
    </div>
    <div class="blog-border">
    
    </div>
    </div>
</div>
    </div>


    <div class="container-fluid">
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
    <div class="blog-photo-paragraph more">
        AWS and GCP are two of the popular public cloud platforms. 
        Although GCP gained momentum recently, 
        AWS remains the dominant player in this market. 
        Data is the backbone of all successful app deployments, analytics workflows,
        and machine learning practices. While migrating data between the clouds, 
        you first need to understand the location where you will move the data for various use cases, the variety of data you are moving, and the available resources.
        AWS and GCP are two of the popular public cloud platforms. 
        Although GCP gained momentum recently, 
        AWS remains the dominant player in this market. 
        Data is the backbone of all successful app deployments, analytics workflows,
        and machine learning practices. While migrating data between the clouds, 
        you first need to understand the location where you will move the data for various use cases, the variety of data you are moving, and the available resources.
    </div>
    <div class="blog-border">
    
    </div>
    </div>
</div>
    </div>


</body>
</html>
<?php
include 'footer.php';
?>

<script>
$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 100;  // How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Continue Reading";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
</script>