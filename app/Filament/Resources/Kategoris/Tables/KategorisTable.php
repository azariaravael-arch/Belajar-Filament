<?php

namespace App\Filament\Resources\Kategoris\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class KategorisTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('kode_kategori')
                    ->searchable(),

                TextColumn::make('nama_kategori')
                    ->searchable(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ]);
    }
}
