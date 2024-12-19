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
        Schema::create('ines', function (Blueprint $table){
            $table->id();
            $table->string('CVE');
            $table->string('NOMBRE');
            $table->string('PATERNO');
            $table->string('MATERNO');
            $table->string('FECNAC');
            $table->string('SEXO');
            $table->string('CALLE');
            $table->string('INTE');
            $table->string('EXT');
            $table->string('COLONIA');
            $table->string('CP');
            $table->string('E');
            $table->string('D');
            $table->string('M');
            $table->string('S');
            $table->string('L');
            $table->string('MZA');
            $table->string('CONSEC');
            $table->string('CRED');
            $table->string('FOLIO');
            $table->string('NAC');
            $table->string('CURP');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ines');
    }
};
