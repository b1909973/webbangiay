<nav class="main-header navbar navbar-expand navbar-white navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
      
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="/adminlte/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="/adminlte/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="/adminlte/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #240b36;">
    <!-- Brand Logo -->
    <a href="/admin/themsanpham" class="brand-link">
      <img src="/css/frontend/icon.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Phương Shop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/css/frontend/admin.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">ADMIN</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
                <i class="fas fa-cart-arrow-down nav-icon"></i>
              <p>
               Đơn hàng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/dangxacnhan" class="nav-link ">
                    <i class="fas fa-spinner nav-icon"> </i>
                  <p>Chờ xác nhận</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/danggiao" class="nav-link">
                    <i class="fas fa-shuttle-van nav-icon"></i>
                  <p>Đang giao</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/dagiao" class="nav-link">
                    <i class="fas fa-check-circle nav-icon"></i>
                  <p>Đã giao</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/bomhang" class="nav-link">
                  <i class="fas fa-bomb nav-icon"></i>
                  <p>Bom hàng</p>
                </a>
              </li>
            </ul>
          </li>
          

          <li class="nav-item menu-open">
            <a href="" class="nav-link active">
                <i class="fas fa-shoe-prints nav-icon"></i>
              <p>
               Sản phẩm
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                                              
             
              <li class="nav-item">
                <a href="/admin/product?id=1" class="nav-link ">
               
                  <p>Nike</p>
                </a>
              </li>
                                
             
              <li class="nav-item">
                <a href="/admin/product?id=2" class="nav-link ">
               
                  <p>Adidas</p>
                </a>
              </li>
                                
             
              <li class="nav-item">
                <a href="/admin/product?id=3" class="nav-link ">
               
                  <p>Vans</p>
                </a>
              </li>
                           
            </ul>
          </li>

          
         

         
          <li class="nav-item ">
            <a href="/admin/themsanpham" class="nav-link active">
                <i class="fas fa-plus nav-icon"></i>
              <p>
                Thêm sản phẩm
                
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="/admin/danhsachnguoidung" class="nav-link active">
              <i class="fas fa-users"></i>
              <p>
                Danh sách khách hàng
                
              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>