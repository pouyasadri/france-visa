@props(['meta' => []])

{{-- Basic Meta Tags --}}
@foreach($meta as $name => $content)
    @if($name === 'title')
        <title>{{ $content }}</title>
    @else
        <meta name="{{ $name }}" content="{{ $content }}">
    @endif
@endforeach
