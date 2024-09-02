<?php

namespace App\Filament\Resources\ProductColourResource\Pages;

use App\Filament\Resources\ProductColourResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductColours extends ListRecords
{
    protected static string $resource = ProductColourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
