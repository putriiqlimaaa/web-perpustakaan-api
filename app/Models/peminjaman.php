<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{

    use HasFactory;
    
    protected $table = 'peminjaman';
    protected $primaryKey = 'id';
    protected $fillable = [
     'id', 'nama_peminjam', 'judul_buku', 'tgl_pinjam', 'tgl_kembali'
    ];

    public function user()
    {
        return $this->belongsTo(userSignUp::class, 'nama_peminjam', 'nama');
    }
}
