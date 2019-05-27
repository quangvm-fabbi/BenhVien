<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BenhAn extends Model
{
    protected $table = 'BenhAn';
    protected $guared = ['id'];
    protected $date = [
        'created_at',
        'updated_at',
    ];

    public function vienphi()
    {
        return $this->belongsTo('App\VienPhi','BenhAn_id');
    }
    public function thamgia()
    {
        return $this->hasMany('App\ThamGia','BenhAn_id');
    }
    public function phacdo()
    {
        return $this->hasMany('App\PhacDo','BenhAn_id');
    }
    public function benhnhan()
    {
        return $this->belongsTo('App\BenhNhan','BenhNhan_idBenhNhan');
    }
    public function pppt()
    {
        return $this->belongsTo('App\PhuongPhapPhauThuat','PhuongPhapPhauThuat_id');
    }
    
}
