<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TamuAcara extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'no_telpon',
        'email',
        'id_acara',
    ];
}
