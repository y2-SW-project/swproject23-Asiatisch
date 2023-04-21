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
        Schema::create('artisan_cheese', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artison_id');
            $table->unsignedBigInteger('cheese_id');

            $table->foreign('artison_id')->references('id')->on('artisons')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('cheese_id')->references('id')->on('cheeses')->onUpdate('cascade')->onDelete('restrict');
        
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
