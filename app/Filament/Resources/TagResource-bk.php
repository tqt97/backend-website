<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TagResource\Pages;
use App\Filament\Resources\TagResource\RelationManagers;
use App\Models\Tag;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class TagResource extends Resource
{
    protected static ?string $model = Tag::class;

//    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'blogs';

    protected static ?string $recordTitleAttribute = 'name';

    protected static int $globalSearchResultsLimit = 5;

    protected static ?int $navigationSort = 3;


    public static function getNavigationGroup(): ?string
    {
        return __('blogs');
    }

    public static function getNavigationLabel(): string
    {
        return __('tags');
    }

    public static function getModelLabel(): string
    {
        return __('tags');
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label(__('categories.name'))
                    ->required()
                    ->hint(__('categories.name_hint'))
                    ->hintIcon('heroicon-m-information-circle')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->autofocus()
                    ->minLength(3)
                    ->maxLength(255)
                    ->live(onBlur: false, debounce: 500)
                    ->afterStateUpdated(function (string $operation, ?string $state, Set $set) {
                        $set('slug', Str::slug($state));
                    })
                    ->minLength(2)
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->label(__('categories.slug'))
                    ->required()
                    ->hint(__('categories.slug_hint'))
                    ->hintIcon('heroicon-m-information-circle')
                    ->maxLength(255),
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
            'index' => Pages\ListTags::route('/'),
            'create' => Pages\CreateTag::route('/create'),
            'edit' => Pages\EditTag::route('/{record}/edit'),
        ];
    }
}
