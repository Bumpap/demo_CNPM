<?php
    if(isset($_POST['Search_Name']))
    {
        $Name_App=$_POST['Search_Name'];
        $str=ucfirst($Name_App);
    
    }
    else
    {
        $Name_App='';
    }
 
    $sql_pro = "SELECT * FROM app_item where Name like BINARY '%$str%' and Status IN ('Valid','Accepted') ";
    $query_pro = mysqli_query($mysqli,$sql_pro);

?>

<ul class = "product-list " >
        <?php
             while($row_pro = mysqli_fetch_array($query_pro))
            {
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 float-left my-3 d-flex">
            <div class="item shadow-xl rounded-lg ">
                <img src="<?php echo $row_pro['Icon'] ?>" id="img-viewmore">
                <div class="info">
                    <a href="index.php?quanly=AppDetail&idApp=<?php echo $row_pro['ID_App'] ?>">
                        <p id="text-title"><?php echo $row_pro['Name'] ?></p>
                    </a>
                </div>
                <div class="card-footer"> <small class="text-muted">★ ★ ★ ★ ☆</small> </div>
            </div>
        </div>
        <?php 
        }
        ?>
</ul>



