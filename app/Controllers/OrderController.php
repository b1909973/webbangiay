<?php

namespace App\Controllers;
use App\Models\khachhang;
use App\Models\giohang;
use App\Models\sanpham;
use App\Models\donhang;
use App\Models\chitietdonhang;

use App\Controllers\Request;
class OrderController extends Controller
{
	public function giohang()
	{
		if(isset($_SESSION['id_khachhang'])){

            $gh = giohang::where('ID_KhachHang','=',$_SESSION['id_khachhang'])->get();
			$this->sendPage('pages/giohang',['gh'=>$gh]);
		}
        else{
            $this->sendPage('pages/dangnhap');
        }


	}
	public function themvaogiohang()
	{
		if(isset($_SESSION['id_khachhang'])){

            $gh = giohang::where('ID_KhachHang','=',$_SESSION['id_khachhang'])->where('ID_SanPham','=',$_GET['IDSanPham'])->first();
			$Slkho = sanpham::select('SoLuong')->where('id','=',$_GET['IDSanPham'])->first();
			$Sl= $Slkho->SoLuong;
			if($gh){
				
				$gh->SoLuong+=1;
				if($gh->SoLuong>$Sl){
					echo '-1';
				}else{
					echo $gh->save();
				}
				
			 }else{
			 	$new = new giohang;
			 	$new->ID_SanPham=$_GET['IDSanPham'];
			 	$new->ID_KhachHang=$_SESSION['id_khachhang'];
			 	$new->SoLuong=1;
				 if($Sl==0){
					echo '-1';
				}else{
			 	echo $new->save();
				}
			 }
		
			
		}
        else{
          echo '0';
        }


	}


	public function addCartFromDetailProduct()
	{
		if(isset($_SESSION['id_khachhang'])){

            $gh = giohang::where('ID_KhachHang','=',$_SESSION['id_khachhang'])->where('ID_SanPham','=',$_GET['IDSanPham'])->first();

			$Slkho = sanpham::select('SoLuong')->where('id','=',$_GET['IDSanPham'])->first();
			$Sl= $Slkho->SoLuong;
			if($gh){
				
				$gh->SoLuong+=$_GET['number'];
				if($gh->SoLuong>$Sl){
					echo '-1';
				}else{
					echo $gh->save();
				}
				
			 }else{
			 	$new = new giohang;
			 	$new->ID_SanPham=$_GET['IDSanPham'];
			 	$new->ID_KhachHang=$_SESSION['id_khachhang'];
			 	$new->SoLuong=$_GET['number'];
				 if($Sl==0){
					echo '-1';
				}else{
			 	echo $new->save();
				}
			 }
		
			
		}
        else{
          echo '0';
        }


	}

	public function addedOne()
	{
		
		if(isset($_SESSION['id_khachhang'])){

            $gh = giohang::find($_GET['ID_GioHang']);
			$Slkho = $gh->sanpham->SoLuong;
			$Sl=$Slkho;
			
			if($gh){
				
				$gh->SoLuong+=1;
				if($gh->SoLuong>$Sl){
					echo '0';
				}else{
					echo $gh->save();
				}
				
			 
			 }
		
			
		}
        else{
          echo '0';
        }


	}


	public function divideOne()
	{
		
		if(isset($_SESSION['id_khachhang'])){

            $gh = giohang::find($_GET['ID_GioHang']);
			
			
			if($gh){
				
				$gh->SoLuong-=1;
				if($gh->SoLuong<1){
					$gh->delete();
				}else{
					 $gh->save();
				}
				
			 
			 }
		
			
		}
        else{
          echo '0';
        }


	}

			public function del()
			{
				
				if(isset($_SESSION['id_khachhang'])){

					$gh = giohang::find($_GET['ID_GioHang'])->delete();
					
				


			}




		}
		public function dathang()
			{
				
				if(isset($_SESSION['id_khachhang'])){
					$result = giohang::where('ID_KhachHang','=',$_SESSION['id_khachhang'])->get();
				//  $result = donhang::where('ID_KhachHang','=',$_SESSION['id_khachhang'])->first();
			
				//  echo $result;
				// // print_r($result->sanpham);	
				// echo $result->pivot_SoLuong;
				// // foreach ($result->sanpham as $key => $value) {
				// // 	# code...
				// // 	echo $value->pivot->TongTien;
				// // }
				// 	 foreach ($result->sanpham as $key => $value) {
				// 		echo $value->TenSP.'</br>';
				// 	 }
				
				if(count($result)!=0){
					$dh = new donhang;
					$dh->TrangThai=1;
					$dh->NgayTaoDon=date('Y-m-d');
					$dh->ID_KhachHang=$_SESSION['id_khachhang'];
					$dh->save();
					$IDdonhang=$dh->id;
					// echo $IDdonhang;
					foreach ($result as $key => $value) {
						$a = sanpham::where('id','=',$value->ID_SanPham)->first();
						$a->SoLuong-=$value->SoLuong;
						 $a->save();
						$ctdh= new chitietdonhang;
						$ctdh->ID_DonHang=$IDdonhang;
					
						$ctdh->ID_SanPham=$value->ID_SanPham;
						$ctdh->SoLuong=$value->SoLuong;
						if($value->sanpham->GiaGiam!=0){
							$gia=$value->sanpham->GiaGiam;
						}else{
							$gia=$value->sanpham->GiaChinhThuc;
						}
						$ctdh->Gia=$gia;
						$ctdh->TongTien=$gia*$value->SoLuong;
						 $ctdh->save();
					}
				$result = giohang::where('ID_KhachHang','=',$_SESSION['id_khachhang'])->delete();
				echo '1';
				}else{
					echo 'Giỏ hàng rỗng. Vui lòng chọn sản phẩm';
				}


			}




		}



		public function dangxacnhan(){
			if(isset($_SESSION['id_khachhang'])){
				$result = donhang::where('ID_KhachHang','=',$_SESSION['id_khachhang'])->where('TrangThai','=',1)->get();
			$this->sendPage('pages/dangxacnhan',['dh'=>$result]);
			}
		}
		public function danggiao(){
			if(isset($_SESSION['id_khachhang'])){
				$result = donhang::where('ID_KhachHang','=',$_SESSION['id_khachhang'])->where('TrangThai','=',2)->get();
			$this->sendPage('pages/danggiao',['dh'=>$result]);
			}
		
		}
		public function dagiao(){
			if(isset($_SESSION['id_khachhang'])){
				$result = donhang::where('ID_KhachHang','=',$_SESSION['id_khachhang'])->where('TrangThai','=',3)->where('TatHienThi','=',0)->get();
			$this->sendPage('pages/dagiao',['dh'=>$result]);
			}
		}

		public function huydonhang(){
			if(isset($_SESSION['id_khachhang'])){
				$result = donhang::where('id','=',$_GET['ID_DonHang'])->first();
					foreach ($result->sanpham as $key => $value) {
						$sl= $value->pivot->SoLuong;
						$value->SoLuong+=$sl;
						$value->save();
						echo $value->pivot->delete();
					}
					$result->delete();
		
			}
		}

		public function tatdagiao(){
			if(isset($_SESSION['id_khachhang'])){
				$result = donhang::where('id','=',$_GET['val'])->first();
					
					$result->TatHienThi=1;
					echo $result->save();
			}
		}
}


?>