<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class userSignUp extends Authenticatable
{

    use HasFactory;

    protected $table = 'user_sign_up';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'nama', 'email', 'password', 
    ];

    public function peminjamans()
    {
        return $this->hasMany(peminjaman::class, 'nama_peminjam', 'nama');
    }

    public function pengembalians()
    {
        return $this->hasMany(pengembalian::class, 'nama_peminjam', 'nama');
    }
}
