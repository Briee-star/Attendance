<?php 
require'vendor/autoload.php';

class SendEmail{
    public static function SendMail($to,$subject,$content){

        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("Brittcam3@gmail.com", "Brittany Gayle");
        $email->setSubject($subject);
        $email-> addTo($to);
        $email-> addContent("text/plain",$content);
        //$email-> addCContent("text/html",$content);

        $sendgrid = new\SendGrid($key);

        try{
            $response = $sendgrid->send($email);
            return $response;
        }catch(Exception $e){
            echo 'Email exception Caught :'. $e->getMessage() ."/n";
            return false;
             }
        }
    }
?>