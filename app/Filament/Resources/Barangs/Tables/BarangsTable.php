<?php

namespace App\Filament\Resources\Barangs\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class BarangsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('foto_sampul')
                    ->label('Sampul')
                    ->disk('public')
                    ->height(60)
                    ->width(45)
                    ->extraImgAttributes([
                        'class' => 'object-cover rounded',
                    ]),

                TextColumn::make('kode_barang')
                    ->label('Kode')
                    ->searchable(),

                TextColumn::make('nama_barang')
                    ->label('Nama Buku')
                    ->searchable(),

                TextColumn::make('kategori.nama_kategori')
                    ->label('Kategori'),

                TextColumn::make('stok')
                    ->label('Stok'),

                TextColumn::make('harga_jual')
                    ->label('Harga Jual')
                    ->money('IDR'),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
