<table class="table ">

    <form method="POST" action="Pages/Main/AddAccountProcess.php" enctype="multipart/form-data">

        <h1>Thêm USER</h1>
     
            <tr>
                <td>Fullname</td>
                <td><input class="form-control" type="text" name="fullname" placeholder="Input Fullname" required></td>
            </tr>
            
            <tr>
                <td>Email</td>
                <td><input class="form-control" type="text" name="email" placeholder="Input Email" required></td>
            </tr>
            
            
            <tr>
                <td>Password</td>
                <td><input class="form-control" type="text" name="password" placeholder="Input Password" required></td>
            </tr>
         
            <tr>
                <td>Role</td>
                    <td><input class="form-control" type="text" name="role" placeholder="Input role < 1 for user 2 for dev 3 for admin >" required >
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input class="btn btn-success" type="submit" name="addUser" value="AddUser"></td>
            </tr>


    </form>
</table>