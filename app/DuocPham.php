<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DuocPham extends Model
{
    protected $table = 'DuocPham';
    protected $guared = ['id'];
    protected $date = [
        'created_at',
        'updated_at',
    ];
    public function phacdo()
    {
        return $this->belongsToMany('App\PhacDo','DuocPham_PhacDo','DuocPham_id','PhacDo_id');
    }
}
