<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaAlumnoMateria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnoMateria', function (Blueprint $table) {
            //Create data
            $table->id();
            $table->foreignId('idAlumno')->constrained('users'); //id(user) == idAlumno
            $table->foreignId('idMateria')->constrained('materias');
            $table->string('letra');
            $table->float('calif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * 
     * @return void
     */
    public function down()
    {
        Schema::table('alumnoMateria', function (Blueprint $table) {
            //Delete table
            Schema::drop('alumnoMateria');
        });
    }
}
