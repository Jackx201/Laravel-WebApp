<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleTeacher = Role::create(['name' => 'teacher']);
        $roleStudent = Role::create(['name' => 'student']);

        Permission::create(['name'=> 'admin.add.user'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=> 'admin.add.teacher'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=> 'admin.assign.teacher'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=> 'admin.assign.student'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=> 'admin.assign.subjects.student'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=> 'admin.assign.subjects.teacher'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=> 'admin.assign.permission'])->syncRoles([$roleAdmin]);
        Permission::create(['name'=> 'teacher.grade.subjects'])->syncRoles([$roleAdmin, $roleTeacher]);
        Permission::create(['name'=> 'student.subjects'])->syncRoles([$roleStudent]);

    }
}
