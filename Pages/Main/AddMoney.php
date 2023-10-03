<?php 
    if(isset($_SESSION['Login']))
    {
?>

<div class="container mt-5">
    <div class=" col col-sm-12 ml-auto">
        <div class="forgot-card rounded m-auto ">
            <!--Card content-->
            <div class="card-body w-75 m-auto">

                <div class="mb-2  ">
                    <h5>Enter the Serial to the below box</h5>
                </div>

                <form class="text-center" action="Pages/Main/AddMoneyProcess.php?id_User=<?php echo $_SESSION['Login'] ?>" method="POST">



                    <div class="md-form">
                        <input type="text" name="Serial" id="Serial" placeholder="Input Serial" required class="form-control">
                    </div>


                    <div>
                        <input class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" id="buttonCreateCard" name="buttonCreateCard" value="Submit">
                    </div>


                </form>
            </div>
        </div>
    </div>
</div>
<br>
<div class=" col col-sm-12 ml-auto">
    <?php
    include("History_AddMoney.php");
    ?>
</div>

<?php
    }
    else
    {
?>
      <div class="py-5">
        <h1 class=" text-center text py-5"><a class="text-danger" href="login.php">
        Oops You are trying to access without Login?
                Login Now?
  </a></h1>
      </div> 
<?php
    }
?>