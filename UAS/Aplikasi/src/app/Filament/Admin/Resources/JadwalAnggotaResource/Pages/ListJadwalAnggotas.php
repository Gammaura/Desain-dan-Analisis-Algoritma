<?php

namespace App\Filament\Admin\Resources\JadwalAnggotaResource\Pages;

use App\Filament\Admin\Resources\JadwalAnggotaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJadwalAnggotas extends ListRecords
{
    protected static string $resource = JadwalAnggotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
