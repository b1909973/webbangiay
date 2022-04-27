<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;

class khachhang extends Model
{
    protected $table = 'khachhang';
    
    protected $fillable = [
        'HoTen',
        'TenTaiKhoan',
        'MatKhau',
        'DiaChi',
        'SoDienThoai',
        'Khoa',
        
        ];
    public $timestamps = false;


 
   public function donhang(){
    return  $this->hasMany(donhang::class,'ID_KhachHang');
    }

    public function giohang(){

    return $this->hasMany(giohang::class,'ID_KhachHang');
    }

}