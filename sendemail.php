<?php 
require'vendor/autoload.php';

class SendEmail{
    public static function SendMail($to,$subject,$content){
        $key = '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';

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