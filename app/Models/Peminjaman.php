<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $fillable=['user_id', 'buku_id', 'kapan_dipinjam', 'kapan_dikembalikan', 'status'];

    public function user(){
        return $this->belongTo(User::class);
    }

    public function buku(){
        return $this->belongsTo(Buku::class);
    }
}
