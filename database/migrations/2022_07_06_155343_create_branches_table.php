<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('branch_name')->nullable();
            $table->string('branch_manager_email')->nullable();
            $table->string('branch_manager_phone')->nullable();
            $table->string('branch_address')->nullable();
            $table->string('branch_lat')->nullable();
            $table->string('branch_lng')->nullable();
            $table->unsignedBigInteger('merchant_id')->nullable();
            $table->foreign('merchant_id')->references('id')->on('merchants')->onDelete('cascade');
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
        Schema::dropIfExists('branches');
    }
}
