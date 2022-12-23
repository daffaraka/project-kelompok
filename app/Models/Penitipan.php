<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penitipan extends Model
{
    use HasFactory;

    protected $table = 'tb_hewan';

    protected $fillable =
    [
        'nama_pemilik',
        'alamat_pemilik',
        'no_hp',
        'nama_hewan',
        'jenis_kelamin',
        'tanggal_penitipan',
        'tanggal_kembali',
        'perawatan_1',
        'perawatan_2',
        'perawatan_3',
        'perawatan_4'
    ];
}
