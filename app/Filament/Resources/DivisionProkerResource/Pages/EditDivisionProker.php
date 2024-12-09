<?php

namespace App\Filament\Resources\DivisionProkerResource\Pages;

use App\Filament\Resources\DivisionProkerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDivisionProker extends EditRecord
{
    protected static string $resource = DivisionProkerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
