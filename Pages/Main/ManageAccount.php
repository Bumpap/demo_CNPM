<?php 
    if(isset($_SESSION['Login']))
    {
?>
<?php 


    $sql_detail = "SELECT * FROM user";
    $query_detail= mysqli_query($mysqli, $sql_detail);
?>
                <form
                    action="index.php?quanly=AddAccount"
                    method="post">
                 
                <input class="btn btn-warning" type="submit" name="addAccountProcess" value="Thêm tài khoản">

                 
                </form>

<table class="table">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Pass</th>
        <th>Level</th>
        <th>Operation</th>



    </tr>

<?php while ($row_pro = mysqli_fetch_array($query_detail)) {?>

        <tr>
            <td><?php echo $row_pro['FullName']; ?></td>
            <td> <?php echo  $row_pro['Email']; ?></td>
            <td> <?php echo $row_pro['Pass']; ?></td>
            <td> <?php echo $row_pro['Level']; ?></td>
            <td>
                 <form
                    action="index.php?quanly=EditAccount&ID=<?php echo $row_pro['ID']; ?>"
                    method="post">
                    <input class="form-control" type="text" name="IdUser" value="<?php echo $row_pro['ID'] ?>" required hidden>
                 
                <input class="btn btn-success" type="submit" name="submitEdit" value="Chỉnh sửa">

                 
                </form>
                <form
                    action="Pages/Main/DeleteAccountProcess.php"
                    method="post">
                    <input class="form-control" type="text" name="IdUser" value="<?php echo $row_pro['ID'] ?>" required hidden>
                 
                 <input class="btn btn-danger" type="submit" name="Delete" value="Xóa">

                 
                </form>
            </td>
        </tr>


<?php } ?>
    
</table>

<?php } ?>