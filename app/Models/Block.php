<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $table = 'cms_blocks';
    
    protected $guarded = [];
    
    public function getBlocks()
    {
        return $this->hasMany(Block::class, 'fk_page_id', 'id');
    }
    
    public function getPage()
    {
        return $this->belongsTo(Page::class, 'fk_page_id', 'id');
    }
    
    public function getFoler()
    {
        return $this->belongsTo(BlockCategory::class, 'fk_category_id', 'id');
    }
}
