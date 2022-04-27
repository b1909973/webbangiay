
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


  <!-- Content Wrapper. Contains page content -->
  <main class="" style="min-height: 524px;">
    <div class="content-wrapper" style="min-height: 547.2px;">
        <!-- Content Header (Page header) -->
        
        <!-- /.content -->
     
        <div class="container" >
          
                    
                  
                <div class=" col-md-12 col-12 content  ">
                    <div class="container-fluid">
                            <div class="col-10 p-5 border m-2 mx-auto rounded mt-5 bg-light">
                                    <form  >
                                        <h1 class="text-center">Thêm sản phẩm</h1>
                                        <div class="mb-3">
                                            <label for="product" class="form-label">Tên sản phẩm</label>
                                            <input type="text" class="form-control" id="product" name='product' required >                                      
                                        </div>
                                        <div class="mb-3">
                                            <label for="size" class="form-label">Kích cỡ</label>
                                            <input type="text" class="form-control" id="size" name='size'required  >                                      
                                        </div>

                                        <div class="mb-3">
                                            <label for="trademark" class="form-label" >Thương hiệu:</label>
                                            <select name="trademark" id="trademark" class='px-3 py-1' required >
                                                <option value="2">Adidas</option>
                                                <option value="1">Nike</option>
                                                <option value="3">Vans</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="numpro" class="form-label">Số lượng</label>
                                            <input type="text" class="form-control" id="numpro" name='numpro' required  >                                      
                                        </div>
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Giá bán:</label>
                                            <input type="text" class="form-control" id="price" name='price' required >
                                        </div>
                                        <div class="mb-3">
                                            <label for="pricedown" class="form-label">Giá giảm:</label>
                                            <input type="text" class="form-control" id="pricedown" name='pricedown' >
                                        </div>
                             
                                        <div class="mb-3">
                                            <label for="hinhanh" class="form-label">Ảnh Sản Phẩm:</label>
                                            <input type="file" class="form-control"  id='hinhanh' required >
                                        </div>
                                        
                                        <div class="mb-3 chua">
                                          
                                          <label for="hinhanh" class="form-label">New </label>
                                          <input type="checkbox" name='new' id='new'>
                                        </div>
                                      
                                    
                                        <button type="submit" class="btn btn-primary" name='login_submit' id='submit' value='0'>Thêm</button>
                                    </form>
                            </div>

                     </div>


  

                    

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
            var arrImg=[];
            $('#hinhanh').change(function (e) { 
               let chuoi = $(this).val();
             if(chuoi!=''){
             
                chuoi = chuoi.substring(chuoi.lastIndexOf("\\")+1,chuoi.length)
              
               arrImg.push(chuoi);
               if($('#trademark').val()==1){
                chuoi="<img src=" +  '/css/frontend/image/nike' + '/' + chuoi +' "class="img-fluid" style="width:80px;" >';
               }else if($('#trademark').val()==2){
                chuoi="<img src=" +  '/css/frontend/image/adidas' + '/' + chuoi +' "class="img-fluid" style="width:80px;" >';

               }else{
                chuoi="<img src=" +  '/css/frontend/image/vans' + '/' + chuoi +' "class="img-fluid" style="width:80px;" >';

               }
            
              
               $('.chua').append(chuoi);
               
             
               console.log(arrImg);
             }
             
            });

            $('#submit').on('click', function (event) {
                event.preventDefault();
                var tensp= $("#product").val();
                var kichco=$('#size').val();
                var brand=$('#trademark').val();
                var num = $('#numpro').val();
                var price=$('#price').val();
                var pricedown=$('#pricedown').val();
                var news=0;
                if($('#new').is(':checked')){
                     news=1;
                }

                if(pricedown==''){
                    pricedown=0;
                }
                if(tensp =='' || kichco=='' || brand=='' || num=='' || price=='' || arrImg.length == 0){
                    alert('Vui lòng nhập đầy đủ thông tin');
                }else{
                    // console.log(pricedown);
                // console.log(brand);
                $.ajax({
                        type: "get",
                        url: "/admin/adminthemsanpham",
                        data: {
                            tensp,
                            kichco,
                            brand,
                            num,
                            price,
                            pricedown,
                            arrImg,
                            news
                        },
                        success: function (response) {
                           
                              if(response=='1'){
                                 alert('Thêm sản phẩm thành công');
                                 location.reload();
                                }
                        }
                    });

                }
                

                    // dang o day


            })

           
        });

    </script>


    </body>
</html>
