@props(['twitter' => []])

{{-- Twitter Card Meta Tags --}}
@foreach($twitter as $name => $content)
    @if(is_array($content))
        @foreach($content as $item)
            <meta name="{{ $name }}" content="{{ $item }}">
        @endforeach
    @else
        <meta name="{{ $name }}" content="{{ $content }}">
    @endif
@endforeach
