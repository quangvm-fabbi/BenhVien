<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KetQuaKhamSucKhoe extends Model
{
    protected $table = 'KetQuaXetNghiem';
    protected $guared = ['id'];
    protected $date = [
        'created_at',
        'updated_at',
    ];
    public function loaixetnghiem()
    {
        return $this->belongsTo('App\LoaiXetNghiem','loaiXetNghiem_id');
    }
    public function benhnhan()
    {
        return $this->belongsTo('App\BenhNhan','BenhNhan_idBenhNhan');
    }
}
