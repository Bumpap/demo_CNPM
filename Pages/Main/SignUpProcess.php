<?php
    session_start();
    if(!empty($_POST["txtFullName"])&& !empty($_POST["txtEmail"]) 
    && !empty($_POST["txtPassword"])&& !empty($_POST["txtConfirmPassword"]))
     {
        require_once '../../config/config.php';
        $fullName = $_POST["txtFullName"];
        $email = $_POST["txtEmail"];
       
        $password = $_POST["txtPassword"];
        $confirmPassword = $_POST["txtConfirmPassword"];
        $hash = md5(rand(0,1000));
        
        $ErrorMessage = "";
        
        $queryEmail = "SELECT * FROM user WHERE Email = ? ";
        $stmt = $mysqli->prepare($queryEmail);
        $stmt->bind_param("s" , $email);
        $stmt->execute();
        $resultEmail = $stmt->get_result();
        $time = time();
        if($resultEmail->num_rows > 0) {
            $ErrorMessage = "Your email already exists";
            header("Location: ../../signup.php?msg1=$ErrorMessage");
        }else if(strlen($password) < 8){
            $ErrorMessage = "Your password isn't less than 8 characters";
            header("Location:../../signup.php?msg3=$ErrorMessage");
        }else if($password != $confirmPassword) {
            $ErrorMessage = "Password and confirm password doesn't match";
            header("Location:../../signup.php?msg4=$ErrorMessage");
        
        }
        else{
            require_once 'SendMailVerify.php';  
            $query = "DELETE FROM verification WHERE TimeStamp < DATE_SUB(NOW(), INTERVAL 10 MINUTE)"; 
            $stmt = $mysqli->prepare($query);   
            $stmt->execute();
            $query = "INSERT INTO verification(Email, Hash,Time, FullName, Pass) VALUES(?,?,?,?,?)";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("sssss" , $email, $hash,$time, $fullName, $password);
            $stmt->execute();
            SendMail($fullName,$email,$password,$hash);
            
            header("Location:../../signup.php?msg=SignUp");
       
         }
     
        $mysqli->close();
    }
    
?>