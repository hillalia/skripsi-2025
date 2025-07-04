<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class PayrollDetail extends Model
{
    protected $table ='payroll_details';
    protected $guarded =['id'];

    protected static function booted()
{
    static::creating(function ($payrollDetail) {
        $payroll = \App\Models\MasterPayroll::find($payrollDetail->id);
        $bpjs = \App\Models\MasterBpjs::find($payrollDetail->id);
        $pajak = \App\Models\MasterPajak::find($payrollDetail->id);

        if (!$payroll || !$bpjs || !$pajak) {
            $payrollDetail->total_gaji = Crypt::encrypt(0);
            return;
        }

        $gajiPokok = (int) $payroll->nominal;
        $bpjsNominal = (int) $bpjs->nominal;
        $pajakPersen = (float) $pajak->persentase;

        $total = $gajiPokok - $bpjsNominal - ($gajiPokok * $pajakPersen / 100);

        $payrollDetail->total_gaji = Crypt::encrypt($total);
    });
}


    public function masterpajak(){
        return $this->belongsTo(MasterPajak::class);
    }    

    public function masterpayroll(){
        return $this->belongsTo(MasterPayroll::class);
    }    

    public function masterbpjs(){
        return $this->belongsTo(MasterBpjs::class);
    }    

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

}
