<?php

namespace Database\Seeders;

use App\Models\MasterBpjs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterBpjsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterBpjs::firstOrCreate([
            'name' => 'Kelas Satu',
            'nominal' => '150.000'
        ]);
        MasterBpjs::firstOrCreate([
            'name' => 'Kelas Dua',
            'nominal' => '100.000'
        ]);
        MasterBpjs::firstOrCreate([
            'name' => 'Kelas Tiga',
            'nominal' => '35.000'
        ]);
    }
}
