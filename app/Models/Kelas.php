<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'tahun_ajaran_id',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function tahunAjaran()
    {
        return $this->belongsTo(TahunAjaran::class);
    }

    public function mbtiResults()
    {
        return $this->hasMany(MbtiResult::class);
    }
}
