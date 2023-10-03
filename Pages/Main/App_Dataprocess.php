<?php
    include('../../config/config.php');

    if(isset($_POST['idedit']))
    {
        $idedit = $_POST['idedit'];
    }
    else
    {      
        $idedit = '';
    }

    if(isset($_GET['idedit']))
    {
        $idedit_de = $_GET['idedit'];
    }
    else
    {      
        $idedit_de = '';
    }

    if(isset($_POST['ideditApp']))
    {
        $idedit_EDIT = $_POST['ideditApp'];
    }
    else
    {      
        $idedit_EDIT = '';
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
        $Develop = $_POST['Develop'];
    }
    else
    {      
        $Develop = '';
    }

    if(isset($_POST['Describe_App']))
    {
        $Describe_App = $_POST['Describe_App'];
    }
    else
    {      
        $Describe_App = '';
    }

    $Num_Down = 0;
    $Status = "Draft";
    
    $hinhanh = 'image/'.$_FILES['Icon']['name'];
    $hinhanh_tmp ='image/'.$_FILES['Icon']['tmp_name'];



    if(isset($_POST['AddDraft']))
    {
        $sql_insert = "INSERT INTO app_item(app_item.Name,Type_App,Paid,Describe_App,Develop,Num_Down,Icon,app_item.Status) VALUE ('$Name','$Type_App','$Paid','$Describe_App','$Develop','$Num_Down','$hinhanh','$Status')";
        mysqli_query($mysqli,$sql_insert);
        move_uploaded_file($hinhanh_tmp,'../../image/'.$hinhanh);
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('zip');

        if(in_array($fileActualExt,$allowed)){
            if($fileError ===0){
                if($fileSize < 1000000){
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = 'files/'.$fileName;
                    // $fileTmpName = rename($fileTmpName,$fileName);
                    $tmp = move_uploaded_file($fileTmpName,$fileDestination);
                    // move_uploaded_file($tmp,$fileDestination);
                    echo $fileDestination ;

                }
                else{
                    echo "Too big!";
                }

            }
            else{
                echo"There was an error ! Please try again later";
            }
        }


     
        header('Location:../../index.php?quanly=ManageApps&idedit='.$idedit);
        
    }
    elseif(isset($_POST['EditDraft']))
    {
        if($hinhanh!='')
        {
            $sql_update = "UPDATE app_item SET app_item.Name = '$Name',Type_App = '$Type_App', Paid='$Paid', Develop = '$Develop',Num_Down = '$Num_Down',Icon='$hinhanh',Describe_App='$Describe_App' WHERE ID_App = '$idedit_EDIT' ";
            mysqli_query($mysqli,$sql_update);
            move_uploaded_file($hinhanh_tmp,'../../image/'.$hinhanh);
            header('Location:../../index.php?quanly=ManageApps&idedit='.$idedit);
        }
        else
        {
            $sql_update = "UPDATE app_item SET app_item.Name = '$Name',Type_App = '$Type_App', Paid='$Paid', Develop = '$Develop',Num_Down = '$Num_Down',Describe_App='$Describe_App' WHERE ID_App = '$idedit_EDIT' ";
            mysqli_query($mysqli,$sql_update);
            header('Location:../../index.php?quanly=ManageApps&idedit='.$idedit);
        }

    }
    elseif(isset($_POST['SendDraft']))
    {
            $sql_update = "UPDATE app_item SET Status = 'WFA' WHERE ID_App = '$idedit_EDIT' ";
            mysqli_query($mysqli,$sql_update);
            header('Location:../../index.php?quanly=ManageApps&idedit='.$idedit);
    }
    elseif(isset($_POST['Cancel']))
    {
        $sql_update = "UPDATE app_item SET app_item.Status ='Canceled' WHERE ID_App ='$idedit_EDIT' ";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?quanly=WAF&idedit='.$idedit);
    }

    elseif(isset($_POST['Accept']))
    {
        $sql_update = "UPDATE app_item SET app_item.Status ='Accepted' WHERE ID_App ='$idedit_EDIT' ";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?quanly=WAF&idedit='.$idedit);
    }
    elseif(isset($_GET['id_upload']))
    {
        $id_up = $_GET['id_upload'];
        $sql_update = "UPDATE app_item SET app_item.status = 'Valid' WHERE ID_App = '$id_up' ";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?quanly=ManageApps&idedit='.$idedit_de);
    }
    elseif(isset($_GET['id_removed']))
    {
        $id_up = $_GET['id_removed'];
        $sql_update = "UPDATE app_item SET app_item.status = 'InValid' WHERE ID_App = '$id_up' ";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?quanly=ManageApps&idedit='.$idedit_de);
    }
    elseif(isset($_GET['id_reUP']))
    {
        $id_up = $_GET['id_reUP'];
        $sql_update = "UPDATE app_item SET app_item.status = 'Valid' WHERE ID_App = '$id_up' ";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../index.php?quanly=ManageApps&idedit='.$idedit_de);
    }
    else
    {
        $id_de = $_GET['iddelete'];
        $sql_delete = "DELETE FROM app_item WHERE ID_App='$id_de' ";
        mysqli_query($mysqli,$sql_delete);
        header('Location:../../index.php?quanly=ManageApps&idedit='.$idedit_de);

    }
