<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    protected $table = 'cms_salle';
    
    protected $guarded = [];
    
    
    public function getFile()
    {
        return $this->hasOne(File::class, 'id', 'fk_file_id');
    }
}
