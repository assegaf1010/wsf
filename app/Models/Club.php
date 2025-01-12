<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{

    use HasFactory;

    protected $fillable = ['user_id', 'nama_club', 'alamat', 'logo','email','tanggal_berdiri'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $table = 'clubs';
}
