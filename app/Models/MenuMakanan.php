<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\Model;


class MenuMakanan extends Model
{
    protected $connection = 'mongodb';     // gunakan koneksi mongodb
    protected $collection = 'menu_makanan'; // nama koleksi di MongoDB

    protected $fillable = [
        'nama', 'deskripsi', 'gambar', 'kategori'
    ];
}
