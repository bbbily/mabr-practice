<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('title');
            $table->unsignedInteger('role_id');
            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles')
                  ->onDelete('cascade');
            $table->unsignedInteger('department_id');
            $table->foreign('department_id')
                  ->references('id')
                  ->on('departments')
                  ->onDelete('cascade');
            $table->unsignedInteger('location_id');
            $table->foreign('location_id')
                  ->references('id')
                  ->on('locations')
                  ->onDelete('cascade');
            $table->string('office')->nullable();
            $table->string('direct_phone')->nullable();
            $table->string('office_phone')->nullable();
            $table->string('image')->nullable();
            $table->string('quick_links')->nullable();
            $table->string('address')->nullable();
            $table->boolean('public_address')->default(false);
            $table->text('bar_numbers')->nullable();
            $table->text('emergency_contact')->nullable();
            $table->text('emergency_phone')->nullable();
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('people');
    }
}
