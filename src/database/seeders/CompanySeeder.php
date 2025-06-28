<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::firstOrCreate([
            'name' => 'PT MataHati Bermakna Indonesia',
            'email' => '',
            'address' => 'Jl Soka Lestari 2 No. 25 F',
            'postcode' => '12440',
            'logo' => '',
            'phone' => '(021)8038597',
        ]); 
    }
}
