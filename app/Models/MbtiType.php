<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MbtiType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'suitable_jobs',
        'suitable_education',
        'description',
    ];

    public function mbtiResult()
    {
        return $this->hasMany(MbtiResult::class, 'mbti_type_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
