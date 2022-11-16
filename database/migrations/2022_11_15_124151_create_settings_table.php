<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('banner_heading');
            $table->string('banner_description');
            $table->string('banner_play_now_link');
            $table->string('banner_read_more_link');
            $table->string('banner_photo');
            $table->string('banner_bg');
            $table->string('other_casino_bg');
            $table->string('other_casino_one_link');
            $table->string('other_casino_two_link');
            $table->string('other_casino_three_link');
            $table->string('other_casino_four_link');
            $table->string('best_casino_bg_color');
            $table->string('best_casino_heading');
            $table->string('partner_bg');
            $table->string('trusted_casino_bg');
            $table->string('trusted_casino_heading');
            $table->string('trusted_casino_description');
            $table->string('trusted_casino_color_description');
            $table->string('trusted_casino_title');
            $table->string('related_game_heading');
            $table->string('related_game_bg');
            $table->longText('related_game_bottom_text');
            $table->string('related_game_bottom_color_text');
            $table->string('casino_location_heading');
            $table->string('exclusive_title');
            $table->string('exclusive_prev_price');
            $table->string('exclusive_current_price');
            $table->string('exclusive_button_link');
            $table->string('exclusive_photo');
            $table->string('exclusive_bonus_to');
            $table->string('exclusive_heading');
            $table->string('exclusive_promo_code');
            $table->longText('footer_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
