<!DOCTYPE html>

          <?php
        
              require 'phpmailer/PHPMailerAutoload.php';
                    $email ="";                    
                    $password ="";
                    $email="";
                    $message ="";
                    $subject ="";

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email;

                    $mail->Password = $password;

                    $mail->setFrom($email,$email);

                    $mail->addReplyTo($email,$email);

                    $mail->addAddress($to_id);

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);

                    if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
                       
                           header("location:../");
                           
                           
                    }
               
        ?>
