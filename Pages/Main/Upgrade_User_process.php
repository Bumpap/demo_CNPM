<?php
    include('../../config/config.php');


    if(isset(  $_GET['idedit']))
    {
        $idedit = $_GET['idedit'];
    }
    else
    {      
        $idedit = '';
    }
    
    if(isset(  $_POST['FullName']))
    {
        $FullName = $_POST['FullName'];
    }
    else
    {      
        $FullName = '';
    }



    if(isset( $_POST['De_Name']))
    {
        $De_Name = $_POST['De_Name'];
    }
    else
    {
        $De_Name = '';
    }

    if(isset( $_POST['Contact_Info']))
    {
        $Contact_Info = $_POST['Contact_Info'];
    }
    else
    {
        $Contact_Info = '';
    }


    if(isset($_POST['Upgrade_Develop']))
    {
        $sql_insert = "UPDATE user SET FullName = '$FullName', De_Name = '$De_Name', Contact_Info='$Contact_Info',Level='2',Budget = Budget-500000 WHERE Email = '$_GET[idedit]' ";
        mysqli_query($mysqli,$sql_insert);
        header('Location:../../index.php?quanly=UserProfile&idedit='.$idedit);

    }
