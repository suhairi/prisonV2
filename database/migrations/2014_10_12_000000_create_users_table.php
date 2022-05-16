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
            $table->id()->unsigned();
            $table->string('name');
            $table->string('nosmpp')->unique();
            $table->string('username')->unique(); // No KP
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('user'); // root, admin, hq, user
            $table->string('status')->default('active'); // active, inactive
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
};
