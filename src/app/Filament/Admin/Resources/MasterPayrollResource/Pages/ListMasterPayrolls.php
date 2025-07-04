<?php

namespace App\Filament\Admin\Resources\MasterPayrollResource\Pages;

use App\Filament\Admin\Resources\MasterPayrollResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMasterPayrolls extends ListRecords
{
    protected static string $resource = MasterPayrollResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
