<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        $this->call(RoleSeeder::class);
        
        User::create([
            'name' => 'admin',
            'email' => 'admin@utlag.edu.mx',
            'password' => Hash::make('admin')
        ])->assignRole('admin');

        User::factory(10)->create();
        $subjects = array("Web design", "Databases Management", "Web Applications", "Web Servers Administration", "Mobile applications", "Cybersecurity", "OOP", "Data mining", "Linear Algebra", "IOT");
        $cuatri = array(1, 2, 3, 4, 5, 1, 2, 3, 4, 5);
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
