<?php

namespace App\Filament\Admin\Resources\PayrollDetailResource\Pages;

use App\Filament\Admin\Resources\PayrollDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPayrollDetail extends EditRecord
{
    protected static string $resource = PayrollDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Jika ingin update total gaji saat edit
        $employee = \App\Models\Employee::find($data['employee_id']);
        $bpjs = \App\Models\MasterBpjs::find($data['master_bpjs_id']);
        $pajak = \App\Models\MasterPajak::find($data['master_pajak_id']);

        $gajiPokok = $employee->gaji_pokok;
        $bpjsNominal = $bpjs->nominal;
        $pajakPersen = $pajak->persentase;

        $total = $gajiPokok - $bpjsNominal - ($gajiPokok * $pajakPersen / 100);

        $data['total_gaji'] = \Illuminate\Support\Facades\Crypt::encrypt($total);

        return $data;
    }
}
