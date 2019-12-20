<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class AuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "admin";
        $adminRole -> save();

        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "member";
        $memberRole -> save();

        $admin = new user();
        $admin->name = "Anung";
        $admin->email = "Anung@rocket.id";
        $admin->password = bcrypt('rahasia');
        $admin -> save();
        $admin -> attachRole($adminRole);

        $member = new user();
        $member->name = "cacaq";
        $member->email = "Cacaq@rocket.id";
        $member->password = bcrypt('rahasia');
        $member -> save();
        $member -> attachRole($memberRole);


    }
}
