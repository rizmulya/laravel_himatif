<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $primaryKey = "id_testimoni";
    public $table = "testimoni";

    //tambahkan kode berikut
    protected $fillable = [
        'nama_alumni', 'keterangan_alumni', 'cerita', 'foto_alumni',
    ];
}
