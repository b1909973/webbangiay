


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/css/frontend/icon.png" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phương Shop</title>
 <!-- -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Love+Light&display=swap" rel="stylesheet">

<!--  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      main{
        font-family: 'Arsenal', sans-serif;
      }
    </style>
</head>
<body>
       <?php require('../views/tp/header.php') ?> 
      <!-- header -->

    
      
   <!--  -->
    

<div class="container border bg-light pb-5 main">
      

<div class="row row-cols-lg-2 mt-4 ">
<input type="hidden" value='2' name='ID'>
<div class=" text-lg-end text-md-center ">
<?php
    $hinhanh = App\Models\hinhanh::where('ID_SanPham','=',$sp->id)->get();

    foreach ($hinhanh as $key => $value) {}
    ?>
    <input type="hidden" value='<?= $sp->id ?>' id='ID'>
<img src="css/frontend/image/<?= $sp->thuonghieu->TenThuongHieu ?>/<?php echo $value->HinhAnh?>" alt="" class="img-fluid rounded imgparent " style="width: 526px;height: 526px;">
<div class=" col-12 text-center offset-lg-1 mt-2">
  <?php 
    foreach ($hinhanh as $key => $value) {
        # code...
   ?>
                      <img src="css/frontend/image/<?= $sp->thuonghieu->TenThuongHieu ?>/<?php echo $value->HinhAnh?>" alt="" class='img-fluid imgsub' style='max-width:160px;max-height: 150px;cursor:pointer; '>  
                  
             <?php }   ?>   

                </div>
</div>

<div  class="ps-lg-5 rounded">
<h3 class="text-uppercase" style="color:#ff4b2b;"><?php echo $sp->TenSP?></h3>
        <?php if($sp->GiaGiam!=0){?>
                <p class="card-text mb-1 fs-2 fw-bold"><span style='color:#1e9600;'> <del><?php echo $sp->GiaChinhThuc ?></del><u>đ</u> </span> </p>
                <p class="card-text mb-1 fs-2 fw-bold text-danger"><span><?php echo $sp->GiaGiam ?></span><span><u>đ</u> </span></p>
<?php }else{

?>
                 <p class="card-text mb-1 fs-2 fw-bold"><span  style='color:#1e9600;'> <?php echo $sp->GiaChinhThuc ?><u>đ</u> </span> </p>

<?php } ?>
                          <p class="mb-1 fs-5">Size:</p>
<div>
    <input type="button" class=" nut btn btn-outline-secondary" value="42">

    <!-- <input type="button" class="nut btn btn-outline-secondary" value="39">
  
    <input type="button" class="nut btn btn-outline-secondary" value="40">

    <input type="button" class="nut btn btn-outline-secondary" value="41">
    <input type="button" class="nut btn btn-outline-secondary" value="42"> -->
    <!-- <input type="number" value="0" name="size" class="d-none" id="size"> -->
</div>
<p class="mb-1 fs-5 ">Số lượng:</p>
<input type="number" max="100" min="1" value="1" name='number' id='numpro' class="rounded">  
    
            <p   class=" pt-1 fs-5"> <i class="fas fa-cart-arrow-down "></i><i> Miễn phí giao hàng toàn quốc</i> </p>
            <p class="  pt-1 fs-5"><i class="fas fa-check-circle"></i> <i> Kiểm tra hàng trước khi thanh toán</i> </p>
            <p  class=" pt-1 fs-5"><i class="fas fa-exchange-alt"></i>  <i> 1 đổi 1 trong 14 ngày lỗi nhà sản xuất</i> </p> 
            <p  class=" pt-1 fs-5"><i class="fas fa-headset"></i>  <i> Hỗ trợ chăm sóc sau bán hàng</i> </p>
       
       


    <input type="submit" class="btn text-white mt-4 fs-5" value="Đặt hàng" name='submit'  id='submit' style="background-color: #ff416c;">

</div>





</div>




</div>

      
   <!--  -->
      <!-- footer -->
      <?php require('../views/tp/footer.php') ?> 
   </body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>

$(document).ready(function () {
    $('#submit').on('click',function(){
       
        $.ajax({
        type: "get",
        url: "addCartFromDetailProduct",
        data: {
            IDSanPham:$('#ID').val(),
            number:$('#numpro').val()


        },
   
        success: function (response) {
            var a =response.trim();
            console.log(a);
            if(a=='0'){
                    location.href='/dangnhap';
                    }else if(a=='-1'){
                        alert('Số lượng trong kho không đủ đáp ứng');
                    }
                    else{
                        location.href='/giohang';
                    }
        }
    });


    })
    
    $.each($('.imgsub'), function (indexInArray, valueOfElement) { 
    $(valueOfElement).click(function(){
       var link= $(this).attr('src')
       console.log(link)
        $('.imgparent').attr('src',link)
    })
});

   
});


</script>

</html>