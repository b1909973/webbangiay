


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
 	<main style="min-height:515px;">
		<div class="container  " style="min-height: 416px;">
			<h2 class="text-center mt-2" style="color:  #ff416c;">Giỏ hàng của tôi</h2>
		
			<table class="table text-center ">
										<thead>
										<tr class="">
										
											<th scope="col">Sản phẩm</th>
											<th scope="col">Tên Sản Phẩm</th>
											<th scope="col">Giá</th>
											<th scope="col">Số lượng</th>
											<th scope="col">Tổng tiền</th>
											<th scope="col"></th>
											<th scope="col"></th>
											<th scope="col"></th>
										</tr>
										</thead>
																					
									<?php foreach ($gh as $key => $value) {
                    # code...
							
                  
                   $a =$value->sanpham->hinhanh[0]->HinhAnh;
										if($value->sanpham->GiaGiam!=0){
											$gia = $value->sanpham->GiaGiam;
										}  else{
											$gia= $value->sanpham->GiaChinhThuc;
										}
				 
                 
                  ?>
										<tr>
											<td>
											
																						
												<img src="css/frontend/image/<?= $value->sanpham->thuonghieu->TenThuongHieu?>/<?= $a ?>" alt="" style="width: 100px;"></td>
											<td><?php 	echo  $value->sanpham->TenSP; ?></td>
																						<td><?php 	echo  $gia ?></td>

											<td><?php echo $value->SoLuong ?></td>
											
											<td class="tong"><?php echo $gia*$value->SoLuong ?></td>
											<td><button class="rounded add" value='<?php	echo  $value->id; ?>'>+</button></td> 
											<td><button  class="rounded divide " value='<?php	echo  $value->id; ?>'>-</button></td>
											<td><button  class="rounded del" value='<?php	echo  $value->id; ?>'>Xoá</button></td>
										</tr>

                    <?php } ?>
																			</table>
								

			<div class="text-center mt-5 mb-3 fs-3 border-top border-bottom"><strong style="color:#ff416c;">Tổng :</strong>  <span class="result" style='color:#1e9600;'>0</span > <b style='color:#1e9600;'>đ</b>  </div>
			<div class="text-center">
						<button class="btn btn-outline-success p-3 dh">Đặt hàng</button>
			</div>
		</div>
	

	</main>	

      
   <!--  -->
      <!-- footer -->
      <?php require('../views/tp/footer.php') ?> 
   </body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script>
		$(document).ready(function () {

			var total=0;

			$.each($('.total'), function (indexInArray, valueOfElement) { 
				console.log($(valueOfElement).text());
				total +=parseInt(($(valueOfElement).text()));
			  

			});
			$('.result').text(total);

			  $.each($('.add'), function (indexInArray, valueOfElement) { 
					 $(valueOfElement).on('click',function(){
					   var ID_GioHang =$(this).val();
				//	   console.log(ID_GioHang);
						  $.ajax({
							type: "get",
							url: "/add",
							data: {
							  ID_GioHang
							},
						   
							success: function (response) {
							  console.log(response);
							
							  if(response==0){
								  alert('Số lượng trong kho không đáp ứng');
							  }else{
								location.reload();
							  }

							}
						  });




					 }) 


			  });

			  $.each($('.divide'), function (indexInArray, valueOfElement) { 
					 $(valueOfElement).on('click',function(){
					   var ID_GioHang =$(this).val();
					//   console.log(ID_GioHang);
						  $.ajax({
							type: "get",
							url: "/divide",
							data: {
							  ID_GioHang
							},
						   
							success: function (response) {
							  console.log(response);
							  location.reload();
							}
						  });




					 }) 
					 

			  });
			  $.each($('.del'), function (indexInArray, valueOfElement) { 
					 $(valueOfElement).on('click',function(){
					   var ID_GioHang =$(this).val();
					   console.log(ID_GioHang);
						  $.ajax({
							type: "get",
							url: "/del",
							data: {
							  ID_GioHang
							},
						   
							success: function (response) {
							  console.log(response);
							  location.reload();
							}
						  });




					 }) 
					 

			  });
			  var tong = 0;
			  $.each($('.tong'), function (indexInArray, valueOfElement) { 
				
				tong +=Number($(valueOfElement).text());
				



			  });
			  $('.result').text(tong);

			  $('.dh').on('click',function(){
					var dh = 1;
					  
						  $.ajax({
							type: "get",
							url: "/dathang",
							data: {
							 dh
							},
						   
							success: function (response) {
								console.log(response);
								if(response==1){
									alert('Đặt hàng thành công')
										 location.href='/dangxacnhan';
								}else{
									alert(response);
								}
								
							
							 // var temp=0;
							// $.each($('.IDsp'), function (indexInArray, valueOfElement) { 

							//   if(response.trim()==$(valueOfElement).text()){
							// 	$(valueOfElement).parent().addClass('bg-secondary')
							// 	  temp=1;
							// 	  alert('Số lượng trong kho không đủ đáp ứng');
							//   }
							  




							// });
							// if(temp==0){
							//   alert("Đặt hàng thành công");
							// 	location.href='quanlidonhang.php';
							// }
							
						   
							}
						  });




					 }) 






		});


	</script>
</html>