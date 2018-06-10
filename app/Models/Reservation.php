<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'cms_reservations';
    
    protected $guarded = [];
    
    public function getUser()
    {
        return $this->hasOne(User::class, 'id', 'fk_user_id');
    }
    
    public function getSalle()
    {
        return $this->hasOne(Salle::class, 'id', 'fk_salle_id');
    }
}
