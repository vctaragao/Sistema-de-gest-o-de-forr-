<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DummySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $roles = array_map(['App\Helpers\Functions', 'addTimestamp'], array_values(config('enums.roles')));
        DB::table('roles')->insert($roles);
        // Usuários
        $users = [
            [
                'name'          => 'Admin', 
                'email'         => 'admin@forro.com', 
                'password'      => bcrypt('123456'),
                'created_at'    => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at'    => DB::raw('CURRENT_TIMESTAMP')
            ],
            [
                'name'          => 'Aluno', 
                'email'         => 'aluno@forro.com', 
                'password'      => bcrypt('123456'),
                'created_at'    => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at'    => DB::raw('CURRENT_TIMESTAMP')
            ],
        ];
        DB::table('users')->insert($users);
        User::find(1)->assignRole('admin');
        User::find(2)->assignRole('student');
        


    }
}
