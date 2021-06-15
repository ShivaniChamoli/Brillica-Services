<?php
    use PHPMailer\PHPMailer\PHPMailer;
    
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

require_once 'config.php';

session_start();


if(isset($_POST['phone'])&&isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['course']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $course=$_POST['course'];
    

    require 'vendor/autoload.php';
 
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
 
    try {
       //Server settings
       // $mail->SMTPDebug = 4;                      // Enable verbose debug output
       $mail->isSMTP();                                            // Send using SMTP
       $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
       $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
       // $mail->Username   = 'user@example.com';
       $mail->Username   = 'phpuserphp@gmail.com';//                        // SMTP username
       $mail->Password   = 'phpuserphp@2020'; //                               // SMTP password
       $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
       $mail->Port       =  587;
 
       //Recipients
       $mail->setFrom($email, 'donotreply.brillicaservices@enquiry.com');//
       $mail->addAddress('info@brillicaservices.com', '');     // Add a recipient
     
       
       $mail->isHTML(true);                                  // Set email format to HTML
       $mail->Subject = 'BRillica Services Enquiry'; //
       $mail->Body    = '<html>
 <head>
     <title></title>
     <link href="https://svc.webspellchecker.net/spellcheck31/lf/scayt3/ckscayt/css/wsc.css" rel="stylesheet" type="text/css" />
 </head>
 <body style="cursor: auto;">

 <table border="1" cellpadding="1" cellspacing="1" style="height:133px; width:406px">
 <tbody>
    
     <tr>
         <td style="width: 126px;"><strong>NAME</strong></td>
         <td style="width: 268px;">'.$name.'</td>
     </tr>
     
     
 <tr>
 <td style="width: 126px;"><strong>EMAIL</strong></td>
 <td style="width: 268px;">'.$email.'</td>
</tr>
<tr>
<td style="width: 126px;"><strong>COURSE INTERESTED</strong></td>
<td style="width: 268px;">'.$course.'</td>
</tr>
<tr>
<td style="width: 126px;"><strong>PHONE NUMBER</strong></td>
<td style="width: 268px;">'.$mobile.'</td>
</tr>
     
 </tbody> 
</table>
</body>
</html>
';
    
     




       $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
       if($mail->send())
       {
             // echo "successfully sendcheck";
       }
       else
       {
          echo "email not send";
       }
    } catch (Exception $e) {
       echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }



    
    
            $stmt=$conn->prepare("INSERT INTO course_enquiry(name,email,phone,course) VALUES (?,?,?,?)" );
            $stmt->bind_param('ssss',$name,$email,$mobile,$course);
            if($stmt->execute()){
                
                
                $response['msg']='register';
               
            
            
        }
         
    }   
        else{
            $response['msg']='Something went wrong';
        
     }
    echo json_encode($response);


?>
