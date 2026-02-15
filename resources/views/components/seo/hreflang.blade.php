@props(['hreflang' => [], 'defaultLocale' => 'en'])

{{-- Hreflang Tags for Multilingual SEO --}}
@foreach($hreflang as $locale => $url)
    <link rel="alternate" hreflang="{{ $locale }}" href="{{ $url }}">
@endforeach

{{-- x-default for default language --}}
@if(isset($hreflang[$defaultLocale]))
    <link rel="alternate" hreflang="x-default" href="{{ $hreflang[$defaultLocale] }}">
@endif
