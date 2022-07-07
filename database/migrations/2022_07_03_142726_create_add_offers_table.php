<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_offers', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('offer_image')->nullable();
            $table->string('offer_description')->nullable();
            $table->string('offer_discount')->nullable();
            $table->string('offer_points')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('add_offers');
    }
}
