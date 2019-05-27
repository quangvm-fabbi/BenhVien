<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiuongBenh extends Model
{
    protected $table = 'GiuongBenh';
    protected $guared = ['id'];
    protected $date = [
        'created_at',
        'updated_at',
    ];
    public function benhnhan()
    {
        return $this->belongsTo('App\BenhNhan','BenhNhan_id');
    }
    public function phongbenh()
    {
        return $this->belongsTo('App\PhongBenh','PhongBenh_id');
    }
}
