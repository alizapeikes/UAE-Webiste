<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>contact form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="contact.css" rel="stylesheet">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>
        <?php include "header.php"; ?>
        <div class="container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="contact">
            <fieldset> 
                <legend>
                    <h3>Have Any Questions?</h3>
                    <h4>We would love to hear from you!</h4></legend>
                
                <label for="first">First Name*</label>
                <input type="text" name="first" id="first" required>
                
                </br>
                <label for="last">Last Name*</label>
                <input type="text" name="last" id="last" required>
                
                </br>
                <label for="email">Email Address*</label>
                <input type="email" name="email" id="email" required>
                
                </br>
                <label for="message">Questions and/or Comments*</label>
                <textarea name="message" id="message" required></textarea>
                
                </br>
                <button type="submit" value="Submit" name="submit" class="submit" id="contact-submit">Submit</button>
            </fieldset>
        </form>
        </div>
        
        
        <?php
            if(filter_has_var(INPUT_POST, 'submit')) {
                $first = $_POST['first'];
                $last = $_POST['last'];
                $email = $_POST['email'];
                $message = $_POST['message'];
            
                require 'PHPMailer-master/PHPMailerAutoload.php';
                $mail = new PHPMailer;
                $mail->isSMTP();
                $mail->SMTPSecure = 'ssl';
                $mail->SMTPAuth = true;
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 465;
                $mail->Username = 'comedubaiuae@gmail.com';
                $mail->Password = 'comedubai123';
                $mail->setFrom('comedubaiuae@gmail.com');
                $mail->addAddress('comedubaiuae@gmail.com');
                $mail->Subject = 'Contact request from: '.$first.' '.$last;
                $mail->Body = 'Email: '.$email.'   Message: '.$message;
                //send the message, check for errors
                if (!$mail->send()) {
                    echo "ERROR: " . $mail->ErrorInfo;
                }
            }
        ?>
        
        
    <script> 
        $(document).ready(function(){
            $("#dialog").dialog({
                autoOpen: false
            })
            $(".submit").click(function() {
                $( "#dialog" ).dialog( "open" );
            });
        });
    </script>    
        
        <!-- Dialog box-->
        <div id="dialog" title="">
        <p>Thank you for contacting ComeDubai! We will get back to you shortly!</p>
        <a href="home.php">Click here to return the home page!</a>
        </div>
        
         <?php include "footer.php"; ?> 
        </body>
</html>