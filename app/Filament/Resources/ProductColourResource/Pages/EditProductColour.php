<?php

namespace App\Filament\Resources\ProductColourResource\Pages;

use App\Filament\Resources\ProductColourResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductColour extends EditRecord
{
    protected static string $resource = ProductColourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
