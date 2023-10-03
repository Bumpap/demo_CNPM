<?php
    include('../../config/config.php');
    if(isset($_POST['Serial'])){
        $Serial = $_POST['Serial'];
    }
    else{
        $Serial = "";
    }

    if(isset($_GET['id_User']))
    {
        $id_User = $_GET['id_User'];
    }
    else
    {
        $id_User = '';
    }


    $sql_Select = "SELECT * From naptien where Serial = $Serial and Status = 'Valid'";
    $query_pro = mysqli_query($mysqli,$sql_Select);
    $count = mysqli_num_rows($query_pro);
    $row2= mysqli_fetch_array($query_pro);
    $date = getdate();
    if($count>0)
    {
        $sql_update = "UPDATE user SET user.Budget = user.Budget+'$row2[Price]' Where Email = '$id_User'";
        $sql_delete = "UPDATE naptien SET naptien.Status = 'InValid' WHERE Serial='$Serial' ";
        $sql_insert = "INSERT INTO history_card(Email,history_card.Serial,history_card.Value,history_card.Time) VALUE ('$id_User','$Serial','$row2[Price]',CURRENT_DATE())";
        mysqli_query($mysqli,$sql_insert);
        mysqli_query($mysqli,$sql_update);
        mysqli_query($mysqli,$sql_delete);
        header('Location:../../index.php?quanly=UserProfile&idedit='.$id_User);
    }
