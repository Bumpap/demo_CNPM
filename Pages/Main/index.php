
<div class="carousel container slide my-2" id="carouselExampleIndicators" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    </ol>


    <div class="carousel-inner " role="listbox">
        <!-- <a href="index.php?quanly=AppDetail&idApp=1"> -->
            <div id="caro_img" class="carousel-item active"><a href="index.php?quanly=AppDetail&idApp=1"><img class="d-block img-fluid" src="image\1.1.1.1 car.png"
                alt="First slide" /></a></div>
            <!-- </a> -->
        <!-- <a href="index.php?quanly=AppDetail&idApp=2">  -->
            <div  id="caro_img" class="carousel-item">
                <a href="index.php?quanly=AppDetail&idApp=2">
                <img class="d-block img-fluid" src="image\candycrush car.png" alt="Second slide" />
                </a>
             </div>
        <!-- </a> -->
        <div id="caro_img" class="carousel-item">
            <a href="index.php?quanly=AppDetail&idApp=4"><img class="d-block img-fluid" src="image\tft car.png" alt="Third slide" />
            </a>
        </div>
        <div id="caro_img" class="carousel-item">  <a href="index.php?quanly=AppDetail&idApp=14">
            <img class="d-block img-fluid" src="image\tikibg.png" alt="Fifth slide" />
    </a>
        </div>
        <div id="caro_img" class="carousel-item"> <a href="index.php?quanly=AppDetail&idApp=15">
            <img class="d-block img-fluid" src="image\gojekbg.jpg" alt="Sixth slide" />
</a>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>


    </a>
</div>

<?php
                $sql_FavoriteGames = "SELECT * FROM app_item WHERE Type_App = 'Games' ORDER BY Num_Down DESC LIMIT 3";
                $query_FavoriteGames = mysqli_query($mysqli,$sql_FavoriteGames);
            ?>

    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>


<div class="row">
    <div>
        <h2>Favorite Games <a href="index.php?quanly=ViewMore&view=Games" class="font-weight-bold">View More</a></h2>
    </div>


    <ul class="product-list ">
        <?php
                while($row_pro = mysqli_fetch_array($query_FavoriteGames))
                {
            ?>
        <div class="col-lg-4 col-md-6 mb-4 float-left my-5">
            <div class="card h-100" id="card">
               <a href="index.php?quanly=AppDetail&idApp=<?php echo $row_pro['ID_App']?>"><img class="card-img-top" src="<?php echo $row_pro['Icon'] ?>"> </a>
                <div class="card-body">
                    <h4 class="card-title"><a href="index.php?quanly=AppDetail&idApp=<?php echo $row_pro['ID_App']?>">
                            <?php echo $row_pro['Name'] ?></a></h4>
                </div>
                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
            </div>
        </div>
        <?php 
                }
            ?>
    </ul>
</div>

<?php
                $sql_FavoriteApps = "SELECT * FROM app_item WHERE Type_App != 'Games' ORDER BY Num_Down DESC LIMIT 3";
                $query_FavoriteApps = mysqli_query($mysqli,$sql_FavoriteApps);
            ?>

<div class="row">
    <div>
        <h2>Favorite Apps <a href="index.php?quanly=ViewMore&view=Apps" class="font-weight-bold">View More</a></h2>
    </div>
    <ul class="product-list ">
        <?php
                            while($row_pro = mysqli_fetch_array($query_FavoriteApps))
                            {
                        ?>
        <div class="col-lg-4 col-md-6 mb-4 float-left my-5">
            <div class="card h-100" id="card">
                <a href="index.php?quanly=AppDetail&idApp=<?php echo $row_pro['ID_App']?>"><img class="card-img-top" src="<?php echo $row_pro['Icon'] ?>"> </a>
                <div class="card-body">
                    <h4 class="card-title"><a href="index.php?quanly=AppDetail&idApp=<?php echo $row_pro['ID_App']?>">
                            <?php echo $row_pro['Name'] ?></a></h4>
                </div>
                <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
            </div>
        </div>
        <?php 
                            }
                        ?>
    </ul>
</div>
</div>
</div>
</div>
</div>
<div>