<?php

namespace App\Filament\Resources\DivisionMemberResource\Pages;

use App\Filament\Resources\DivisionMemberResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDivisionMember extends EditRecord
{
    protected static string $resource = DivisionMemberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
