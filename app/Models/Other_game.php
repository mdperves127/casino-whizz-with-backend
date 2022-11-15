<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other_game extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','name', 'category', 'rate', 'link', 'photo'];


    public function other_category()
    {
        return $this->hasMany('App\Model\Other_games_category', 'id', 'category_id');
    }
}
