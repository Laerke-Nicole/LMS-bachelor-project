<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowUpMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow_up_materials', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['video', 'pdf', 'task', 'quiz']);
            $table->string('url')->nullable();
            $table->foreignId('courses_id')
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
        Schema::dropIfExists('follow_up_materials');
    }
}
