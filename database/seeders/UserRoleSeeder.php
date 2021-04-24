<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserRole;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_role = new UserRole();
        $user_role -> name = 'super_admin';
        $user_role -> serial = '1';
        $user_role -> slag = 'super_admin';
        $user_role -> created_at = Carbon::now()-> toDateTimeString();
        $user_role -> save();
    }
}
