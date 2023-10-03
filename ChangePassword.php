

<?php include('DialogMessage.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Change Password</title>
</head>

<body>
    <div class="container mt-5">
        <div class="Change-card rounded m-auto">
            <!--Card content-->
            <div class=" card-body w-75 m-auto">
                
                <!-- Form -->
                <form class="text-center w-100 m-auto" action="Pages/Main/ChangePasswordProcess.php" method="POST">

                    <div class="md-form mt-2">
                        <p id="headerlogin2">Please reset your password here</p>
                    </div>
                    <div class="md-form mt-3">
                        <input class="form-control" type="mail" name="txtEmail" id="txtEmail" placeholder="Email" required>
                    </div>
                    <div class="md-form mt-3">
                        <input class="form-control" type="password" name="txtCurrentPassword" id="txtCurrentPassword" placeholder="Current Password" required>
                    </div>
                    <div class="text-danger small text-left">
                        <span id="errorMessage"><?php if (isset($_GET["msg3"])) echo $_GET["msg3"]; ?></span>
                    </div>
                    <div class="md-form mt-3">
                        <input class="form-control" type="password" name="txtNewPassword" id="txtNewPassword" placeholder="New Password" required>
                    </div>
                    <div class="text-danger small text-left">
                        <span id="errorMessage"><?php if (isset($_GET["msg2"])) echo $_GET["msg2"]; ?></span>
                    </div>
                    <div class="md-form mt-3">
                        <input class="form-control" type="password" name="txtConfirmPassword" id="txtConfirmPassword" placeholder="Confirm Password" required>
                    </div>

                    <!-- error show -->
                    <div class="text-danger small text-left">
                        <span id="errorMessage"><?php if (isset($_GET["msg1"])) echo $_GET["msg1"]; ?></span>
                    </div>
                    <!-- error show -->

                    <!-- Update button -->
                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0 text-white bg-dark" type="submit" id="ButtonChangePassword" name="ButtonChangePassword" value="Update">Update</button>
                    <!-- Update button -->

                </form>
                <!-- Form -->
                <form action="index.php"> 
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 mb-3 waves-effect z-depth-0"
                                type="submit" id="buttonchange1" value="Back">Back</button>
                        
                        </form>
            </div>
        </div>
    </div>


</body>

</html>

<?php
if (isset($_GET["msg"])) {
    echo "<script>$('#Message')</script";
}
?>
