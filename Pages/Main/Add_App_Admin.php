<?php 
    if(isset($_SESSION['Login']))
    {
?>
<?php

if (isset($_SESSION['Login']) != true) {
    header("LOCATION:login.php");
}
?>


<table class="table ">
    <form method="POST" action="Pages/Main/App_Admin_Process.php" enctype="multipart/form-data">
        <h1 class="text-center">Add Application</h1>
        <tr>
            <td>App Name:</td>
            <td><input class="form-control" type="text" name="Name" required></td>
        </tr>

        <tr>
            <td>Type:</td>
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
            <td>Paid:</td>
            <td><input class="form-control" type="text" name="Paid" required></td>
        </tr>

        <tr>
            <td>Developer:</td>
            <td><input readonly class="form-control" type="text" name="Develop" value="Admin"></td>
        </tr>

        <tr>
            <td>Describe:</td>
            <td><textarea class="form-control" name="Describe_App" rows="10" required></textarea></td>
        </tr>


        <tr>
            <td>Image:</td>
            <td><input type="file" name="Image" value=""></td>
        </tr>

        <tr>
            <td>Upload File (Your App's name.zip):</td>
            <td><input type="file" name="file" ></td>
        </tr>

        <!-- <td class="d-none"><input type="text" name="idedit" value="<?php echo $_GET['idedit'] ?>"></td> -->

        <tr>
            <td colspan="3"><input id="AddApp" type="submit" name="AddApp" value="Add App"></td>
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