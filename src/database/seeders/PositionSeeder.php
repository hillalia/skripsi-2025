<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::firstOrCreate([
            'department_id' => 1,
            'name' => 'Lead HR'
        ]);
        Position::firstOrCreate([
            'department_id' => 2,
            'name' => 'Lead Finance'
        ]);
        Position::firstOrCreate([
            'department_id' => 3,
            'name' => 'Manager'
        ]);
        Position::firstOrCreate([
            'department_id' => 3,
            'name' => 'Lead Production',
        ]);
        Position::firstOrCreate([
            'department_id' => 3,
            'name' => 'Staff Production'
        ]);
        Position::firstOrCreate([
            'department_id' => 4,
            'name' => 'Lead Marketing'
        ]);
        Position::firstOrCreate([
            'department_id' => 4,
            'name' => 'Staff Marketing'
        ]);
        Position::firstOrCreate([
            'department_id' => 5,
            'name' => 'Lead RnD'
        ]);
        Position::firstOrCreate([
            'department_id' => 5,
            'name' => 'Staff RnD'
        ]);

    }
}
