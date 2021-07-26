<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTeacherSubject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacherSubject', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idTeacher')->constrained('users');
            $table->foreignId('idSubject')->constrained('materias');
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
        Schema::table('teacherSubject', function (Blueprint $table) {
            Schema::drop('teacherSubject');
        });
    }
}
