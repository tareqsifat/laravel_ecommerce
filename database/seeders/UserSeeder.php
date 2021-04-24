<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate(); 

        $user = new User();

        $user -> role_id = 4;
        $user-> first_name = 'Mr super';
        $user-> last_name = 'user';
        $user-> username = 'super_user';
        // $user-> photo = 
        $user-> phone = '987654321';
        $user-> email = 'superuser@gwebsite.com';
        $user-> password = Hash::make();
        $user-> creator = Auth::user()-> id;
        $user-> slug = 'super_user';
        $user-> created_at = Carbon::now() -> toDateString();
        $user-> save();

        

        
        
    }
}
