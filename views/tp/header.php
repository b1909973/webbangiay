 
 <header class="p-3  text-white" style="background-image:linear-gradient(to left, #ff416c, #ff4b2b);">
      <div class='position-fixed ' style='right:10%;bottom:10%;z-index:1;'>
     <a href="/giohang"><i class="fas fa-shopping-cart fs-1  " style="color:#ff4b2b;"></i></a> 
      </div>
        <div class="container">
          <div class="d-flex flex-wrap justify-content-lg-start justify-content-center">
              <div class="me-lg-auto ">
                <a href="/home" class=" text-white text-decoration-none">
                  <p  class="fs-2 p-0 m-0" style="font-family: 'Love Light', cursive;">Phương Shop</p>
                   </a>
           
              </div>
           
            <!-- <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                
            
             
            </ul>
     -->
            <form action="timkiem" method="get" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" name="timkiem" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-sidebar">
                      <i class="fas fa-search fa-fw text-white"></i>
                    </button>
                  </div>
                </div>
              </div>
            </form>
            

                    <!-- Lúc chưa đăng nhập -->
                    
                   



                      
                <?php
                if(!isset($_SESSION['id_khachhang'])){

                ?>

                <div class="text-end">
                  <button type="button" class="btn btn-outline-secondary me-2 "><a href="/dangnhap" class="text-decoration-none text-white">Đăng nhập</a> </button>
                  <button type="button" class="btn btn-outline-secondary"> <a href="/dangky" class="text-decoration-none text-white">Đăng ký</a> </button>
                </div>
               
            
                  <?php }else{?>
                    <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle  text-white" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                  <span>Chào <?php echo $_SESSION['HoTen'] ?></span>
              
                </a>
             
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                  <!-- <li><a class="dropdown-item" href="#"></a></li> -->
                  
                  <!-- <li><a class="dropdown-item" href="../page/thongbao.php">Thông báo 
                    
                  
                  <span class="badge"><i class="fas fa-circle text-danger"></i></span>
                                      </a>  
                 
                
                </li> -->
              
                  <li><a class="dropdown-item" href="/trangcanhan">Thông tin</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/dangxuat">Đăng xuất</a></li>
                </ul>
              </div>
                  <?php } ?>


          </div>
        </div>
      </header>
        
    <div class="d-flex flex-wrap py-3  justify-content-center border-bottom">
       
       <ul class="nav col-12  mb-2 justify-content-center  mb-md-0">
         <li><a href="/nike" class="nav-link px-2 link-dark me-2 nike " style="color: #ff416c;">GIÀY NIKE</a></li>
         <li><a href="/adidas" class="nav-link px-2 link-dark  me-2 adidas" style="color: #ff416c;">GIÀY ADIDAS</a></li>
         <li><a href="/vans" class="nav-link px-2 link-dark  me-2 vans" style="color: #ff416c;" >GIÀY VANS</a></li>
      
        
       </ul>
      
   </div>