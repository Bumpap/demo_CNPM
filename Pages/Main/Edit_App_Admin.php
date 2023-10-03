<?php 
if (isset($_POST['ID_App'])) {
    $ID = $_POST['ID_App'];
} else {
    $ID = '';
}
$sql_changeDetail = "SELECT * FROM app_item WHERE ID_App = '$ID'";
$query_changeDetail = mysqli_query($mysqli,$sql_changeDetail);
?>
<table class="table">
    <form action="Pages/Main/ChangeAppDetailProcess.php" enctype="multipart/form-data" method="post">
        <?php 
        while($row = mysqli_fetch_array($query_changeDetail)){
    ?>  

        <h1> Edit App  <?php echo $row['Name'] ?></h1>
        <input class="form-control" type="text" name="ID_App" value="<?php echo $row['ID_App'] ?>" required hidden>

        <!-- <tr>
            <td>Icon</td>
            <td><input class="form-control" type="text" name="Name" value="<?php echo $row['Name'] ?>"></td>
        </tr> -->
        <tr>
                <td>Icon</td>
                <td><input class="form-control" type="file" name="Image" value="<?php echo $row['Icon'] ?>"><?php echo $row['Icon'] ?></td>
            </tr>
        
        <tr>
            <td>Name </td>
            <td><input class="form-control" disabled type="text" name="Name" value="<?php echo $row['Name'] ?>"></td>
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
                <td>Description</td>
                <td><textarea rows="3" class="form-control" name="Describe_App" rows="10"><?php echo $row['Describe_App'] ?></textarea></td>
            </tr>

             <tr>
                <td>Paid</td>
                <td><input class="form-control" type="text" name="Paid" value="<?php echo $row['Paid'] ?>"></td>
            </tr>
       
        <tr>
             <!-- <td><input class="btn btn-success" type="submit" name="back" value="Back"></td> -->
                     
                <td><input class="btn btn-success" type="submit" name="save" value="Save Change"></td>
                       
                
            </tr>


        <?php
        }
    ?>


    </form>
</table>