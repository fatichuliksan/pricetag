<?php

namespace App\Filament\Resources\RetailBranchResource\Pages;

use App\Filament\Resources\RetailBranchResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRetailBranches extends ListRecords
{
    protected static string $resource = RetailBranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
