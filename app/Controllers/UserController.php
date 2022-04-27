<?php

namespace App\Controllers;
use App\Models\khachhang;
use App\Controllers\Request;
class UserController extends Controller
{


	public function dangnhap()
	{		
		if(isset($_SESSION['id_khachhang'])){
			$this->Redirect('/home');
		}
		$this->sendPage('pages/dangnhap');
	}

	public function xuly_dangnhap()
	{		
		if(isset($_POST['submit'])){

			$username=$_POST['username'];
			$password=md5($_POST['password']);
			$result = khachhang::where('TenTaiKhoan','=',$username)->where('MatKhau','=',$password)->first();
			if($result){
				$_SESSION['id_khachhang']=$result->id;
				$_SESSION['HoTen']=$result->HoTen;
				$_SESSION['SoDienThoai']=$result->SoDienThoai;
				$_SESSION['DiaChi']=$result->DiaChi;
				// $this->sendPage('/');
				 $this->Redirect('/home');
			}else{
				$_SESSION['message']='Tài khoản hoặc mật khẩu không hợp lệ';
				$this->sendPage('pages/dangnhap');
			}
		}
	
	
	}
	
	public function dangxuat()
	{	
		session_destroy().
		$this->Redirect('/home');
	}
	public function dangky()
	{	
		
		$this->sendPage('pages/dangky');
	}

	public function testUsername()
	{	
		if(isset($_GET['username'])){
			$username= $_GET['username'];

			$result=khachhang::where('TenTaiKhoan','=',$username)->count();
			if($result==0){
				echo '1';
			}else{
				echo 'Tên tài khoản đã tồn tại';
			}

		}	
	
	}
	public function xuli_dangky()
	{	
		if(isset($_POST['submit'])){
			$kh = new khachhang;

			$kh->TenTaiKhoan = $_POST['username'];
			$kh->HoTen=$_POST['firstname'];
			$kh->SoDienThoai=$_POST['tel'];
			$kh->DiaChi=$_POST['address'];
			$kh->MatKhau=md5($_POST['password']);

			$kh->save();
			$this->sendPage('pages/dangnhap');
		}
				
			
	
	}

	public function trangcanhan()
	{	
		if(isset($_SESSION['id_khachhang'])){
				
			$user = khachhang::where('id','=',$_SESSION['id_khachhang'])->first();
			$this->sendPage('pages/trangcanhan',['user'=>$user]);
		}
				
			
	
	}
	public function capnhatdiachi()
	{	
		if(isset($_SESSION['id_khachhang'])){
			
			$user = khachhang::where('id','=',$_SESSION['id_khachhang'])->first();
			
			 $user->DiaChi=$_GET['a'];
			 echo $user->save();
		}
				
			
	
	}
	public function doimatkhau()
	{
		if(isset($_SESSION['id_khachhang'])){

			$this->sendPage('pages/doimatkhau');
		}


	}


	public function xuli_doimatkhau()
	{	
		if(isset($_SESSION['id_khachhang'])){
			
				if(($_POST['renewpassword']==$_POST['newpassword']) && strlen($_POST['newpassword'])>7){

					
					$user = khachhang::where('id','=',$_SESSION['id_khachhang'])->where('MatKhau','=',md5($_POST['password']))->first();
					if($user){
						$user->MatKhau=md5($_POST['newpassword']);
						echo $user->save();

					}
				
					

				}



		}
				
			
	
	}

}
?>