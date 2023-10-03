<?php
$title = "";
$content = "";
if (isset($_GET["msg"]) && !empty($_GET["msg"])) {
    if ($_GET["msg"] === "SignUp") {
        $title = "Sign Up";
        $content = "We have accepted your request please check your email to complete registration";
    } else if ($_GET["msg"] === "CompleteRegistration") {
        $title = "Sign Up";
        $content = "Sign up success";
    } else if ($_GET["msg"] === "ForgotPassword") {
        $title = "Forgot Password";
        $content = "We have accepted your request please check your email to confirm";
    }else if ($_GET["msg"] === "ForgotPasswordRecently") {
        $title = "Forgot Password";
        $content = "Please don't request recently!";
    }else if ($_GET["msg"] === "ForgotPasswordTimeOut") {
        $title = "Forgot Password";
        $content = "Your request time out";
    }else if ($_GET["msg"] === "CompleteResetPassword") {
        $title = "Forgot Password";
        $content = "Your password is reset";
    }else if($_GET['msg'] === "buttonCreateCard"){
        $title = "Create Card";
        $content = "Complete Create Card";
    }else if($_GET['msg'] === "CompleteChangePassword"){
        $title = "Change Password";
        $content = "Your password is changed completely!";
    }else if($_GET["msg"] === "CompleteRegistration") {
        $title = "Complete Registration";
        $content = "Complete Registration";
    }else if($_GET["msg"] === "SignUpTimeOut") {
        $title = "SignUp Timeout";
        $content = "SignUp Timeout";
    }
}
