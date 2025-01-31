<?php

namespace App\Filament\Admin\Resources\JadwalHarianResource\Pages;

use App\Filament\Admin\Resources\JadwalHarianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalHarian extends EditRecord
{
    protected static string $resource = JadwalHarianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
