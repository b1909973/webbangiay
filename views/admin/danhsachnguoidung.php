




<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Phương Shop</title>
  <link rel="icon" href="/css/frontend/icon.png" type="image/icon type">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">

  <!-- Navbar -->
  <?php include('tp/sidebar.php')?>
  <!-- /.navbar -->


  <main class="" style="min-height: 524px;">
  <div class="content-wrapper" style="min-height: 544.4px;">
    <!-- Content Header (Page header) -->
    
    <!-- /.content -->
  
    <div class="container">
           
              <div class=" col-md-12 content ">
                     
                        <div class=" container ">
                        
                                   <!-- <a href="" class='text-decoration-none col-1 border-end'></a> -->
                                        
                                            <p class="text-center fs-3  mt-3 ">THÔNG TIN KHÁCH HÀNG</p>
                                
                        </div>
                                    
                            
                        
                        <div class="noidung"> 
					
                          <section class="w-100 p-4 text-center">
                          
                              
                            
                            <table class="table table-bordered">
                            
                              <thead>
                              <tr style="border: 2px solid rgb(19, 15, 15)">
                                <th scope="col">ID</th>
                              
                                <th scope="col" class="text-center">Họ Tên</th>
                              
                                <th scope="col">Tên tài khoản</th>
                              
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Số điện thoại</th>
                                <th></th>
                              </tr>
                              </thead>
                                                                
                         
                                <tbody>
                                <?php 
                                  foreach ($kh as $key => $value) {
                                    # code...
                                  
                                ?>  
                                <tr>
                                  <td><?= $value->id ?></td>
                                  <td><?=  $value->HoTen?></td>
                                  <td><?= $value->TenTaiKhoan ?></td>
                                  <td><?= $value->DiaChi ?></td>
                                  <td><?= $value->SoDienThoai ?></td>
                                  <td><a href="/admin/thongtinkhachhang?id=<?=$value->id?>"><i class="fas fa-eye text-danger"></i></a></td>

                                </tr>
                                       
                                <?php  } ?>
                         
                                
                                                                  
                         
                               
                                                             
                              
                            
                              
                             
                            </tbody></table>
                          
                            </section>
                         </div>
                   
                 </div>   









        </div>

  </div>
  



    </main>




     <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
       <p  class="text-center"><a href="/admin/logout">Đăng xuất</a></p> 
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="/admin/themsanpham">phuongshop.vn</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.min.js"></script>

 