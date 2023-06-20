<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custumer extends Model
{
    use HasFactory;
    protected $table = "custumer";
    protected $primaryKey = 'id';

    protected $fillable =[
        'namaMenu',
        'harga',
        'namaLengkap',
        'alamat',
        'noTelpon'
];
}

