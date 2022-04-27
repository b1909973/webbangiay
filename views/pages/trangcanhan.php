

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

   <main class="" style="min-height: 524px;">
	<div class="container">
		<div class="row mx-auto">
				<div class="col-md-3 ">
				  
					<p class="mt-4"> Tài khoản của <br><span><strong class="ms-2"><?= $_SESSION['HoTen'] ?></strong></span></p>
					<p> </p>
					<hr>
					<ul class="list-group list-group-flush">
						<li class="list-group-item  "><a href="" class="text-decoration-none text-dark">Thông tin tài khoản</a> </li>
						
						<li class="list-group-item"><a href="/dangxacnhan" class="text-decoration-none text-dark manager">Quản lý đơn hàng</a> </li>
						<li class="list-group-item"><a href="/doimatkhau" class="text-decoration-none text-dark changePass">Đổi mật khẩu</a></li>
			
					</ul>
				</div>

			  
				<div class=" col-md-9 content ">
				 
					<h3 class="m-4">Thông tin tài khoản</h3>
					<div class="col-md-7  border py-4 rounded ">
						<div class="col-11 mx-auto">
							<p class="fs-5">Thông tin cá nhân</p>
							<div class="row mb-4">
								<label for="fullname" class="col-sm-3 col-form-label">Họ và Tên:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $user->HoTen?>" disabled="">
								</div>
							</div>
						   
							<div class="row mb-4">
							  <label for="birtday" class="col-sm-3 col-form-label">Quê quán:</label>
							  <div class="col-sm-9">
								  <input type="text" class="form-control" id="hometown" name="hometown" value="<?php echo $user->DiaChi?>">
							  </div>
						
							</div>
							
						 
					   
					   
							<div class="row mb-4">
								<label for="phone" class="col-sm-3 col-form-label">Số điện thoại:</label>
								<div class="col-sm-9">
									<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $user->SoDienThoai?>" disabled="">
								</div>
							</div>
							<div class="row mb-4">
								<div class="col-4 offset-4"><button class="btn btn-info capnhat">Cập nhật</button></div>
									
							</div>
							<div class="row mb-4">
								<p class="text-success text-center dung d-none">Cập nhật thành công</p>
								<p class="text-danger text-center sai d-none	">Cập nhật thất bại</p>

							</div>
						  
				</div>
			   
				  





				</div>
			 


		</div>
	   






	</div>





</div></main>
  



   <!--  -->
      <!-- footer -->
      <?php require('../views/tp/footer.php') ?> 
   </body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
$(document).ready(function () {
				
				$('.capnhat').click(function () { 
					var a= $('#hometown').val();
					a.trim();
					console.log(a);
					if(a==''){
						if(	!$('.dung').hasClass('d-none')){
											$('.dung').addClass('d-none')
										}

										$('.sai').removeClass('d-none');
					}else{

						$.ajax({
							type: "get",
							url: "/capnhatdiachi",
							data: {
								a
							},
							success: function (response) {
							
									if(response=='1'){
										if(	!$('.sai').hasClass('d-none')){
											$('.sai').addClass('d-none')
										}
											$('.dung').removeClass('d-none');
									}else{
										if(	!$('.dung').hasClass('d-none')){
											$('.dung').addClass('d-none')
										}

										$('.sai').removeClass('d-none');
									}			
							}
						});
					}
						//console.log(a)
						

				});


			});




	</script>

</html>