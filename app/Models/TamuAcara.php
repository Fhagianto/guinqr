<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamuAcara extends Model
{
    use HasFactory;
    protected $table ="tamu_acaras";
    // protected $primaryKey = "id_tamu_acara";
    protected $fillable = [
        'nama',
        'no_telpon',
        'email',
        'id_acara',
        'status',
    ];
    public function acara(){
    	return $this->belongsTo(acara::class,'id_acara',"id_acara");
    }
}
