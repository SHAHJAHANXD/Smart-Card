<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('qr_code')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->string('discount')->nullable();
            $table->string('points')->nullable();
            $table->string('status')->default(2);
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
        Schema::dropIfExists('offers');
    }
}
