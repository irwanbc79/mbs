<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Leads', '0')
                ->description('Prospek masuk')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('cyan')
                ->icon('heroicon-o-user-group'),

            Stat::make('Proyek Aktif', '0')
                ->description('Sedang berjalan')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('violet')
                ->icon('heroicon-o-briefcase'),

            Stat::make('Invoice Pending', '0')
                ->description('Menunggu pembayaran')
                ->descriptionIcon('heroicon-m-exclamation-circle')
                ->color('amber')
                ->icon('heroicon-o-banknotes'),

            Stat::make('Ticket Open', '0')
                ->description('Support aktif')
                ->descriptionIcon('heroicon-m-lifebuoy')
                ->color('emerald')
                ->icon('heroicon-o-lifebuoy'),
        ];
    }
}
