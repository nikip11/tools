<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [];

    public function childs()
    {
        return $this->hasMany('Modules\Blog\Entities\Category', 'parent_id');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'posts_categories');
    }
}
