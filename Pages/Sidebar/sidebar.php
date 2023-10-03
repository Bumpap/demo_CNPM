<h1 class="my-4 font-weight-bold">Category</h1>
<?php
$sql_Type = "SELECT * FROM manage_type ORDER BY ID_Type ASC";
$query_Type = mysqli_query($mysqli, $sql_Type);

?>
<div class="list-group">
    <?php
    while ($dong = mysqli_fetch_array($query_Type)) {
    ?>
        <a class="list-group-item font-weight-bold" id="listitem" href="index.php?quanly=sidebarlist&idloai=<?php echo $dong['Type_Name'] ?>"><?php echo $dong['Type_Name'] ?></a>
    <?php
    }
    ?>
</div>