<?php
    session_start();
    if(isset($_GET["email"]) && !empty($_GET["email"]) && isset($_GET["hash"]) && !empty($_GET["hash"])) {
        require_once '../../config/config.php';
        $Email = $_GET["email"];
        $Hash = $_GET["hash"];
        $query = "SELECT * FROM verifiedpassword WHERE Email = ? AND Hash = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("ss" , $Email , $Hash);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        if(time() - $row["Time"] > 600) {
            $query = "DELETE FROM verifiedpassword WHERE Email = ? AND Hash = ?";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("ss" , $Email , $Hash);
            $stmt->execute();
            session_destroy();
            header("Location: ../../ForgotPassword.php?msg=ForgotPasswordTimeOut");
        }else{
            $query = "SELECT * FROM user WHERE Email = ?";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("s" , $Email);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $_SESSION["FullName"] = $row["FullName"];
            $_SESSION["Hash"] = $Hash;
            $_SESSION["Email"] = $Email;
            header("Location: ../../ResetPassword.php");
        }
        $mysqli->close();
    }
?>