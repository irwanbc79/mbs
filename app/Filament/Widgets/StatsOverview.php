<?php

namespace App\Filament\Widgets;

use App\Models\Lead;
use App\Models\Project;
use App\Models\Proposal;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Leads', Lead::count())
                ->description(Lead::where('status', 'new')->count() . ' lead baru')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('cyan')
                ->icon('heroicon-o-user-group'),

            Stat::make('Proyek Aktif', Project::where('status', 'active')->count())
                ->description(Project::whereIn('status', ['planning', 'active'])->count() . ' total berjalan')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('violet')
                ->icon('heroicon-o-briefcase'),

            Stat::make('Penawaran Pending', Proposal::whereIn('status', ['draft', 'sent', 'viewed'])->count())
                ->description('Menunggu keputusan klien')
                ->descriptionIcon('heroicon-m-exclamation-circle')
                ->color('amber')
                ->icon('heroicon-o-document-text'),

            Stat::make('Penawaran Diterima', Proposal::where('status', 'accepted')->count())
                ->description('Konversi dari ' . Lead::where('status', 'converted')->count() . ' leads')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('emerald')
                ->icon('heroicon-o-check-circle'),
        ];
    }
}
