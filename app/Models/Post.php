<?php

namespace App\Models;

use App\Helpers\DurationOfReading;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    public function getReadingDurationAttribute()
    {
        return app(DurationOfReading::class)
        ->setText($this->description)
        ->getTimePerMiunte();
    
    }

  
}
