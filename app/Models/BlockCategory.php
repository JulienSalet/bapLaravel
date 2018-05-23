<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlockCategory extends Model
{
    protected $table = "cms_block_categories";
    
    protected $guarded = [];
    
    public function getBlocks()
    {
        return $this->hasMany(Block::class, 'fk_category_id', 'id');
    }
}
