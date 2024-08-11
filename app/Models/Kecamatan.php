<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kecamatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kecamatan', 'gambar', 'id_user',
    ];

    // Definisikan nama tabel jika nama tabelnya bukan jamak dari model (opsional)
    protected $table = 'kecamatans';

    // Definisikan relasi kecamatan
    public function wisata(): HasMany
    {
        return $this->hasMany(Wisata::class, 'id_kecamatan', 'id');
    }

    public function kecamatan(): BelongsTo
    {
        return $this->belongsTo(Kecamatan::class);
    }

}