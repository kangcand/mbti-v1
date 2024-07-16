<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    use HasFactory;
    protected $fillable = ['tahun'];

    public function users()
    {
        return $this->hasMany(User::class, 'tahun_ajaran_id');
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
}
