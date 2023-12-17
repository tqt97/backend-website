<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Comment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;

//    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'blogs';

    protected static ?string $recordTitleAttribute = 'name';

    protected static int $globalSearchResultsLimit = 5;

    protected static ?int $navigationSort = 5;


    public static function getNavigationGroup(): ?string
    {
        return __('blogs');
    }

    public static function getNavigationLabel(): string
    {
        return __('comments');
    }

    public static function getModelLabel(): string
    {
        return __('comments');
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label(__('resources/comment.author'))
                    ->relationship('user', 'name')
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('post_id')
                    ->label(__('resources/comment.post'))
                    ->relationship('post', 'title')
                    ->preload()
                    ->required(),
                Forms\Components\Textarea::make('content')
                    ->label(__('resources/comment.content'))
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\DateTimePicker::make('published_at')
                    ->label(__('resources/comment.published_at'))
                ,
                Forms\Components\Toggle::make('approved')
                    ->label(__('resources/comment.approved'))
                    ->required(),
                Forms\Components\Toggle::make('spam')
                    ->label(__('resources/comment.spam'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label(__('resources/tables.comment_user'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('post.title')
                    ->label(__('resources/tables.post_title'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('published_at')
                    ->label(__('resources/tables.published_at'))
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\IconColumn::make('approved')
                    ->label(__('resources/tables.approved_at'))
                    ->boolean(),
                Tables\Columns\IconColumn::make('spam')
                    ->label(__('resources/tables.spam'))
                    ->boolean(),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComment::route('/create'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
        ];
    }
}
