<?php
include 'DialogMessage.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/vi/1/1b/T%C4%90T_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Forgot Password</title>
</head>

<body>
    <div class="container mt-5">
        <div class=" col col-sm-12 ml-auto">
            <div class="forgot-card rounded m-auto ">
                <!--Card content-->
                <div class="card-body w-75 m-auto" id="fgp">
                
                    <div class="mb-2">
                        <p id="headerlogin">Enter the registered email to reset password!</p>
                    </div>
                    <form class="text-center" form action="Pages/Main/ForgotPasswordProcess.php" method="POST">
                        <!-- Email -->
                        <div class="md-form">
                            <input type="email" name="txtEmail" id="txtEmail" placeholder="Email" required class="form-control">
                        </div>
                        <div class="text-danger small text-left mt-3">
                            <span id="errorMessage"><?php if (isset($_GET["msg1"])) echo $_GET["msg1"]; ?></span></td>
                        </div>
                        <div>
                            <input id="buttonSignUp" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" id="buttonForgotPassword" name="buttonForgotPassword" value="Send Mail">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_GET["msg"])) {
    echo "<script>$('#Message').modal({show: true})</script>";
}
?>