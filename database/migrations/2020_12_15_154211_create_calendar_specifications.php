<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarSpecifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_specifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calendar_id');
            $table->string('format');
            $table->boolean('duration_fixed');
            $table->string('duration_all');
            $table->string('duration_min_min')->nullable();
            $table->string('duration_min_h')->nullable();
            $table->string('duration_min_d')->nullable();
            $table->string('duration_max_min')->nullable();
            $table->string('duration_max_h')->nullable();
            $table->string('duration_max_d')->nullable();
            $table->timestamps();
            $table->foreign('calendar_id')
                ->references('id')
                ->on('calendar_general')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calendar_specifications');
    }
}
