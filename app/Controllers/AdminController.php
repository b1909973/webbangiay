<?php

namespace App\Controllers;
use App\Models\sanpham;
use App\Models\thuonghieu;
use App\Models\donhang;
use App\Models\hinhanh;
use App\Models\khachhang;
use App\Models\giohang;
use App\Models\admin;
use App\Controllers\Request;
class AdminController extends Controller
{
    public function login(){
        $this->sendPage('admin/adminlogin');
    }
    public function themsanpham(){
        if(isset($_SESSION['id'])){
            $this->sendPage('admin/themsanpham');
        }else{
            $this->sendPage('admin/adminlogin');
        }
      
    }
    public function dangxacnhan(){
        if(isset($_SESSION['id'])){
        $result= donhang::where('TrangThai','=',1)->get();

        $this->sendPage('admin/dangxacnhan',['sp'=>$result]);
        }else{
            $this->sendPage('admin/adminlogin');
        }
    }
    public function danggiao(){
        if(isset($_SESSION['id'])){
        $result= donhang::where('TrangThai','=',2)->get();
        $this->sendPage('admin/danggiao',['sp'=>$result]);
        }else{
            $this->sendPage('admin/adminlogin');
        }
    
    }
    public function dagiao(){
        if(isset($_SESSION['id'])){
        $result= donhang::where('TrangThai','=',3)->get();

        $this->sendPage('admin/dagiao',['sp'=>$result]);
        }else{
            $this->sendPage('admin/adminlogin');   
        }
    }
    public function bomhang(){
        if(isset($_SESSION['id'])){
        $result= donhang::where('TrangThai','=',4)->get();
        $this->sendPage('admin/bomhang',['sp'=>$result]);
         }
            else{
                $this->sendPage('admin/adminlogin');  
            }
    }


    public function duyetdonhang(){
        
        $result= donhang::where('id','=',$_GET['ID_DonHang'])->first();

            if($_GET['loai']==1){
                $result->TrangThai=2;
               echo $result->save();
            }
      
            if($_GET['loai']==2){
                $result->TrangThai=3;
             echo  $result->save();
            }
      

       
    }
    public function huydon(){

        $result = donhang::where('id','=',$_GET['ID_DonHang'])->first();

        foreach ($result->sanpham as $key => $value) {
            $sl= $value->pivot->SoLuong;
            $value->SoLuong+=$sl;
            $value->save();
            echo $value->pivot->delete();
        }
        $result->delete();



    }
    public function xulibomhang(){

        $result= donhang::where('id','=',$_GET['ID_DonHang'])->first();

                $result->TrangThai=4;
               echo $result->save();
            



    }
    public function adminthemsp(){
        $sp = new sanpham;
        $sp->TenSP = $_GET['tensp'];
         $sp->KichCo=$_GET['kichco'];
        $sp->ID_Thuonghieu=$_GET['brand'];
        $sp->GiaChinhThuc=$_GET['price'];
        $sp->GiaGiam=$_GET['pricedown'];
        $sp->SoLuong=$_GET['num'];
        $sp->new=$_GET['news'];
        $str=$sp->TenSP;
        $unicode = array(
 
            'a'=>'??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???',
             
            'd'=>'??',
             
            'e'=>'??|??|???|???|???|??|???|???|???|???|???',
             
            'i'=>'??|??|???|??|???',
             
            'o'=>'??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???',
             
            'u'=>'??|??|???|??|???|??|???|???|???|???|???',
             
            'y'=>'??|???|???|???|???',
             
            'A'=>'??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???',
             
            'D'=>'??',
             
            'E'=>'??|??|???|???|???|??|???|???|???|???|???',
             
            'I'=>'??|??|???|??|???',
             
            'O'=>'??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???',
             
            'U'=>'??|??|???|??|???|??|???|???|???|???|???',
             
            'Y'=>'??|???|???|???|???',
             
            );
             
            foreach($unicode as $nonUnicode=>$uni){
             
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
             
            }
            $str = str_replace(' ',' ',$str);
             
            $sp->slug= $str;


           
             $sp->save();

             foreach ($_GET['arrImg'] as $key => $value) {

                $ha = new hinhanh;
                $ha->HinhAnh=$value;
                $ha->ID_SanPham=$sp->id;
              $ha->save();

             }
             echo '1';


    }
    public function thongtintaikhoan(){
        if(isset($_SESSION['id'])){
         $id= $_GET['id'];
         $result=khachhang::where('id','=',$id)->first();
            $donhang = donhang::where('ID_KhachHang','=',$id)->get();
                    $this->sendPage('admin/thongtinkhachhang',['kh'=>$result,'dh'=>$donhang]);
        }else{
            $this->sendPage('admin/adminlogin');
        }

    }
    public function khoataikhoan(){

        $id= $_GET['id'];
        $result=khachhang::where('id','=',$id)->first();
          $result->Khoa=$_GET['khoa'];
         echo  $result->save();

   }

