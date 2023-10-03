<h1>App Detail</h1>
<?php
$sql_chitiet = "SELECT * FROM app_item WHERE ID_App='$_GET[idApp]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli, $sql_chitiet);

if (isset($_GET['idApp'])) {
    $idsame = $_GET['idApp'];
} else {
    $idsame = "";
}
if (isset($_SESSION['Login'])) {
    $idUser = $_SESSION['Login'];
} else {
    $idUser = "";
}

$sql_bought = "SELECT * FROM history_bought WHERE Email = '$idUser' AND ID_App='$idsame' LIMIT 1 ";
$query_bought = mysqli_query($mysqli, $sql_bought);
$bought = mysqli_fetch_array($query_bought);

$sql_User = "SELECT * FROM user WHERE Email = '$idUser' LIMIT 1 ";
$query_User = mysqli_query($mysqli, $sql_User);
$User = mysqli_fetch_array($query_User);
?>
<ul class="product-list">
    <?php

    while ($row_pro = mysqli_fetch_array($query_chitiet)) {
    ?>

        <div class="col-xl-6 card rounded mx-12 " id="appprofile">
            <img class="h-100 w-100" src="<?php echo $row_pro['Icon'] ?>">
            <p class="" id="name"><?php echo $row_pro['Name'] ?></p>
            <p id="price1">Price: <?php echo $row_pro['Paid'] ?></p>
            <p id="price1">Type: <?php echo $row_pro['Type_App'] ?></p>
            <p id="price1">Develop: <?php echo $row_pro['Develop'] ?></p>
            <br>
            <br>
            <p> <b>Describe:</b> <?php echo $row_pro['Describe_App'] ?></p>

            <?php
            if (isset($_SESSION['Login'])) {
                if ($row_pro['Paid'] == 'Free' || !empty($bought)) {
            ?>
                    <form action="Pages/Main/dowload.php?files=<?php echo $row_pro['Name'] ?>.zip" method="POST">
                        <button class="btn btn-success w-100" type="submit">Download</button>
                    </form>
                <?php
                } elseif ($User['Budget'] >= $row_pro['Paid']) {
                ?>
                    <form action="Pages/Main/Bought_process.php" method="POST">
                        <input class="d-none" name="idUser" value="<?php echo $idUser ?>">
                        <input class="d-none" name="ID_App" value="<?php echo $idsame ?>">
                        <input class="d-none" name="Cost" value="<?php echo $row_pro['Paid'] ?>">
                        <button class="btn btn-success w-100" name="Bought" type="submit">Cost : <?php echo $row_pro['Paid'] . ' VND' ?></button>
                    </form>
                <?php
                } else {
                ?>
                    <button class="btn btn-success w-100" type="submit"><a class="text-white" href="index.php?quanly=AddMoney&idedit=<?php echo $_SESSION['Login'] ?>">You don't have enough money, Top up now?</a></button>
                <?php
                }
                ?>

            <?php
            } else {
            ?>
                <button class="btn btn-success w-100" type="submit"><a class="text-white" href="login.php">You must Login to DownLoad this App!</a></button>
            <?php
            }
            ?>

        </div>

    <?php
    }
    ?>
</ul>


<?php
$sql_sametype = "SELECT * FROM app_item WHERE Type_App IN (SELECT Type_App FROM app_item WHERE ID_App='$_GET[idApp]')and Status IN ('Valid','Accepted') LIMIT 3";
$query_sametype = mysqli_query($mysqli, $sql_sametype);
?>

<div class="row">
    <div>
        <h4>Same Type<a href="index.php?quanly=ViewMore&viewsame_Type=<?php echo $_GET['idApp'] ?>" class="font-weight-bold">View More</a></h4>
    </div>

    <ul class="product-list ">
        <?php
        while ($row_sametype = mysqli_fetch_array($query_sametype)) {
            if ($row_sametype['ID_App'] != $idsame) {
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
        }
        ?>
    </ul>
</div>


<?php
$sql_sameDevelop = "SELECT * FROM app_item WHERE Develop IN (SELECT Develop FROM app_item WHERE ID_App='$_GET[idApp]') and Status IN ('Valid','Accepted') LIMIT 3";
$query_sameDevelop = mysqli_query($mysqli, $sql_sameDevelop);
?>

<div class="row">
    <div>
        <h4>Same Developer<a href="index.php?quanly=ViewMore&viewsame_Develop=<?php echo $_GET['idApp'] ?>" class="font-weight-bold">View More</a></h4>
    </div>

    <ul class="product-list ">
        <?php
        while ($row_Develop = mysqli_fetch_array($query_sameDevelop)) {
            if ($row_Develop['ID_App'] != $idsame) {
        ?>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 float-left my-3 d-flex">
                    <div class="item shadow-xl rounded-lg ">
                        <img src="<?php echo $row_Develop['Icon'] ?>" id="img-viewmore">
                        <div class="info">
                            <a href="index.php?quanly=AppDetail&idApp=<?php echo $row_Develop['ID_App'] ?>">
                                <p id="text-title"><?php echo $row_Develop['Name'] ?></p>
                            </a>
                        </div>
                        <div class="card-footer"> <small class="text-muted">★ ★ ★ ★ ☆</small> </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </ul>
</div>