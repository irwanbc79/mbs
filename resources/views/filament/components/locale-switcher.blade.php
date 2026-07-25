<div style="display: flex; align-items: center; justify-content: center; margin-bottom: 1rem; text-align: center;">
    <a href="/admin/locale/{{ app()->getLocale() === 'id' ? 'en' : 'id' }}"
       title="{{ app()->getLocale() === 'id' ? 'Switch to English' : 'Ganti ke Bahasa Indonesia' }}"
       style="display: inline-flex; align-items: center; gap: 6px; padding: 6px 12px; border-radius: 8px; border: 1px solid rgba(51, 65, 85, 0.8); background-color: rgba(15, 23, 42, 0.9); color: #e2e8f0; font-size: 12px; font-weight: 700; text-decoration: none; box-shadow: 0 2px 4px rgba(0,0,0,0.2);">
        @if(app()->getLocale() === 'id')
            <svg style="width: 16px; height: 12px; border-radius: 2px; flex-shrink: 0; display: inline-block; vertical-align: middle;" viewBox="0 0 20 14" fill="none"><rect width="20" height="7" fill="#CE1126"/><rect y="7" width="20" height="7" fill="#FFFFFF"/></svg>
            <span style="font-size: 12px; font-weight: 700; color: #f8fafc;">ID (Bahasa)</span>
        @else
            <svg style="width: 16px; height: 12px; border-radius: 2px; flex-shrink: 0; display: inline-block; vertical-align: middle;" viewBox="0 0 20 14"><rect width="20" height="14" fill="#012169"/><path d="M0,0 L20,14 M20,0 L0,14" stroke="#fff" stroke-width="2.8"/><path d="M10,0 V14 M0,7 H20" stroke="#fff" stroke-width="4.5"/><path d="M10,0 V14 M0,7 H20" stroke="#C8102E" stroke-width="2.8"/><path d="M0,0 L20,14 M20,0 L0,14" stroke="#C8102E" stroke-width="1.5"/></svg>
            <span style="font-size: 12px; font-weight: 700; color: #f8fafc;">EN (English)</span>
        @endif
        <svg style="width: 14px; height: 14px; opacity: 0.7; margin-left: 2px; display: inline-block; vertical-align: middle;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
    </a>
</div>
