

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
<!--  -->
<main class="" style="min-height: 524px;">
	<div class="container">
	   
		  <div class=" col-md-12 content ">
				 
					<div class=" container ">
					<div class="row col-md-12  mx-auto p-3 mt-2  rounded">
									
											
												
									<a href="/dangxacnhan" class="waiting text-decoration-none col-12  col-md-4 text-center    p-2 border-bottom  fs-5  " value="0" style="color:#ff416c;">Chờ xác nhận</a>
																			  
									<a href="/danggiao" class="shipping text-decoration-none col-12 col-md-4 text-center p-2 border-bottom   fs-5" value="2" style="color:#ff416c;">Đang giao</a>
									<a href="/dagiao" class="shipped text-decoration-none col-12 col-md-4 text-center link-secondary  p-2  border-bottom    fs-5" value="3" style="color:#ff4b2b;">Đã giao</a>
								   
								  </div>
							   <!-- <a href="" class='text-decoration-none col-1 border-end'></a> -->
									
										<p class="text-center fs-3  mt-3 " style="color:#ff4b2b;">ĐƠN MUA</p>
							
					</div>
								
						
					
					 <div class="noidung"> 
					
						<section class="w-100 p-4 text-center">
						
								
							
							<table class="table table-bordered">
							
								<thead>
								<tr  style="border: 2px solid rgb(19, 15, 15)">
								  <th scope="col" style="color:#ff4b2b;">#</th>
								
								  <th scope="col" class="text-center" style="color:#ff4b2b;">Sản phẩm</th>
								
								  <th scope="col" style="color:#ff4b2b;">Tổng tiền</th>
								  <th scope="col" style="color:#ff4b2b;">Vận chuyển</th>
								  <th scope="col"></th>
								</tr>
							  </thead>
							  
							  <tbody>
							  <?php foreach ($dh as $key => $value) {
								  	  # code...
										$tong=0;
										?>
								  <tr  style="border: 2px solid rgb(19, 15, 15)">
								<td style="color:#ff4b2b;" ><span class="dem"></span></td>
								<td >
										
								<?php foreach ($value->sanpham as $key => $value1) {
										# code...
										$tong+=$value1->pivot->TongTien ;
									
									?>
									<table class="table text-center">
											
									
								<tr>
										<td>	<img src="css/frontend/image/<?= $value1->thuonghieu->TenThuongHieu?>/<?= $value1->hinhanh[0]->HinhAnh ?>" alt="" style="width: 80px;"></td></td>
										<td style="color:#ff4b2b;"	><?= $value1->TenSP ?></td>
										<td style="color:#1e9600;"><?= $value1->pivot->TongTien ?><b class="fs-5">đ</b></td>
										<td><button class="btn btn-outline-secondary " disabled style="color:#ff4b2b;"><?= $value1->pivot->SoLuong?></button> </td>
									</tr>
																		
									
									</table>
									<?php } ?>


								</td>
								
							
									<td style="color:#1e9600;" class="text-center tong"  ><?= $tong ?><span><b class="fs-5">đ</b> </span></td>
									<td><i class="fas fa-check-circle fs-3 text-success"></i></td>
									<td><button  class="tathienthi btn" value="<?= $value->id?>"><i class="fas fa-eye-slash fs-3 text-danger " ></i></button></td>
								</tr>
								<?php } ?>
							  </tbody>
							</table>
						
						  </section>
					 </div>
				
			   
			 </div>   









	</div>





</main>

   <!--  -->
  



   <!--  -->
      <!-- footer -->
      <?php require('../views/tp/footer.php') ?> 
   </body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
		$(document).ready(function () {
			
	
			let i=1;
			$.each($('.dem'), function (indexInArray, Element) { 
			
				$(Element).text(i++);
			});
		
			$.each($('.tathienthi'), function (indexInArray, Element) { 
					$(Element).click(function () { 
							var val = $(this).val();
							//console.log(val);
							$.ajax({
								type: "get",
								url: "/tatdagiao",
								data: {
									val
								},
							
								success: function (response) {
										if(response==1){
											location.reload();
										}
								}
							});
						

						
					});
				
		});
	
			
		});

	</script>
	 

</html>