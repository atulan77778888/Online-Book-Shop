 <!-- <?php
        session_start();
        include('includes/config.php');
        error_reporting(0);
        if ((!isset($_SESSION['username'])) || isset($_GET['logout'])) {
            session_destroy();
            unset($_SESSION['username']);
            header("location: ../index.php");
        } else {
        ?> -->

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="author" content="">
     <!-- App title -->
     <title>Online BookShop | Dashboard</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.4.2/morris.css">

     <!-- App css -->
     <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
     <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.css">
     <script src="assets/js/modernizr.min.js"></script>

 </head>


 <body class="fixed-left">

     <!-- Begin page -->
     <div id="wrapper">

         <!-- Top Bar Start -->
         <div class="topbar">

             <!-- LOGO -->
             <div class="topbar-left">
                 <a href="index.php" class="logo"><span>OnlineBookShop <span> Admin </span></span><i class="mdi mdi-layers"></i></a>
                 <!-- Image logo -->
                 <!--<a href="index.php" class="logo">-->
                 <!--<span>-->
                 <!--<img src="assets/images/logo.png" alt="" height="30">-->
                 <!--</span>-->
                 <!--<i>-->
                 <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                 <!--</i>-->
                 <!--</a>-->
             </div>

             <!-- Button mobile view to collapse sidebar menu -->
             <?php include('includes/topheader.php'); ?>
         </div>
         <!-- Top Bar End -->


         <!-- ========== Left Sidebar Start ========== -->
         <?php include('includes/leftsidebar.php'); ?>
         <!-- Left Sidebar End -->


         <!-- ============================================================== -->
         <!-- Start right Content here -->
         <!-- ============================================================== -->
         <div class="content-page">
             <!-- Start content -->
             <div class="content">
                 <div class="container">
                     <div class="row">
                         <div class="col-xs-12">
                             <div class="page-title-box">
                                 <h4 class="page-title">Dashboard</h4>
                                 <ol class="breadcrumb p-0 m-0">
                                     <li>
                                         <a href="#">Online Book Shop</a>
                                     </li>
                                     <li>
                                         <a href="#">Admin</a>
                                     </li>
                                     <li class="active">
                                         Dashboard
                                     </li>
                                 </ol>
                                 <div class="clearfix"></div>
                             </div>
                         </div>
                     </div>
                     <!-- end row -->

                     <div class="row">
                         <a href="manage-categories.php">
                             <div class="col-lg-4 col-md-4 col-sm-6">
                                 <div class="card-box widget-box-one">
                                     <i class="mdi mdi-chart-areaspline widget-one-icon"></i>
                                     <div class="wigdet-one-content">
                                         <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">Categories Listed</p>
                                         <?php $query = mysqli_query($con, "select * from categories where Is_Active=1");
                                            $countcat = mysqli_num_rows($query);
                                            ?>

                                         <h2><?php echo htmlentities($countcat); ?>
                                             <small></small>
                                         </h2>

                                     </div>
                                 </div>
                             </div>
                         </a><!-- end col -->
                         <a href="manage-Customer.php">
                             <div class="col-lg-4 col-md-4 col-sm-6">
                                 <div class="card-box widget-box-one">
                                     <i class="mdi mdi-layers widget-one-icon"></i>
                                     <div class="wigdet-one-content">
                                         <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Users</p>
                                         <?php $query = mysqli_query($con, "select name,password,email,phone,address,username,added_on from users where usertype=0");
                                            $countCust = mysqli_num_rows($query);
                                            ?>
                                         <h2><?php echo htmlentities($countCust); ?>
                                             <small></small>
                                         </h2>

                                     </div>
                                 </div>
                             </div><!-- end col -->
                         </a>
                         <a href="manage-keeper.php">
                             <div class="col-lg-4 col-md-4 col-sm-6">
                                 <div class="card-box widget-box-one">
                                     <i class="mdi mdi-layers widget-one-icon"></i>
                                     <div class="wigdet-one-content">
                                         <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Shop Keeper</p>
                                         <?php $query = mysqli_query($con, "select * from users where usertype=2");
                                            $countNu = mysqli_num_rows($query);
                                            ?>
                                         <h2><?php echo htmlentities($countNu); ?>
                                             <small></small>
                                         </h2>

                                     </div>
                                 </div>
                             </div><!-- end col -->
                         </a>
                         <a href="manage-Products.php">
                             <div class="col-lg-4 col-md-4 col-sm-6">
                                 <div class="card-box widget-box-one">
                                     <i class="mdi mdi-layers widget-one-icon"></i>
                                     <div class="wigdet-one-content">
                                         <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">Listed Products</p>
                                         <?php $query = mysqli_query($con, "select * from product where status=1");
                                            $countPro = mysqli_num_rows($query);
                                            ?>
                                         <h2><?php echo htmlentities($countPro); ?>
                                             <small></small>
                                         </h2>

                                     </div>
                                 </div>
                             </div><!-- end col -->
                         </a>
                         <a href="manage-OrderList.php">
                             <div class="col-lg-4 col-md-4 col-sm-6">
                                 <div class="card-box widget-box-one">
                                     <i class="mdi mdi-layers widget-one-icon"></i>
                                     <div class="wigdet-one-content">
                                         <p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="User This Month">List Of Order</p>
                                         <?php $query = mysqli_query($con, "select * from admin_orders");
                                            $countPro = mysqli_num_rows($query);
                                            ?>
                                         <h2><?php echo htmlentities($countPro); ?>
                                             <small></small>
                                         </h2>

                                     </div>
                                 </div>
                             </div><!-- end col -->
                         </a>

                         

                     </div>
                     <!-- end row -->
                     

                 </div> <!-- container -->

             </div> <!-- content -->
             <?php include('includes/footer.php'); ?>

         </div>


         <!-- ============================================================== -->
         <!-- End Right content here -->
         <!-- ============================================================== -->


         <!-- Right Sidebar -->
         <!-- <div class="side-bar right-bar">
             <a href="javascript:void(0);" class="right-bar-toggle">
                 <i class="mdi mdi-close-circle-outline"></i>
             </a>
             <h4 class="">Settings</h4>
             <div class="setting-list nicescroll">
                 <div class="row m-t-20">
                     <div class="col-xs-8">
                         <h5 class="m-0">Notifications</h5>
                         <p class="text-muted m-b-0">
                             <small>Do you need them?</small>
                         </p>
                     </div>
                     <div class="col-xs-4 text-right">
                         <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                     </div>
                 </div>

                 <div class="row m-t-20">
                     <div class="col-xs-8">
                         <h5 class="m-0">API Access</h5>
                         <p class="m-b-0 text-muted">
                             <small>Enable/Disable access</small>
                         </p>
                     </div>
                     <div class="col-xs-4 text-right">
                         <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                     </div>
                 </div>

                 <div class="row m-t-20">
                     <div class="col-xs-8">
                         <h5 class="m-0">Auto Updates</h5>
                         <p class="m-b-0 text-muted">
                             <small>Keep up to date</small>
                         </p>
                     </div>
                     <div class="col-xs-4 text-right">
                         <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                     </div>
                 </div>

                 <div class="row m-t-20">
                     <div class="col-xs-8">
                         <h5 class="m-0">Online Status</h5>
                         <p class="m-b-0 text-muted">
                             <small>Show your status to all</small>
                         </p>
                     </div>
                     <div class="col-xs-4 text-right">
                         <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small" />
                     </div>
                 </div>
             </div>
         </div> -->
         <!-- /Right-bar -->

     </div>
     <!-- END wrapper -->


     <script>
         var resizefunc = [];
     </script>
     <script src="assets/js/bootstrap.min.js"></script>
     
     <!-- jQuery  -->
     <script src="assets/js/jquery.min.js"></script>
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/detect.js"></script>
     <script src="assets/js/fastclick.js"></script>
     <script src="assets/js/jquery.blockUI.js"></script>
     <script src="assets/js/waves.js"></script>
     <script src="assets/js/jquery.slimscroll.js"></script>
     <script src="assets/js/jquery.scrollTo.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>

     <!-- Counter js  -->
     <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
     <script src="../plugins/counterup/jquery.counterup.min.js"></script>

     <!--Morris Chart-->
     <script src="../plugins/morris/morris.min.js"></script>
     <script src="../plugins/raphael/raphael-min.js"></script>

     <!-- Dashboard init -->
     <script src="assets/pages/jquery.dashboard.js"></script>

     <!-- App js -->
     <script src="assets/js/jquery.core.js"></script>
     <script src="assets/js/jquery.app.js"></script>

 </body>

 </html>
 <?php } ?>