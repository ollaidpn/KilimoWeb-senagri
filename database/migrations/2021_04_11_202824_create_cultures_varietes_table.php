<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCulturesVarietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultures_varietes', function (Blueprint $table) {
            $table->id();
            //$table->integer('culture_id')->default(1);
            $table->string("nom_variete");
            $table->integer("temps_de_recolte");
            $table->integer("repiquage_planche");
            $table->integer("repiquage_alveole");
            $table->integer("rendement");
            $table->string("resistance_maladie", 250);
            $table->string("resistance_ravageur", 250);
            $table->foreignId('speculation_id')->constrained('cultures');
            $table->foreignId('climat_id')->constrained('climats');
            $table->foreignId('type_semie_id')->constrained('culture_semies');
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
        Schema::dropIfExists('cultures_varietes');
    }
}
