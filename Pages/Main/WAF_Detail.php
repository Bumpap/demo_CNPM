<?php 
    if(isset($_SESSION['Login']))
    {
?>

<?php
require_once('SendMailVerify.php');
$sql = "SELECT * FROM user WHERE De_Name =(SELECT Develop FROM app_item WHERE ID_App='$_GET[App_Detail]')  LIMIT 1";
$query = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($query);
$Email = $row["Email"];
$fullName = $row["FullName"];
$De_Name = $row["De_Name"];

SendMailForDevelopment($fullName, $Email, $De_Name);


?>
<?php
$sql_chitiet = "SELECT * FROM app_item WHERE ID_App='$_GET[App_Detail]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);

if (isset($_GET['App_Detail'])) {
        $idsame = $_GET['App_Detail'];
} else {
        $idsame = "";
}
?>

<form method="POST" action="Pages/Main/App_Dataprocess.php" enctype="multipart/form-data">
        <table class="table my-auto">
                <h3>Detail_Appication </h3>

                <?php

                while ($row_pro = mysqli_fetch_array($query_chitiet)) {
                ?>

                        <tr>
                                <td>Image:</td>
                                <td><img class="  w-75 h-25 form-control" src="<?php echo $row_pro['Icon'] ?>"></td>
                        </tr>

                        <tr>
                                <td>Name:</td>
                                <td><input type="text" class="  w-75 form-control" value="<?php echo $row_pro['Name'] ?>" readonly></td>
                        </tr>

                        <tr>
                                <td>Develop:</td>
                                <td><input type="text" class="  w-75 form-control" value="<?php echo $row_pro['Develop'] ?>" readonly></td>
                        </tr>

                        <tr>
                                <td>Type App:</td>
                                <td><input type="text" class=" w-75 form-control" value="<?php echo $row_pro['Type_App'] ?>" readonly></td>
                        </tr>

                        <tr>
                                <td>Cost:</td>
                                <td><input type="text" class=" w-75 form-control" value="<?php echo $row_pro['Paid'] ?>" readonly></td>
                        </tr>

                        <tr>
                                <td>Describe:</td>
                                <td><textarea rows="10" class="  w-75 form-control" value="" readonly><?php echo $row_pro['Describe_App'] ?></textarea></td>
                        </tr>
                        <td class="d-none"><input type="text" name="ideditApp" value="<?php echo $idsame ?>"></td>
                        <tr>
                                <td><button type="submit" name="Cancel" class="btn btn-outline-danger">Cancel</button></td>
                                <td><button type="submit" name="Accept" class="btn btn-outline-success">Accept</button></td>
                        </tr>

                <?php
                }
                ?>
        </table>
</form>

<?php
    }
    else
    {
?>
      <div class="py-5">
        <h1 class=" text-center text py-5"><a class="text-danger" href="login.php">
        Oops You are trying to access without Login?
                Login Now?
  </a></h1>
      </div> 
<?php
    }
?>