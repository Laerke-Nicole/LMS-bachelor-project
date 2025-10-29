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
            $table->enum('status', ['upcoming', 'completed', 'expired']);
            $table->time('training_time');
            $table->date('training_date');
            $table->string('participation_link');
            $table->boolean('reminder_sent_18_m')->default(false);
            $table->boolean('reminder_sent_22_m')->default(false);
            $table->date('reminder_before_training')->nullable();
            $table->string('extra_comments')->nullable();
            $table->foreignId('course_id')
                ->constrained('courses')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
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
