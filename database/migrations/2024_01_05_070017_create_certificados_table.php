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
        Schema::create('certificados', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('(UUID())'));
            $table->bigInteger('person_id')->unsigned();
            $table->bigInteger('faculty_id')->unsigned();
            $table->string('title', 100)->default('Title');
            $table->tinyInteger('hours')->default(40);

            /*Relaciones*/
            $table->foreign('person_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('faculty_id')->references('id')->on('facultads')->onDelete('cascade');
            /*Fin de las Relaciones */
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificados');
    }
};
