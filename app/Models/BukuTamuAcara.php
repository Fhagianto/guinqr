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
        'id_user',
    ];
}
