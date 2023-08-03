<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_reff_bhs_asing extends Model
{
    use HasFactory;
    protected $table = 'tbl_reff_bhs_asing';
    protected $fillable = [
        'nama_negara',
        'keterangan'
    ];
}
