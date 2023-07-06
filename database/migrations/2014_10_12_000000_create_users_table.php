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
            // $table->varchar('matriculation');
            // $table->int('kids_key')->nullalbe();
            $table -> string("name"); 
            $table->string("lastname"); 
            $table->string('email')->unique();
            $table->string('password')->nullable();
            // $table->string('provider')->nullable();
            // $table->string('provider_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create("kids", function(Blueprint $table){
            $table -> id(); 
            $table -> string("matriculation"); 
            $table -> unsignedInteger("user_id"); 
            $table -> foreign("user_id")->references("id")->on("users")->onDelete("cascade"); 

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
