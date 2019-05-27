<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiXetNghiem extends Model
{
    protected $table = 'LoaiXetNghiem';
    protected $guared = ['id'];
    protected $date = [
        'created_at',
        'updated_at',
    ];
    public function ketquaxetnghiem()
    {
        return $this->hasMany('App\XetNghiem','loaiXetNghiem_id');
    }
}
