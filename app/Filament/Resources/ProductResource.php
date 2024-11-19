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
use Filament\Resources\Concerns\Translatable;

class ProductResource extends Resource
{
    use Translatable;

    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(2)
                    ->schema([
                        Forms\Components\Tabs::make('Content')
                            ->tabs([
                                Forms\Components\Tabs\Tab::make('Details')
                                    ->schema([
                                        Forms\Components\Fieldset::make('Details')
                                            ->columns(2)
                                            ->schema([
                                                Forms\Components\TextInput::make('name')
                                                    ->required()
                                                    ->maxLength(255),
                                                Forms\Components\TextInput::make('slug')
                                                    ->required()
                                                    ->afterStateUpdated(fn(string $context, $state, callable $set) => $set('slug', str($state)->slug()))
                                                    ->maxLength(255),
                                                Forms\Components\TextInput::make('excerpt')
                                                    ->required()
                                                    ->maxLength(255),
                                                Forms\Components\RichEditor::make('content')
                                                    ->required()
                                                    ->columnSpanFull(),
                                                Forms\Components\Repeater::make('other_instructions')->schema([
                                                    Forms\Components\TextInput::make('title')->required()->maxLength(255)->columnSpan(1),
                                                    Forms\Components\RichEditor::make('content')->required()->columnSpan(2),
                                                ])->columns(3)->columnSpanFull(),
                                            ]),
                                    ]),
                                Forms\Components\Tabs\Tab::make('Media')
                                    ->schema([
                                        Forms\Components\FileUpload::make('image')->directory('products')->image()->required()->columnSpan(1),
                                        Forms\Components\SpatieMediaLibraryFileUpload::make('gallery')->multiple()->collection('products')->maxFiles(4)->columnSpan(1),
                                    ])->columns(2),
                                Forms\Components\Tabs\Tab::make('Description')
                                    ->schema([
                                        Forms\Components\Repeater::make('key_features')->schema(
                                            [
                                                Forms\Components\TextInput::make('feature')->required()->maxLength(255),
                                            ]
                                        )->nullable(),
                                        Forms\Components\Repeater::make('additional_details')->schema([
                                            Forms\Components\TextInput::make('title')->required()->maxLength(255),
                                            Forms\Components\TextInput::make('detail')->required()->maxLength(255),
                                        ])->nullable(),
                                    ])->columns(2)
                            ])->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('excerpt')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
