<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'cms_category';
    
    protected $guarded = [];
    
    public function getPosts()
    {
        return $this->belongsToMany(Post::class, 'category_post', 'fk_category_id', 'fk_post_id');
    }
}
