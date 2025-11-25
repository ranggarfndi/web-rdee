<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeamResource\Pages;
use App\Models\Team;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    // Icon Orang / Group
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Nama Pengurus
                Forms\Components\TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required()
                    ->maxLength(255),

                // Jabatan
                Forms\Components\TextInput::make('position')
                    ->label('Jabatan')
                    ->placeholder('Contoh: Ketua, Bendahara, Anggota')
                    ->required()
                    ->maxLength(255),

                // Foto Profil
                Forms\Components\FileUpload::make('image')
                    ->label('Foto Profil')
                    ->image()
                    ->avatar() // Mode avatar (bulat saat preview)
                    ->directory('teams')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Foto Bulat
                Tables\Columns\ImageColumn::make('image')
                    ->circular(), // Tampil bulat di tabel
                
                // Nama
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->weight('bold'), // Teks tebal

                // Jabatan
                Tables\Columns\TextColumn::make('position')
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}