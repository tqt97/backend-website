<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

//    protected static ?string $navigationGroup = 'settings';

    protected static ?string $recordTitleAttribute = 'name';

    protected static int $globalSearchResultsLimit = 5;

    protected static ?int $navigationSort = 7;


    public static function getNavigationGroup(): ?string
    {
        return __('users');
    }

    public static function getNavigationLabel(): string
    {
        return __('users');
    }

    public static function getModelLabel(): string
    {
        return __('users');
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextInputColumn::make('name')
                    ->label(__('user.tables.name'))
                    ->rules(['required', 'max:255', 'min:3'])
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextInputColumn::make('email')
                    ->rules(['required', 'max:255', 'email', 'unique:users,email'])
                    ->label(__('user.tables.email'))
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('roles.name')
                    ->label(__('user.tables.roles'))
                    ->badge()
                    ->searchable()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('email_verified_at')
                //     ->dateTime()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('two_factor_confirmed_at')
                //     ->dateTime()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('current_team_id')
                //     ->numeric()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('profile_photo_path')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('created_at')->label(__('user.tables.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')->label(__('user.tables.updated_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make(__('user.tables.edit_password'))
                    ->icon('heroicon-m-lock-closed')
                    ->form([
                        Forms\Components\TextInput::make('password')
                            ->minLength(8)
                            ->maxLength(255)
                            ->suffixIcon('heroicon-m-lock-closed')
                            ->suffixIconColor('primary')
                            ->password()
                            ->confirmed()
                            ->required()
                            ->label(__('user.tables.password')),
                        Forms\Components\TextInput::make('password_confirmation')
                            ->minLength(8)
                            ->maxLength(255)
                            ->suffixIcon('heroicon-m-lock-closed')
                            ->suffixIconColor('primary')
                            ->password()
                            ->required()
                            ->label(__('user.tables.password_confirmation')),
                    ])
                    ->action(function (User $user, array $data): void {
                        $user->password = Hash::make($data['password']);
                        $user->save();

                        Notification::make()
                            ->title(__('update_success'))
                            ->success()
                            ->send();
                    }),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->groups([
                Tables\Grouping\Group::make('email')
                    ->collapsible()
                    ->titlePrefixedWithLabel(true)
                    ->label(__('user.tables.group_by_email')),
                Tables\Grouping\Group::make('created_at')
                    ->collapsible()
                    ->titlePrefixedWithLabel(true)
                    ->label(__('user.tables.group_by_created_at')),
            ])
            ->groupingSettingsInDropdownOnDesktop()
            ->groupRecordsTriggerAction(
                fn(Tables\Actions\Action $action) => $action
                    ->button()
                    ->label(__('user.tables.group_records')),
            );
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make(__('user.signup_information'))
                            ->icon('heroicon-m-identification')
                            ->label(__('user.signup_information'))
//                            ->badge(5)
                            ->schema([
                                Forms\Components\TextInput::make('name')
                                    ->suffixIcon('heroicon-m-user')
                                    ->suffixIconColor('primary')
//                                    ->hintIcon('heroicon-m-user')
//                                    ->hint(__('signup_information_username_hint'))
                                    ->label(__('user.name'))
                                    ->required()
                                    ->minLength(3)
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('email')
                                    ->label(__('user.email'))
                                    ->suffixIcon('heroicon-m-envelope')
                                    ->suffixIconColor('primary')
                                    ->unique(ignoreRecord: true)
                                    ->regex('/^.+@.+$/i')
                                    ->email()
                                    ->required()
                                    ->maxLength(255),
                                // Forms\Components\DateTimePicker::make('email_verified_at')->label(__('email_verified_at')),
                                Forms\Components\TextInput::make('password')
                                    ->label(__('user.password'))
                                    ->suffixIcon('heroicon-m-lock-closed')
                                    ->suffixIconColor('primary')
//                                    ->disabled('edit')
                                    ->password()
                                    ->required()
                                    ->dehydrateStateUsing(fn($state) => Hash::make($state))
                                    ->dehydrated(fn($state) => filled($state))
                                    ->required(fn(string $context): bool => $context === 'create')
                                    ->minLength(8)
                                    ->maxLength(255),
                                Forms\Components\Select::make('roles')
                                    ->label(__('user.roles'))
                                    ->suffixIcon('heroicon-m-user-group')
                                    ->suffixIconColor('primary')
                                    ->required()
                                    ->preload()
                                    ->multiple()
                                    ->relationship('roles', 'name')
                                    ->columnSpan('full')
                            ])
                        ,
                        Tabs\Tab::make(__('user.signup_2fa'))
                            ->icon('heroicon-m-key')
                            ->schema([
                                Forms\Components\Textarea::make('two_factor_secret')
                                    ->label(__('user.two_factor_secret'))
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                                Forms\Components\Textarea::make('two_factor_recovery_codes')
                                    ->label(__('user.two_factor_recovery_codes'))
                                    ->maxLength(65535)
                                    ->columnSpanFull(),
                                Forms\Components\DateTimePicker::make('two_factor_confirmed_at')
                                    ->label(__('user.two_factor_confirmed_at')),
                                Forms\Components\TextInput::make('current_team_id')
                                    ->label(__('user.current_team_id'))
                                    ->numeric(),
                                Forms\Components\TextInput::make('profile_photo_path')
                                    ->label(__('user.profile_photo_path'))
                                    ->maxLength(2048),
                            ]),
                    ])
                    ->activeTab(1)
                    ->columnSpan('full'),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
