<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role =
        [
            ['nama'=>'koordinator'],
            ['nama'=>'dosen'],
            ['nama'=>'mahasiswa']

        ];
        DB::table('role')->insert($role);
    }
}
