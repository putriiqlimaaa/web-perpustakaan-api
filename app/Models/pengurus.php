<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengurus extends Model
{
    protected $table = 'pengurus';
   protected $primaryKey = 'id';
   protected $fillable = [
    'id', 'nama', 'jabatan', 'alamat', 'no_telp'
   ];
}
