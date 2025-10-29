<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->enum('place', ['online', 'on_site']);
            $table->enum('status', ['upcoming', 'comepleted', 'expired']);
            $table->time('training_time');
            $table->date('training_date');
            $table->string('participation_link');
            $table->boolean('reminder_sent_18_m');
            $table->boolean('reminder_sent_22_m');
            $table->date('reminder_before_training');
            $table->string('extra_comments');
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
        Schema::dropIfExists('trainings');
    }
}
