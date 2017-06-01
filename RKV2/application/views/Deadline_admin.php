<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>/assets/dashboard/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/assets/dashboard/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>/assets/dashboard/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php include 'navbar.php'; ?>
            
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li >
                            <a href="<?php echo site_url('Admin') ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li >
                            <a href="<?php echo site_url('Admin/list_mahasiswa') ?>"><i class="fa fa-fw fa-bar-chart-o"></i> Mahasiswa</a>
                        </li>
                        <li class="active">
                            <a href="<?php echo site_url('Admin/deadline') ?>"><i class="fa fa-fw fa-table"></i> Deadline</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('Admin/logout') ?>"><i class="fa fa-fw fa-table"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Deadline
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Deadline
                            </li>
                        </ol>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <h1>KP</h1>
                            <div class="form-group">
                                <label></label>
                                <form id="myForm" action="edittgl1" method="post">
                                    <input type="date" value="<?php echo $tgl1['tanggal']?>" id="disabledInput" name="tgl" disabled>
                                    <input type=button id="myButton" class="btn btn-primary" onclick="ED()" value="EDIT"></input>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h1>TA</h1>
                            <div class="form-group">
                                <label></label>
                                <form id="myForm2" action="edittgl2" method="post">
                                    <input type="date" value="<?php echo $tgl2['tanggal']?>" id="disabledInput2" name="tgl" disabled>
                                    <input type=button id="myButton2" class="btn btn-primary" onclick="ED2()" value="EDIT"></input>
                                </form>
                            </div>
                        </div>
                    </div>

                    

                    

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        
        <script>
            function ED() {
                if(document.getElementById("disabledInput").disabled == false)
                {
                    document.getElementById("myButton").value = "Edit";
                    document.getElementById("myForm").submit();
                    document.getElementById("disabledInput").disabled = true;
                }
                else if(document.getElementById("disabledInput").disabled == true)
                {
                    document.getElementById("myButton").value = "Apply";
                    document.getElementById("disabledInput").disabled = false;
                }
            }
            function ED2() {
                if(document.getElementById("disabledInput2").disabled == false)
                {
                    document.getElementById("myButton2").value = "Edit";
                    document.getElementById("myForm2").submit();
                    document.getElementById("disabledInput2").disabled = true;
                }
                else if(document.getElementById("disabledInput2").disabled == true)
                {
                    document.getElementById("myButton2").value = "Apply";
                    document.getElementById("disabledInput2").disabled = false;
                }
            }

        </script>
        <!-- jQuery -->
        <script src="assets/dashboard/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/dashboard/js/bootstrap.min.js"></script>
    </body>

    </html>
