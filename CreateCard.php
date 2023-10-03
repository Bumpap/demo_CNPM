
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <title>Create Card</title>
</head>

<body>
    <div class="container mt-5">
        <div class=" col col-sm-12 ml-auto">
            <div class="create-cards rounded m-auto ">
                <!--Card content-->
                <div class="card-body w-75 m-auto">

                    <div class="mb-2  ">
                        <h5 id="headerlogin2">Enter to the box to create a new card</h5>
                    </div>
                    <form action="index.php" method="POST">
                        <div>
                            <button type="submit" class="btn btn-info float-left">
                                < Back To Appstore</button>
                        </div>
                    </form>

                    <form class="text-center" action="Pages/Main/CreateCardProcess.php" method="POST">


                        <!-- Email -->


                        <div class="md-form">
                            <input type="text" name="Serial" id="Serial" placeholder="Input Serial" required
                                class="form-control">
                        </div>
                        
                        <div class="md-form">
                            <!-- <input type="text" name="price" id="price" placeholder="Input Price" required class="form-control"> -->

                            <select class="form-control" name="price" id="price">

                                <option value="20000">20000 VND</option>
                                <option value="50000">50000 VND</option>
                                <option value="100000">100000 VND</option>
                                <option value="200000">200000 VND</option>
                                <option value="500000">500000 VND</option>


                            </select>
                        </div>

                        <div>
                            <input class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0"
                                type="submit" id="buttonCreateCard" name="buttonCreateCard" value="Submit">
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <div>
        <?php
            include("Pages/Main/Card_Status.php");
        ?>
    </div>
    <?php 
        include 'DialogMessage.php';
?>
    <?php
if (isset($_GET["msg"])) {
    echo "<script>$('#Message').modal({show: true})</script>";
}
?>
</body>

</html>

