<?php

namespace App\Filament\Resources\Kategoris\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;

class KategoriForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Informasi Kategori')
                ->schema([
                    TextInput::make('kode_kategori')
                        ->required()
                        ->unique(ignoreRecord: true),

                    TextInput::make('nama_kategori')
                        ->required(),
                ])
                ->columns(2),
        ]);
    }
}
