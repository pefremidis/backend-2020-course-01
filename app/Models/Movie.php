<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'rating'];

    public function getPathAttribute()
    {
        return route('movies.show', [
            'movie' => $this->id
        ]);
    }

    public function getEditPathAttribute()
    {
        return "{$this->path}/edit";
    }


    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

    public function getNameAttribute()
    {
        return $this->title;
    }
}
