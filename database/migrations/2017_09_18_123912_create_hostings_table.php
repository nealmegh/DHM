<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('domain_id')->unsigned();
            $table->string('hosting_name');
            $table->string('hosting-package_id');
            $table->dateTime('date_purchased');
            $table->dateTime('valid_till');
            $table->dateTime('client_valid_till');
            $table->string('hosting_provider');
            $table->dateTime('last_backup_date');
            $table->string('backup_location');
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
        Schema::dropIfExists('hostings');
    }
}
