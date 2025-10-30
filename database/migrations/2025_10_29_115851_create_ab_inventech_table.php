<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbInventechTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ab_inventech', function (Blueprint $table) {
            $table->id();
            $table->string('ab_inventech_name');
            $table->string('ab_inventech_web')->unique();
            $table->string('ab_inventech_mail')->unique();
            $table->string('ab_inventech_phone')->unique();
            $table->string('logo')->nullable();
            $table->foreignId('address_id')
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
        Schema::dropIfExists('ab_inventech');
    }
}
