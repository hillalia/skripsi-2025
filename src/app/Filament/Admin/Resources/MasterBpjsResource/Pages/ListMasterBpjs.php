<?php

namespace App\Filament\Admin\Resources\MasterBpjsResource\Pages;

use App\Filament\Admin\Resources\MasterBpjsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMasterBpjs extends ListRecords
{
    protected static string $resource = MasterBpjsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
