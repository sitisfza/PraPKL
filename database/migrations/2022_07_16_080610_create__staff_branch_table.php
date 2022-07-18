<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_staff_branch', function (Blueprint $table) {
            $table->id();
            $table->string('staffNo')->unique();
            $table->string('sName');
            $table->string('position');
            $table->integer('salary');
            $table->string('branchNo');
            $table->string('bAddress');
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
        Schema::dropIfExists('_staff_branch');
    }
};
