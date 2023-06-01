<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    use HasFactory;

    protected $primaryKey = "id_aspirasi";
    public $table = "aspirasi";

    //tambahkan kode berikut
    protected $fillable = [
        'nama_penyalur', 'nim', 'aspirasi'
    ];
}

