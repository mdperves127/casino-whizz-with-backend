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
        Schema::create('online_casinos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rating');
            $table->string('read_more_link');
            $table->string('welcome_bonus');
            $table->string('promo_code');
            $table->text('hot_list');
            $table->string('play_now_link');
            $table->string('play_form_text');
            $table->string('photo');
            $table->string('flug');
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
        Schema::dropIfExists('online_casinos');
    }
};
