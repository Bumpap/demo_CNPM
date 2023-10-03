<?php
    include('../../config/config.php');

    if(isset($_POST['AddApp']))
    {
        $idedit = $_POST['AddApp'];
    }
    else
    {      
        $idedit = '';
    }

    if(isset($_POST['Name']))
    {
        $Name = $_POST['Name'];
    }
    else
    {      
        $Name = '';
    }

    if(isset($_POST['Type_App']))
    {
        $Type_App = $_POST['Type_App'];
    }
    else
    {      
        $Type_App = '';
    }

    if(isset($_POST['Paid']))
    {
        $Paid = $_POST['Paid'];
    }
    else
    {      
        $Paid = '';
    }

    if(isset($_POST['Develop']))
    {
        $Describe_App = "Admin";
    }
    if(isset($_POST['Describe_App']))
    {
        $Describe_App = $_POST['Describe_App'];
    }
    else
    {      
        $Describe_App = '';
    }
    if(isset($_POST['Image'])){
        $Image = "image/".$_FILES['Image']['name'];
        $Image_tmp =$_FILES['Image']['tmp_name'];
        $Path = "../../image/" .$_FILES['Image']['name'];

    } else {
        $Image = "";
        $Image_tmp ="";
        $Path = "";
    }

    if (isset($_FILES['Image'])) {
        $Image = "image/" . $_FILES['Image']['name'];
        $Image_tmp =  $_FILES['Image']['tmp_name'];
        $Path = "../../image/" . $_FILES['Image']['name'];
    } else {
        $Image = "";
        $Image_tmp = "";
        $Path =  "";
    }

    if (isset($_FILES['file'])) {
        $Image = "image/" . $_FILES['Image']['name'];
        $Image_tmp =  $_FILES['Image']['tmp_name'];
        $Path = "../../image/" . $_FILES['Image']['name'];
    } else {
        $Image = "";
        $Image_tmp = "";
        $Path =  "";
    }
    
    $Admin = "Admin";
    $Status = "Valid";
    $Num_Down = "0";
    if(isset($_POST['AddApp'])){
        $sql = "INSERT INTO app_item(app_item.Name,Type_App,Paid,Describe_App,Develop,Num_Down,Icon,app_item.Status) 
        values('$Name','$Type_App','$Paid','$Describe_App','$Admin','$Num_Down','$Image ','$Status')";
         mysqli_query($mysqli, $sql);
         move_uploaded_file($Image_tmp,$Path);
        header('Location:../../index.php?quanly=ManageApplication');
    }


    // if(isset($_GET['back'])){
    //     header(
    //     'Location:../../index.php?quanly=ManageApplication'
    // );
    // }


