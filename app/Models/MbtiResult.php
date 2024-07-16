<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MbtiResult extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'kelas_id', 'mbti_type_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function mbtiType()
    {
        return $this->belongsTo(MbtiType::class, 'mbti_type_id');
    }

}
