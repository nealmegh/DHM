<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostingPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosting-packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('package_name');
            $table->string('package_price');
            $table->timestamps();
        });

         // Create table for associating domain to hosting (Many-to-Many)
        Schema::create('domain_hosting', function (Blueprint $table) {
            $table->integer('domain_id')->unsigned()->index();
            $table->foreign('domain_id')->references('id')->on('domains')->onDelete('cascade');
            $table->integer('hosting_id')->unsigned()->index();
            $table->foreign('hosting_id')->references('id')->on('hostings')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hosting-packages');
    }
}
