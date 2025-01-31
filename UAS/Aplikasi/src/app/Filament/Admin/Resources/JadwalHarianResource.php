<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\JadwalHarianResource\Pages;
use App\Filament\Admin\Resources\DataKesehatanResource\RelationManagers;
use App\Models\JadwalHarian;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JadwalHarianResource extends Resource
{
    protected static ?string $model = JadwalHarian::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationGroup = 'Jadwal Latihan';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('hari')
                    ->label('Hari')
                    ->options([
                        'Senin' => 'Senin',
                        'Selasa' => 'Selasa',
                        'Rabu' => 'Rabu',
                        'Kamis' => 'Kamis',
                        'Jumat' => 'Jumat',
                        'Sabtu' => 'Sabtu',
                        'Minggu' => 'Minggu',
                    ])
                    ->required(),

                Forms\Components\TextInput::make('nama_olahraga')
                    ->label('Nama Olahraga')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TimePicker::make('waktu_mulai')
                    ->label('Waktu Mulai')
                    ->required(),

                Forms\Components\TimePicker::make('waktu_selesai')
                    ->label('Waktu Selesai')
                    ->required(),

                Forms\Components\TextInput::make('tempat')
                    ->label('Tempat')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hari')
                    ->label('Hari')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('nama_olahraga')
                    ->label('Olahraga')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('waktu_mulai')
                    ->label('Mulai')
                    ->sortable(),

                Tables\Columns\TextColumn::make('waktu_selesai')
                    ->label('Selesai')
                    ->sortable(),

                Tables\Columns\TextColumn::make('tempat')
                    ->label('Tempat')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('hari')
                    ->label('Filter Hari')
                    ->options([
                        'Senin' => 'Senin',
                        'Selasa' => 'Selasa',
                        'Rabu' => 'Rabu',
                        'Kamis' => 'Kamis',
                        'Jumat' => 'Jumat',
                        'Sabtu' => 'Sabtu',
                        'Minggu' => 'Minggu',
                    ]),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJadwalHarians::route('/'),
            'create' => Pages\CreateJadwalHarian::route('/create'),
            'edit' => Pages\EditJadwalHarian::route('/{record}/edit'),
        ];
    }
}
