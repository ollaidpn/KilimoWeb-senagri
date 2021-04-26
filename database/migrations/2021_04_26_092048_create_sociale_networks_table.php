<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialeNetworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sociale_networks', function (Blueprint $table) {
            $table->id();
            $table->string('facebook',255)->nullable();
            $table->string('instagram',255)->nullable();
            $table->string('linkedin',255)->nullable();
            $table->string('twitter',255)->nullable();
            $table->foreignId('user_id')->constrained('users');
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
        Schema::dropIfExists('sociale_networks');
    }
}
