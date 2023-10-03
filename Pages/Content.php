<div class="container">

    <div class="row">
    <div class="col-lg-2 ">
        <?php
            include("Sidebar/sidebar.php")
        ?>
    </div>
        
        <div class="col-lg-10">
            <?php
                if(isset($_GET['quanly']))
                  {
                    $tam = $_GET['quanly'];
                  }
                else
                  {
                    $tam='';
                  }

                if(isset($_GET['action']))
                  {
                    $action = $_GET['action'];
                  }
                else
                  {
                    $action='';
                  }


                if ($tam=="sidebarlist")
                  {
                    include('Main/Category.php');
                  }
                elseif($tam=="UserProfile")
                  {
                    include('Main/UserProfile.php');
                  }
                elseif($tam=="UserProfile_Edit")
                  {
                    include('Main/UserProfile_Edit.php');
                  }
                elseif($tam=="ManageApps")
                  {
                    include('Main/ManageApps.php');
                  }

                  elseif($tam=="Add_App_Admin")
                  {
                    include('Main/Add_App_Admin.php');
                  }
                    elseif($tam=="Edit_App_Admin")
                  {
                    include('Main/Edit_App_Admin.php');
                  }
                  //   elseif($tam=="Delete_App_Admin")
                  // {
                  //   include('Main/Delete_App_Admin.php');
                  // }
                elseif($tam=="AppDetail")
                  {
                    include('Main/App_Detail.php');
                  }
                elseif($action=="Add_App")
                  {
                    include('Main/Add_App.php');
                  }

                elseif($action=="Edit_App")
                  {
                    include('Main/Edit_App.php');
                  }
                elseif($tam=="Search")
                  {
                    include('Main/SearchApp.php');
                  }
                elseif($tam=="ViewMore")
                  {
                    include('Main/Viewmore.php');
                  }
                elseif($tam=="Top_Down")
                  {
                    include('Main/TopDownLoad.php');
                  }
                elseif($tam=="Upgrade_Develop")
                  {
                    include('Main/Developer.php');
                  }
                elseif($tam=="AddMoney")
                {
                    include('Main/AddMoney.php');
                }
                elseif($tam=="ViewOrder")
                {
                    include('Main/ViewOrder.php');
                }
                elseif($tam=="WAF")
                {
                    include('Main/WAF.php');
                }
                elseif($tam=="Manage_Type")
                {
                    include('Main/Manage_Type.php');
                }
                elseif($tam=="ManageAccount")
                {
                    include('Main/ManageAccount.php');
                }
                elseif($tam=="ManageApplication")
                {
                    include('Main/ManageApplication.php');
                }
                elseif($tam=="AddAccount")
                {
                    include('Main/AddAccount.php');
                }
                elseif($tam=="EditAccount")
                {
                    include('Main/EditAccount.php');
                }
                elseif($action=="View_Detail_Application")
                {
                    include('Main/WAF_Detail.php');
                }
                elseif($action=="Add_Type")
                {
                    include('Main/Add_Type.php');
                }
                elseif($action=="Edit_Type")
                {
                    include('Main/Edit_Type.php');
                }
                else
                  {
                    include('Main/index.php');
                  } 
            ?> 
            
         </div>
    </div>
</div>
</div>