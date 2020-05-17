<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

          'blog_name'=>'IslamSobhi Blog',
          'phone_number'=>'+2 0114165621',
          'blog_email'=>'islam.sobhi61@gmail.com',
          'address'=>'Egypt - Assyut'

        ]);
    }
}
