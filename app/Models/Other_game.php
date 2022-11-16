<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Other_game extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','name', 'category', 'rate', 'link', 'photo'];

    public function category()
    {
    	return $this->hasMany(Other_games_category::class, 'id', 'category_id');
    }
}