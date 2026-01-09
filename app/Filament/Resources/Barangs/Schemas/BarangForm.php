<?php

namespace App\Filament\Resources\Barangs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([

            FileUpload::make('foto_sampul')
    ->label('Foto Sampul Buku')
    ->image()
    ->disk('public')
    ->directory('barangs')
    ->visibility('public')
    ->imagePreviewHeight('200') // preview saat create/edit
    ->maxSize(2048),



            TextInput::make('kode_barang')
                ->label('Kode Barang')
                ->required()
                ->unique(ignoreRecord: true),

            TextInput::make('nama_barang')
                ->label('Nama Buku')
                ->required(),

            TextInput::make('isbn')->label('ISBN'),
            TextInput::make('penulis')->label('Penulis'),
            TextInput::make('penerbit')->label('Penerbit'),

            TextInput::make('tahun_terbit')
                ->numeric()
                ->minValue(1900)
                ->maxValue(now()->year),

            Select::make('kategori_id')
                ->relationship('kategori', 'nama_kategori')
                ->required(),

            TextInput::make('stok')->numeric()->required(),
            TextInput::make('harga_beli')->numeric()->required(),
            TextInput::make('harga_jual')->numeric()->required(),
        ]);
    }
}
