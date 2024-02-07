<?php

namespace App\Filament\Resources\RetailBranchResource\Pages;

use App\Filament\Resources\RetailBranchResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRetailBranch extends EditRecord
{
    protected static string $resource = RetailBranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
