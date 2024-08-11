<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pemesan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'tanggal',
        'jumlahtiket',
        'pembayaran',
        'id_wisata',
    ];

    public function wisata(): BelongsTo
    {
        
        return $this->belongsTo(Wisata::class, 'id_wisata', 'id');
    }
}
