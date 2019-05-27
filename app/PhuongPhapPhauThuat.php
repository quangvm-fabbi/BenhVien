<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhuongPhapPhauThuat extends Model
{
    protected $table = 'PhuongPhapPhauThuat';
    protected $guared = ['id'];
    protected $date = [
        'created_at',
        'updated_at',
    ];
    public function benhan()
    {
        return $this->belongsTo('App\BenhAn','PhuongPhapPhauThuat_id');
    }
}
