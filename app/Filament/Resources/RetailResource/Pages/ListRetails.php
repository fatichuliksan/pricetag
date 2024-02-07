<?php

namespace App\Filament\Resources\RetailResource\Pages;

use App\Filament\Resources\RetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRetails extends ListRecords
{
    protected static string $resource = RetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
