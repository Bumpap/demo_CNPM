<table class="table my-auto my-5 mx-5 ">
    <h4 class="text-center text-success">Transaction history</h4>
    <tr>
        <th>Serial</th>
        <th>Value</th>
        <th>Time</th>
    </tr>

    <?php
    $sql_lietke_Draft = "SELECT * FROM history_card WHERE Email='$_GET[idedit]' ORDER BY TIME DESC LIMIT 10";
    $query_lietke_Draft = mysqli_query($mysqli, $sql_lietke_Draft);
    while ($row = mysqli_fetch_array($query_lietke_Draft)) {

    ?>
        <tr>
            <td><?php echo $row['Serial'] ?></td>
            <td><?php echo $row['Value'] ?></td>
            <td><?php echo $row['Time'] ?></td>
        </tr>
    <?php

    }
    ?>
</table>