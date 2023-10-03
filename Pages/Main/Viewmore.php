<?php

if (isset($_GET['view'])) {
    $view = $_GET['view'];
} else {
    $view = '';
}

if (isset($_GET['viewsame_Type'])) {
    $viewType = $_GET['viewsame_Type'];
} else {
    $viewType = '';
}

if (isset($_GET['viewsame_Develop'])) {
    $viewDevelop = $_GET['viewsame_Develop'];
} else {
    $viewDevelop = '';
}



?>

<?php
if ($view == 'Games') {
    $sql_FavoriteApps = "SELECT * FROM app_item WHERE Type_App = '$view' and Status IN ('Valid','Accepted') ORDER BY Num_Down DESC LIMIT 24";
} else {
    $sql_FavoriteApps = "SELECT * FROM app_item WHERE Type_App <> 'Games' and Status IN ('Valid','Accepted') ORDER BY Num_Down DESC LIMIT 24";
}

$query_FavoriteApps = mysqli_query($mysqli, $sql_FavoriteApps);
?>

<?php
if (isset($_GET['view'])) {
?>

    <ul class="product-list ">
        <?php
        while ($row_pro = mysqli_fetch_array($query_FavoriteApps)) {
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
<?php
} elseif (isset($_GET['viewsame_Type'])) {
?>
    <?php
    $sql_sametype = "SELECT * FROM app_item WHERE Type_App IN (SELECT Type_App FROM app_item WHERE ID_App='$viewType')and Status IN ('Valid','Accepted')";
    $query_sametype = mysqli_query($mysqli, $sql_sametype);
    ?>

    <div class="row">
        <div>
            <h2>Same Type Apps</h2>
        </div>

        <ul class="product-list ">
            <?php
            while ($row_sametype = mysqli_fetch_array($query_sametype)) {
            ?>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 float-left my-3 d-flex">
                    <div class="item shadow-xl rounded-lg ">
                        <img src="<?php echo $row_sametype['Icon'] ?>" id="img-viewmore">
                        <div class="info">
                            <a href="index.php?quanly=AppDetail&idApp=<?php echo $row_sametype['ID_App'] ?>">
                                <p id="text-title"><?php echo $row_sametype['Name'] ?></p>
                            </a>
                        </div>
                        <div class="card-footer"> <small class="text-muted">★ ★ ★ ★ ☆</small> </div>
                    </div>
                </div>
            <?php

            }
            ?>
        </ul>
    </div>
<?php
} elseif (isset($_GET['viewsame_Develop'])) {

    $sql_sameDevelop = "SELECT * FROM app_item WHERE Develop IN (SELECT Develop FROM app_item WHERE ID_App='$viewDevelop')and Status IN ('Valid','Accepted')";
    $query_sameDevelop = mysqli_query($mysqli, $sql_sameDevelop);
?>

    <div class="row">
        <div>
            <h2>Same Developer's Apps</h2>
        </div>

        <ul class="product-list ">
            <?php
            while ($row_Develop = mysqli_fetch_array($query_sameDevelop)) {
            ?>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 float-left my-3 d-flex">
                    <div class="item shadow-xl rounded-lg ">
                        <img src="<?php echo $row_Develop['Icon'] ?>" id="img-viewmore">
                        <div class="info">
                            <a href="index.php?quanly=AppDetail&idApp=<?php echo $row_Develop['ID_App'] ?>">
                                <p id="text-title"><?php echo $row_Develop['Name']?></p>
                            </a>
                        </div>
                        <div class="card-footer"> <small class="text-muted">★ ★ ★ ★ ☆</small> </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </ul>
    </div>
<?php
}
?>