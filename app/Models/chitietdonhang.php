<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chitietdonhang extends Model
{
    protected $table = 'chitietdonhang';
    protected $fillable = [
        'Gia',
        'SoLuong',   
        'ID_SanPham',
        'ID_DonHang',
        
        ];
     public $timestamps = false;
   
   
}