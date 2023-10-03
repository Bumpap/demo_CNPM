
<?php
session_start();
if (!empty($_POST["txtEmail"])) {
    require_once '../../config/config.php';
    $email = $_POST["txtEmail"];
    $hash = md5(rand(0, 1000));
    $time = time();
    $ErrorMessage = "";
    $queryEmail = "SELECT * FROM user WHERE Email = ? ";
    $stmt = $mysqli->prepare($queryEmail);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        require_once 'SendMailVerify.php';
        $row = $result->fetch_assoc();
        $query = "DELETE FROM verifiedpassword WHERE TimeStamp < DATE_SUB(NOW(), INTERVAL 10 MINUTE)";
        $stmt = $mysqli->prepare($query);
        $stmt->execute();
        $query = "SELECT * FROM verifiedpassword WHERE Email = ?";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            // $ErrorMessage = "Please don't request recently!";
            // header("Location: ../../ForgotPassword.php?msg1=$ErrorMessage");
            header("Location: ../../ForgotPassword.php?msg=ForgotPasswordRecently");
        } else {
            $query = "INSERT INTO verifiedpassword(Email, Hash, Time) VALUES(?,?,?)";
            $stmt = $mysqli->prepare($query);
            $stmt->bind_param("sss", $email, $hash, $time);
            $stmt->execute();

            header("Location: ../../ForgotPassword.php?msg=ForgotPassword");
            SendMailResetPassword($email, $row["FullName"], $hash);
        }
    } else {
        $ErrorMessage = "Your email does not exists please try again";
        header("Location: ../../ForgotPassword.php?msg1=$ErrorMessage");
    }
    $mysqli->close();
}
?>