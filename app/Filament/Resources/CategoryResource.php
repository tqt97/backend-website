<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

//    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'blogs';

    protected static ?string $recordTitleAttribute = 'name';

    protected static int $globalSearchResultsLimit = 5;

    protected static ?int $navigationSort = 2;

    public static function getNavigationGroup(): ?string
    {
        return __('blogs');
    }

    public static function getNavigationLabel(): string
    {
        return __('categories');
    }

    public static function getModelLabel(): string
    {
        return __('categories');
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
                    ->label(__('resources/categories.name'))
                    ->hint(__('resources/categories.name_hint'))
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
                ,
                Forms\Components\TextInput::make('slug')
                    ->label(__('resources/categories.slug'))
                    ->hint(__('resources/categories.slug_hint'))
                    ->hintIcon('heroicon-m-information-circle')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('resources/tables.name'))
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('posts_count')
                    ->label(__('resources/tables.posts_count'))
                    ->badge()
                    ->alignCenter()
                    ->counts('posts')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('resources/tables.created_at'))
                    ->dateTime('D, d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label(__('resources/tables.updated_at'))
                    ->dateTime('D, d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateHeading(__('categories.empty_state_heading'))
            ->emptyStateDescription(__('categories.empty_state_description'))
            ->emptyStateIcon('heroicon-o-square-3-stack-3d')
//            ->emptyStateActions([
//                Tables\Actions\Action::make('create')
//                    ->label(__('categories.tables.create'))
//                    ->url(route('filament.admin.resources.categories.create'))
//                    ->icon('heroicon-m-plus')
//                    ->button(),
//            ])
            ->defaultSort('created_at', 'desc')
            ->groups([
                Tables\Grouping\Group::make('created_at')
                    ->collapsible()
                    ->titlePrefixedWithLabel(true)
                    ->label(__('resources/tables.group_by_created_at')),
            ])
            ->groupingSettingsInDropdownOnDesktop()
            ->groupRecordsTriggerAction(
                fn(Tables\Actions\Action $action) => $action
                    ->button()
                    ->label(__('resources/tables.group_records')),
            );
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCategories::route('/'),
        ];
    }
}
