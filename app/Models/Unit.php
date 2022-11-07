<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_unit',
        'keterangan',
        'email_unit',
    ];
    public function tamuunit(){
        return $this->hasMany('App\Models\TamuUnit');
    }
}