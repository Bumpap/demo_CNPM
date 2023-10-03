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
<table class="table ">
    <h1 class="text-center">Upgrade User To Developer</h1>
    <form method="POST" action="Pages/Main/Upgrade_User_process.php?idedit=<?php echo $idedit ?>">
        <?php
        while ($dong = mysqli_fetch_array($query_sua_thongtin)) {
        ?>
            <tr>
                <td>Full Name:</td>
                <td><input class="form-control" type="text" name="FullName" value="<?php echo $dong['FullName'] ?>"></td>
            </tr>

            <tr>
                <td>Email:</td>
                <td><?php echo $dong['Email'] ?></td>
            </tr>

            <tr>
                <td>My Wallet:</td>
                <td>
                    <?php echo $dong['Budget'] . " " . "VND" ?>
                </td>
            </tr>

            <tr>
                <td>Upgrade Cost:</td>
                <td>
                    500000 VND
                </td>
            </tr>

            <tr>
                <td>Please Enter Developer's Name</td>
                <td><input class="form-control" type="text" name="De_Name" required value=""></td>
            </tr>
            <tr>
                <td>Please Enter Developer's Contact Infomation</td>
                <td><textarea class="form-control" name="Contact_Info" required rows="10"></textarea></td>
            </tr>

            <?php
            if ($dong['Budget'] >= 500000) {
            ?>
                <tr>
                    <td colspan="2">
                        <button class="button" type="submit" name="Upgrade_Develop" value="">
                            Upgrade
                        </button>
                    </td>
                </tr>
            <?php
            } else {
            ?>
                <tr>
                    <td>
                        <button class="button" type="submit" name="Upgrade_Develop" value="" disabled>
                            Upgrade
                        </button>
                    </td>
                    <td><a class="text-danger" href="index.php?quanly=AddMoney&idedit=<?php echo $dong['Email'] ?> "> Please add more money to your account </a></td>
                </tr>
            <?php
            }
            ?>

        <?php
        }
        ?>
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