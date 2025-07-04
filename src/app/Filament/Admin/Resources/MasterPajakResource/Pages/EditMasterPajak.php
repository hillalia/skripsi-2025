<?php

namespace App\Filament\Admin\Resources\MasterPajakResource\Pages;

use App\Filament\Admin\Resources\MasterPajakResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMasterPajak extends EditRecord
{
    protected static string $resource = MasterPajakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
