<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetAgricolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projet_agricoles', function (Blueprint $table) {
            $table->id();
            $table->string('nom_projet');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('typeculture_id')->constrained('cultures_types');
            $table->foreignId('sol_id')->constrained('sols');
            $table->foreignId('speculation_id')->constrained('cultures');
            $table->foreignId('variete_id')->constrained('cultures_varietes');
            //$table->string('date_culture');
            $table->timestamps();
            $table->string('date_recolte');
            $table->string('rendement');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projet_agricoles');
    }
}
