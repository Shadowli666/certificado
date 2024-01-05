<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 100)->nullable()->default('Sample');
            $table->string('mname', 100)->nullable()->default('Sample');
            $table->string('lname', 100)->nullable()->default('Sample');
            $table->string('slname', 100)->nullable()->default('Sample');
            $table->integer('document')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
