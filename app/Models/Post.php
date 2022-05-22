<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function getUserRelation()
    {
        return  $this->belongsTo(related: 'App\Models\User', foreignKey: 'user_id', ownerKey: 'id');
    }
}
