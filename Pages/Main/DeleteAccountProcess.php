<?php 
include('../../config/config.php');
if(isset($_POST['IdUser']))
{
  $IdUser = $_POST['IdUser'];
}
else
{
  $IdUser='';
}
if(isset($_POST['Delete']))
$sql_delete = "DELETE FROM user WHERE ID='$IdUser' ";
mysqli_query($mysqli, $sql_delete);
header('Location:../../index.php?quanly=ManageAccount');
?>