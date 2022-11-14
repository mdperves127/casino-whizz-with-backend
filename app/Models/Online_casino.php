<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Online_casino extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'rating', 'read_more_link', 'welcome_bonus', 'promo_code', 'hot_list', 'play_now_link', 'play_form_text', 'photo', 'flug'];
}
