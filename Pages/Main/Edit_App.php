<?php 
    if(isset($_SESSION['Login']))
    {
?>


<?php
if (isset($_GET['ideditApp'])) {
    $idedit_App = $_GET['ideditApp'];
} else {
    $idedit_App = '';
}
$sql_sua = "SELECT * FROM app_item WHERE ID_App = '$idedit_App'";
$query_sua = mysqli_query($mysqli, $sql_sua);
?>
<table class="table ">
    <h1>Edit Draft App</h1>
    <form method="POST" action="Pages/Main/App_Dataprocess.php" enctype="multipart/form-data">
        <?php
        while ($dong = mysqli_fetch_array($query_sua)) {
        ?>
            <tr>
                <td>Name:</td>
                <td><input class="form-control" type="text" name="Name" value="<?php echo $dong['Name'] ?>"></td>
            </tr>

            <tr>
                <td>Type</td>
                <td><select class="form-select" name="Type_App" aria-label="Default select example" required>
                        <?php
                        $sql_lietke = "SELECT * FROM manage_type";
                        $query_lietke = mysqli_query($mysqli, $sql_lietke);

                        while ($dong1 = mysqli_fetch_array($query_lietke)) {
                        ?>
                            <option value="<?php echo $dong1['Type_Name'] ?>"> <?php echo $dong1['Type_Name'] ?> </option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Paid</td>
                <td><input class="form-control" type="text" name="Paid" value="<?php echo $dong['Paid'] ?>"></td>
            </tr>

            <tr>
                <td>Developer:</td>
                <td><input class="form-control" type="text" name="Develop" value="<?php echo $dong['Develop'] ?>" readonly> </td>
            </tr>
            <tr>
                <td>Describe:</td>
                <td><textarea class="form-control" name="Describe_App" rows="10"><?php echo $dong['Describe_App'] ?></textarea></td>
            </tr>
            <td class="d-none"><input type="text" name="idedit" value="<?php echo $_GET['idedit'] ?>"></td>
            <td class="d-none"><input type="text" name="ideditApp" value="<?php echo $_GET['ideditApp'] ?>"></td>


            <tr>
                <td>Image</td>
                <td><input class="form-control" type="file" name="Icon" value="<?php echo $dong['Icon'] ?>"><?php echo $dong['Icon'] ?></td>
            </tr>

            <tr>
                <td><input type="submit" name="EditDraft" value="Save"></td>
                <td><input type="submit" name="SendDraft" value="Send Draft"></td>
            </tr>


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