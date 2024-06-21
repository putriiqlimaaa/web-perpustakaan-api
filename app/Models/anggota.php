<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $table = 'anggota';
   protected $primaryKey = 'id';
   protected $fillable = [
    'id', 'nama', 'alamat', 'no_telp'
   ];
}
