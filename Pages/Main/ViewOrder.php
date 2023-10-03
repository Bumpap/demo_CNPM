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

$sql_lietke = "SELECT * FROM app_item WHERE Develop IN (SELECT De_Name FROM user WHERE Email = '$idedit' ) AND Paid !='Free' ORDER BY Num_Down DESC";
$query_lietke = mysqli_query($mysqli, $sql_lietke);



?>
<table class="table my-auto">
    <h2>View Order</h2>
    <tr>
        <th>Image</th>
        <th>App Name</th>
        <th>Type</th>
        <th>Paid</th>
        <th>Download</th>
        <th>Total</th>
    </tr>
    <?php

    $total = 0;
    while ($row = mysqli_fetch_array($query_lietke)) {
        $total = $total + $row['Num_Down'] * $row['Paid'];

    ?>
        <tr>
            <td><img src="<?php echo $row['Icon'] ?>" width="100px" height="90px"></td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['Type_App'] ?></td>
            <td><?php echo $row['Paid'] ?></td>
            <td><?php echo $row['Num_Down'] ?></td>
            <td><?php echo $row['Num_Down'] * $row['Paid'] ?></td>
        </tr>
    <?php
    }
    ?>
    <tr>
        <td>Total :</td>
        <td><?php echo $total ?></td>
    </tr>



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
