<?php

use App\Models\Employee;
use App\Models\MasterBpjs;
use App\Models\MasterPajak;
use App\Models\MasterPayroll;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payroll_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Employee::class);
            $table->foreignIdFor(MasterPayroll::class);
            $table->foreignIdFor(MasterBpjs::class);
            $table->foreignIdFor(MasterPajak::class);
            $table->string('total_gaji');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payroll_details');
    }
};
