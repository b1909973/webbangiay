




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
       
               
                  
                <div class=" col-md-12 col-12 content ">

                <table class="table text-center ">
                                        <thead>
                                          <tr class="">
                                           
                                            <th scope="col">Sản phẩm</th>
                                            <th scope="col">Tên Sản Phẩm</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Thương hiệu</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Số lượng</th>
                                           
                                            <th scope="col"></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          
                                                                                            
                                          <?php foreach ($sp as $key => $value) {
                                            # code...
                                           ?> 
                                          <tr>
                                        
                                            <td><form action="/admin/chitietsp" method="get"><button type="submit" class="btn">
                                               
                                              <input type="hidden" name='id' value='<?= $value->id ?>'>
                                                                                                                                              
                                                                                                
                                                                                                
                                                                                                
                                             
                                              <img src="/css/frontend/image/<?= $value->thuonghieu->TenThuongHieu ?>/<?=  $value->hinhanh[0]->HinhAnh ?>" class="card-img-top" style="width:80px;" alt="..."> </button></form> </td>
                                         
                                              <td><?= $value->TenSP ?> </td>
                                            <td><?= $value->GiaChinhThuc ?> </td>
                                            <td class="border"><?= $value->thuonghieu->TenThuongHieu ?> </td>
                                            <td> <?= $value->KichCo ?> </td>
                                            <td> <?= $value->SoLuong ?> </td>
                                          
                                            <td><button class="btn gosanpham" value="<?= $value->id ?> "><i class="fas fa-trash-alt text-danger"></i></button> </td>
                                          </tr>

                                              <?php } ?>
                                               

                                                                                          
                                        
                                               

                                                                                          
                                         

                                               

                                          
                                       
                                               

                                       
                                               



                                         


                                               


                                               

                                         

                                                                                       
                                        </tbody>
                                      </table></div>
                   
                      





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

<script>
        $(document).ready(function () {
          $.each($('.gosanpham'), function (indexInArray, valueOfElement) { 
              $(valueOfElement).on('click',function(){

                  $.ajax({
                    type: "get",
                    url: "/admin/gosanpham",
                    data: {
                      id:$(this).val()
                    },
                  
                    success: function (response) {
                      console.log(response)
                       if(response=='1'){
                         alert('Xoá thành công');
                         location.reload();
                       }  
                    }
                  });





              })
          });
        });


      </script>