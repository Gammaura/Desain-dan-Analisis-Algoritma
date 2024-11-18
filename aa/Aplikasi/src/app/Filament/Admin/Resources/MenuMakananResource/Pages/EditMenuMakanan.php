<?php

namespace App\Filament\Admin\Resources\MenuMakananResource\Pages;

use App\Filament\Admin\Resources\MenuMakananResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMenuMakanan extends EditRecord
{
    protected static string $resource = MenuMakananResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
