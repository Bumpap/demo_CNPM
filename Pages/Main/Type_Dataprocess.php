<?php
    include('../../config/config.php');
    if(isset($_POST['TypeName']))
    {
        $TypeName = $_POST['TypeName'];
    }
    else
    {
        $TypeName="";
    }


    if(isset($_GET['Type_delete']))
    {   
        $Type =  $_GET["Type_delete"];
        $sql_boo  = "SELECT * FROM app_item WHERE Type_App ='$Type'";
        $query_boolean = mysqli_query($mysqli,$sql_boo);

        $row = mysqli_fetch_array($query_boolean);
       
        if($row[0]==null)
        {
            $sql_delete = "DELETE FROM manage_type WHERE Type_Name= '$Type' ";
            mysqli_query($mysqli,$sql_delete);
            header('Location:../../index.php?quanly=Manage_Type');
        }
        else
        {
            header('Location:../../index.php?quanly=Manage_Type');
        }
        
    }
    elseif(isset($_POST['AddType']))
    {
        
        $sql_insert = "INSERT INTO manage_type(Type_Name) VALUE ('$TypeName') ";
        mysqli_query($mysqli,$sql_insert);
        header('Location:../../index.php?quanly=Manage_Type');
    }
    elseif(isset($_POST['EditType']))
    {
        if(isset($_POST['Edit_App']))
        {
            $Type = $_POST['Edit_App'];
        }
        else
        {
            $Type = "";
        }

        if(isset($_POST['ID_Type']))
        {
            $ID = $_POST['ID_Type'];
        }
        else
        {
            $ID = "";
        }
        $sql_update = "UPDATE app_item  SET app_item.Type_App  = '$Type' WHERE app_item.Type_App IN (SELECT Type_Name FROM manage_type WHERE ID_Type = '$ID') ";
        mysqli_query($mysqli,$sql_update);
        $sql_update1 = "UPDATE  manage_type SET manage_type.Type_Name  = '$Type' WHERE manage_type.Type_Name IN (SELECT Type_Name FROM manage_type WHERE ID_Type = '$ID') ";
        mysqli_query($mysqli,$sql_update1);
        header('Location:../../index.php?quanly=Manage_Type');
    }
