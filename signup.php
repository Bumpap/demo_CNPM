<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="javascript/main.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>Sign Up</title>
</head>

<body>
    <div class="container" id="dangky">
        <div class="row mt-5">
            <div class="col col-sm-12 ml-auto">
                <div class="Sign-up-card rounded m-auto h-100">
                    <!--Card content-->
                    <div class="card-body">
                        <div >
                            <h2 id="headerlogin">Sign Up</h2>
                        </div>
                        <!-- Form -->
                        <form class="text-center pl-4 pr-4" action="Pages/Main/SignUpProcess.php" method="POST">

                            <div class="md-form">
                                <input type="text" name="txtFullName" id="txtFullName" placeholder="Full Name" required
                                    class="form-control mt-3">
                            </div>
                            <!-- Email -->
                            <div class="md-form">
                                <input type="email" name="txtEmail" id="txtEmail" placeholder="Email" required
                                    class="form-control mt-3">
                            </div>
                            <div class="text-danger small text-center">
                                <span id="errorMessage"><?php if (isset($_GET["msg1"])) echo $_GET["msg1"]; ?>
                            </div>
                            <!-- Pass Word -->
                            <div class="md-form mt-3">
                                <input type="password" name="txtPassword" id="txtPassword" placeholder="Password"
                                    required class="form-control mt-3">
                            </div>
                            <!-- error show -->
                            <div class="text-danger small text-left">
                                <span id="errorMessage"><?php if (isset($_GET["msg3"])) echo $_GET["msg3"]; ?>
                            </div>
                            <div class="md-form mt-3">
                                <input type="password" name="txtConfirmPassword" id="txtConfirmPassword"
                                    placeholder="Confirm Password" required class="form-control mt-3">
                            </div>
                            <div class="text-danger small text-left">
                                <span id="errorMessage"><?php if (isset($_GET["msg4"])) echo $_GET["msg4"]; ?>
                            </div>
                            <!-- Sign in button -->
                            <button class="btn btn-outline-info btn-rounded btn-block my-4 mb-3 waves-effect z-depth-0"
                                type="submit" id="buttonSignUp" name="buttonSignUp" value="Sign Up">Sign up</button>
                        </form>
                        <!-- Form -->
                        <form action="login.php"> 
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 mb-3 waves-effect z-depth-0"
                                type="submit" id="buttonlogin1" value="Back To Login">Back To Login</button>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
include('DialogMessage.php') ;
?>

</body>

</html>
<?php
if (isset($_GET["msg"])) {
    echo "<script>$('#Message').modal({show: true})</script>";
}
?>