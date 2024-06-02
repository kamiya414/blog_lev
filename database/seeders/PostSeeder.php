<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'category_id'=>'1',
            'title' => '命名の心得',
            'body' => '命名はデータを基準に考える',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('posts')->insert([
            'category_id'=>'2',
            'title' => 'title1',
            'body' => 'this is body1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('posts')->insert([
            'category_id'=>'3',
            'title' => 'title2',
            'body' => 'this is body2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('posts')->insert([
            'category_id'=>'4',
            'title' => 'title3',
            'body' => 'this is body3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
         DB::table('posts')->insert([
            'category_id'=>'1',
            'title' => 'title4',
            'body' => 'this is body4',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
         DB::table('posts')->insert([
            'category_id'=>'2',
            'title' => 'title5',
            'body' => 'this is body5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
         DB::table('posts')->insert([
            'category_id'=>'3',
            'title' => 'title6',
            'body' => 'this is body6',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
        DB::table('posts')->insert([
            'category_id'=>'4',
            'title' => 'title7',
            'body' => 'this is body7',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
