<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Retired Slugs
    |--------------------------------------------------------------------------
    |
    | Posts withdrawn for policy reasons rather than deleted. Their rows stay
    | in the database as drafts, so the route would otherwise answer 404 --
    | a soft signal Google can keep cached for weeks. Answering 410 Gone gets
    | them dropped from the index far faster, which is what matters while the
    | site is waiting on an AdSense review.
    |
    */

    // Thin AI news round-ups withdrawn 2026-09-08 during the "Low value
    // content" remediation. Backup: backups/20260908-before-compliance-cleanup/
    'retired_slugs' => [
        'tren-rekrutmen-it-2026-upskilling-karyawan-efektif',
        'era-agentic-ai-erp-crm-modern-2026',
        'anthropic-ipo-rahasia-investasi-ai-global',
        'microsoft-rilis-7-model-mandiri-frontier-ai',
        'openai-chatgpt-2026-superapp-produktivitas',
        'panduan-kepatuhan-eu-ai-act-indonesia',
        'membangun-sistem-multi-agent-otomatisasi-bisnis',
        'mengatasi-scaling-crisis-infrastruktur-it-ai',
        'recursive-self-improvement-ai-mengode-diri-sendiri',
        'kelahiran-uk-ai-economics-institute-dampak-finansial',
    ],

];
