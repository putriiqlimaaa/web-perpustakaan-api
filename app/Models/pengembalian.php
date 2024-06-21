<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{

    use HasFactory;
    
    protected $table = 'pengembalian';
    protected $primaryKey = 'id';
    protected $fillable = [
     'id', 'nama_peminjam', 'judul_buku', 'tgl_kembali', 'denda'
    ];

    public function user()
    {
        return $this->belongsTo(userSignUp::class, 'nama_peminjam', 'nama');
    }
}
