<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTamuAcara extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_tamu_acara',
        'cek_in',
        'cek_out',
        'no_badge',
        'id_user_ci',
        'id_user_co',
    ];
    public function TamuAcara(){
        return $this->belongsTo(TamuAcara::class,'id_tamu_acara','id_tamu_acara');
    }
}
