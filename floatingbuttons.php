
<?php
include_once 'header.php';


?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">

</script>
    <style>
        .center {
            position: fixed;
    margin-top:-60px;
    width: 640px;
    height:521px;
   margin-left:500px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    background-color: white;
    z-index: 900;
}

.hideform {
    display: none;
}
.heading-f1{
    width: 100%;
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
 padding-left:0px;
 margin-left:-10px
}
.heading-f{
    width: 100%;
  height: 84px;
  margin-top:-20px;
  background-color: #323398;
}
#l1{
    width: 150px;
  height: 20px;
  margin: 8px 1px 22px 44px;
  object-fit: contain;
  font-family: 'Segoe UI semibold';
  font-size: 15px;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: right;
  color: #000000;  
}
#inpt{
    width: 281px;
  height: 38px;
  margin: 5px 0 15px 29px;
  padding: 8px 2px 9px 17px;
  object-fit: contain;
  border: solid 1px #8c8989;
  background-color: #ffffff;
  color:#000000;
}
#submit{
    width: 281px;
  height: 39px;
  margin: 5px 0 0 228px;
  padding: 7px 109px 6px 110px;
  object-fit: contain;
  background-color: #323398;
}

#close{
  font-size: 45px;
  margin: -65px 0 0 0px;
  object-fit: contain;
  width: 50px;
  height: 50px;
  float:right
  
}
::placeholder {
  color:#000000;
  font-size:14px;
  opacity: 0.6 !important; 
}
.px{
  color:#000000;
  font-size:14px;
  opacity: 0.6 !important; 
}
.fx{
  margin-top:50px;
  font-family: 'Segoe UI';
}
.inpt2{
  width: 281px;
  height: 38px;
  margin: 5px 0 15px 29px;
  padding: 8px 2px 9px 17px;
  object-fit: contain;
  border: solid 1px #8c8989;
  background-color: #ffffff;
  color:#000000;
}

@media(max-width:900px){
  
  .center {
            position: fixed;
   
    width: 95%;
    height: fit-content;
   margin-top:-150px;
   margin-left:10px;
   margin-right: 10px;

    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    background-color: white;
    z-index: 900;
}


.hideform {
    display: none;
}
.heading-f1{
    width: 100%;
  height: 37px;
  font-family: 'Segoe UI';
  font-size: 24px;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: center;
  color: #ffffff;
 padding-top:20px;
 padding-left:0px;
margin-left: auto;
margin-right: auto;
}
.heading-f{
    width: 100%;
  height: 64px;
  margin-top:-20px;
  margin-bottom: -30px;
  background-color: #323398;
}
#l1{
    width:auto;
  height: 20px;
  margin: 8px 1px 22px 20px;
  object-fit: contain;
  font-family: 'Segoe UI semibold';
  font-size: 15px;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: left;
  color: #000000;  
}
#inpt{
    width: 90%;
  height: 38px;
  margin: -10px 0 15px 20px;
  padding: 8px 2px 9px 17px;
  object-fit: contain;
  border: solid 1px #8c8989;
  background-color: #ffffff;
  color:#000000;
}
#submit{
    width: 90%;
  height: 39px;
  margin: 5px 0 0 20px;
  margin-bottom: 40px;
  padding: 7px 109px 6px 110px;
  object-fit: contain;
  background-color: #323398;
}

#close{
  font-size: 45px;
  margin: -65px 0 0 0px;
  object-fit: contain;
  width: 50px;
  height: 50px;
  float:right
  
}
::placeholder {
  color:#000000;
  font-size:14px;
  opacity: 1; 
}
.fx{
  margin-top:50px;
  font-family: 'Segoe UI';
}
.inpt2{
  width: 90%;
  height: 38px;
  margin: -10px 0 15px 20px;
  padding: 8px 2px 9px 17px;
  object-fit: contain;
  border: solid 1px #8c8989;
  background-color: #ffffff;
  color:#000000;
}
}
    </style>
</head>
<html>
  <div class="cen2">
<div class="center hideform">
    <div class="heading-f"><h1 class="heading-f1">Enquiry Form </h1>
    <img id="close" src="img/group 2268.svg"
     
     >
    </div>
  
    <div class="fx">
    <form id="fx1">
       <label id="l1"> Name</label>
        <input type="text" name="name" id="inpt" value="" placeholder="Name">
        <br>
        <label id="l1"> Email</label>
        <input type="text" name="email" id="inpt" value="" placeholder="Email" required>
        <br>
        <label id="l1">Mobile</label>
        <input type="text" name="phone" id="inpt" value="" placeholder="Mobile" required>
        <br>
        <label for="service" id="l1">Our Service</label>
        <select id="country" class="inpt2" name="country">
        <option value="" disabled selected class="px">Service you are interested</option>
                <option value="Training">Technology Training</option>
                <option value="Web Development">Web and App Development</option>
                <option value="Internship">Internship</option>
                <option value="Faculty Development">Faculty Development</option>
                <option value="Recruitment">Recruitment</option>
        </select>
        <br>
        <label for="country"  id="l1">Country</label>      
        
            <select id="country" class="inpt2" name="country">
            <option value="" disabled selected class="px">Select Country</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>





        <input type="submit" value="Submit" id="submit">
    </form>
    
</div>
</div>
  </div>
<div class='float3'>
                <i class="fas fa-copy fa-2x my-float3" id="show"></i>
                </div>

    <div class="float">
<a href="https://api.whatsapp.com/send?phone=91 8882140688"  target="_blank">
<i class="fab fa-whatsapp my-float"></i>
</a>
    </div>
<div class="float2">
<a href="mailto:info@brillicaservices.com" >
                <i class="fa fa-envelope fa-2x my-float2"></i>
                </a>

</div>

</html>
<script>
$(document).ready(function(){
$('#show').on('click', function () {
    $('.center').show();
        
        
});

$('#close').on('click', function () {
    $('.center').hide();
    $('#show').show();
})



$("#fx1").on('submit', function(e){
         
     e.preventDefault();
     $.ajax({
       type: 'POST',
       url: 'enquirypopup.php',
       data: new FormData(this),
       contentType: false,
       cache: false,
       processData:false,
       success:function(data){
       
           var obj=JSON.parse(data);
                     if(obj.msg=='register')
                       {
                          alert("Thankyou for the enquiry, we will get back to you shortly!!...");
                        
                       }
                  
                 
       },
               
     });
});

});
</script>