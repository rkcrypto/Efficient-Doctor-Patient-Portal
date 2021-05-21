<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/SMTP.php';
require 'vendor/autoload.php';


$mail = new PHPMailer(true);

try { 
    $mail->SMTPDebug = 2;                     
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'rajkumarmaurya7644@gmail.com';                     
    $mail->Password   = 'Rajkumar@123';  
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' =>false,
        'verify_peer_name' =>false,
        'allow_self_signed'=> true
        )
        );                             
    $mail->SMTPSecure = 'ssl';         
    $mail->Port       = 465;                                    

    
    $mail->setFrom('rajkumarmaurya7644@gmail.com');
   // $email = $_SESSION['pemail'];
   $email=$_SESSION['pemail'] ;
    $mail->addAddress($email);    
        $pname= $_SESSION['username'];
        $dname=$_SESSION['dname'];
        $dfees=$_SESSION['fees'];
        $contact=$_SESSION['contact'];
        $category=$_SESSION['category'];
        $time=$_SESSION['time'];
        $date=$_SESSION['date'];
    $mail->isHTML(true);                                 
    $mail->Subject = 'Efficient Doctor Patient Portal';
    $mail->Body    = ' Hello '.$pname.'<br> Your Appointment is Booked with Doctor   '.$dname.'<br> Time:'.$time.'<br> Date:'.$date.'<br> Fees:'.$dfees.'<br> Contact No.:'.$contact.'<br> category:'.$category.'<br><br><br>Thank You!!!';
   
   

    $mail->send();
    echo "<script>alert('Appointment Booked Successfully & Mail Sent to your mail'); document.location='appointmentbooking.php'</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
