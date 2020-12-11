<?php 
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];

        $to = "info@centerforlibertyng.com";
        $subject =$subject.' - Contact Form';
        $message = $msg;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From:'.$name.' - Contact Form<'.$email.'>' . "\r\n";
$headers .= "Reply-To: The Sender <'.$email.'>\r\n"; 
$headers .= "X-Priority: 3\r\n";
$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

        if($name&&$email){
            if(mail($to, $subject, $message, $header)){
                echo"<h1>Sent successfully! Thank You"." ".$name.",  We will contact you shortly!</h1>";
            }
            else{
                echo "Sorry, Message wasn't sent successful!";
            }
    
        }else{
            echo "Sorry, Message wasn't sent successful! Kindly fill in Name and Email input";
        }


    

?>