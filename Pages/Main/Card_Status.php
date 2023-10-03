

<?php
include('config/config.php');
?>
<br>
<table class="table table-bordered my-auto  bg-white" id="status">
    <h4 class="text-center text-success"><b>Valid Card</b></h4>
    <tr>
        <th>Serial</th>
        <th>Value</th>
        <th>Status</th>
    </tr>

    <?php
    $sql_lietke_Draft = "SELECT * FROM naptien WHERE Status = 'Valid' ORDER BY Price ASC ";
    $query_lietke_Draft = mysqli_query($mysqli, $sql_lietke_Draft);
    while ($row = mysqli_fetch_array($query_lietke_Draft)) {

    ?>
        <tr>
            <td><?php echo $row['Serial'] ?></td>
            <td><?php echo $row['Price'] ?></td>
            <td><?php echo $row['Status'] ?></td>
        </tr>


    <?php

    }
    ?>
</table>

<br>
<br>
<table class="table table-bordered bg-white "id="status">
    <h4 class="text-center text-danger"><b>InValid Card</b></h4>
    <tr>
        <th>Serial</th>
        <th>Value</th>
        <th>Status</th>
    </tr>

    <?php
    $sql_lietke_Draft = "SELECT * FROM naptien WHERE Status = 'InValid' ORDER BY Price ASC ";
    $query_lietke_Draft = mysqli_query($mysqli, $sql_lietke_Draft);
    while ($row = mysqli_fetch_array($query_lietke_Draft)) {

    ?>
        <tr>
            <td><?php echo $row['Serial'] ?></td>
            <td><?php echo $row['Price'] ?></td>
            <td><?php echo $row['Status'] ?></td>
        </tr>


    <?php

    }
    ?>
</table>


