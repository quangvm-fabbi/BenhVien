<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhongBenh extends Model
{
    protected $table = 'PhongBenh';
    protected $guared = ['id'];
    protected $date = [
        'created_at',
        'updated_at',
    ];
    public function giuongbenh()
    {
        return $this->hasMany('App\GiuongBenh','PhongBenh_id');
    }
    public function benhnhan()
    {
        return $this->hasManyThrough('App\BenhNhan','App\GiuongBenh','PhongBenh_id','GiuongBenh_id');
    }
}
