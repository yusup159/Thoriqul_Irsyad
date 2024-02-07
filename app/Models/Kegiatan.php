<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class Kegiatan extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $table = 'kegiatan';

    protected $fillable = [
        'user_id',
        'tanggal',
        'fotokegiatan',
        'deskripsi',
        'judul'
    ];
}
