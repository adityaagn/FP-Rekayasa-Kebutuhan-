<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Mahasiswa - Bootstrap Admin Template</title>

    
    <link href="<?php echo base_url();?>/assets/dashboard/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>/assets/dashboard/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>/assets/dashboard/css/plugins/morris.css" rel="stylesheet">

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
            <?php include 'navbar_mhs.php'; ?>
            
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li >
                            <a href="<?php echo site_url('logmhs') ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
                        <li class="active">
                            <a href="<?php echo site_url('logmhs/uploadkp') ?>"><i class="fa fa-fw fa-bar-chart-o"></i> KP</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('logmhs/uploadta') ?>"><i class="fa fa-fw fa-table"></i> TA</a>
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
                            Upload KP
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Upload KP
                            </li>
                        </ol>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Input Dokumen dokumen KP</label>
                                <input type="file">
                            </div>
                        </div>
                        <div class="clo-lg-12">
                            <div class="form-group">
                                <label>Keterangan File</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    <!-- <div class="col-lg-6">
                        <h1>TA</h1>
                                <div class="form-group">
                                    <label></label>
                                    <input type="date" id="disabledInput2" disabled>
                                    <input type=button id="myButton2" class="btn btn-primary" onclick="ED2()" value="EDIT"></input>
                                </div>
                            </div> -->
                        </div>

                        

                        

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- /#page-wrapper -->

            </div>

        </body>

        </html>