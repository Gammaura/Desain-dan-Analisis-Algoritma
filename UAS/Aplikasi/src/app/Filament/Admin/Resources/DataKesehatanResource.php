<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DataKesehatanResource\Pages;
use App\Filament\Admin\Resources\DataKesehatanResource\RelationManagers;
use App\Models\DataKesehatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataKesehatanResource extends Resource
{
    protected static ?string $model = DataKesehatan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Data Member';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('anggota_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tinggi_badan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('berat_badan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('bmi')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tekanan_darah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('denyut_jantung')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('riwayat_cedera')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('kondisi_kesehatan_khusus')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('anggota_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tinggi_badan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('berat_badan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bmi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tekanan_darah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('denyut_jantung')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('riwayat_cedera')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kondisi_kesehatan_khusus')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDataKesehatans::route('/'),
            'create' => Pages\CreateDataKesehatan::route('/create'),
            'edit' => Pages\EditDataKesehatan::route('/{record}/edit'),
        ];
    }
}
