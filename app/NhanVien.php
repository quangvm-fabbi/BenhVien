<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    protected $table = 'NhanVien';
    protected $guared = ['id'];
    protected $date = [
        'created_at',
        'updated_at',
    ];
    public function chucvu()
    {
        return $this->belongsTo('App\ChucVu','chucVu');
    }
    public function vienphi()
    {
        return $this->belongsTo('App\VienPhi','NhanVien_id');
    }
    public function thamgia()
    {
        return $this->hasMany('App\ThamGia','NhanVien_id');
    }
    public function ketquaxetnghiem()
    {
        return $this->belongsTo('App\KetQuaXetNghiem','NhanVien_id');
    }
}
