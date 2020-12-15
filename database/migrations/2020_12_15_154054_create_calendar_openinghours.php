<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarOpeninghours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendar_openinghours', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calendar_id');
            $table->boolean('day_monday');
            $table->boolean('day_tuesday');
            $table->boolean('day_wednesday');
            $table->boolean('day_thursday');
            $table->boolean('day_friday');
            $table->boolean('day_saturday');
            $table->boolean('day_sunday');
            $table->boolean('repeat');
            $table->boolean('halfday_closed_general');
            $table->boolean('lunch_general');
            $table->boolean('start_general');
            $table->boolean('end_general');
            $table->dateTime('lunch_start');
            $table->dateTime('lunch_end');
            $table->boolean('halfday_closed_monday');
            $table->boolean('lunch_monday');
            $table->boolean('start_monday');
            $table->boolean('end_monday');
            $table->dateTime('lunch_start_monday');
            $table->dateTime('lunch_end_monday');
            $table->boolean('halfday_closed_tuesday');
            $table->boolean('lunch_tuesday');
            $table->dateTime('start_tuesday');
            $table->dateTime('end_tuesday');
            $table->dateTime('lunch_start_tuesday');
            $table->dateTime('lunch_end_tuesday');
            $table->boolean('halfday_closed_wednesday');
            $table->boolean('lunch_wednesday');
            $table->dateTime('start_wednesday');
            $table->dateTime('end_wednesday');
            $table->dateTime('lunch_start_wednesday');
            $table->dateTime('lunch_end_wednesday');
            $table->boolean('halfday_closed_thursday');
            $table->boolean('lunch_thursday');
            $table->dateTime('start_thursday');
            $table->dateTime('end_thursday');
            $table->dateTime('lunch_start_thursday');
            $table->dateTime('lunch_end_thursday');
            $table->boolean('halfday_closed_friday');
            $table->boolean('lunch_friday');
            $table->dateTime('start_friday');
            $table->dateTime('end_friday');
            $table->dateTime('lunch_start_friday');
            $table->dateTime('lunch_end_friday');
            $table->boolean('halfday_closed_saturday');
            $table->boolean('lunch_saturday');
            $table->dateTime('start_saturday');
            $table->dateTime('end_saturday');
            $table->dateTime('lunch_start_saturday');
            $table->dateTime('lunch_end_saturday');
            $table->boolean('halfday_closed_sunday');
            $table->boolean('lunch_sunday');
            $table->dateTime('start_sunday');
            $table->dateTime('end_sunday');
            $table->dateTime('lunch_start_sunday');
            $table->dateTime('lunch_end_sunday');
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
        Schema::dropIfExists('calendar_openinghours');
    }
}
