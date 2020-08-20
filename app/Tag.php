<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tag extends Model
{
    protected $fillable = ['name', 'slug'];
    public function posts()
    {

        return $this->belongsToMany(Post::class);
    }
}
