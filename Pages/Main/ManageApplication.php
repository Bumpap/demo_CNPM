<?php 
    if(isset($_SESSION['Login']))
    {
?>
<?php 


    $sql_detail = "SELECT * FROM app_item";
    $query_detail= mysqli_query($mysqli, $sql_detail);
?>
                <form
                    action="index.php?quanly=Add_App_Admin"
                    method="post">
                 
                <input class="btn btn-warning" type="submit" name="appAdminProcess" value="Add Applications">

                 
                </form>

<table class="table">
    <tr>
        <th>Icon</th>
        <th>Name</th>
        <th>Type App</th>
        <th>Description</th>
        <th>Paid</th>



    </tr>

<?php while ($row_pro = mysqli_fetch_array($query_detail)) {?>
        <tr>
            <td><img style="width:100%; height:100%;" src="<?php echo $row_pro['Icon']; ?>"></td>
            <td> <?php echo  $row_pro['Name']; ?></td>
            <td> <?php echo $row_pro['Type_App']; ?></td>
            <td> <?php echo $row_pro['Describe_App']; ?></td>
            <td> <?php echo $row_pro['Paid']; ?></td>
            <td>
                 <form
                    action="index.php?quanly=Edit_App_Admin&ID=<?php echo $row_pro['ID_App']; ?>"
                    method="post">
                    <input class="form-control" type="text" name="ID_App" value="<?php echo $row_pro['ID_App'] ?>" required hidden>
               
                <input class="btn btn-success" type="submit" name="submitEdit" value="Chỉnh sửa">
  
                </form>
                <form
                    action="Pages/Main/Delete_App_Admin.php"
                    method="POST">
                    <input class="form-control" type="text" name="ID_App" value="<?php echo $row_pro['ID_App'] ?>" required hidden>
                
                 <input class="btn btn-danger" type="submit" name="Delete" value="Xóa">
                </form>
            </td>
        </tr>
<?php } ?>
    
</table>

<?php } ?>