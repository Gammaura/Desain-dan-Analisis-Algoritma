<?php

namespace App\Filament\Admin\Resources\MenuMinumanResource\Pages;

use App\Filament\Admin\Resources\MenuMinumanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMenuMinumen extends ListRecords
{
    protected static string $resource = MenuMinumanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
