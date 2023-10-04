<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihPeriode extends Model
{
    use HasFactory;
    protected $table = 'pilih_periode';
    public $timestamps = false;
    protected $fillable = [
        'id_periode',
        'aktif',
    ];
}
