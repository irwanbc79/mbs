<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Akun')
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required(),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->unique(ignoreRecord: true),
                        TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->dehydrateStateUsing(fn ($state) => filled($state) ? Hash::make($state) : null)
                            ->dehydrated(fn ($state) => filled($state))
                            ->required(fn (string $operation) => $operation === 'create')
                            ->helperText('Kosongkan jika tidak ingin mengubah password'),
                        Select::make('roles')
                            ->label('Role')
                            ->options(Role::pluck('name', 'name')->mapWithKeys(fn ($name) => [
                                $name => match ($name) {
                                    'super_admin'    => 'Super Admin',
                                    'admin'          => 'Admin',
                                    'project_manager'=> 'Project Manager',
                                    'cs'             => 'Customer Service',
                                    default          => $name,
                                },
                            ]))
                            ->multiple()
                            ->required(),
                    ]),
            ]);
    }
}
