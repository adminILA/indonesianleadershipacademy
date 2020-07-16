<?php

use Illuminate\Database\Seeder;

class WebInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('name' => 'Facebook Link', 'value' => 'www.facebook.com', 'created_at' => date('Y-m-d H:i:s')),
            array('name' => 'Twitter Link', 'value' => 'www.twitter.com', 'created_at' => date('Y-m-d H:i:s')),
            array('name' => 'Instagram Link', 'value' => 'www.instagram.com', 'created_at' => date('Y-m-d H:i:s')),
            array('name' => 'Youtube Link', 'value' => 'www.youtube.com', 'created_at' => date('Y-m-d H:i:s')),
            array('name' => 'Linkedin Link', 'value' => 'www.linkedin.com', 'created_at' => date('Y-m-d H:i:s')),
        );
        DB::table('website_infos')->insert($data);
    }
}
