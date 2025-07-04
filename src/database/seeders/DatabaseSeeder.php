<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use App\Models\MasterPayroll;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            CompanySeeder::class,
            DepartmentSeeder::class,
            PositionSeeder::class,
            EmployeeSeeder::class,
            MasterPayrollSeeder::class,
            MasterPajakSeeder::class,
            MasterBpjsSeeder::class,
        ]);
    }
}
