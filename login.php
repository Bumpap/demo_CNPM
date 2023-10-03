<?php 

    include('DialogMessage.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="card-login">
            <div class="header">
                <h2 id="headerlogin">Login</h2>
            </div>

            <div class="input">
                <form action="Pages/Main/LoginProcess.php"  autocomplete="off" method="POST" onsubmit="return validateInput()">
                    <input id="Email" onclick="clearErrorMessage()" type="text" name="Email" placeholder="Email" >
                    <input id= "Pass" onclick="clearErrorMessage()" type="password" name="Pass" placeholder="Password" >

                    <div class="text-danger small text-left mt-3">
                            <span id="errorMessage"><?php if (isset($_GET["msg1"])) echo $_GET["msg1"]; ?></span></td>
                        </div>
                    <input type="submit" name="Login" value="Login">
    
                    <div class="form-group">
                        <a href="ForgotPassword.php">Forgot Password?</a>  
                    </div>
                  
                </form>
                  <div class="form-group" style="text-align:center;">Or</div>
                    <form action="signup.php"> 

                        <button class="btn btn-outline-info btn-rounded btn-block my-4 mb-3 waves-effect  "
                             id ="signupbutton1"   type="submit" value="Sign Up">Sign Up </button>
                        
                        </form>
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