   public function danhsachnguoidung(){
    if(isset($_SESSION['id'])){
       $result = khachhang::all();
    $this->sendPage('admin/danhsachnguoidung',['kh'=>$result]);
    }else{
        $this->sendPage('admin/adminlogin');
    }
   }
   public function product(){
    if(isset($_SESSION['id'])){
    $id= $_GET['id'];
    $result = sanpham::where('ID_Thuonghieu','=',$id)->get();
 $this->sendPage('admin/product',['sp'=>$result]);
    }else{
        $this->sendPage('admin/adminlogin');
    }

}
public function gosanpham(){
    $id= $_GET['id'];
    $result = sanpham::where('id','=',$id)->first();
    

     $result1=hinhanh::where('ID_SanPham','=',$id)->get();
     foreach ($result1 as $key => $value) {
   
         $value->delete();

     }
    
     $result2=giohang::where('ID_SanPham','=',$id)->get();
     foreach ($result2 as $key => $value) {
         $value->delete();
     }
   

            // $a= array();

        foreach ($result->donhang as $key => $value) {

              $value->pivot->delete();  
                // array_push($a,$value->id);   
               
            }

           echo $result->delete();            
         
            

    

}
    public function chitietsp(){
        if(isset($_SESSION['id'])){
        $id= $_GET['id'];
        $result = sanpham::where('id','=',$id)->first();

        $this->sendPage('admin/chitietsp',['sp'=>$result]);
        }else{
            $this->sendPage('admin/adminlogin');
        }
    } 

    public function editPro(){
        $sp = sanpham::where('id','=',$_GET['id'])->first();
        $sp->TenSP = $_GET['tensp'];
        $sp->KichCo=$_GET['kichco'];
      
       $sp->GiaChinhThuc=$_GET['price'];
       $sp->GiaGiam=$_GET['pricedown'];
       $sp->SoLuong=$_GET['num'];
       $sp->new=$_GET['news'];
       $str=$sp->TenSP;


       $unicode = array(
 
        'a'=>'??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???',
         
        'd'=>'??',
         
        'e'=>'??|??|???|???|???|??|???|???|???|???|???',
         
        'i'=>'??|??|???|??|???',
         
        'o'=>'??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???',
         
        'u'=>'??|??|???|??|???|??|???|???|???|???|???',
         
        'y'=>'??|???|???|???|???',
         
        'A'=>'??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???',
         
        'D'=>'??',
         
        'E'=>'??|??|???|???|???|??|???|???|???|???|???',
         
        'I'=>'??|??|???|??|???',
         
        'O'=>'??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???',
         
        'U'=>'??|??|???|??|???|??|???|???|???|???|???',
         
        'Y'=>'??|???|???|???|???',
         
        );
         
        foreach($unicode as $nonUnicode=>$uni){
         
        $str = preg_replace("/($uni)/i", $nonUnicode, $str);
         
        }
        $str = str_replace(' ',' ',$str);
         
        $sp->slug= $str;


       
         $sp->save();
     
            if(isset($_GET['arrImg'])){
         foreach ($_GET['arrImg'] as $key => $value) {

            $ha = new hinhanh;
            $ha->HinhAnh=$value;
            $ha->ID_SanPham=$sp->id;
          $ha->save();

         }
        }

        if(isset($_GET['Img'])){
         foreach ($_GET['Img'] as $key => $value) {
             
            $delimg=hinhanh::where('id','=',$value)->delete();
        

         }
        }
        echo '1';




    }

    public function processlogin(){

        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $result = admin::where('username','=',$username)->where('password','=',$password)->first();
        if($result){
            $_SESSION['id']=$result->id;
          
            // $this->sendPage('/');
             $this->Redirect('/admin/themsanpham');
        }else{
            $_SESSION['message']='T??i kho???n ho???c m???t kh???u kh??ng h???p l???';
            $this->sendPage('admin/adminlogin');
        }
    }

    public function logout(){

        unset($_SESSION['id']);
        
        $this->sendPage('admin/adminlogin');
    }


}