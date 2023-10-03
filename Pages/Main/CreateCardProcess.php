    <?php
    include('../../config/config.php');
   if(isset($_POST['Serial']) && isset($_POST['price'])){
        $Serial = $_POST['Serial'];
        $price = $_POST['price'];
    }
    else{
        $Serial ="";
        $price ="";
    }
    $sql_insert = "INSERT INTO naptien(Serial,Price) value ('$Serial' , '$price')";
    $query_pro = mysqli_query($mysqli,$sql_insert);
    header('Location:../../CreateCard.php?msg=buttonCreateCard');
