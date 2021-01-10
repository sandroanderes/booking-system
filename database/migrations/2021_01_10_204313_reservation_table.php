<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_table', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('calendar_id');
            $table->string('firstname');
            $table->string('name');
            $table->string('email');
            $table->integer('tel')->nullable();
            $table->integer('reservation_duration');
            $table->string('timeslot');
            $table->string('weekday');
            $table->text('remarks')->nullable();
            $table->integer('size');
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
        //
    }
}
