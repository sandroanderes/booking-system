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
            $table->string('timeunit');
            $table->string('duration_min_min');
            $table->string('duration_min_h');
            $table->string('duration_min_d');
            $table->string('duration_max_min');
            $table->string('duration_max_h');
            $table->string('duration_max_d');
            $table->integer('table_one')->nullable();
            $table->integer('table_two')->nullable();
            $table->integer('table_three')->nullable();
            $table->integer('table_four')->nullable();
            $table->integer('table_five')->nullable();
            $table->integer('table_six')->nullable();
            $table->integer('table_seven')->nullable();
            $table->integer('table_eight')->nullable();
            $table->string('sportunit')->nullable();
            $table->integer('sportnumber')->nullable();
            $table->string('room_name')->nullable();
            $table->integer('room_capacity')->nullable();
            $table->string('room_assets')->nullable();
            $table->string('service')->nullable();
            $table->string('employee_name')->nullable();
            $table->string('employee_function')->nullable();
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
