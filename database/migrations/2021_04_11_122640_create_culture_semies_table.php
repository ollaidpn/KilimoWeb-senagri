<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCultureSemiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('culture_semies', function (Blueprint $table) {
            $table->id();
            $table->string('nom_semie');
            $table->string('description');
            $table->string('image')->default("");
            $table->foreignId('type_culture_id')->constrained('cultures_types');
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
        Schema::dropIfExists('culture_semies');
    }
}
