<?php

namespace App\Filament\Admin\Resources\PayrollDetailResource\Pages;

use App\Filament\Admin\Resources\PayrollDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePayrollDetail extends CreateRecord
{
    protected static string $resource = PayrollDetailResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
{
    $masterPayroll = \App\Models\MasterPayroll::find($data['master_payroll_id'] ?? null);
    $bpjs = \App\Models\MasterBpjs::find($data['master_bpjs_id'] ?? null);
    $pajak = \App\Models\MasterPajak::find($data['master_pajak_id'] ?? null);

    if (!$masterPayroll || !$bpjs || !$pajak) {
        $data['total_gaji'] = \Illuminate\Support\Facades\Crypt::encrypt(0);
        return $data;
    }

    $gajiPokok = (int) $masterPayroll->nominal;
    $bpjsNominal = (int) $bpjs->nominal;
    $pajakPersen = (float) $pajak->persentase;

    $total = $gajiPokok - $bpjsNominal - ($gajiPokok * $pajakPersen / 100);

    $data['total_gaji'] = \Illuminate\Support\Facades\Crypt::encrypt($total);

    return $data;
}

}
