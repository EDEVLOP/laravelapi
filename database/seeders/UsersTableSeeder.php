<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Abinash Bhatta',
                'email' => 'abinash889@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AeGb6r7W6bPz9zn9ADalMOGH5XZ9OB6cpToBResRQgUVygm9eSasi',
                'remember_token' => NULL,
                'created_at' => '2022-04-06 17:11:31',
                'updated_at' => '2022-04-06 17:11:31',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Prasant',
                'email' => 'prasant889@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RagUgktA2KAZbeuwfjZsvOSX8NU8tw7bUcQTnT9pCsCTyiyCn9Eau',
                'remember_token' => NULL,
                'created_at' => '2022-04-06 17:26:45',
                'updated_at' => '2022-04-06 17:26:45',
            ),
        ));
        
        
    }
}