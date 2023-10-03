<?php 
    if(isset($_SESSION['Login']))
    {
?>
<?php
if (isset($_GET['idedit'])) {
    $idedit = $_GET['idedit'];
} else {
    $idedit = '';
}
$sql_sua_thongtin = "SELECT * FROM user WHERE Email='$idedit' LIMIT 1";
$query_sua_thongtin = mysqli_query($mysqli, $sql_sua_thongtin);
?>
<table class="table  bg-white ">
    <h1>User Profile</h1>





    <?php
    while ($dong = mysqli_fetch_array($query_sua_thongtin)) {
    ?>
        <form method="POST" action="Pages/Main/EditUser_process.php?idedit=<?php echo $idedit ?>" enctype="multipart/form-data">
            <tr>
                <td></td>
                <td><img  src="<?php echo $dong['AVT'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="file"  name="AVT" required>|<input type="submit" id="savebutton" name="UploadAVT" value="Uploads" ></td>
            </tr>


        </form>

        <form method="POST" action="Pages/Main/EditUser_process.php?idedit=<?php echo $idedit ?>" enctype="multipart/form-data">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="FullName" value="<?php echo $dong['FullName']  ?>"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><?php echo $dong['Email'] ?></td>
            </tr>


            <tr>
                <td>Position:</td>
                <td>
                    <?php
                    if ($dong['Level'] == 1) {
                    ?>
                        <?php echo "Customer" ?>
                    <?php
                    } elseif ($dong['Level'] == 2) {
                    ?>
                        <?php echo "Customer - Developer" ?>

                    <?php
                    } elseif ($dong['Level'] == 3) {
                    ?>
                        <?php echo "Admin" ?>
                    <?php
                    }
                    ?>
                </td>
            </tr>

            <tr>
                <td>Wallet:</td>
                <td>
                    <?php echo $dong['Budget'] . " " . "VND" ?>
                </td>
            </tr>

            <?php
            if ($dong['Level'] == 2) {
            ?>
                <tr>
                    <td>Developer:</td>
                    <td><input type="text" name="De_Name" value="<?php echo $dong['De_Name'] ?>" readonly></td>
                </tr>



                <tr>
                    <td>Contact:</td>
                    <td><input type="text" name="Contact_Info" value="<?php echo $dong['Contact_Info'] ?>"></td>
                </tr>

        <?php
            }
        }
        ?>
        <tr>
            <td colspan="2"><input id="savebutton" type="submit" name="EditUser" value="Save changes"></td>
        </tr>
        </form>
</table>

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