<?php
include '../../config/config.php';
if (isset($_POST['save'])) {
    $save = $_POST['save'];
} else {
    $save = '';
}

if (isset($_POST['ID_App'])) {
    $ID = $_POST['ID_App'];
} else {
    $ID = '';
}
if (isset($_POST['Name'])) {
    $Name = $_POST['Name'];
} else {
    $Name = '';
}
if (isset($_POST['Type_App'])) {
    $Type_App = $_POST['Type_App'];
} else {
    $Type_App = '';
}

if (isset($_POST['Describe_App'])) {
    $Describe_App = $_POST['Describe_App'];
} else {
    $Describe_App= '';
}
if (isset($_POST['Paid'])) {
    $Paid = $_POST['Paid'];
} else {
    $Paid = '';
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


if (isset($_POST['save'])) {
    $sql_update = "UPDATE app_item SET
    app_item.Icon = '$Image',
    app_item.Type_App = '$Type_App',
    app_item.Paid = '$Paid',
    app_item.Describe_App = '$Describe_App'
    WHERE ID_App = '$ID' ";
    mysqli_query($mysqli, $sql_update);
    move_uploaded_file($Image_tmp,$Path);
    header(
        'Location:../../index.php?quanly=ManageApplication'
    );
}
?>