<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhacDo extends Model
{
    protected $table = 'PhacDo';
    protected $guared = ['id'];
    protected $date = [
        'created_at',
        'updated_at',
    ];
    public function duocpham_phacdo()
    {
        return $this->hasMany('App\DuocPham_PhacDo', 'id');
    }
    public function duocpham()
    {
        return $this->belongsToMany('App\DuocPham','duocpham_phacdo','PhacDo_id','DuocPham_id');
    }
    public function benhan()
    {
        return $this->belongsTo('App\BenhAn','BenhAn_id');
    }
}
