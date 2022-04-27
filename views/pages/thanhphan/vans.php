<div class="container">
            <h2 class="text-center my-4" style="color: #ff416c;"> <i>VANS</i> </h2>
            <hr>
            <div id='noidung'>
               <div class="row row-cols-4  justify-content-center">
            
               
              
               
              
                
                
              
                 
              
               
              
                
              
                
              
                
               <?php
                         foreach ($sp3 as $key => $value) {
                  # c
               
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
                            
                               <img src="css/frontend/image/vans/<?=$hinhanh->HinhAnh ?>" class="card-img-top" alt="...">  </button>

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
                    
                      <button class="btn text-white themvaogiohang" value="<?= $value->id ?>" style="background-color: #ff416c;"> Thêm vào giỏ hàng</button>
                </div> 
                          
                            
                <?php } ?>
                 
                  
              
            </div> 

            </div>
        </div>

<hr>