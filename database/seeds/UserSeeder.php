<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                //Membuat Role Admin
                $adminRole = new Role;
                $adminRole->name ="admin";
                $adminRole->display_name = "Admin";
                $adminRole->save();
               // Membuat Role guest
                $guestRole = new Role;
                $guestRole->name ="guest";
                $guestRole->display_name = "Guest";
                $guestRole->save();
            
               // Membuat sample user Admin
                $admin = new User;
                $admin->name ="Admin";
                $admin->email = "admin@gmail.com";
                $admin->password = bcrypt('secret');//random
                $admin->save();
                $admin->attachRole($adminRole);//
        
               // Membuat Sample user guest
                $guest = new User;
                $guest->name ="Guest";
                $guest->email = "guest@gmail.com";
                $guest->password = bcrypt('rahasia');
                $guest->save();
                $guest->attachRole($guest);
    }
}
