<?php 
    if(isset($_SESSION['Login']))
    {
?>
<?php
if (!isset($_SESSION['Login'])) {
    echo "False";
} else {
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
    <table class="table  mx-5 bg-white" id="userprofile" >
        <h1>User Profile</h1>
        <?php
        while ($dong = mysqli_fetch_array($query_sua_thongtin)) {
        ?>
            <tr>
                <td id=></td>
                <td><img style="height:30%; width:30%; border-radius:500px;" src="<?php echo $dong['AVT'] ?>"></td>
            </tr>
            <tr>
                <td>Name: </td>
                <td><?php echo $dong['FullName'] ?></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><?php echo $dong['Email'] ?></td>
            </tr>
            <tr>
                <td>Role:</td>
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
                    <td><?php echo $dong['De_Name'] ?></td>
                </tr>

                <tr>
                    <td>Contact:</td>
                    <td><?php echo $dong['Contact_Info'] ?></td>
                </tr>
            <?php
            }
            ?>



        <?php
        }
        ?>
        </tr>
        <td colspan="2"><a href="index.php?quanly=UserProfile_Edit&idedit=<?php echo $_SESSION['Login'] ?>">Sửa thông tin</a></td>
        </tr>
    </table>
<?php
}
?>

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