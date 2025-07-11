<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;


class Task extends Model
{
    
    use HasFactory;
    protected $fillable = ['type', 'questions', 

    ];
    public function questions() {
    return $this->hasMany(Question::class);
}
}
