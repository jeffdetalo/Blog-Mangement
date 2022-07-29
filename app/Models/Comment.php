<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $fillable=['text', 'time', 'writer_id'];

    public function writer(){
        return $this->belongsTo(Writer::class);
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
