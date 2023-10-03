<?php 
    if(isset($_POST['submit'])){
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('zip');

        if(in_array($fileActualExt,$allowed)){
            if($fileError ===0){
                if($fileSize < 1000000){
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = 'files/'.$fileName;
                    // $fileTmpName = rename($fileTmpName,$fileName);
                    $tmp = move_uploaded_file($fileTmpName,$fileDestination);
                    // move_uploaded_file($tmp,$fileDestination);
                    echo $fileDestination ;

                }
                else{
                    echo "Too big!";
                }

            }
            else{
                echo"There was an error ! Please try again later";
            }
        }


    }
?>