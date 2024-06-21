<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
   protected $table = 'buku';
   protected $primaryKey = 'id';
   protected $fillable = [
    'id', 'kode', 'gambar', 'judul', 'penulis', 'penerbit', 'tahun_terbit', 'sinopsis', 'kategori', 'stok'
   ];
}