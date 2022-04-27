<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class giohang extends Model
{
    protected $table = 'giohang';
    protected $fillable = [
        'SoLuong',
        'ID_KhachHang',
        'ID_SanPham',
        
        
        ];
        public $timestamps = false;
   
     public function sanpham(){
        return  $this->belongsTo(sanpham::class,'ID_SanPham');
    }
    public function khachhang(){
        return  $this->belongsTo(sanpham::class,'ID_KhachHang');
    }

   
}