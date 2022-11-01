<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamuUnit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'no_telpon',
        'email',
        'keperluan',
        'instansi',
        'id_unit',
        'tgl',
    ];

    public function unit(){
    	return $this->belongsTo('App\Models\Unit');
    }
}
