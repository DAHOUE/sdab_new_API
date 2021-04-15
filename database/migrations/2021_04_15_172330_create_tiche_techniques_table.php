<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicheTechniquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('tiche_techniques', function (Blueprint $table) {
            $table->id();
            $table->string('ethrellage');
            $table->string('mode_plantation');
            $table->string('densite');
            $table->date('date_tif');
            $table->foreignId('exploitation_id')->constrained();
            $table->string('marqueur');
            $table->integer('quantite_a_produire');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiche_techniques');
    }
}
