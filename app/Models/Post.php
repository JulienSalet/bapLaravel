<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'cms_post';
    
    protected $guarded = [];
    
    public function getCategories()
    {
        return $this->belongsToMany(Category::class, 'category_post', 'fk_post_id', 'fk_category_id');
    }
    
    public function getFile()
    {
        return $this->hasOne(File::class, 'id', 'fk_file_id');
    }
}
