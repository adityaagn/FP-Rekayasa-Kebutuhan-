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
          
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav side-nav">
                <li >
                  <a href="<?php echo site_url('Admin') ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li class="active">
                  <a href="<?php echo site_url('Admin/list_mahasiswa') ?>"><i class="fa fa-fw fa-bar-chart-o"></i> Mahasiswa</a>
                </li>
                <li>
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
                  Daftar Mahasiswa
                </h1>
                <ol class="breadcrumb">
                  <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                  </li>
                  <li class="active">
                    <i class="fa fa-table"></i> Mahasiswa
                  </li>
                </ol>
              </div>
              
              <!-- /.row -->
              <div class="row">
                <div class="col-lg-3">
                  <div class="form-group input-group" >
                    <input type="text" onkeyup="myFunction()" class="form-control" placeholder="Filter by NRP.." id="myInput">
                    <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                  </div>
                </div>
                <div class="col-lg-9">
                  <div class="form-group input-group" >
                    <input type="text" onkeyup="mynFunction()" class="form-control" placeholder="Filter by Nama.." id="mynInput">
                    <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                  </div>
                </div>  
                <div class="col-lg-12">
                  
                  <div class="table-responsive">
                    <table class="table table-hover table-striped " >
                      <thead >
                        <tr >
                          <th class="col-lg-2">NRP</th>
                          <th class="col-lg-9">Nama</th>
                          <th class="col-lg-1 text-center">Aksi</th>
                        </tr>
                      </thead>
                    </table>
                    <div id="table-wrapper">
                      <div id="table-scroll">
                        <table id="myTable" class="table table-hover table-striped ">
                          
                          <tbody>
                            <?php
                            foreach ($mhs as $row) 
                            {
                              echo "<tr>
                              <td class='col-lg-2'>$row->NRP</td>
                              <td class='col-lg-9'>$row->Nama</td>
                              <td class='col-lg-1 text-center'><a href=".site_url('Admin/data_kp/'.$row->NRP)."><button type='button' class='btn btn-xs btn-primary'>KP</button></a>
                                <a href=".site_url('Admin/data_ta/'.$row->NRP)."><button type='button' class='btn btn-xs btn-primary'>TA</button></a></td>
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

        
        <script>
          function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td")[0];
              if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                } else {
                  tr[i].style.display = "none";
                }
              }       
            }
          }
          function mynFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("mynInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td")[1];
              if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                } else {
                  tr[i].style.display = "none";
                }
              }       
            }
          }

        </script>
        <!-- jQuery -->
        <script src="<?php echo base_url();?>assets/dashboard/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url();?>assets/dashboard/js/bootstrap.min.js"></script>
      </body>

      </html>
