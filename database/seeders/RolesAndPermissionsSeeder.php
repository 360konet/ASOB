<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Permission::create(['name'=>'operation_list']);
        Permission::create(['name'=>'operation_create']);
        Permission::create(['name'=>'operation_edit']);
        Permission::create(['name'=>'operation_delete']);

        Permission::create(['name'=>'postings_list']);
        Permission::create(['name'=>'postings_create']);
        Permission::create(['name'=>'postings_edit']);
        Permission::create(['name'=>'postings_delete']);

        Permission::create(['name'=>'dashboard']);
        Permission::create(['name'=>'officers_list']);
        Permission::create(['name'=>'officers_create']);
        Permission::create(['name'=>'officers_edit']);
        Permission::create(['name'=>'officers_delete']);

        Permission::create(['name'=>'soldiers_list']);
        Permission::create(['name'=>'soldiers_create']);
        Permission::create(['name'=>'soldiers_edit']);
        Permission::create(['name'=>'soldiers_delete']);

        Permission::create(['name'=>'courses_list']);
        Permission::create(['name'=>'courses_create']);
        Permission::create(['name'=>'courses_edit']);
        Permission::create(['name'=>'courses_delete']);

        Permission::create(['name'=>'leave_list']);
        Permission::create(['name'=>'leave_create']);
        Permission::create(['name'=>'leave_edit']);
        Permission::create(['name'=>'leave_delete']);

        Permission::create(['name'=>'course_report']);

        Permission::create(['name'=>'operation_report']);

        Permission::create(['name'=>'postings_report']);

        Permission::create(['name'=>'users_list']);
        Permission::create(['name'=>'users_create']);
        Permission::create(['name'=>'users_edit']);
        Permission::create(['name'=>'users_delete']);

        Permission::create(['name'=>'roles_list']);
        Permission::create(['name'=>'roles_create']);
        Permission::create(['name'=>'roles_edit']);
        Permission::create(['name'=>'roles_delete']);

        Permission::create(['name'=>'confidential_report']);

        Permission::create(['name'=>'cselist_list']);
        Permission::create(['name'=>'cselist_create']);
        Permission::create(['name'=>'cselist_edit']);
        Permission::create(['name'=>'cselist_delete']);





    }
}
