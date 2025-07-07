<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
   
    use HasFactory;

    protected $fillable = [
        'type', 'text', 'answer'];
    
    public function task(): belognsTo{
        return $this->BelongsTo(Task::class);
    }
    public function options(): hasMany{
        return $this->hasMany(Option::class);
    }
}
