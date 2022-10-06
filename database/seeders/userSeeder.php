<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =
        [
            // ['nama' => 'Dosen 1', 'nomorinduk' => '001', 'username' => 'Dosen_test', 'email' => 'dosen@itenas.com',
            // 'no_tlp' => '', 'foto' => '', 'password' => 'dosen123', 'id_role' => '2'],
            [
                'name' => 'koor ITENAS',
                'nomorinduk' => '1001',
                'username' => 'KoorITENAS',
                'email' => 'koor@gmail.com',
                'no_tlp' => '',
                'foto' => '',
                'password' => 'koor_itenas'
                ]
            

        ];

        DB::table('users')->insert($user);
    }
    
}
