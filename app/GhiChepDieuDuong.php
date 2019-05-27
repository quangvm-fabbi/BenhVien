<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GhiChepDieuDuong extends Model
{
    protected $table = 'GhiChepDieuDuong';
    protected $guared = ['id'];
    protected $date = [
        'created_at',
        'updated_at',
    ];
    public function benhan()
    {
        return $this->belongsTo('App\BenhAn','BenhAn_id');
    }
}
