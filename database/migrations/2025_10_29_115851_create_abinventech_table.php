<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbinventechTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abinventech', function (Blueprint $table) {
            $table->id();
            $table->string('ab_inventech_name');
            $table->string('ab_inventech_web')->unique();
            $table->string('ab_inventech_mail')->unique();
            $table->string('ab_inventech_phone')->unique();
            $table->foreignId('addresses_id')
                ->constrained('addresses')
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
        Schema::dropIfExists('abinventech');
    }
}
