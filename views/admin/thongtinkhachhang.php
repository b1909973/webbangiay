




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
  
    <div class=" col-md-12 content ">
                     
      <h3 class="m-4">Thông tin tài khoản</h3>
      <div class="col-md-9  border py-4 rounded ">
          <div class="col-11 mx-auto">
          
              <div class="row mb-4">
                
                <label for="ID" class="col-sm-3 col-form-label">ID:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="ID" name="ID" value=" <?php echo $kh->id ?>" disabled="">
                </div>
            </div>
              <div class="row mb-4">
                
                <label for="username" class="col-sm-3 col-form-label">Tên tài khoản:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="username" name="username" value=" <?php echo $kh->TenTaiKhoan ?>" disabled="">
                </div>
            </div>
              <div class="row mb-4">
                
                  <label for="fullname" class="col-sm-3 col-form-label">Họ và Tên:</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="fullname" name="fullname" value=" <?php echo $kh->HoTen ?>" disabled="">
                  </div>
              </div>
             
              <div class="row mb-4">
                <label for="birtday" class="col-sm-3 col-form-label">Quê quán:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="hometown" name="hometown" value=" <?php echo $kh->DiaChi ?>" disabled="">
                </div>
          
              </div>
           
           
         
         
              <div class="row mb-4">
                  <label for="phone" class="col-sm-3 col-form-label">Số điện thoại:</label>
                  <div class="col-sm-9">
                      <input type="text" class="form-control" id="phone" name="phone" value=" <?php echo $kh->SoDienThoai ?>" disabled="">
                  </div>
              </div>
              
              <div class="row mb-4">
              
                <label for="phone" class="col-sm-3 col-form-label">Khoá tài khoản:</label>
                <div class="col-sm-1 anhem">
                  <?php if($kh->Khoa==1){

                  ?>
                  <input type="checkbox" class="form-control" id="phone" name="phone" value="1" checked>        
                    <?php }else{ ?>
                      <input type="checkbox" class="form-control" id="phone" name="phone" value="0" >        

                      <?php } ?>
                </div>
                <div class="col-sm-2">
                  <button class="btn btn-danger capnhat">Cập nhật</button>
              </div>
            </div>
            
  </div>
 
    





  </div>



</div>
                   
    </div>   



    
      <div class="content-wrapper" style="min-height: 544.4px;">
    <!-- Content Header (Page header) -->
    
    <!-- /.content -->
  
    <div class="container">
           
           <div class=" col-md-12 content ">
                  
                     <div class=" container ">
                     
                                <!-- <a href="" class='text-decoration-none col-1 border-end'></a> -->
                                     
                                         <p class="text-center fs-3  mt-3  ">CÁC ĐƠN HÀNG</p>
                             
                     </div>
                                 
                         
                     
                     <div class="noidung"> 
       
                       <section class="w-100 p-4 text-center">
                       
                           
                         
                         <table class="table table-bordered">
                         
                           <thead>
                           <tr style="border: 2px solid rgb(19, 15, 15)">
                          
                           
                             <th scope="col" class="text-center">Sản phẩm </th>
                           
                             <th scope="col">Tổng tiền</th>
                           
                             <td>Trạng Thái</td>
                           </tr>
                           </thead>
                                                                       
                           <tbody>
                           <?php $tongtien=0 ?>
                          <?php foreach ($dh as $key => $value) {
                            # code.
                          
                            $tong =0;
                          ?>
                        <tr style="border: 2px solid rgb(19, 15, 15)">
                            
                           <td>
                             
                             <table class="table text-center">
                                 
                             
                                                             
                                  <tbody>
                                  
                                  <?php foreach ($value->sanpham as $key => $value1) {
                            # code.
                           
                            $tong += $value1->pivot->TongTien;
                          
                          ?>
                                  <tr>
                                    <td>	<img src="/css/frontend/image/<?= $value1->thuonghieu->TenThuongHieu ?>/<?php echo $value1->hinhanh[0]->HinhAnh?>" alt="" style="width: 80px;"></td>
                                    <td><?php echo $value1->TenSP ?></td>
                                    <td><?php echo $value1->pivot->TongTien ?><b class="fs-5">đ</b></td>
                                    <td> <button class="btn btn-outline-secondary" disabled=""><span class="text-dark"><?php echo $value1->pivot->SoLuong ?></span></button></td>
                                  </tr>
                                                                  
                                  <?php } ?>
                                  </tbody>
                            </table>
           
                           </td>
                           
                         
                             <td style="" class="text-center tong"><?php echo $tong ?><span><b class="fs-5">đ</b> </span></td>
                             <?php if($value->TrangThai==1){

                             ?>
                             <td><button class="btn btn-outline-info">Đang xác nhận</button></td>
                             <?php }else if($value->TrangThai==2){

                             ?>
                              <td><button class="btn btn-outline-warning">Đang giao</button></td>
                              <?php }else if($value->TrangThai==3){
                                  $tongtien+=$tong;
                              ?>
                               <td><button class="btn btn-outline-success">Đã giao</button></td>
                               <?php }else if($value->TrangThai==4){
                                      
                                          ?>
                                          <td><button class="btn btn-outline-danger">Đã huỷ</button></td>

                                  <?php } ?>

                              </tr>
                              
                           <?php  } ?>
                           </tbody>
                         </table>
                       
                         </section>
                      </div>
                
              </div>   









         </div>
        <div class="text-center"><b>Tổng tiền đã mua từ shop</b> : <span class="tienshop"><?php echo $tongtien ?></span> <b>đ</b></div>
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
                  
                    $('.capnhat').click(function () { 
                      
                      let a = $(this).parent().siblings('.anhem').children();
                        let khoa=0;  
                      if($(a).is(':checked')){

                          khoa=1;

                        }
                        $.ajax({
                          type: "get",
                          url: "/admin/khoataikhoan",
                          data: {
                            khoa
                            ,
                            id:$('#ID').val()
                          },
                          success: function (response) {
                             console.log(response);
                              if(response=='1'){
                                  alert('Thành công')
                                  location.reload();
                              }
                          }
                        });
                    });


                });





            </script>
