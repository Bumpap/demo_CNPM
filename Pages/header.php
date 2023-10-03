<?php
if (isset($_GET['Log']) && $_GET['Log'] == 1) {
    header("Location:login.php");
} elseif (isset($_GET['Log']) && $_GET['Log'] == 2) {
    header("Location:signup.php");
} elseif (isset($_GET['Log']) && $_GET['Log'] == 3) {
    unset($_SESSION['Login']);
    header("Location:index.php");
}
?>


<?php
if (isset($_SESSION['Login'])) {
    $Email = $_SESSION['Login'];
    $sql_level = "SELECT * FROM user WHERE Email='$Email' LIMIT 1";
    $query_level = mysqli_query($mysqli, $sql_level);
    $user = mysqli_fetch_array($query_level);
}
?>




<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">AppStore</a>
        <div class="search-container">
            <form class="form-inline my-2 my-lg-0" method="POST" action="index.php?quanly=Search">
                <input name="Search_Name" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" name="Search" type="submit">Search</button>
            </form>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="Dropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Apps in top Download
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?quanly=Top_Down&Paid=Free">Top Free Apps</a>
                        <a class="dropdown-item" href="index.php?quanly=Top_Down&Paid=NFree">Top Paid Apps</a>

                    </div>
                </li>

                <?php
                if (!isset($_SESSION['Login'])) {
                ?>
                    <li class="nav-item active">
                        <a class="nav-link" id="login" href="login.php">
                            Login
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" id="signup" href="signup.php">
                            Sign Up
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                <?php
                } else {
                ?>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="d-inline">
                                Hello:
                                <?php
                                if (isset($_SESSION['Login'])) {
                                    echo $user['FullName'];
                                }   
                                ?>
                                <img id = "ava" style="border-radius:500px" class=" AVT h-25 w-25" src="<?php echo $user['AVT']; ?>" alt="">
                            </div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?quanly=UserProfile&idedit=<?php echo $_SESSION['Login'] ?>">Profile</a>
                            <a class="dropdown-item" href="ChangePassword.php">Change Password</a>
                            <a class="dropdown-item" href="index.php?quanly=AddMoney&idedit=<?php echo $_SESSION['Login'] ?>">Recharge and transaction history</a>
                            <?php
                            if ($user['Level'] == 1) {
                            ?>
                                <a class="dropdown-item" href="index.php?quanly=Upgrade_Develop&idedit=<?php echo $_SESSION['Login'] ?>">Become a Developer</a>

                            <?php
                            } elseif ($user['Level'] == 2) {
                            ?>
                                <a class="dropdown-item" href="index.php?quanly=ManageApps&idedit=<?php echo $_SESSION['Login'] ?>">Manage Application</a>
                                <a class="dropdown-item" href="index.php?quanly=ViewOrder&idedit=<?php echo $_SESSION['Login'] ?>">View Order</a>
                            <?php
                            } elseif ($user['Level'] == 3) {
                            ?>
                                <a class="dropdown-item" href="index.php?quanly=WAF&idedit=<?php echo $_SESSION['Login'] ?>">Examine Application</a>
                                <a class="dropdown-item" href="index.php?quanly=Manage_Type">Manage Category</a>
                                <a class="dropdown-item" href="CreateCard.php">Create Card</a>
                                <a class="dropdown-item" href="index.php?quanly=ManageAccount&idedit=<?php echo $_SESSION['Login'] ?>">Manage Account</a>
                                <a class="dropdown-item" href="index.php?quanly=ManageApplication&idedit=<?php echo $_SESSION['Login'] ?>">Manage Application</a>
                            <?php
                            }
                            ?>
                        </div>
                    </li>
                <?php
                }
                ?>





                <?php
                if (isset($_SESSION['Login'])) {
                ?>
                    <li class="nav-item">
                        <a id ="logout"class="nav-link text-white" href="?Log=3">Log out
                        </a>
                    </li>
                <?php
                }
                ?>

            </ul>
        </div>
    </div>
</nav>
