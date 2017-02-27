<?php

use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ( $i = 1; $i <= 50; $i++ )
    	{
	        DB::table('users')->insert([

	        	'name' => 'user'.$i

	        ]);
	    }    
    }
}
