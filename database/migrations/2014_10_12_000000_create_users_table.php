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
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('avatar')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('role')->nullable();
            $table->string('status')->nullable();
            $table->boolean('is_verified')->nullable();
            $table->string('department')->nullable();
            $table->string('company')->nullable();
            $table->string('mobile')->nullable();
            $table->string('website')->nullable();
            $table->string('langauges_known')->nullable();
            $table->string('contact_options')->nullable();
            $table->string('location')->nullable();
            $table->string('social_links')->nullable();
            $table->string('permissions')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('rule')->nullable();
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
