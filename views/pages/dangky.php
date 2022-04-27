

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{/css/frontend/icon.png" type="image/icon type">
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

<div class="container">
   <div class="row">
      <div class="col-sm-8 offset-sm-2">

         
         <div class="card m-2">
            <div class="card-header">
               <h3 class="text-center "style="font-family: 'Charm', cursive;color:  #ff416c;">Đăng ký </h3>
            </div>
            <div class="card-body">
               <form id="signupForm" method="post" class="form-horizontal" action="/dangky">
                  <!-- <input type="hidden" name="_token" value="bA4j2qxPiiJNC79zuMZj2KIlWpVxEq10ni1MHajz"> -->
                  <div class="form-group row mb-3">
                     <label class="col-sm-4 col-form-label" for="firstname">Tên của bạn</label>
                     <div class="col-sm-5 ">
                        <input type="text" class="form-control error" id="firstname" name="firstname" placeholder="Tên của bạn" />
                        <span class='fn'> </span>
                     </div>
                  </div>
                      

               
                  <div class="form-group row  mb-3">
                     <label class="col-sm-4 col-form-label" for="username">Tên đăng nhập</label>
                     <div class="col-sm-5">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Tên đăng nhập" />
                        <span class='us'> </span>
                     </div>
                  </div>


               
                                
                  <div class="form-group row mb-3">
                     <label class="col-sm-4 col-form-label" for="tel">Số điện thoại</label>
                     <div class="col-sm-5">
                        <input type="text" class="form-control" id="tel" name="tel" placeholder="Số điện thoại" />
                        <span class='sdt'> </span>
                     </div>
                  </div>

                         <div class="form-group row  mb-3">
                     <label class="col-sm-4 col-form-label" for="address">Địa chỉ</label>
                     <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Địa chỉ" />
                        <span class='dc'> </span>
                     </div>
                  </div>
                  <div class="form-group row  mb-3">
                     <label class="col-sm-4 col-form-label" for="password">Mật khẩu</label>
                     <div class="col-sm-5">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu" />
                        <span class='pw'> </span>
                     </div>	
                  </div>

                  <div class="form-group row  mb-3">
                     <label class="col-sm-4 col-form-label" for="confirm_password">Nhập lại mật khẩu</label>
                     <div class="col-sm-5">
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu" />
                        <span class='cpw'> </span>
                     </div>
                  </div>

               

                  <div class="row">
                     <div class="col-sm-5 offset-sm-4  mb-3">
                        <button type="submit" class="btn btn-primary" name="submit" value="Sign up" style="background-color:  #ff416c;">Đăng ký</button>
                     </div>
                  </div>

               </form>
            </div>
         </div>
      </div> <!-- Cột nội dung -->
   </div> <!-- Dòng nội dung -->
</div> <!-- Container -->
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
		// function isEmail(email) {
		// 	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		// 	return regex.test(email);
		// 	}

		var fn=$('#firstname');
		var username=$('#username');
		// var email=$('#email');
		var tel =$('#tel');
		var address=$('#address')
		var password =$('#password');
		var confirm_password=$('#confirm_password');
// Kiểm tra Tên
		function KTfn(tag,message){
			
			if($(tag).val()==''){
				$('.fn').text(message)
			}
		
			else{
				$('.fn').text('')
			}
			$('.fn').css('color','red')
		}
		
		fn.blur(function(){

			KTfn($(this),'Tên không được bỏ trống');


		})
		//////////////////////////
		//Kiểm tra Tên đăng nhập
		function KTus(tag,message){

		if($(tag).val()==''){
			$('.us').text(message)
		}
		else if($(tag).val().length<6){
			$('.us').text('Tên không hợp lệ')
		}
		else if($(tag).val()!=''){
			$.ajax({
				type: "get",
				url:'/testUsername',
				data: {
					username:$(tag).val()
				},
			
				success: function (response) {
					if(response.trim()!=1){
					$('.us').text(response.trim());
					}else{
						$('.us').text('')
					}
				}
			});
		
		
		}
		
			$('.us').css('color','red')
		}
		username.blur(function(){

		KTus($(this),'Tên đăng nhập không được bỏ trống');


		})
		/////////////////////
				//Kiểm tra Email
		// function KTem(tag,message){

		// 	if($(tag).val()==''){
		// 		$('.em').text(message)
		// 	}
		// 	else if(!isEmail($(tag).val())){
		// 		$('.em').text('Email không hợp lệ')
		// 	}
		// 	else{
		// 			$('.em').text('')
		// 		}

		// 	$('.em').css('color','red')
		// }
		// email.blur(function(){

		// 	KTem($(this),'Email không được bỏ trống');


		// })
				/////////////////////
						
	/////////////////////
				//Kiểm tra SDT
				function KTsdt(tag,message){

					if($(tag).val()==''){
						$('.sdt').text(message)
					}
					else if($(tag).val().length!=10){
					
						$('.sdt').text('Sô điện thoại không hợp lệ')
					}
					else{
							$('.sdt').text('')
						}
						$('.sdt').css('color','red')
				}
				tel.blur(function(){

					KTsdt($(this),'Số điện thoại không được bỏ trống');


				})
						/////////////////////
								
							/////////////////////
								//Kiểm tra DC
								function KTdc(tag,message){

										if($(tag).val()==''){
											$('.dc').text(message)
										}
										// else if($(tag).val().length!=10){

										// 	$('.dc').text('Địa chỉ không hợp lệ')
										// }
										else{
												$('.dc').text('')
											}
											$('.dc').css('color','red')
										}
										address.blur(function(){

										KTdc($(this),'Địa chỉ không được bỏ trống');


										})
											/////////////////////
												/////////////////////
								//Kiểm tra password
								function KTpw(tag,message){

										if($(tag).val()==''){
											$('.pw').text(message)
										}
										else if($(tag).val().length<8){

											$('.pw').text('Mật khẩu quá ngắn')
										}
										else{
												$('.pw').text('')
											}
											$('.pw').css('color','red')
										}
										password.blur(function(){

										KTpw($(this),'Mật khẩu không được bỏ trống');


										})
											/////////////////////
																		/////////////////////
								//Kiểm tra password
								function KTcpw(tag,message){

									if($(tag).val()!==$(password).val()){
										// console.log($(password).val())
										$('.cpw').text(message)
									}
									// else if($(tag).val().length<7){

									// 	$('.cpw').text('Mật khẩu quá ngắn')
									// }
									else{
											$('.cpw').text('')
										}
										$('.cpw').css('color','red')
									}
								confirm_password.blur(function(){

									KTcpw($(this),'Mật khẩu không trùng khớp');


								})
										/////////////////////

										$('#signupForm').submit(function(e){
											var temp=0; 
											$.each($('.form-group span'), function (indexInArray, valueOfElement) { 
												if($(this).text()!=''){
													temp=1;
													
												}
												
											});
											$.each($('.form-group input'), function (indexInArray, valueOfElement) { 
												if($(this).val()==''){
													temp=1;
													
												}
												
											});
											if(temp!=0){
												e.preventDefault()
												alert('Có thông tin chưa đúng vui lòng thử lại!');
											}
											else{
												alert('Bạn đã đăng ký thành công!');
											}


										})
													




	});

</script>

</html>