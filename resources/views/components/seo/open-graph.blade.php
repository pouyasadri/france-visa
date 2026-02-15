@props(['og' => []])

{{-- Open Graph Meta Tags --}}
@foreach($og as $property => $content)
    @if(is_array($content))
        @foreach($content as $item)
            <meta property="{{ $property }}" content="{{ $item }}">
        @endforeach
    @else
        <meta property="{{ $property }}" content="{{ $content }}">
    @endif
@endforeach
