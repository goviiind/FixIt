<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Simple Tables</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <?php
      require '../connection.php';
      include 'theme/sidebar.php';
      ?>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Customer Lists</h1>
              </div>
              
            </div>
            </div><!-- /.container-fluid -->
          </section>
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                
                <!-- /.col -->
                
                <!-- /.col -->
              </div>
              
              <!-- /.row -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">Customers</h3>
                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                      
                      <?php

                     
                      $sql = "SELECT * FROM customer" ;
                      $result = mysqli_query($con , $sql);
                      ?>
                      <table class="table table-head-fixed text-nowrap text-center">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Details</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <?php
                          if (mysqli_num_rows($result) > 0) {
                          
                          while ($customer = mysqli_fetch_assoc($result)) {
                          
                          ?>
                          <tr>
                            <td><?php echo $customer['id']; ?></td>
                            <td><?php echo $customer['name']; ?></td>
                            <td><?php echo $customer['contact']; ?></td>
                            <td><a class="btn btn-success " href="single.php?id=<?php echo $customer['id']; ?>">Details</td>
                            <td><a class="btn btn-warning "href="edit.php?id=<?php echo $customer['id']; ?>">Edit</td>
                            <td><a class="btn btn-danger " href="delete.php?id=<?php echo $customer['id']; ?>">Delete</td>
                          </tr>
                          <?php
                          }
                          }else{
                          echo "<script>alert('0 records found')</script>";
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                    
                  </div>
                 
                  
                </div>
              </div>
              <!-- /.row -->
              </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->
          
          <!-- Control Sidebar -->
          <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
          </aside>
          <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
      </body>
    </html>