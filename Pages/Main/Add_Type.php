<?php 
    if(isset($_SESSION['Login']))
    {
?>
<table class="table ">
    <form method="POST" action="Pages/Main/Type_Dataprocess.php" enctype="multipart/form-data">
        <h1 class="text-center">Add Type</h1>
        <tr>
            <td>Type Name:</td>
            <td><input class="form-control " type="text" name="TypeName"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="AddType" value="Add Type"></td>
        </tr>
    </form>
</table>

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