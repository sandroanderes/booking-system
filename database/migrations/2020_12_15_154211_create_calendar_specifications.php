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
            $table->string('gastrotable');
            $table->integer('gastrotable_number');
            $table->string('sportunit');
            $table->integer('sportnumber');
            $table->string('room_name');
            $table->integer('room_capacity');
            $table->string('room_assets');
            $table->string('employee_name');
            $table->string('employee_function');
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
