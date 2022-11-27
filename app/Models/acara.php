<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acara extends Model
{
    use HasFactory;
    protected $table = "acara";
    protected $primaryKey = 'id_acara';
    protected $fillable = [
        'nama_acara',
        'keterangan',
        'email_acara',
        'tgl_start',
        'tgl_end',
        'id_user_acara',
        'status',
    ];
    public function tamuacara(){
        return $this->hasMany(TamuAcara::class);
    }
    public function usermanage(){
        return $this->belongsTo(UserManage::class,'id_user_acara',"id");
    }
}
