<?php
    ob_start();
    session_start();

    // include('config/config.php');
    // if(isset($_POST['Login']))
    // {
    //     $Email = $_POST['Email'];
    //     $Pass = $_POST['Pass'];
    //     $sql = "SELECT * FROM user WHERE Email='$Email' AND Pass ='$Pass' LIMIT 1";
    //     $row = mysqli_query($mysqli,$sql);
    //     $count = mysqli_num_rows($row);
    //     $row1=mysqli_fetch_row($row);
    //     if($count>0)
    //     {
            
    //         $_SESSION['Login'] = $Email;
    //         header("Location:index.php");
    //     }
    //     else
    //     { 
    //         header("Location:login.php");
    //     }
    // }
    if(!empty($_POST["Email"]) && !empty($_POST["Pass"])){
        require_once('../../config/config.php');
        $Email = $_POST["Email"];
        $Pass = $_POST["Pass"];
        $query = "SELECT * FROM account WHERE Email = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("s" , $Email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $errorMessage = "";
        if($result->num_rows > 0 && md5($Pass)==$row["Pass"]) {
            
            $_SESSION['Login'] = $Email;
            
            header("Location:../../index.php");
        }
        else if(isset($_POST['Login']))
        {
            $Email = $_POST['Email'];
            $Pass = $_POST['Pass'];
            $sql = "SELECT * FROM user WHERE Email='$Email' AND Pass ='$Pass' LIMIT 1";
            $row = mysqli_query($mysqli,$sql);
            $count = mysqli_num_rows($row);
            $row1=mysqli_fetch_row($row);
            if($count>0)
            {
                
                $_SESSION['Login'] = $Email;
                header("Location:../../index.php");
                
            }
            else
            { 
                $errorMessage = "Invalid user name or password";
                header("Location:../../login.php?msg1=$errorMessage");
            }
        }
        $mysqli->close();
    }else{
        $errorMessage = "Please enter these information ";
        header("Location: ../../login.php?msg1=$errorMessage");
    }
