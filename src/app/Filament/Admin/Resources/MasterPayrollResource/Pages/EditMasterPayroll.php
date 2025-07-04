<?php

namespace App\Filament\Admin\Resources\MasterPayrollResource\Pages;

use App\Filament\Admin\Resources\MasterPayrollResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMasterPayroll extends EditRecord
{
    protected static string $resource = MasterPayrollResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
