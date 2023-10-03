<?php 
    if(isset($_SESSION['Login']))
    {
?>
<h1 class="text-center">Manage Apps </h1>
<nav class="nav-justified">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="Draft" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Draft</a>
    <a class="nav-item nav-link" id="WFA" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Waitting for Accept</a>
    <a class="nav-item nav-link" id="Accepted" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Accepted</a>
    <a class="nav-item nav-link" id="Removed" data-toggle="tab" href="#nav-Removed" role="tab" aria-controls="nav-contact" aria-selected="false">Removed</a>
    <a class="nav-item nav-link" id="Canceled" data-toggle="tab" href="#nav-Canceled" role="tab" aria-controls="nav-contact" aria-selected="false">Canceled</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <table class="table my-auto">
      <h4><a href="index.php?action=Add_App&idedit=<?php echo $_SESSION['Login'] ?>">Add Draft</a></h4>
      <tr>
        <th>Image</th>
        <th>App Name</th>
        <th>Type</th>
        <th>Paid</th>
      </tr>
      <?php
      $sql_lietke_Draft = "SELECT * FROM app_item WHERE Status = 'Draft' and Develop in (SELECT Develop FROM user,app_item WHERE user.De_Name=app_item.Develop) ";
      $query_lietke_Draft = mysqli_query($mysqli, $sql_lietke_Draft);
      $sql_lietke_DevelopID = "SELECT * FROM user WHERE Email ='$_GET[idedit]' ";
      $query_lietke_DevelopID = mysqli_query($mysqli, $sql_lietke_DevelopID);
      $row2 = mysqli_fetch_array($query_lietke_DevelopID);
      while ($row = mysqli_fetch_array($query_lietke_Draft)) {
        if ($row['Develop'] == $row2['De_Name']) {
      ?>
          <tr>
            <td><img src="<?php echo $row['Icon'] ?>" width="100px" height="90px"></td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['Type_App'] ?></td>
            <td><?php echo $row['Paid'] ?></td>
            <td>
              <a href="Pages/Main/App_Dataprocess.php?iddelete=<?php echo $row['ID_App'] ?>&idedit=<?php echo $_GET['idedit'] ?>">Delete</a>|<a href="index.php?action=Edit_App&ideditApp=<?php echo $row['ID_App'] ?>&idedit=<?php echo $_GET['idedit'] ?>">Edit</a>
            </td>
          </tr>
      <?php
        }
      }
      ?>
    </table>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <table class="table my-auto">
      <tr>
        <th>Image</th>
        <th>App Name</th>
        <th>Type</th>
        <th>Paid</th>
      </tr>

      <?php
      $sql_lietke_Draft = "SELECT * FROM app_item WHERE Status = 'WFA' and Develop in (SELECT Develop FROM user,app_item WHERE user.De_Name=app_item.Develop) ";
      $query_lietke_Draft = mysqli_query($mysqli, $sql_lietke_Draft);
      $sql_lietke_DevelopID = "SELECT * FROM user WHERE Email ='$_GET[idedit]' ";
      $query_lietke_DevelopID = mysqli_query($mysqli, $sql_lietke_DevelopID);
      $row2 = mysqli_fetch_array($query_lietke_DevelopID);
      while ($row = mysqli_fetch_array($query_lietke_Draft)) {
        if ($row['Develop'] == $row2['De_Name']) {
      ?>
          <tr>
            <td><img src="<?php echo $row['Icon'] ?>" width="100px" height="90px"></td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['Type_App'] ?></td>
            <td><?php echo $row['Paid'] ?></td>
          </tr>
      <?php
        }
      }
      ?>
    </table>
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    <table class="table my-auto">
      <tr>
        <th>Image</th>
        <th>App Name</th>
        <th>Type</th>
        <th>Paid</th>
      </tr>
      <?php
      $sql_lietke_Draft = "SELECT * FROM app_item WHERE Status = 'Accepted' and Develop in (SELECT Develop FROM user,app_item WHERE user.De_Name=app_item.Develop) ";
      $query_lietke_Draft = mysqli_query($mysqli, $sql_lietke_Draft);

      $sql_lietke_DevelopID = "SELECT * FROM user WHERE Email ='$_GET[idedit]' ";
      $query_lietke_DevelopID = mysqli_query($mysqli, $sql_lietke_DevelopID);
      $row2 = mysqli_fetch_array($query_lietke_DevelopID);
      while ($row = mysqli_fetch_array($query_lietke_Draft)) {
        if ($row['Develop'] == $row2['De_Name']) {
      ?>
          <tr>
            <td><img src="<?php echo $row['Icon'] ?>" width="100px" height="90px"></td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['Type_App'] ?></td>
            <td><?php echo $row['Paid'] ?></td>
            <td>
              <a href="index.php?action=Edit_App&ideditApp=<?php echo $row['ID_App'] ?>&idedit=<?php echo $_GET['idedit'] ?>">Edit</a>
            </td>
          </tr>
      <?php
        }
      }
      ?>
    </table>
  </div>
  <div class="tab-pane fade" id="nav-Removed" role="tabpanel" aria-labelledby="nav-contact-tab">
    <table class="table my-auto">
      <tr>
        <th>Image</th>
        <th>App Name</th>
        <th>Type</th>
        <th>Paid</th>
      </tr>

      <?php
      $sql_lietke_Draft = "SELECT * FROM app_item WHERE Status IN ('Valid','Invalid') and Develop in (SELECT Develop FROM user,app_item WHERE user.De_Name=app_item.Develop) ";
      $query_lietke_Draft = mysqli_query($mysqli, $sql_lietke_Draft);
      $sql_lietke_DevelopID = "SELECT * FROM user WHERE Email ='$_GET[idedit]' ";
      $query_lietke_DevelopID = mysqli_query($mysqli, $sql_lietke_DevelopID);
      $row2 = mysqli_fetch_array($query_lietke_DevelopID);
      while ($row = mysqli_fetch_array($query_lietke_Draft)) {
        if ($row['Develop'] == $row2['De_Name']) {
      ?>
          <tr>
            <td><img src="<?php echo $row['Icon'] ?>" width="100px" height="90px"></td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['Type_App'] ?></td>
            <td><?php echo $row['Paid'] ?></td>
            <?php
            if ($row['Status'] == 'InValid') {
            ?>
              <td>
                <a href="Pages/Main/App_Dataprocess.php?iddelete=<?php echo $row['ID_App'] ?>&idedit=<?php echo $_GET['idedit'] ?>">Delete</a>|<a href="index.php?action=Edit_App&ideditApp=<?php echo $row['ID_App'] ?>&idedit=<?php echo $_GET['idedit'] ?>">Edit</a>| <a href="Pages/Main/App_Dataprocess.php?id_reUP=<?php echo $row['ID_App'] ?>&idedit=<?php echo $_GET['idedit'] ?>">ReUP</a>
              </td>
            <?php
            } elseif ($row['Status'] == 'Valid') {
            ?>
              <td>
                <a href="Pages/Main/App_Dataprocess.php?id_removed=<?php echo $row['ID_App'] ?>&idedit=<?php echo $_GET['idedit'] ?>">Removed</a>
              </td>
            <?php
            }
            ?>

          </tr>
      <?php
        }
      }
      ?>
    </table>
  </div>
  <div class="tab-pane fade" id="nav-Canceled" role="tabpanel" aria-labelledby="nav-contact-tab">
    <table class="table my-auto">
      <tr>
        <th>Image</th>
        <th>App Name</th>
        <th>Type</th>
        <th>Paid</th>
      </tr>

      <?php
      $sql_lietke_Draft = "SELECT * FROM app_item WHERE Status ='Canceled' and Develop in (SELECT Develop FROM user,app_item WHERE user.De_Name=app_item.Develop) ";
      $query_lietke_Draft = mysqli_query($mysqli, $sql_lietke_Draft);
      $sql_lietke_DevelopID = "SELECT * FROM user WHERE Email ='$_GET[idedit]' ";
      $query_lietke_DevelopID = mysqli_query($mysqli, $sql_lietke_DevelopID);
      $row2 = mysqli_fetch_array($query_lietke_DevelopID);
      while ($row = mysqli_fetch_array($query_lietke_Draft)) {
        if ($row['Develop'] == $row2['De_Name']) {
      ?>
          <tr>
            <td><img src="<?php echo $row['Icon'] ?>" width="100px" height="90px"></td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['Type_App'] ?></td>
            <td><?php echo $row['Paid'] ?></td>
            <td>
              <a href="Pages/Main/App_Dataprocess.php?iddelete=<?php echo $row['ID_App'] ?>&idedit=<?php echo $_GET['idedit'] ?>">Delete</a>
            </td>

          </tr>
      <?php
        }
      }
      ?>
    </table>
  </div>
</div>

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