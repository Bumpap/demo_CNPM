<?php 
    if(isset($_SESSION['Login']))
    {
?>


<?php
if (isset($_GET['ideditType'])) {
    $idedit_Type = $_GET['ideditType'];
} else {
    $idedit_Type = '';
}
$sql_sua = "SELECT * FROM manage_type WHERE manage_type.Type_Name = '$idedit_Type'";
$query_sua = mysqli_query($mysqli, $sql_sua);
?>
<table class="table ">
    <h1>Edit Type</h1>
    <form method="POST" action="Pages/Main/Type_Dataprocess.php" enctype="multipart/form-data">
        <?php
        while ($dong = mysqli_fetch_array($query_sua)) {
        ?>

            <tr>
                <td>TypeApp:</td>
                <td><input class="form-control" type="text" name="Edit_App" value="<?php echo $dong['Type_Name'] ?>"></td>
            </tr>
            <input class="form-control d-none" type="text" name="ID_Type" value="<?php echo $dong['ID_Type'] ?>">
            <tr>
                <td><input type="submit" name="EditType" value="Save"></td>
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