<?php

namespace App\Filament\Admin\Resources\JadwalMingguanResource\Pages;

use App\Filament\Admin\Resources\JadwalMingguanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalMingguan extends EditRecord
{
    protected static string $resource = JadwalMingguanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
