<?php 

    
    
    session_start();
    include('../../config/config.php');
        if(isset($_POST['ButtonChangePassword'])) {
            require_once '../../config/config.php';
            $newPassword = $_POST["txtNewPassword"];
            $confirmPassword = $_POST["txtConfirmPassword"];
            $Email = $_POST["txtEmail"];
            $Oldpassword = $_POST["txtCurrentPassword"];
            $Password1 = md5($Oldpassword);
           
           
            $sql = "SELECT * FROM account where Email = '$Email' and Pass = '$Password1' LIMIT 1";
            $row = mysqli_query($mysqli,$sql);
            $count = mysqli_num_rows($row);
                
        
            
            if($count==0){
                $errorMessage =  "Your email or current password is not correct!";
                header("Location: ../../ChangePassword.php?msg3=$errorMessage");
            }else if(strlen($newPassword) < 8) {
                $errorMessage = "Your password isn't less than 8 characters";
                header("Location: ../../ChangePassword.php?msg2=$errorMessage");
            }else if($newPassword==$Oldpassword) {
                $errorMessage = "Your new password is the same as the old password ";
                header("Location: ../../ChangePassword.php?msg2=$errorMessage");
                    
            }else if($newPassword != $confirmPassword) {
                $errorMessage = "New password and confirm password doesn't match";
                header("Location: ../../ChangePassword.php?msg1=$errorMessage");
            }
            else{
                require_once '../../config/config.php';
                $Password = md5($newPassword);
                
                $query = "UPDATE account SET Pass = ? WHERE Email =? and Pass = ?" ;
                $stmt = $mysqli->prepare($query); 
                $stmt->bind_param("sss" , $Password , $Email,$Password1);
                $stmt->execute();
                
                $mysqli->close();
                session_destroy();
                header("Location: ../../login.php?msg=CompleteChangePassword");
            }
        }
?>