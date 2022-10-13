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
        Schema::create('roles', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('name',30);
            $table->string('action',150);
            $table->unsignedInteger('page_id');
            // $table->foreign('page_id')->references('id')->on('pages')->onUpdate('cascade')->onDelete('restrict');
           
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
        Schema::dropIfExists('roles');
    }
};
