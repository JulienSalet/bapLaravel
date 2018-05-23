<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $table = 'files';
    
    protected $guarded = [];
    
    public function getFileAttribute($file)
    {
        return asset($file);
    }
    
    public function getFile()
    {
        return $this->attributes['file'];
    }
    
    public function getUser()
    {
        return $this->belongsTo(User::class, 'fk_user_id', 'id');
    }
}
