<?php

use Illuminate\Database\Seeder;

class PostsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(range(1, 70) as $index) {
            DB::table('post_tag')->insert([
                'post_id' => $index,
                'tag_id' => rand(1, 8)
            ]);
        }
    }
}
