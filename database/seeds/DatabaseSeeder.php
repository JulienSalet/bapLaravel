<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
    
        //USERS SEEDER
        DB::table('users')->truncate();
        
        DB::table('users')->insert([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 1,
            'created_at' => \Carbon\Carbon::now()
        ]);
        
        for($i = 0; $i < 10; $i++){
            DB::table('users')->insert([
                'first_name' => 'Membre-' . $i,
                'last_name' => 'MembreLastName-' . $i,
                'email' => 'membre' . $i . '@gmail.com',
                'password' => bcrypt('password'),
                'is_admin' => 0,
                'created_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
