@props(['schema'])

{{-- Structured Data (JSON-LD) --}}
@if(is_string($schema))
    {!! $schema !!}
@elseif(is_object($schema) && method_exists($schema, 'toScript'))
    {!! $schema->toScript() !!}
@elseif(is_array($schema))
    <script type="application/ld+json">
        {!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endif
