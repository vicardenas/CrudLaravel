<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'slug', 'image', 'description'];

    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
}
