<?php 
    if(isset($_SESSION['Login']))
    {
?>
<table class="table my-auto">
    <h2 class="text-center">Category Management </h2>
    <h4><a href="index.php?action=Add_Type">Add Type</a></h4>
    <tr>
        <th>ID</th>
        <th>Type</th>
    </tr>

    <?php
    $sql_lietke = "SELECT * FROM manage_type ";
    $query_lietke = mysqli_query($mysqli, $sql_lietke);

    $i = 0;

    while ($row = mysqli_fetch_array($query_lietke)) {
        $i = $i + 1;

    ?>
        <tr>

            <td><?php echo $i ?></td>
            <td><?php echo $row['Type_Name'] ?></td>
            <td>
                <a href="Pages/Main/Type_Dataprocess.php?Type_delete=<?php echo $row['Type_Name'] ?>">Delete</a>|<a href="index.php?action=Edit_Type&ideditType=<?php echo $row['Type_Name'] ?>">Edit</a>
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