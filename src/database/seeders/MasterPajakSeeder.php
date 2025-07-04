<?php

namespace Database\Seeders;

use App\Models\MasterPajak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterPajakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterPajak::firstOrCreate([
            'name' => 'pajak_tetap',
            'persentase' => '2.5',
        ]);
    }
}
