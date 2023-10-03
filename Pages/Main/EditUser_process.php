<?php
include('../../config/config.php');


if (isset($_GET['idedit'])) {
    $idedit = $_GET['idedit'];
} else {
    $idedit = '';
}

if (isset($_POST['FullName'])) {
    $FullName = $_POST['FullName'];
} else {
    $FullName = '';
}



if (isset($_POST['De_Name'])) {
    $De_Name = $_POST['De_Name'];
} else {
    $De_Name = '';
}

if (isset($_POST['Contact_Info'])) {
    $Contact_Info = $_POST['Contact_Info'];
} else {
    $Contact_Info = '';
}




if (isset($_POST['EditUser'])) {

    $sql_insert = "UPDATE user SET FullName = '$FullName', De_Name = '$De_Name', Contact_Info='$Contact_Info' WHERE Email = '$_GET[idedit]' ";
    mysqli_query($mysqli, $sql_insert);
    header('Location:../../index.php?quanly=UserProfile&idedit=' . $idedit);
} elseif (isset($_POST['UploadAVT'])) {
    $target_dir = "../../image/AVT/";
    $target_file = $target_dir . basename($_FILES["AVT"]["name"]);
    $target_file1 = "image/AVT/". $_FILES["AVT"]["name"];
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["AVT"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["AVT"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["AVT"]["tmp_name"], $target_file)) {
            $sql_insert = "UPDATE user SET AVT = '$target_file1' WHERE Email = '$_GET[idedit]' ";
            mysqli_query($mysqli, $sql_insert);
            move_uploaded_file($_FILES["AVT"]["tmp_name"], "image/AVT/" . $target_file1);
        
            header('Location:../../index.php?quanly=UserProfile_Edit&idedit=' . $idedit);
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
