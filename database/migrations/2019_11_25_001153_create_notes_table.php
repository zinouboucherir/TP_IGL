<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('module'); 
            $table->float('cc'); 
            $table->float('ci'); 
            $table->float('cf'); 
            $table->float('tp'); 
            $table->float('moyenne'); 
            $table->unsignedBigInteger('etudiant_id'); 
            $table->foreign('etudiant_id')->references('id')->on('etudiants'); 
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
        Schema::dropIfExists('notes');
    }
}
