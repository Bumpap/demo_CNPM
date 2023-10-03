<?php 
    if(isset($_SESSION['Login']))
    {
?>
<table class="table my-auto">
    <h3>There are several applications waiting for your review. </h3>
    <tr>
        <th>Image</th>
        <th>App Name</th>
        <th>Develop</th>
        <th>Type</th>
    </tr>

    <?php
    $sql_lietke_Draft = "SELECT * FROM app_item WHERE Status = 'WFA' ";
    $query_lietke_Draft = mysqli_query($mysqli, $sql_lietke_Draft);

    $sql_lietke_DevelopID = "SELECT * FROM user WHERE Email ='$_GET[idedit]' ";
    $query_lietke_DevelopID = mysqli_query($mysqli, $sql_lietke_DevelopID);
    $row2 = mysqli_fetch_array($query_lietke_DevelopID);


    while ($row = mysqli_fetch_array($query_lietke_Draft)) {

    ?>
        <tr>
            <td><img src="<?php echo $row['Icon'] ?>" width="100px" height="90px"></td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['Develop'] ?></td>
            <td><?php echo $row['Type_App'] ?></td>
            <td>
                <a href="index.php?action=View_Detail_Application&App_Detail=<?php echo $row['ID_App'] ?>">View Detail</a>
            </td>
        </tr>


    <?php

    }

    ?>
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