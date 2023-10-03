<?php 
if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
} else {
    $ID = '';
}
$sql_changeDetail = "SELECT * FROM user WHERE ID = '$ID'";
$query_changeDetail = mysqli_query($mysqli,$sql_changeDetail);
?>
<table class="table">
    <form action="Pages/Main/ChangeAccountDetailProcess.php" enctype="multipart/form-data" method="post">
        <?php 
        while($row = mysqli_fetch_array($query_changeDetail)){
    ?>
        <h1> Edit User  <?php echo $row['FullName'] ?></h1>
        <input class="form-control" type="text" name="ID" value="<?php echo $row['ID'] ?>" required hidden>


        <tr>
            <td>Fullname </td>
            <td><input class="form-control" type="text" name="fullname" value="<?php echo $row['FullName'] ?>"></td>
        </tr>
        <tr>
            <td>Email </td>
            <td><input class="form-control" type="text" name="email" value="<?php echo $row['Email'] ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input class="form-control" type="text" name="password" value="<?php echo $row['Pass'] ?>"></td>
        </tr>
        <tr>
            <td>Level </td>
            <td><input class="form-control" type="text" name="level" value="<?php echo $row['Level'] ?>"></td>
        </tr>
       
        <tr>
            <td></td>
                
                <td><input class="btn btn-success" type="submit" name="save" value="Save Change"></td>
              
                
            </tr>



        <?php
        }
    ?>


    </form>
</table>