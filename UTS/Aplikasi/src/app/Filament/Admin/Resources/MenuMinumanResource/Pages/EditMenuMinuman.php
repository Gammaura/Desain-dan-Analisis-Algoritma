<?php

namespace App\Filament\Admin\Resources\MenuMinumanResource\Pages;

use App\Filament\Admin\Resources\MenuMinumanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMenuMinuman extends EditRecord
{
    protected static string $resource = MenuMinumanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
