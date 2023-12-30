<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $fillable = [
        'user_id',
        'tanggal',
        'fotokegiatan',
        'deskripsi',
        'judul'];


}
