<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class donhang extends Model
{
    protected $table = 'donhang';
    protected $fillable = [
        'TrangThai',
        'NgayTaoDon',
        'NgayDuyetDon',
        'ID_KhachHang',
        'TatHienThi',
        
        
        ];
        public $timestamps = false;
    public function khachhang(){
        return   $this->belongsTo(khachhang::class,'ID_KhachHang');
    }
    // public function chitietdonhang(){
    //     $this->hasMany(chitietdonhang::class,'ID_KhachHang');
    // }
   
    public function sanpham(){
        return $this->belongsToMany(sanpham::class,'App\Models\chitietdonhang','ID_DonHang','ID_SanPham')->withPivot('Gia','SoLuong','TongTien');
    }
}