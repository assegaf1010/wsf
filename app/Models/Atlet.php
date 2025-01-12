<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Atlet extends Model
{
    use HasFactory;

    protected $table = 'atlets';
    protected $fillable = ['nama_atlet', 'tanggal_lahir', 'club_id'];

    // Relasi dengan model Club
    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}