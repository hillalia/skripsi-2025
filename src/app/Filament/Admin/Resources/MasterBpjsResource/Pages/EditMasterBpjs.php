<?php

namespace App\Filament\Admin\Resources\MasterBpjsResource\Pages;

use App\Filament\Admin\Resources\MasterBpjsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMasterBpjs extends EditRecord
{
    protected static string $resource = MasterBpjsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
