<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->foreignId('user_type')->default(1);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('birthday');
            $table->string('bsn');
            $table->string('iban');
            $table->string('address');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->string('password');
            // je moet even die dingen hier bij maken die je mist en dan even die commando php artisan migrate:fresh doen.

            $table->integer('lessons');
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
};
