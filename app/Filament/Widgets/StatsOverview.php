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

        return [
            Stat::make('Total Leads', Lead::count())
                ->description(Lead::where('status', 'new')->count() . ' lead baru')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('cyan')
                ->icon('heroicon-o-user-group'),

            Stat::make('Proyek Aktif', Project::where('status', 'active')->count())
                ->description(Project::where('status', 'planning')->count() . ' dalam perencanaan')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('violet')
                ->icon('heroicon-o-briefcase'),

            Stat::make('Invoice Pending', Invoice::whereIn('status', ['sent', 'partial', 'overdue'])->count())
                ->description('Rp ' . number_format($pendingInvoiceAmount, 0, ',', '.') . ' belum terbayar')
                ->descriptionIcon('heroicon-m-exclamation-circle')
                ->color('amber')
                ->icon('heroicon-o-document-text'),

            Stat::make('Tiket Open', Ticket::whereIn('status', ['open', 'in_progress'])->count())
                ->description(Ticket::where('status', 'open')->where('priority', 'urgent')->count() . ' tiket urgent')
                ->descriptionIcon('heroicon-m-lifebuoy')
                ->color('emerald')
                ->icon('heroicon-o-lifebuoy'),
        ];
    }
}
