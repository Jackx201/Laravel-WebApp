<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        $subjects = array("Web design", "Databases Management", "Web Applications", "Web Servers Administration");
        $cuatri = array(1, 2, 3, 4);
        $timestamp = now();

        foreach( $subjects as $key => $mat){
            DB::table('materias')->insert([
                'materia'=>$mat,
                'cuatri'=>$cuatri[$key],
                'created_at'=>$timestamp ,
                'updated_at'=>$timestamp
            ]);
        }
    }
}
