<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /** @use HasFactory<\Database\Factories\AnswerFactory> */
    use HasFactory;
    public function questions(): BelongsTo{
        return $this->belongsTo(Question::class);
    }
    public function users(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
