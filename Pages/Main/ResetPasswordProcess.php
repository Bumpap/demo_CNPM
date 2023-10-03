<?php 
    session_start();
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!empty($_POST["txtNewPassword"]) && !empty($_POST["txtConfirmPassword"])) {
            $newPassword = $_POST["txtNewPassword"];
            $confirmPassword = $_POST["txtConfirmPassword"];
            $Email = $_SESSION["Email"];
            $Hash = $_SESSION["Hash"];
            if(strlen($newPassword) < 8) {
                $errorMessage = "Your password isn't less than 8 characters";
                header("Location: ../../ResetPassword.php?msg2=$errorMessage");
            }else if($newPassword != $confirmPassword) {
                $errorMessage = "New password and confirm password doesn't match";
                header("Location: ../../ResetPassword.php?msg1=$errorMessage");
            }else{
                require_once '../../config/config.php';
                $Password = md5($newPassword);
                $query = "UPDATE account SET Pass = ? WHERE ID = (SELECT ID FROM user WHERE Email = ?)" ;
                $stmt = $mysqli->prepare($query); 
                $stmt->bind_param("ss" , $Password , $Email);
                $stmt->execute();
                $query = "DELETE FROM verifiedpassword WHERE Email = ? AND Hash = ?";
                $stmt = $mysqli->prepare($query);
                $stmt->bind_param("ss" , $Email , $Hash);
                $stmt->execute(); 
                $mysqli->close();
                session_destroy();
                header("Location: ../../login.php?msg=CompleteResetPassword");
            }
        }
    }
?>