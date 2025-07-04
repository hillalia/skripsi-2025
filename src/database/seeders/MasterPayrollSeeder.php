<?php

namespace Database\Seeders;

use App\Models\MasterPayroll;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterPayrollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MasterPayroll::firstOrCreate([
            'name' => 'Gaji Pokok Staff',
            'nominal' => '1.500.000',
        ]);

        MasterPayroll::firstOrCreate([
            'name' => 'Gaji Pokok Head',
            'nominal' => '2.500.000',
        ]);
        MasterPayroll::firstOrCreate([
            'name' => 'Gaji Pokok Manager',
            'nominal' => '3.500.000',
        ]);
    }

    
}
