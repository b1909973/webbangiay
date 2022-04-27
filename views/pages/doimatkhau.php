

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
				  
					<p class="mt-4"> Tài khoản của <br><span><strong class="ms-2"><?= $_SESSION['HoTen']  ?></strong></span></p>
					<p> </p>
					<hr>
					<ul class="list-group list-group-flush">
						<li class="list-group-item  "><a href="/trangcanhan" class="text-decoration-none text-dark">Thông tin tài khoản</a> </li>
					
						<li class="list-group-item"><a href="/dangxacnhan" class="text-decoration-none text-dark manager">Quản lý đơn hàng</a> </li>
						<li class="list-group-item"><a href="" class="text-decoration-none text-dark changePass">Đổi mật khẩu</a></li>
			
					</ul>
				</div>

			  
				<div class=" col-md-9 content ">
    
 

                
                    <!-- <div class="col-md-9 col-12 my-3"> -->
                        <h3 class="my-3">Đổi mật khẩu</h3>
                        <form class="col-md-7 border py-4 rounded " action="../xuly/xuly_dmk.php" method="post">
                            <div class="col-11 mx-auto">
                                <p class="fs-5"></p>
                                <div class="row mb-4">
                                    <label for="password" class="col-sm-3 col-form-label">Mật khẩu cũ:</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="newpassword" class="col-sm-3 col-form-label">Mật khẩu mới:</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="newpassword" name="newpassword">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <label for="renewpassword" class="col-sm-3 col-form-label">Nhập lại mật khẩu mới:</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="renewpassword" name="renewpassword">
                                    </div>
                                </div>

                            
                                <div class="row">
                                    <div class="col-sm-10 offset-sm-3">
                                        <input type="submit" class="btn text-white" name="submit_change" id="submit_change" value="Lưu thay đổi" style="background: #303e48;">
                                    </div>
                                    <div class="text-center py-2 text-success d-none Success"><i> Cập nhật thành công</i></div>
                                    <div class="text-center py-2 text-danger d-none Failure"><i> Cập nhật không thành công</i></div>
                                </div>
                             
                            </div>
                           
                        </form>
                      
                        
                


 


  				 </div>
			   
				  





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
	  
	
	
	
			$('#submit_change').on('click',function(e){
				
						e.preventDefault();
				
				$.ajax({
					type: "post",
					url: "xuli_doimatkhau",
					data: {
						
						password:$('#password').val(),
						newpassword:$('#newpassword').val(),
						renewpassword:$('#renewpassword').val(),
					},
				
					success: function (response) {
						
							if(response=='1'){
								if(!$('.Failure').hasClass('d-none')){
									$('.Failure').addClass('d-none');
								}
								$('.Success').removeClass('d-none');
							}else{
								if(!$('.Success').hasClass('d-none')){
									$('.Success').addClass('d-none');
								}
								$('.Failure').removeClass('d-none');
							}
					}
				});
	
	
	
	 		 })
	
	
	})
	
	
	
	
	
	</script>

</html>