<!DOCTYPE html>
<html lang="en">

<head>
<style>
#table-wrapper {
  position:relative;
}
#table-scroll {
  height:254px;
  overflow:auto;  
  margin-top:-22px;
}
</style>
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

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
               
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Progress KP
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo site_url('Admin') ?>">Dashboard</a>
                            </li>
                            <li>
                                <i class="fa fa-table"></i><a href="<?php echo site_url('Admin/list_mahasiswa') ?>"> Mahasiswa</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Progress KP
                            </li>
                        </ol>
                    </div>
                

                <!-- /.row -->
                <div class="row">
                    
                    <div class="col-lg-12">
                        
                        <h2><?php echo $mhs['NRP']." - ".$mhs['Nama'] ?></h2>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped " >
                                <thead >
                                    <tr >
                                        <th class="col-lg-2">Tanggal</th>
                                        <th class="col-lg-9">Jenis Berkas</th>
                                        <th class="col-lg-1">Nama Berkas</th>
                                    </tr>
                                </thead>
                                </table>
                                <div id="table-wrapper">
  <div id="table-scroll">
  <table id="myTable" class="table table-hover table-striped ">
  
                                <tbody>
                                <?php
                                    
                                    foreach ($dkp as $dkpr) {
                                    echo"<tr>
                                            <td class='col-lg-2'>".$dkpr->Tanggal."</td>
                                            <td class='col-lg-9'>".$dkpr->{'Jenis Berkas'}."</td>
                                            <td class='col-lg-1'>".$dkpr->{'Nama Berkas'}."</td>
                                            </tr>";
                                        }
                                  ?>  
                                </tbody>

                            </table>
</div>
                        </div>
                        
                        </div>
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
    <script src="<?php echo base_url();?>assets/dashboard/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/dashboard/js/bootstrap.min.js"></script>
</body>

</html>
