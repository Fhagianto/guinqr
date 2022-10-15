<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acara extends Model
{
    use HasFactory;
    protected $table = "acara";
    protected $primaryKey = 'id_acara';
}
