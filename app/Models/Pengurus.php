<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $primaryKey = "id_pengurus";
    public $table = "pengurus";

    //tambahkan kode berikut
    protected $fillable = [
        'nama_pengurus', 'jabatan', 'katakata'
    ];
}
