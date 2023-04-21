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
        Schema::create('cheeses', function (Blueprint $table) {
            $table->id();
           /*  $table->foreignid('cheese_id'); */
            $table->string('name');
            $table->string('type');
            $table->string('description');
          /*   $table->string('cheese_image'); */
            $table->string('country_origin');
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
        Schema::dropIfExists('cheeses');
    }
};
