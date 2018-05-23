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
}
