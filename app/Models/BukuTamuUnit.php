<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTamuUnit extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tamu_unit',
        'cek_in',
        'cek_out',
        'no_badge',
        'id_user',
    ];
    public function TamuUnit(){
        return $this->belongsTo(TamuUnit::class,'id_tamu_unit','id_tamu_unit');
    }
}
