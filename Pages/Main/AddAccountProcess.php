<?php 
    include('../../config/config.php');




if(isset($_POST['fullname']))
{
  $fullname = $_POST['fullname'];
}
else
{
  $fullname='';
}

if(isset($_POST['email']))
{
  $email = $_POST['email'];
}
else
{
  $email='';
}

if(isset($_POST['password']))
{
  $password = $_POST['password'];
}
else
{
  $password='';
}

if(isset($_POST['role']))
{
  $role = $_POST['role'];
}
else
{
  $role='';
}




if(isset($_POST['addUser'])){
    $sql = "INSERT INTO user (user.Fullname, user. Email, user.Pass, user.Level ) VALUES ('$fullname', '$email' , '$password', '$role')";
    mysqli_query($mysqli, $sql);
    header('Location:../../index.php?quanly=ManageAccount');
}






?>
