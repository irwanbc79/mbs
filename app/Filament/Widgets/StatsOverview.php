<?php

namespace App\Filament\Widgets;

use App\Models\Invoice;
use App\Models\Lead;
use App\Models\Project;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $pendingInvoices  = Invoice::whereIn('status', ['sent', 'partial', 'overdue'])->count();
        $pendingTotal     = Invoice::whereIn('status', ['sent', 'partial', 'overdue'])->sum('total')
            - Invoice::whereIn('status', ['sent', 'partial', 'overdue'])->sum('paid_amount');

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

            Stat::make('Invoice Pending', $pendingInvoices)
                ->description('Rp ' . number_format($pendingTotal, 0, ',', '.') . ' belum terbayar')
                ->descriptionIcon('heroicon-m-exclamation-circle')
                ->color('amber')
                ->icon('heroicon-o-document-text'),

            Stat::make('Invoice Lunas', Invoice::where('status', 'paid')->count())
                ->description('Rp ' . number_format(Invoice::where('status', 'paid')->sum('total'), 0, ',', '.') . ' terkumpul')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('emerald')
                ->icon('heroicon-o-banknotes'),
        ];
    }
}
