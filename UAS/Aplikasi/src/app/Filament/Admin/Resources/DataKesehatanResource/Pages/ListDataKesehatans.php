<?php

namespace App\Filament\Admin\Resources\DataKesehatanResource\Pages;

use App\Filament\Admin\Resources\DataKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataKesehatans extends ListRecords
{
    protected static string $resource = DataKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
