<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //  $this->call(UsersTableSeeder::class);

           DB::table('cards')->insert([
            'title'=>'My new card',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

         DB::table('cards')->insert([
            'title'=>'My second new card',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);

         DB::table('cards')->insert([
            'title'=>'My third second new card',
            'created_at'=> new DateTime,
            'updated_at'=> new DateTime
        ]);
    }
}
