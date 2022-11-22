<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acara extends Model
{
    use HasFactory;
    protected $table = "acara";
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_acara',
        'keterangan',
        'email_acara',
        'tgl_start',
        'tgl_end',
        'id_user_acara',
    ];
    public function tamuacara(){
        return $this->hasMany(TamuAcara::class);
    }
}
