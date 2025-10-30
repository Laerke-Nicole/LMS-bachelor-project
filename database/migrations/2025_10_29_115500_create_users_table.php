<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mail')->unique();
            $table->timestamp('mail_verified_at')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->enum('role', ['user', 'leader', 'admin'])->default('user');

            $table->foreignId('address_id')
                ->constrained('addresses')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('company_id')
                ->constrained('companies')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
