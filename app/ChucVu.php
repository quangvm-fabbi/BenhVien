<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChucVu extends Model
{
    protected $table = 'ChucVu';
    protected $guared = ['id'];
    protected $date = [
        'created_at',
        'updated_at',
    ];
    public function nhanvien()
    {
        return $this->hasMany('App\NhanVien','id');
    }
}
