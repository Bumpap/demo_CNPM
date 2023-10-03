<?php
    if(isset($_GET["email"]) && !empty($_GET["email"]) && isset($_GET["hash"]) && !empty($_GET["hash"])) {
        require_once '../../config/config.php';
        $Email = $_GET["email"];
        $Hash = $_GET["hash"];
        $query = "SELECT * FROM verification WHERE Email = ? AND Hash = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ss" , $Email , $Hash);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $FullName = $row["FullName"];
        $Password = md5($row["Pass"]);
        
        if(time() - $row["Time"] > 600) {
            $query = "DELETE FROM verification WHERE Email = ? AND Hash = ?";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("ss" , $Email , $Hash);
            $stmt->execute();
            header("Location: ../../signup.php?msg=SignUpTimeOut");
        }else{
            $query = "INSERT INTO user(FullName , Email ) VALUES(?,?)";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("ss", $FullName  , $Email );
            $stmt->execute();
            $lastIdUser = $mysqli->insert_id;
            $query = "INSERT INTO account(Email , Pass , ID) VALUES(?,?,?)";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("sss" , $Email,$Password,$lastIdUser);
            $stmt->execute();
            $query = "DELETE FROM verification WHERE Email = ? AND Hash = ?";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("ss" , $Email , $Hash);
            $stmt->execute();
            header("Location: ../../login.php?msg=CompleteRegistration");
        }
    
        $mysqli->close();
    }
?>