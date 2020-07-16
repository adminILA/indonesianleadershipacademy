<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;
class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 25; $i++) { 
        $blog_title = 'Blog'.$i;
        $blog_body = 'This is the body '.$i;
        $blog_source = 'This is the source '.$i;
        DB::table('blogs')->insert([
          'blog_title' => $blog_title,
          'body' => $blog_body,
          'blog_author' => User::find(1)->id,
          'blog_source' => $blog_source,
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
      }
        
    }
}
