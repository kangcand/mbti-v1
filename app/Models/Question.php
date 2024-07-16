<?php

// app/Models/Question.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'type'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function questionType()
    {
        return $this->belongsTo(QuestionType::class);
    }

}
