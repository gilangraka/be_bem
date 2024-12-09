<?php

namespace App\Filament\Resources\DivisionMemberResource\Pages;

use App\Filament\Resources\DivisionMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDivisionMembers extends ListRecords
{
    protected static string $resource = DivisionMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
