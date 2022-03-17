<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRealStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('real_states', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128);
            $table->enum('real_state_type', ['house', 'department','land','comercial_groud']);
            $table->string('street', 128);
            $table->string('external_number', 12);
            $table->string('internal_number')->nullable();
            $table->string('neighborhood', 128);
            $table->string('city', 64);
            $table->string('country');
            $table->unsignedInteger('rooms');
            $table->unsignedInteger('bathrooms')->nullable();
            $table->string('comments', 128);
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('real_states');
    }
}
