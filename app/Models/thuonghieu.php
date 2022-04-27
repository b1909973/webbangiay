<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class thuonghieu extends Model
{
    protected $table = 'thuonghieu';
     protected $primaryKey = 'id';
    // protected $fillable = [
    //     'TenThuongHieu'
    //     ];
    // public $timestamps = false;
   
    public function sanpham(){

        return $this->hasMany(sanpham::class,'ID_Thuonghieu');
    }

}