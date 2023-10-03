<?php
    include('../../config/config.php');
    if(isset($_POST['idUser']))
    {
        $idUser = $_POST['idUser'];
    }
    else
    {
        $idUser="";
    }

    if(isset($_POST['ID_App']))
    {
        $ID_App = $_POST['ID_App'];
    }
    else
    {
        $ID_App="";
    }
    if(isset($_POST['Cost']))
    {
        $Cost = $_POST['Cost'];
    }
    else
    {
        $Cost="";
    }   
    if(isset($_POST['Bought']))
    {
        $sql_search = "SELECT * FROM app_item WHERE ID_App = '$ID_App' LIMIT 1";
        $sql_update = "UPDATE user SET Budget = Budget-'$Cost' WHERE Email='$idUser' ";
        $sql_insert = "INSERT INTO history_bought(Email,ID_App) VALUE ('$idUser','$ID_App')";
        mysqli_query($mysqli,$sql_search);
        mysqli_query($mysqli,$sql_insert);
        mysqli_query($mysqli,$sql_update);
        $row = mysqli_fetch_array( mysqli_query($mysqli,$sql_search));
        
        header("Content-Type: application/force-download");
		header("Content-Disposition: attachment; filename=".$row['Name'].".zip");

    }
