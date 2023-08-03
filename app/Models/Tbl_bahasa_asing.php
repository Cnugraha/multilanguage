<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_bahasa_asing extends Model
{
    use HasFactory;
    protected $table = 'tbl_bahasa_asing';
    protected $fillable = [
        'id_bhs_indonesia',
        'id_negara',
        'kalimat_asing'
    ];
    public function bahasa()
    {
        return $this->belongsTo(Tbl_bahasa::class, 'id_bhs_indonesia');
    }
    public function negara()
    {
        return $this->belongsTo(Tbl_reff_bhs_asing::class, 'id_negara');
    }
}
