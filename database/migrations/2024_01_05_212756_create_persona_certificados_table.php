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
        Schema::create('persona_certificados', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('(UUID())'));
            $table->bigInteger('person_id')->unsigned();
            $table->bigInteger('certificado_id')->unsigned();
            $table->timestamps();

            /**
             * Inicio de las migraciones
        */
        $table->foreign('person_id')->references('id')->on('personas')->onDelete('cascade')->onUpdate('cascade');
        $table->foreign('certificado_id')->references('id')->on('certificados')->onDelete('cascade')->onUpdate('cascade');
        /**
         * Fin de las migraciones
         */
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona_certificados');
    }
};
