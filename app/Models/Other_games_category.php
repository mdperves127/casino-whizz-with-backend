<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other_games_category extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    
    function otherc()
    {
        return $this->hasMany('App\Models\Other_game', 'category_id', 'id');
    }
}
