<?php

use App\Enums\EventStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTeamplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_teamplates', function (Blueprint $table) {
            $table->id();
            $table->string('eventName');
            $table->string('bandName');
            $table->date('startDate');
            $table->date('endDate');
            $table->string('portfolio');
            $table->double('ticketPrice');
            $table->integer('status')->default(EventStatus::UP_COMING);
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
        Schema::dropIfExists('event_teamplates');
    }
}
