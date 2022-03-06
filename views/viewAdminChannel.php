<!-- HEADER  -->     
<?php include"./includes/admin_header.php"?>
<!-- HEADER : end -->
<body>

    <div id="wrapper">

        <!-- Navigation -->

        <?php include"./includes/admin_navigation.php"?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                    <h1 class="page-header">
                            Admin 
                            <small>Channel</small>
                        </h1>
                        <?php 
                            if(isset($_GET['action'])){
                                $action=$_GET['action'];
                            }
                            else{
                                $action='';
                            }
                        switch($action) {
                            case 'All';
                            include"./includes/admin_all_channel.php";
                            break;
                            case 'add';
                            include"./includes/admin_add_channel.php";
                            break;
                            default:
                            include"./includes/admin_all_channel.php";
                            break;
                        }
                        
                         ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <!-- jQuery -->
    <script src="./src/admin/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./src/admin/js/bootstrap.min.js"></script>

</body>

</html>
