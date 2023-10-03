<?php
include '../../config/config.php';
if (isset($_POST['save'])) {
    $save = $_POST['save'];
} else {
    $save = '';
}

if (isset($_POST['ID'])) {
    $ID = $_POST['ID'];
} else {
    $ID = '';
}
if (isset($_POST['fullname'])) {
    $fullname = $_POST['fullname'];
} else {
    $fullname = '';
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = '';
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
} else {
    $password = '';
}
if (isset($_POST['level'])) {
    $level = $_POST['level'];
} else {
    $level = '';
}


if (isset($_POST['save'])) {
    $sql_update = "UPDATE user SET
    user.FullName = '$fullname',
    user.Pass = '$password',
    user.Level = '$level',
    user.Email = '$email'
    WHERE ID = '$ID' ";
    mysqli_query($mysqli, $sql_update);
    header(
        'Location:../../index.php?quanly=ManageAccount'
    );
}
?>