<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts'; 
    protected $primaryKey = 'post_id'; 
    public $timestamps = false;

    protected $fillable = [
        'title',
        'content',
        'author',
        // 'created_at' is managed automatically if timestamps are true
    ];
    
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id'); 
    }
}
