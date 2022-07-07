<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('otp')->nullable();
            $table->string('otp_status')->default(0);
            $table->string('profile_status')->default(0);
            $table->string('phone')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('brand_logo')->nullable();
            $table->string('brand_name')->nullable()->unique();
            $table->string('brand_number')->nullable()->unique();
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
        Schema::dropIfExists('merchants');
    }
}
