<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
             "name"=>'admin',
             "last_name"=>'a',
             "phone"=>'0929932',
             "image"=>'img.jpg',
             "url"=>'jaosidsd',
             "country"=>'bangaldesh',
             "about"=>'hi bnagladesh is nice',
             "paypel"=>'993203038',
             "age"=>'40',
             "gender"=>'male',

             "role_id"=>1,
             "email"=>'admin@gmail.com',
             "password"=>bcrypt(12345678)
           ]);


           DB::table('users')->insert([
              "name"=>'user',
              "last_name"=>'use',
              "phone"=>'0929932',
              "image"=>'img.jpg',
              "url"=>'ljaosidsd',
              "country"=>'bangaldesh',
              "about"=>'hi bnagladesh is nice',
              "paypel"=>'993203038',
              "age"=>'40',
              "gender"=>'male',

              "role_id"=>2,
              "email"=>'user@gmail.com',
              "password"=>bcrypt(12345678)
          ]);
    }
}
