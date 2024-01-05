<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $table = 'berita';

    protected $fillable = [
        'user_id',
        'tanggal',
        'fotoberita',
        'deskripsi',
        'judul'];

}