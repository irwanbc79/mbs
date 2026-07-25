<?php

namespace App\Filament\Widgets;

use App\Models\Invoice;
use App\Models\Lead;
use App\Models\Project;
use App\Models\Ticket;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $pendingInvoiceAmount = Invoice::whereIn('status', ['sent', 'partial', 'overdue'])
            ->selectRaw('SUM(total - paid_amount) as remaining')
            ->value('remaining') ?? 0;

        $mrrAmount = \App\Models\ServiceAsset::where('state', 'active')->sum('monthly_fee');

        return [
            Stat::make('Total Leads', Lead::count())
                ->description(Lead::where('status', 'contacted')->count() . ' sudah direspons AI')
                ->descriptionIcon('heroicon-m-sparkles')
                ->color('cyan')
                ->icon('heroicon-o-user-group'),

            Stat::make('Proyek & Service Assets', Project::where('status', 'active')->count())
                ->description(\App\Models\ServiceAsset::where('state', 'active')->count() . ' aset aktif (MRR Rp ' . number_format($mrrAmount, 0, ',', '.') . ')')
                ->descriptionIcon('heroicon-m-server-stack')
                ->color('violet')
                ->icon('heroicon-o-briefcase'),

            Stat::make('Piutang Outstanding', 'Rp ' . number_format($pendingInvoiceAmount, 0, ',', '.'))
                ->description(Invoice::where('status', 'overdue')->count() . ' invoice jatuh tempo')
                ->descriptionIcon('heroicon-m-exclamation-circle')
                ->color('amber')
                ->icon('heroicon-o-document-text'),

            Stat::make('Tiket Support', Ticket::whereIn('status', ['open', 'in_progress'])->count())
                ->description(Ticket::where('status', 'open')->where('priority', 'urgent')->count() . ' tiket urgent')
                ->descriptionIcon('heroicon-m-lifebuoy')
                ->color('emerald')
                ->icon('heroicon-o-lifebuoy'),
        ];
    }
}
