<?php

namespace App\Filament\Admin\Resources\RankingPemainResource\Pages;

use App\Filament\Admin\Resources\RankingPemainResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRankingPemain extends EditRecord
{
    protected static string $resource = RankingPemainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
