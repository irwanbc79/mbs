<?php

namespace App\Providers\Filament;

use App\Http\Middleware\SetAdminLocaleMiddleware;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\View\PanelsRenderHook;
use Filament\Widgets\AccountWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\HtmlString;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        $isEn = app()->getLocale() === 'en';

        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->brandName('MBS Admin')
            ->brandLogo(asset('images/brand/mbs-symbol-160.png'))
            ->brandLogoHeight('4rem')
            ->renderHook(
                PanelsRenderHook::HEAD_END,
                fn (): HtmlString => new HtmlString(sprintf(
                    '<link rel="shortcut icon" href="%s" type="image/x-icon">'.
                    '<link rel="icon" href="%s" type="image/x-icon">'.
                    '<link rel="icon" type="image/png" sizes="32x32" href="%s">'.
                    '<link rel="icon" type="image/png" sizes="16x16" href="%s">'.
                    '<link rel="apple-touch-icon" sizes="180x180" href="%s">'.
                    '<style>'.
                    '@keyframes logoPulse{0%%,100%%{filter:drop-shadow(0 0 18px rgba(34,211,238,.55))}50%%{filter:drop-shadow(0 0 32px rgba(34,211,238,.9))}}'.
                    '.fi-logo{animation:logoPulse 3s ease-in-out infinite}'.
                    'body{background-image:radial-gradient(ellipse 90%% 50%% at 50%% -8%%,rgba(6,182,212,.1) 0%%,transparent 55%%)}'.
                    '</style>',
                    asset('favicon.ico'),
                    asset('favicon.ico'),
                    asset('favicon/favicon-32x32.png'),
                    asset('favicon/favicon-16x16.png'),
                    asset('favicon/apple-touch-icon.png')
                ))
            )
            ->renderHook(
                PanelsRenderHook::AUTH_LOGIN_FORM_BEFORE,
                fn (): string => view('filament.components.locale-switcher')->render()
            )
            ->renderHook(
                PanelsRenderHook::USER_MENU_BEFORE,
                fn (): string => view('filament.components.locale-switcher')->render()
            )
            ->favicon(asset('favicon.ico'))
            ->colors([
                'primary' => Color::Cyan,
                'gray'    => Color::Slate,
            ])
            ->darkMode(true)
            ->navigationGroups([
                NavigationGroup::make($isEn ? 'CRM & Sales' : 'CRM & Penjualan'),
                NavigationGroup::make($isEn ? 'Finance & Invoices' : 'Keuangan & Tagihan'),
                NavigationGroup::make($isEn ? 'Projects & Assets' : 'Proyek & Layanan'),
                NavigationGroup::make($isEn ? 'Support & Observability' : 'Dukungan & Log'),
                NavigationGroup::make($isEn ? 'Settings & System' : 'Pengaturan Sistem'),
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                \App\Filament\Widgets\StatsOverview::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                SetAdminLocaleMiddleware::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
