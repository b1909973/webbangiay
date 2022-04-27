<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hinhanh extends Model
{
    protected $table = 'hinhanh';
    protected $fillable = [
      
      'ID_SanPham',
      'HinhAnh',
      
      
      ];
      public $timestamps = false;

    public function sanpham(){
      return   $this->belongsTo(sanpham::class,'ID_SanPham');
    }
}