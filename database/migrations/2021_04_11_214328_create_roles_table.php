<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->string('slug');
            $table->timestamps();
        });

        DB::table('roles')->insert(
            [
                array(
                    'nom'=>'Administrateur',
                    'description' => 'Celui qui a acces sur toute la plateforme',
                    'slug' => 'admin',

                ),
                array(
                    'nom'=>'Client',
                    'description' => 'utilisateur de la plateforme',
                    'slug' => 'client',

                )
            ]

        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
