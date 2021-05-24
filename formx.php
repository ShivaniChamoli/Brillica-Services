<?php
include 'header.php';
?>

<head>
    <style>
        .center{
         width: 940px;
  height: 521px;
  margin: 72px 0 0;
  padding: 159px 127px 58px 97px;
  object-fit: contain;
        }
.heading-f1{
    width: 370px;
  height: 37px;
  font-family: 'Segoe UI';
  font-size: 28px;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #ffffff;
 padding-top:20px;
 padding-left:120px;
}
.heading-f{
    width: 632px;
  height: 84px;
  background-color: #323398;
}
#l1{
    width: 200px;
  height: 20px;
  margin: 8px 1px 22px 64px;
  object-fit: contain;
  font-family: 'Segoe UI';
  font-size: 20px;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: left;
  color: #000000;  
}
#inpt{
    width: 281px;
  height: 37px;
  margin: -40px 0 13px -29px;
  padding: 8px 224px 9px 17px;
  object-fit: contain;
  border: solid 1px #8c8989;
  background-color: #ffffff;
}
#submit{
    width: 281px;
  height: 39px;
  margin: 21px 0 0 229px;
  padding: 7px 109px 6px 110px;
  object-fit: contain;
  background-color: #323398;
}
        </style>
</head>



<div class="center hideform">
    <div class="heading-f"><h1 class="heading-f1">Enquiry Form </h1><span id="close" class="bi bi-x" style="float: right;"></span></div>
    <div class="fx">
    <form action="">
       <label id="l1"> Name</label>
        <input type="text" name="firstname" id="inpt" value="">
        <br>
        <label id="l1"> Email</label>
        <input type="text" name="email" id="inpt" value="">
        <br>
        <label id="l1">Mobile</label>
        <input type="text" name="Mobile" id="inpt" value="">
        <br>
        <label id="l1"> Services you are interested </label>
       
         <input type="text" name="service" id="inpt" value="">
        <br>
        <label id="l1">Country </label>
        <input type="text" name="country" id="inpt" value="">
        <input type="submit" value="Submit" id="submit">
    </form>
</div>
</div>
<div class='float3'>
                <i class="fab fa-wpforms fa-2x my-float3" id="show"></i>
                </div>