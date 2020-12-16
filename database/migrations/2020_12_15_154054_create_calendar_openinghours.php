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
            $table->string('start_general')->nullable();
            $table->string('end_general')->nullable();
            $table->string('lunch_start')->nullable();
            $table->string('lunch_end')->nullable();
            $table->boolean('halfday_closed_monday');
            $table->boolean('lunch_monday');
            $table->string('start_monday')->nullable();
            $table->string('end_monday')->nullable();
            $table->string('lunch_start_monday')->nullable();
            $table->string('lunch_end_monday')->nullable();
            $table->boolean('halfday_closed_tuesday');
            $table->boolean('lunch_tuesday');
            $table->string('start_tuesday')->nullable();
            $table->string('end_tuesday')->nullable();
            $table->string('lunch_start_tuesday')->nullable();
            $table->string('lunch_end_tuesday')->nullable();
            $table->boolean('halfday_closed_wednesday');
            $table->boolean('lunch_wednesday');
            $table->string('start_wednesday')->nullable();
            $table->string('end_wednesday')->nullable();
            $table->string('lunch_start_wednesday')->nullable();
            $table->string('lunch_end_wednesday')->nullable();
            $table->boolean('halfday_closed_thursday');
            $table->boolean('lunch_thursday');
            $table->string('start_thursday')->nullable();
            $table->string('end_thursday')->nullable();
            $table->string('lunch_start_thursday')->nullable();
            $table->string('lunch_end_thursday')->nullable();
            $table->boolean('halfday_closed_friday');
            $table->boolean('lunch_friday');
            $table->string('start_friday')->nullable();
            $table->string('end_friday')->nullable();
            $table->string('lunch_start_friday')->nullable();
            $table->string('lunch_end_friday')->nullable();
            $table->boolean('halfday_closed_saturday');
            $table->boolean('lunch_saturday');
            $table->string('start_saturday')->nullable();
            $table->string('end_saturday')->nullable();
            $table->string('lunch_start_saturday')->nullable();
            $table->string('lunch_end_saturday')->nullable();
            $table->boolean('halfday_closed_sunday');
            $table->boolean('lunch_sunday');
            $table->string('start_sunday')->nullable();
            $table->string('end_sunday')->nullable();
            $table->string('lunch_start_sunday')->nullable();
            $table->string('lunch_end_sunday')->nullable();
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
