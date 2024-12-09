<?php

namespace App\Filament\Resources\DivisionProkerResource\Pages;

use App\Filament\Resources\DivisionProkerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDivisionProkers extends ListRecords
{
    protected static string $resource = DivisionProkerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
