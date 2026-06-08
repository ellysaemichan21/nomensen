<?php

namespace App\Filament\Resources\Cooperations\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class CooperationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('cooperations')
                    ->visibility('public')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
