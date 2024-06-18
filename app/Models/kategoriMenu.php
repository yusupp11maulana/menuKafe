<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategoriMenu extends Model {
    protected $table = 'kategoriMenu';
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'namaKategori',
    ];
}
