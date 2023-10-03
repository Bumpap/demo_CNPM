<?php 
include('../../config/config.php');
if(isset($_POST['ID_App']))
{
  $IdUser = $_POST['ID_App'];
}
else
{
  $IdUser='';
}
if(isset($_POST['Delete']))
$sql_delete = "DELETE FROM app_item WHERE ID_App='$IdUser' ";
mysqli_query($mysqli, $sql_delete);
header('Location:../../index.php?quanly=ManageApplication');
?>