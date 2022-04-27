
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
    .child{
        height:0px;
        overflow: hidden;
        transition: height 1s;
    }

    .parent{
        cursor: pointer;
    }

    .parent:hover .child{
      height:130px;

    }
    .mb-3 img{
        width: 400px;
    }
    .sp img{
        width: 80px;
    }
    .sub-menu {
      position: absolute;
      border:1px solid #ccc;
    }
    .sub-menu li{
      padding:10px 40px;
      list-style: none;
      border-bottom:1px solid #ccc;

    }
    .menu{
      position: relative;
    }
    body{
      background: rgb(2,0,36);
background: linear-gradient(90deg, #fc466b 0%, #3f5efb 32%, rgba(0,212,255,1) 100%);
    }
    .card{
      background: rgb(238,174,202);
background: radial-gradient(circle,#108dc7 0%,  #ef8e38 100%);
    }
  </style>
</head>
<body>
 
 
 
       
      
<!-- main-->
    <div class="container " style="min-height:476px">
		<div class="row mt-5">
			<div class="col-sm-7 offset-sm-2">

				
				<div class="card m-2">
					<div class="card-header">
						<h3 class="text-center " style="font-family: 'Charm', cursive;">Đăng nhập </h3>
											</div>
					<div class="card-body">
						<form id="signup" method="post" class="form-horizontal" action="/admin/admin-process">

				

							<div class="form-group row  mb-3">
								<label class="col-md-3 col-form-label" for="username">Tên đăng nhập:</label>
								<div class="col-md-6">
									<input type="text" class="form-control" id="username" name="username" placeholder="Tên đăng nhập">
								</div>
							</div>

							<div class="form-group row  mb-3">
								<label class="col-md-3 col-form-label" for="password">Mật khẩu:</label>
								<div class="col-md-6">
									<input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
								</div>
							</div>
              <p class='text-center text-danger'> <?php if(isset($_SESSION['message'])){
                  echo $_SESSION['message'];
                  $_SESSION['message']=null;

              } ?></p>
             
							
							

						

							<div class="row">
								<div class="col-sm-5 offset-sm-3  mb-3">
									<button type="submit" class="btn btn-primary mb-sm-2 mb-lg-0 " name="signup" id="sm" value="Sign up" style="background-color: #303e48;">Đăng nhập</button>
								
								</div>
							</div>
							
							

						</form>
					</div>
				</div>
			</div> <!-- Cột nội dung -->
		</div> <!-- Dòng nội dung -->
	</div>
     <!--  -->
    
   
   
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</html>