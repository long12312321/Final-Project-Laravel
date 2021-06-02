<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')-> insert([
            ['id'=>1 ,'title' => 'News number 1',
            'short_des' => 'Sgt. Joe Friday on “Dragnet” delivered the lines ',
            'description'=>' You probably know this next part by heart. You have the right to remain silent. 
            Anything you say can and will be used against you in a court of law ...',
            'image'=>'blog.png'],
            ['id'=>2 ,'title' => 'News number 2',
            'short_des' => 'Sgt. Joe Friday on “Dragnet” delivered the lines ',
            'description'=>' You probably know this next part by heart. You have the right to remain silent. 
            Anything you say can and will be used against you in a court of law ...',
            'image'=>'blog.png'],
            ['id'=>3 ,'title' => 'News number 3',
            'short_des' => 'Sgt. Joe Friday on “Dragnet” delivered the lines ',
            'description'=>' You probably know this next part by heart. You have the right to remain silent. 
            Anything you say can and will be used against you in a court of law ...',
            'image'=>'blog.png'],
    ]);
    }
}
