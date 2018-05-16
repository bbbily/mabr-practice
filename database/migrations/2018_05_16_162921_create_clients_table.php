<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('name');
            $table->string('contact_name');
            $table->string('billing_address');
            $table->string('contact_phone');
            $table->string('billing_phone');
            $table->string('contact_email');
            $table->string('billing_email');
            $table->unsignedInteger('originating_attorney');
            $table->foreign('originating_attorney')
                ->references('id')->on('people')
                ->onDelete('cascade');
            $table->unsignedInteger('billing_attorney');
            $table->foreign('billing_attorney')
                ->references('id')->on('people')
                ->onDelete('cascade');
            $table->unsignedInteger('working_attorney');
            $table->foreign('working_attorney')
                ->references('id')->on('people')
                ->onDelete('cascade');
            $table->text('details')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
