<?php

namespace App\Controllers;
use App\Models\sanpham;
use App\Models\thuonghieu;
use App\Controllers\Request;
class HomeController extends Controller
{
	// public function __construct()
	// {
	// 	if (!Guard::isUserLoggedIn()) {
	// 		redirect('/login');
	// 	}

	// 	parent::__construct();
	// }

	public function index()
	{	
			// $th = thuonghieu::find(1);
			// $b= $th->sanpham[0]->TenSP;
			// echo $b;
		// $sp=sanpham::find(3);
		// $a= $sp->thuonghieu->TenThuongHieu;
		// echo $a;
		
			$sp1=sanpham::where('new','=',1)->limit(12)->get();
		$sp = sanpham::where('ID_Thuonghieu', '=', 1)->limit(4)->get();
		$sp2 = sanpham::where('ID_Thuonghieu', '=', 2)->limit(4)->get();
		$sp3 = sanpham::where('ID_Thuonghieu', '=', 3)->limit(4)->get();
		$this->sendPage('pages/trangchu',['sp1'=>$sp1,'sp'=>$sp,'sp2'=>$sp2,'sp3'=>$sp3]);
	}

	
	public function nike()
	{	
	
		$sp = sanpham::where('ID_Thuonghieu', '=', 1)->get();

		$this->sendPage('pages/nike',['sp'=>$sp]);
	}

	public function adidas()
	{	
	
		$sp = sanpham::where('ID_Thuonghieu', '=', 2)->get();

		$this->sendPage('pages/adidas',['sp2'=>$sp]);
	}
	public function vans()
	{	
	
		$sp = sanpham::where('ID_Thuonghieu', '=', 3)->get();

		$this->sendPage('pages/vans',['sp3'=>$sp]);
	}

	public function chitiet()
	{	
		
		if(isset($_GET['id'])){
			$id=$_GET['id'];

			$sp = sanpham::where('id','=',$id)->first();

			$this->sendPage('pages/chitiet',['sp'=>$sp]);
		}
		
	}
	public function timkiem()
	{	
			$a=$_GET['timkiem'];
			$a='%'.$a.'%';
		$sp = sanpham::where('slug', 'LIKE',$a)->get();

		$this->sendPage('pages/timkiem',['sp'=>$sp]);
	}

}



?>