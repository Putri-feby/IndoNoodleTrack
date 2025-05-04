<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanBaku extends Model
{
    use HasFactory;

    protected $table = 'bahan_baku';
    protected $primaryKey = 'id_bahanbaku';

    protected $fillable = [
        'nama_bahanbaku',
        'stok_bahanbaku',
        'jenis_bahanbaku',
    ];

    public function returBahanBaku()
    {
        return $this->hasMany(ReturBahanBaku::class, 'id_bahanbaku', 'id_bahanbaku');
    }
}
