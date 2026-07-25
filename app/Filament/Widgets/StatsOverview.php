<?php

namespace App\Filament\Widgets;

use App\Models\Invoice;
use App\Models\Lead;
use App\Models\Project;
use App\Models\Ticket;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Schema;

class StatsOverview extends StatsOverviewWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        // 1. Leads Stat
        $leadsCount = Schema::hasTable('leads') ? Lead::count() : 0;
        $leadsContacted = Schema::hasTable('leads') && Schema::hasColumn('leads', 'status')
            ? Lead::where('status', 'contacted')->count()
            : 0;

        // 2. Projects & Service Assets Stat
        $activeProjectsCount = Schema::hasTable('projects') && Schema::hasColumn('projects', 'status')
            ? Project::where('status', 'active')->count()
            : (Schema::hasTable('projects') ? Project::count() : 0);

        $mrrAmount = Schema::hasTable('service_assets') && Schema::hasColumn('service_assets', 'monthly_fee')
            ? \App\Models\ServiceAsset::where('state', 'active')->sum('monthly_fee')
            : 0;

        $activeAssetsCount = Schema::hasTable('service_assets') && Schema::hasColumn('service_assets', 'state')
            ? \App\Models\ServiceAsset::where('state', 'active')->count()
            : 0;

        // 3. Invoices Stat
        $pendingInvoiceAmount = 0;
        $overdueCount = 0;

        if (Schema::hasTable('invoices')) {
            if (Schema::hasColumn('invoices', 'paid_amount') && Schema::hasColumn('invoices', 'total')) {
                $pendingInvoiceAmount = Invoice::whereIn('status', ['sent', 'partial', 'overdue'])
                    ->selectRaw('SUM(total - paid_amount) as remaining')
                    ->value('remaining') ?? 0;
                $overdueCount = Invoice::where('status', 'overdue')->count();
            } elseif (Schema::hasColumn('invoices', 'amount')) {
                $pendingInvoiceAmount = Invoice::whereNull('paid_at')->sum('amount') ?? 0;
                $overdueCount = Invoice::whereNull('paid_at')->where('due_date', '<', now())->count();
            }
        }

        // 4. Support Tickets Stat
        $supportTicketsCount = Schema::hasTable('tickets') ? Ticket::count() : 0;
        $urgentTicketsCount = Schema::hasTable('tickets') && Schema::hasColumn('tickets', 'priority')
            ? Ticket::where('priority', 'urgent')->count()
            : 0;

        return [
            Stat::make('Total Leads', $leadsCount)
                ->description($leadsContacted . ' sudah direspons AI')
                ->descriptionIcon('heroicon-m-sparkles')
                ->color('cyan')
                ->icon('heroicon-o-user-group'),

            Stat::make('Proyek & Service Assets', $activeProjectsCount)
                ->description($activeAssetsCount . ' aset aktif (MRR Rp ' . number_format($mrrAmount, 0, ',', '.') . ')')
                ->descriptionIcon('heroicon-m-server-stack')
                ->color('violet')
                ->icon('heroicon-o-briefcase'),

            Stat::make('Piutang Outstanding', 'Rp ' . number_format($pendingInvoiceAmount, 0, ',', '.'))
                ->description($overdueCount . ' invoice jatuh tempo')
                ->descriptionIcon('heroicon-m-exclamation-circle')
                ->color('amber')
                ->icon('heroicon-o-document-text'),

            Stat::make('Tiket Support', $supportTicketsCount)
                ->description($urgentTicketsCount . ' tiket urgent')
                ->descriptionIcon('heroicon-m-lifebuoy')
                ->color('emerald')
                ->icon('heroicon-o-lifebuoy'),
        ];
    }
}
