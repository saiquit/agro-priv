<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    use Translatable;
    protected static ?string $model = Page::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Content')->schema([
                    Forms\Components\Toggle::make('is_active')
                        ->required()->columnSpanFull(),
                    Forms\Components\TextInput::make('title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('slug')
                        ->maxLength(255),
                    Forms\Components\FileUpload::make('cover_image')->image()->nullable()->directory('pages/covers')->columnSpanFull(),
                ])->columns(2),
                Forms\Components\Section::make('Description')->schema([
                    Forms\Components\Repeater::make('seo_meta')->schema([
                        Forms\Components\TextInput::make('name')->required()->maxLength(255),
                        Forms\Components\TextInput::make('content')->required()->maxLength(255),
                    ])->columns(2)->columnSpanFull(),
                    Forms\Components\Repeater::make('settings')->schema([
                        Forms\Components\TextInput::make('key')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('type')
                            ->required()
                            ->options([
                                'text' => 'Text',
                                'number' => 'Number',
                                'textarea' => 'Textarea',
                                'boolean' => 'Boolean',
                                'file' => 'File',
                                'date' => 'Date',
                                'repeater' => 'Repeater',
                            ])->live()
                            ->afterStateUpdated(fn(Select $component) => $component
                                ->getContainer()
                                ->getComponent('dynamicTypeFields')
                                ->getChildComponentContainer()
                                ->fill()),
                        Forms\Components\Grid::make(2)->schema(fn(Get $get): array => match ($get('type')) {
                            'text' => [
                                Forms\Components\TextInput::make('value')
                                    ->required()
                                    ->columnSpanFull(),
                            ],
                            'number' => [
                                Forms\Components\TextInput::make('value')
                                    ->required()->numeric()
                                    ->columnSpanFull(),
                            ],
                            'textarea' => [
                                Forms\Components\Textarea::make('value')
                                    ->required()
                                    ->columnSpanFull(),
                            ],
                            'boolean' => [
                                Forms\Components\Checkbox::make('value')
                                    ->columnSpanFull(),
                            ],
                            'file' => [
                                Forms\Components\FileUpload::make('value')
                                    ->required()
                                    ->image()
                                    ->directory('settings')
                                    ->columnSpanFull(),
                            ],
                            'date' => [
                                Forms\Components\DatePicker::make('value')
                                    ->required()
                                    ->columnSpanFull(),
                            ],
                            'repeater' => [
                                Forms\Components\Repeater::make('value')->schema([
                                    Forms\Components\TextInput::make('name')
                                        ->required()
                                        ->maxLength(255)
                                        ->placeholder('Enter name'),
                                    Forms\Components\Select::make('type')
                                        ->required()
                                        ->options([
                                            'text' => 'Text',
                                            'file' => 'File',
                                        ])
                                        ->live()
                                        ->afterStateUpdated(fn(Select $component) => $component
                                            ->getContainer()
                                            ->getComponent('nestedDynamicFields')
                                            ->getChildComponentContainer()
                                            ->fill()),
                                    Forms\Components\Grid::make(2)->schema(fn(Get $get): array => match ($get('type')) {
                                        'text' => [
                                            Forms\Components\TextInput::make('content')
                                                ->required()
                                                ->columnSpanFull()
                                                ->placeholder('Enter text content'),
                                        ],
                                        'file' => [
                                            Forms\Components\FileUpload::make('content')
                                                ->required()
                                                ->directory('nested_repeater')
                                                ->columnSpanFull(),
                                        ],
                                        default => [],
                                    })->key('nestedDynamicFields'),
                                ])->columnSpanFull(),
                            ],
                            default => [],
                        })->key('dynamicTypeFields'),
                    ])->columns(2),
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
