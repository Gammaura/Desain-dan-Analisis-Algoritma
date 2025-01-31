<?php

namespace App\Filament\Admin\Resources\JadwalMingguanResource\Pages;

use App\Filament\Admin\Resources\JadwalMingguanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJadwalMingguans extends ListRecords
{
    protected static string $resource = JadwalMingguanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
