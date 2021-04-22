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
            $table->foreignId('culture_id')->constrained('cultures');
            //$table->integer('culture_id')->default(1);
            $table->string("nom_variete");
            $table->integer("temps_de_recolte");
            $table->integer("repiquage_planche");
            $table->integer("repiquage_alveole");
            $table->integer("temps_arrosage");
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
