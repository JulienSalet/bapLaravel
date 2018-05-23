<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'cms_pages';
    
    protected $guarded = [];
    
    public function getBlocks()
    {
        return $this->hasMany(Block::class, 'fk_page_id', 'id');
    }
    
    public function getImage()
    {
        return $this->belongsTo(File::class, 'fk_image_id', 'id');
    }
    
    public function getOgImage()
    {
        return $this->belongsTo(File::class, 'og_image', 'id');
    }
}
