<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;



class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([                
                Forms\Components\TextInput::make('name')->required()->maxLength(255),
                Forms\Components\TextInput::make('price_khr')->label('Price (KHR)')->numeric()->prefix('៛')->maxValue(42949672.95),
                Forms\Components\TextInput::make('price_vnd')->label('Price (VND)')->numeric()->prefix('₫')->maxValue(42949672.95),
                Forms\Components\TextInput::make('price_thb')->label('Price (THB)')->numeric()->prefix('฿')->maxValue(42949672.95),
                Forms\Components\TextInput::make('price_idr')->label('Price (IDR)')->numeric()->prefix('IDR')->maxValue(42949672.95),
                Forms\Components\TextInput::make('price_usd')->label('Price (USD)')->numeric()->prefix('USD')->maxValue(42949672.95),

                Forms\Components\TextInput::make('size_name')->label('Size')->placeholder('S,M,L')->required()->maxLength(255),
                Forms\Components\TextInput::make('colour_name')->label('Colour')->placeholder('Brown , Cream')->required()->maxLength(255),
                
                FileUpload::make('product_image')->image()->multiple()->reorderable()->appendFiles(),

                Forms\Components\Select::make('category')->options([
                    'dress' => 'Dress',
                    'one set' => 'One Set',
                    'pants' => 'Pants',
                    'skirts' => 'Skirts',
                    'tops' => 'Tops',
                ])->required(),

                Toggle::make('status'),
                Toggle::make('hot_items_flag'),
                Toggle::make('new_collections_flag'),
                Toggle::make('show_prices_flag'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),            
                Tables\Columns\ImageColumn::make('product_image'),
                Tables\Columns\TextColumn::make('price_khr')->sortable(),
                Tables\Columns\TextColumn::make('price_vnd')->sortable(),
                Tables\Columns\TextColumn::make('price_thb')->sortable(),
                Tables\Columns\TextColumn::make('price_usd')->sortable(),
                Tables\Columns\TextColumn::make('price_idr')->sortable(),
                Tables\Columns\TextColumn::make('category')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('size_name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('colour_name')->searchable()->sortable(),                                
                Tables\Columns\ToggleColumn::make('status')->sortable(),
                Tables\Columns\ToggleColumn::make('hot_items_flag')->sortable(),
                Tables\Columns\ToggleColumn::make('new_collections_flag')->sortable(),  
                Tables\Columns\ToggleColumn::make('show_prices_flag')->sortable(),              
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
