<?php

namespace App\Filament\Resources\Leads\Schemas;

use App\Models\User;
use Filament\Forms\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LeadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Lead')
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required(),
                        TextInput::make('company')
                            ->label('Perusahaan'),
                        TextInput::make('email')
                            ->label('Email')
                            ->email(),
                        TextInput::make('phone')
                            ->label('No. Telepon')
                            ->tel(),
                    ]),

                Section::make('Detail Prospek')
                    ->columns(3)
                    ->schema([
                        Select::make('service_interest')
                            ->label('Layanan yang Diminati')
                            ->options([
                                'website' => 'Website',
                                'erp'     => 'ERP',
                                'mobile'  => 'Mobile App',
                                'chatbot' => 'Chatbot AI',
                                'custom'  => 'Custom Dev',
                                'other'   => 'Lainnya',
                            ])
                            ->required()
                            ->default('other'),
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'new'       => 'Baru',
                                'contacted' => 'Dihubungi',
                                'qualified' => 'Qualified',
                                'converted' => 'Converted',
                                'lost'      => 'Lost',
                            ])
                            ->required()
                            ->default('new'),
                        Select::make('source')
                            ->label('Sumber')
                            ->options([
                                'website'      => 'Website',
                                'referral'     => 'Referral',
                                'social_media' => 'Social Media',
                                'whatsapp'     => 'WhatsApp',
                                'direct'       => 'Direct',
                                'other'        => 'Lainnya',
                            ])
                            ->required()
                            ->default('website'),
                    ]),

                Section::make('Catatan & Penugasan')
                    ->columns(2)
                    ->schema([
                        Select::make('assigned_to')
                            ->label('Ditugaskan ke')
                            ->options(User::pluck('name', 'id'))
                            ->searchable()
                            ->placeholder('Pilih user'),
                        Textarea::make('notes')
                            ->label('Catatan')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
