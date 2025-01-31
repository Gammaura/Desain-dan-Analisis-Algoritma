<?php

namespace App\Filament\Admin\Resources\DataKesehatanResource\Pages;

use App\Filament\Admin\Resources\DataKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataKesehatan extends EditRecord
{
    protected static string $resource = DataKesehatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
