<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('calendar_name');
            $table->string('description');
            $table->string('calendar_format');
            $table->string('period_from');
            $table->string('period_until');
            $table->string('min_duration');
            $table->string('max_duration');
            $table->string('fixed_duration');
            $table->string('allday_reservation');
            $table->string('private_link');
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
        Schema::dropIfExists('calendars');
    }
}
