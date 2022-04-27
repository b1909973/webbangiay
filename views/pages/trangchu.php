


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
    
   <main>
        <!-- <div class="title-sale">
            <p><a title="Giày thể thao bán chạy">Hàng bán chạy</a></p>
        </div>
        -->
       
        <div class="container">
            <h2 class="text-center my-4" style="color: #ff416c;"> <i>TOP SẢN PHẨM MỚI NHẤT</i> </h2>
            <div id='noidung'>
               <div class="row row-cols-4  justify-content-center">
               <?php
                         foreach ($sp1 as $key => $value) {
                  # code...
               
                     # code...
               
               ?>

                                    <div class="card  m-2 text-center" style="width: 18rem;">
                 
                      <div class="card-body position-relative"> 
                      <?php if($value->new==1){

                       ?>    
                      <span class="badge  position-absolute end-0 top-0 text-white bg-danger  "> <i>New</i> </span>                            
                      <?php }?>
                      <form action="/chitietsanpham" method='get'class="text-decoration-none mb-2 text-dark">
                          <input type="hidden" name='id' value="<?php echo $value->id ?>">    
                             <button type='submit' class=' border-0'>
                                                                                                     
                                                                    
                                                                    
                           <?php
                                

                                 $hinhanh =  App\Models\hinhanh::where('ID_SanPham','=',$value->id)->first()
                                    ;
                                   
                          ?>                                   
                             
                                <img src="css/frontend/image/<?= $value->thuonghieu->TenThuongHieu?>/<?=$hinhanh->HinhAnh ?>" class="card-img-top" alt="..."> </button>
                              <?php ?>
                              <h5 class="card-title "> <?php echo $value->TenSP ?></h5>
                              <?php if($value->GiaGiam!=0){?>
                      <p class="card-text mb-1 fs-5  fw-bold"><span  style='color:#1e9600;'> <del><?php echo $value->GiaChinhThuc ?></del><u>đ</u> </span> </p>
                      <p class="card-text mb-1 fs-5 fw-bold text-danger"><span><?php echo $value->GiaGiam ?></span><span><u>đ</u> </span></p>
                    <?php }else{

                    ?>
                    <p class="card-text mb-1 fs-5 fw-bold"><span  style='color:#1e9600;'> <?php echo $value->GiaChinhThuc ?><u>đ</u> </span> </p>

                    <?php } ?>
                                                          
                           
                                                                                      </form> 
                      </div> 
                    
                      <button class="btn text-white themvaogiohang" value="<?= $value->id?>" style="background-color: #ff416c;"> Thêm vào giỏ hàng</button>
                </div> 
                        
                 
                     
                        
               <?php } ?>
                 
                  
              
            </div> 

            </div>
        </div>
        <hr>
        
            <!-- nike -->
            <?php include('../views/pages/thanhphan/nike.php')?>
      <!-- ///////////////////// -->

       <!-- adidas -->
       <?php include('../views/pages/thanhphan/adidas.php')?>
      <!-- ///////////////////// -->
       <!-- vans -->
       <?php include('../views/pages/thanhphan/vans.php')?>
      <!-- ///////////////////// -->


<hr>


    </main>





      
   <!--  -->
      <!-- footer -->
      <?php require('../views/tp/footer.php') ?> 
   </body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
                function addOnCart(){
                    $.each($('.themvaogiohang'), function (indexInArray, valueOfElement) { 
                    $(valueOfElement).on('click',function(){
                            
                            var IDSanPham=$(this).val();
                         //   console.log(IDSanPham);
                            $.ajax({
                            type: "get",
                            url: "/themvaogiohang",
                            data: {IDSanPham}
                            ,
                            
                            success: function (response) {
                                var a =response.trim();
                               console.log(a);
                                if(a=='0'){
                                location.href='/dangnhap';
                                }else if(a=='-1'){
                                    alert('Số lượng trong kho không đủ đáp ứng');
                                }
                                else{
                                alert('Thêm thành công');
                                }
                                  }
                            
                            });





                    });
                    });


                    

                }
            
                addOnCart();  

      </script>

</html>