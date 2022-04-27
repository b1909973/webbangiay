




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
     
        <div class="container border bg-light pb-5 main">
            <form action="" method="post">
                                    
                                    <div class="row row-cols-lg-2 mt-4 ">
      <input type="hidden" value="2" name="ID">
        <div class=" text-lg-end    ">
                      
                      
                      
                        <img src="/css/frontend/image/<?= $sp->thuonghieu->TenThuongHieu ?>/<?= $sp->hinhanh[0]->HinhAnh ?>" alt="" class="img-fluid rounded" style="width: 526px;height: 526px;" id="img-show">
        </div>
        <input type="hidden" name="thuonghieu" id="thuonghieu" value="<?= $sp->ID_Thuonghieu ?>" style="width:600px">
        <div class="ps-lg-5 rounded">
           <input type="hidden" name="ID" id="ID" value="<?= $sp->id ?>" style="width:600px">
           <div class="mb-3 ">
                <label for="" class="mb-1 fs-5">Tên Sản Phẩm: </label>
                <input type="text" name="product" id="product" value="<?= $sp->TenSP ?>" style="width:500px">
          </div>  
            <div class="mb-3">
              <label for="" class="mb-1 fs-5">Giá:</label> <br>
              <input type="text" name="price" id="price" value="<?= $sp->GiaChinhThuc ?>"> <br>
              </div>   
            <div class="mb-3">
              <label for="" class="mb-1 fs-5">Giá Giảm:</label> <br>
              <input type="text" name="pricedown" id="pricedown" value="<?= $sp->GiaGiam ?>">
          </div>
            <div class="mb-3">
              <p class="mb-1 fs-5">Size:</p>
              <input type="text" name="size" id="size" value="<?= $sp->KichCo ?>">
            </div>
            <div class="mb-3">
                <p class="mb-1 fs-5 ">Số lượng:</p>
                <input type="number" class="rounded" id="numpro" name="number" value="<?= $sp->SoLuong?>">  <br>
            </div>
        
        
              <br>
              <div class="mb-3">
                   <label for="news">New: </label>
                   <?php
                   if ($sp->new==1){
                   ?>
                      <input type="checkbox" id="new" name="new" checked="">    
                      
                      <?php }else{?>
                        <input type="checkbox" id="new" name="new" >    
                      

                        <?php }?>
              </div>
              
                <div class="mb-3">
                    <p class="mb-1" style="font-size: 20px;">Chọn để xoá ảnh:</p>
                                      
                        <?php foreach ($sp->hinhanh as $key => $value) {
                          # code...
                        ?>
                          <input type="checkbox" value="<?= $value->id ?> " class="checkImg">
                    <img src="/css/frontend/image/<?= $sp->thuonghieu->TenThuongHieu ?>/<?= $value->HinhAnh ?>" alt="" style="width: 100px;">

                          <?php  }?>
                                        
                </div>
                <div class="mb-3">
                    <label for="hinhanh" class="form-label">Ảnh Sản Phẩm</label>
                  
                    <input type="file" class="form-control" id="hinhanh">
               </div>
               <div class="mb-3 noichuaanh">
                    
            </div>
               <input type="hidden" name="linkimg" id="linkimg">
                              

                <input type="submit" class="btn text-white mt-4 fs-5" value="Cập nhật" name="submit" id="submit" style="background-color: #303e48;">

        </div>
      




    </div>

</form>


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
    var arrImg=[];
    var brand = $('#thuonghieu').val();
    $('#hinhanh').change(function (e) { 
       let chuoi = $(this).val();
     if(chuoi!=''){

        chuoi = chuoi.substring(chuoi.lastIndexOf("\\")+1,chuoi.length)
       arrImg.push(chuoi);
       if(brand==1){
        chuoi="<img src=" +  '/css/frontend/image/nike' + '/' + chuoi +' "class="img-fluid" style="width:80px;" >';

       }else if(brand==2){
       chuoi="<img src=" +  '/css/frontend/image/adidas' + '/' + chuoi +' "class="img-fluid" style="width:80px;" >';

       }else{
       chuoi="<img src=" +  '/css/frontend/image/vans' + '/' + chuoi +' "class="img-fluid" style="width:80px;" >';

       }
      
       $('.noichuaanh').append(chuoi);
       
     
       console.log(arrImg);
     }
     
    });

    //////////////////////////

    function KT(){
    arrIDImg=[];
     var dem=0;
    $.each($('.checkImg'), function (indexInArray, valueOfElement) { 
        dem++;
        if($(valueOfElement).is(':checked')){
            arrIDImg.push($(valueOfElement).val());
        
        } 

    });
    if(arrIDImg.length==dem){
        return -1;
    }else{
        return arrIDImg;
    }
   
     }


    $('#submit').on('click', function (event) {
        event.preventDefault();
     
        var tensp= $("#product").val();
        var kichco=$('#size').val();
       var id = $('#ID').val();
        var num = $('#numpro').val();
        var price=$('#price').val();
        var pricedown=$('#pricedown').val();
        var Img=KT();
        var news=0;
        if($('#new').is(':checked')){
             news=1;
        }

        if(Img==-1){
            alert('Không được xoá hết ảnh');
         }else{
                    if(pricedown==''){
                    pricedown=0;
                }
                if(tensp =='' || kichco==''|| num=='' || price=='' ){
                    alert('Vui lòng nhập đầy đủ thông tin');
                }else{
      
                $.ajax({
                        type: "get",
                        url: "/admin/adminsuadoithongtinsanpham",
                        data: {
                            id,
                            tensp,
                            kichco,
                            num,
                            price,
                            pricedown,
                            Img,
                            arrImg,
                            news
                        },
                        success: function (response) {
                          console.log(response);
                                if(response=='1'){
                                    alert('Cập nhật thành công')
                                    location.reload();
                                }
                        }
                 });

                }
         }

         
        

            // dang o day


    })

   
});

</script>