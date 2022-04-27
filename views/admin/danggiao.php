
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
  <div class="content-wrapper" style="min-height: 547.2px;">
    <!-- Content Header (Page header) -->
    
    <!-- /.content -->
  
    <div class="container">
           
              <div class=" col-md-12 content ">
                     
                        <div class=" container ">
                        
                                   <!-- <a href="" class='text-decoration-none col-1 border-end'></a> -->
                                        
                                            <p class="text-center fs-3  mt-3 ">ĐƠN MUA</p>
                                
                        </div>
                                    
                            
                        
                        <div class="noidung"> 
					
                          <section class="w-100 p-4 text-center">
                          
                              
                            
                            <table class="table table-bordered">
                            
                              <thead>
                              <tr  style="border: 2px solid rgb(19, 15, 15)">
                                <th scope="col">Khách hàng</th>
                              
                                <th scope="col" class="text-center" >Sản phẩm </th>
                              
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Bom hàng</th>
                                <th scope="col"></th>
                              </tr>
                              </thead>
                              <?php  foreach ($sp as $key => $value) {
                                    $tong=0;
                               ?>  
                              <tbody>
                                <tr  style="border: 2px solid rgb(19, 15, 15)">
                                  <td style="" ><span class="ID_KhachHang"><a href="/admin/thongtinkhachhang?id=<?php echo $value->ID_KhachHang ?>"><button class="btn btn-outline-info getID"><?php echo $value->ID_KhachHang ?></button></a></span></td>
                              <td >
                              <?php foreach ($value->sanpham as $key => $value1) {
										# code...
									            	$tong+=$value1->pivot->TongTien ;
									
									?>
                                <table class="table text-center">
                                    
                                 <tr>
                                  <td>	<img src="/css/frontend/image/<?= $value1->thuonghieu->TenThuongHieu?>/<?= $value1->hinhanh[0]->HinhAnh ?>" alt="" style="width: 80px;"></td></td>
                                  <td><?= $value1->TenSP ?></td>
                                  <td><?= $value1->pivot->TongTien ?><b class="fs-5">đ</b></td>
                                  <td> <button class="btn btn-outline-secondary" disabled><span class="text-dark"><?= $value1->pivot->SoLuong ?></span></button></td>
                                </tr>
                                                                
                                
                                </table>
                                <?php } ?>
                              </td>
                              
                            
                                <td style="" class="text-center tong"><?= $tong ?><span><b class="fs-5">đ</b> </span></td>
                                <td><button class="btn bomhang" value="<?= $value->id?>"><i class="fas fa-minus-circle text-danger"></i></button></td>
                                  <td><button class="btn btn-outline-info duyetsp" value="<?= $value->id?>" >Duyệt</button></td>
                              </tr>
                              </tbody>
                              <?php } ?>
                                                          </table>
                          
                            </section>
                         </div>
                   
                 </div>   









        </div>

  </div>
 


    </main>
      <!-- /.content-wrapper -->

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
          
          
          

      $.each($('.duyetsp'), function (indexInArray, valueOfElement) { 
       
                $(valueOfElement).on('click',function(){
                  
                    $.ajax({
                      type: "get",
                      url: "/admin/duyetdonhang",
                      data: {
                        ID_DonHang:$(this).val(),
                            loai:2,      
                      },
                      
                      success: function (response) {
                          if(response==1){
                            location.reload();
                          }                   
                      }
                    });





                })
           });
           $.each($('.bomhang'), function (indexInArray, valueOfElement) { 
                $(valueOfElement).on('click',function () {
                      $.ajax({
                        type: "get",
                        url: "/admin/xulibomhang",
                        data: {
                          ID_DonHang:$(this).val()
                        },
                      
                        success: function (response) {
                           if(response=='1'){
                             alert('Đơn hàng đã bị bom');
                             location.reload();
                           }
                        }
                      });


                })
           });

});
      </script>

    </body>
</html>
