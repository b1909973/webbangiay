<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sanpham extends Model
{
    protected $table = 'sanpham';
    //  protected $primaryKey = 'id';
    protected $fillable = [
        'TenSP',
        'KichCo',
        'SoLuong',
        'GiaChinhThuc',
        'GiaGiam',
        'ID_Thuonghieu',
        'slug',
        'new'
        ];
     public $timestamps = false;

    public function thuonghieu(){
        return $this->belongsTo('App\Models\thuonghieu','ID_Thuonghieu');
    }
    public function hinhanh(){
        return   $this->hasMany(hinhanh::class,'ID_SanPham');
    }

    public function giohang(){

        return $this->hasMany(giohang::class,'ID_SanPham');
    }
    public function donhang(){
        return $this->belongsToMany(donhang::class,'App\Models\chitietdonhang','ID_SanPham','ID_DonHang')->withPivot('Gia','SoLuong','TongTien');
    }
   


}   