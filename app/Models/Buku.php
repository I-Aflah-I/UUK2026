<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
   protected $fillable=['penulis', 'penerbit', 'judul', 'tahun_terbit', 'status'];
}
