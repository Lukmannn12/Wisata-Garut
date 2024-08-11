<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wisata extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_wisata', 'sejarah', 'deskripsi', 'fasilitas', 'lokasi', 'gambar', 'harga_tiket', 'id_kecamatan', 'id_user',
    ];

    protected $table = 'wisatas';

    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan', 'id');
    }
    
}