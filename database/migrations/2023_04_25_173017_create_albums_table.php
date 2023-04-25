<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client');
            $table->enum('type', ['imagem', 'video']);
            $table->string('title');
            $table->string('description')->nullable();
            $table->enum('permission', ['publico', 'restrito', 'bloqueado', 'excluido']);
            $table->timestamps();
        });

        Schema::table('albums', function (Blueprint $table) {
            $table->foreign('client')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
