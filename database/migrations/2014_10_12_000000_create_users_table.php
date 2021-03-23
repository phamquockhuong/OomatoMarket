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
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('img_users')->default('default.jpg');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('r_password');
            $table->string('password');
            $table->tinyInteger ('status')->default(1);
            $table->rememberToken();
            $table->timestamps();
            $table->string('code')->nullable()->index();
            $table->timestamps('time_code')->nullable();
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