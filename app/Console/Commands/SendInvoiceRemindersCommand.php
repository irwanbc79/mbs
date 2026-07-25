<?php

namespace App\Console\Commands;

use App\Models\Invoice;
use App\Services\WhatsAppNotificationService;
use Illuminate\Console\Command;

class SendInvoiceRemindersCommand extends Command
{
    protected $signature = 'morabangun:send-reminders';

    protected $description = 'Autonomous cron job to scan and send automated WhatsApp & Email reminders for upcoming and overdue invoices.';

    public function handle(WhatsAppNotificationService $waService): int
    {
        $this->info('Scanning unpaid and overdue invoices for autonomous reminders...');

        // Scan invoices due in 7 days, 3 days, or overdue
        $invoices = Invoice::whereIn('status', ['sent', 'partial', 'overdue'])
            ->whereNotNull('client_phone')
            ->where(function ($query) {
                $query->whereNull('last_reminder_sent_at')
                    ->orWhere('last_reminder_sent_at', '<', now()->subDays(3));
            })
            ->get();

        $count = 0;
        foreach ($invoices as $invoice) {
            $remainingFormatted = number_format($invoice->remaining, 0, ',', '.');
            $dueDateFormatted = $invoice->due_date ? $invoice->due_date->format('d M Y') : '-';

            $msg = "Halo Bpk/Ibu {$invoice->client_name},\n\nPemberitahuan Otomatis PT Mora Bangun Nusantara (MBS).\n\nTagihan Invoice #{$invoice->invoice_number} sebesar Rp {$remainingFormatted} dengan jatuh tempo pada {$dueDateFormatted}.\n\nMohon dapat melakukan konfirmasi atau perpanjangan. Terima kasih.";

            $sent = $waService->sendMessage($invoice->client_phone, $msg);
            if ($sent) {
                $invoice->update(['last_reminder_sent_at' => now()]);
                $count++;
            }
        }

        $this->info("Completed! Processed and sent {$count} automated invoice reminders.");
        return 0;
    }
}
