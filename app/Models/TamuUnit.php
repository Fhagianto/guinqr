<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamuUnit extends Model
{
    use HasFactory;
    protected $table ="tamu_units";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama',
        'no_telpon',
        'email',
        'keperluan',
        'instansi',
        'id_unit',
        'tgl',
        'status',
    ];

    public function unit(){
    	return $this->belongsTo(Unit::class,'id_unit', "id_unit");
    }
}
