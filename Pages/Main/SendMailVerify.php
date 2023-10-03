<?php
    use PHPMailer\PHPMailer\PHPMailer;
    function SendMail($fullName ,$email,$password,$hash) {
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $emailHost = "danghieu140701@gmail.com";
        $emailPasswordHost = "gulmeaqxkntfjhpn";
        $mail = new PHPMailer(true);    
        try{
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = $emailHost;
            $mail->Password = $emailPasswordHost;
            $mail->Port = 587;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            
            $mail->isHTML(true);
            $mail->setFrom($emailHost , 'AppStore Admin');
            $mail->addAddress($email);
            $mail->Subject = "Sign Up | Verification";
            $mail->Body = '<div style="text-align: center;">
            <header style="background-color: #1fa9b8;">
            <h1 style="color: white; padding: 50px; margin: 0;">AppStore</h1>
            </header>
            <div style="text-align:center;font-size:20px;background-color:white;padding:100px 100px;">
            <h3>Hi '.$fullName.' thanks for signing up!</h3>
            <p>You have requested to sign up for a classroom account according to the information</p>
            <div style="border:2px dashed #1fa9b8;width:30%;margin: auto; text-align: left; padding:10px 15px;">
            <p><b>Email: </b> '.$email.' </p>
            <p><b>Password: </b> '.$password.'</p>
            </div>
            <p>Please click button bellow to complete registration</p>
            <button style="background-color:#38c4d3;border:none;border-radius:5px;padding:10px 20px;">
            <a style="color:white;text-decoration: none;"
            href="http://localhost:8888/Web/Pages/Main/VerifiedEmailForSignUp.php?email='.$email.'&hash='.$hash.'">Verification</a></button>
            <p style="color:red;">*This email is valid only within 10 minutes</p>
            <p>If it\'s not you, please ignore this email</p>
            </div><footer style="background-color:#1fa9b8;color:white;padding:30px;"><p>&copy; Copyright</p></footer></div>';
            $mail->send();
        }catch(Exception $e) {
            echo $e->getMessage();
        }
    }
    function SendMailResetPassword($email , $fullName, $hash) {
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $emailHost = "danghieu140701@gmail.com";
        $emailPasswordHost = "gulmeaqxkntfjhpn";
        $mail = new PHPMailer(true);
        try{
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = $emailHost;
            $mail->Password = $emailPasswordHost;
            $mail->Port = 587;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

            $mail->isHTML(true);
            $mail->setFrom($emailHost , 'AppStore Admin');
            $mail->addAddress($email);
            $mail->Subject = "Reset Password | Verification";
            $mail->Body = '<div style="text-align: center;">
            <header style="background-color: #1fa9b8;">
                <h1 style="color: white; padding: 50px; margin: 0;">AppStore</h1>
            </header>
            <div style="text-align:center;font-size:20px;background-color:white;padding:100px 100px;">
            <h3>Hi '.$fullName.'</h3>
            <p>You have requested reset your password for a appstore account. Please click button bellow to reset your password</p>
            <button style="background-color:#38c4d3;border:none;border-radius:5px;padding:10px 20px;">
            <a style="color:white;text-decoration: none;"
            href="http://localhost:8888/Web/Pages/Main/VerifiedEmailForPassword.php?email='.$email.'&hash='.$hash.'">Verification</a></button>
            <p style="color:red;">*This email is valid only within 10 minutes</p>
            <p>If it\'s not you, please ignore this email</p>';
            $mail->send();
        }catch(Exception $e) {
            echo $e->getMessage();
        }
    }
    function SendMailForDevelopment($fullName ,$email,$de_name) {
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";
        $emailHost = "danghieu140701@gmail.com";
        $emailPasswordHost = "wbtwqaetggrlgajw";
        $mail = new PHPMailer(true);    
        try{
            $mail->isSMTP();
            $mail->Host = "smtp.gmail.com";
            $mail->SMTPAuth = true;
            $mail->Username = $emailHost;
            $mail->Password = $emailPasswordHost;
            $mail->Port = 587;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            
            $mail->isHTML(true);
            $mail->setFrom($emailHost , 'AppStore Admin');
            $mail->addAddress($email);
            $mail->Subject = "Draft| Seen";
            $mail->Body = '<div style="text-align: center;">
            <header style="background-color: #1fa9b8;">
            <h1 style="color: white; padding: 50px; margin: 0;">AppStore</h1>
            </header>
            <div style="text-align:center;font-size:20px;background-color:white;padding:100px 100px;">
            <p>Your app have seen </p>
            <h3>Hi '.$fullName.'</h3>
            <p>If it\'s not you, please ignore this email</p>
            </div><footer style="background-color:#1fa9b8;color:white;padding:30px;"><p>&copy;</p></footer></div>';
            $mail->send();
        }catch(Exception $e) {
            echo $e->getMessage();
        }
    }
 ?>