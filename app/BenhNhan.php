<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BenhNhan extends Model
{
    protected $table = 'BenhNhan';
    protected $guared = ['id'];
    protected $date = [
        'created_at',
        'updated_at',
    ];

    public function ketquakhamsuckhoe()
    {
        return $this->belongsTo('App\KetQuaKhamSucKhoe', 'id');
    }

    public function giuongbenh()
    {
        return $this->belongsTo('App\GiuongBenh','GiuongBenh_id');
    }
    public function benhan()
    {
        return $this->hasMany('App\BenhAn','BenhNhan_idBenhNhan');
    }
}
