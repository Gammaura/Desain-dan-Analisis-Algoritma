<?php

namespace App\Filament\Admin\Resources\RankingPemainResource\Pages;

use App\Filament\Admin\Resources\RankingPemainResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRankingPemains extends ListRecords
{
    protected static string $resource = RankingPemainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
