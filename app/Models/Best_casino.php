<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Best_casino extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'percent', 'button_link', 'photo'];
}
