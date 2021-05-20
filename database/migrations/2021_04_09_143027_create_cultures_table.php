<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCulturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom_speculation', 250);
            $table->string('fertilisation', 250);
            $table->string('irrigation_phase_croissance', 250);
            $table->string('irrigation_phase_maturite', 250);
            $table->foreignId('climat_id')->constrained('climats');
            $table->foreignId('type_sol_id')->constrained('sols');
            $table->string('image');
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
        Schema::dropIfExists('cultures');
    }
}
