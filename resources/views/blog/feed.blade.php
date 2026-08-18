@php echo '<?xml version="1.0" encoding="UTF-8"?>'; @endphp
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
<channel>
    <title>Mora Bangun Solutions Blog</title>
    <link>{{ route('blog.index') }}</link>
    <description>Insight praktis ERP, CRM, AI, otomasi, dan transformasi digital untuk bisnis Indonesia.</description>
    <language>id-ID</language>
    <atom:link href="{{ route('blog.feed') }}" rel="self" type="application/rss+xml" />
@foreach($posts as $post)
    <item>
        <title>{{ $post->title }}</title>
        <link>{{ route('blog.show', $post->slug) }}</link>
        <guid isPermaLink="true">{{ route('blog.show', $post->slug) }}</guid>
        <description>{{ $post->excerpt }}</description>
        <pubDate>{{ $post->published_at?->toRssString() }}</pubDate>
    </item>
@endforeach
</channel>
</rss>
