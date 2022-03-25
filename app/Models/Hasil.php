<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        // 'dosen_id',
        'saran',
        'nilai',
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

}
