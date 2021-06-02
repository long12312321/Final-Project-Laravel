<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')-> insert([
            ['id'=>1 ,'email' => 'long.duc.5074@gmail.com','password' => bcrypt('123'),'name'=>'long','role'=>1],
            ['id'=>2 ,'email' => 'A@gmail.com','password' => bcrypt('123'),'name'=>'user1','role'=>0],
        ]);

    }
}
