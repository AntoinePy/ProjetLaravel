<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePanneauxParSiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panneauxParSite', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nb');

            $table->integer('id_site')->unsigned();
            $table->integer('id_panneau')->unsigned();

            $table->foreign('id_site')
                ->references('id')
                ->on('sites')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('id_panneau')
                ->references('id')
                ->on('panneaux')
                ->onDelete('restrict')
                ->onUpdate('restrict');

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
        Schema::dropIfExists('panneauxParSite');
    }
}
