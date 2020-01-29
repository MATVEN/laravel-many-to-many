<?php

use Illuminate\Database\Seeder;

use App\User;
use App\UserInfo;


class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(UserInfo::class, 10) 
                -> make() 
                -> each(function ($userInfo)
                {
                    $user -> inRandomOrder() -> first();
                    $userInfo -> user() -> associte($userInfo);
                    $userInfo -> save();
                });
    }
}
