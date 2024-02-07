<?php

namespace App\Filament\Resources\RetailResource\Pages;

use App\Filament\Resources\RetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRetail extends EditRecord
{
    protected static string $resource = RetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
