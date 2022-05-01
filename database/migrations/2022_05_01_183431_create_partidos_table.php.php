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
        Schema::create('partidos', function (Blueprint $table) {
            $table->id();

            //$table->unsignedInteger('nameLocal_id');
            $table->foreignId('nameLocal_id')->references('id')->on('teams');

            //$table->unsignedInteger('nameVisitor_id');
            $table->foreignId('nameVisitor_id')->references('id')->on('teams');

            // $table->foreignId('nameVisitor')->references('id')->on('teams');
            //$table->string('nameVisitor')->references('name')->on('teams');
            $table->enum('status',['terminado','ejecucio','programado'])->default('programado');
            $table->string('fecha');
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
        Schema::dropIfExists('partidos');
    }
};
