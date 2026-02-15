@props(['items'])

@php
    $rtlLocales = ['fa'];
    $isRtl = in_array(app()->getLocale(), $rtlLocales, true);
@endphp

<div {{ $attributes->merge(['class' => 'pagination-wrapper mt-4']) }}>
    {{ $items->links('vendor.pagination.custom', ['isRtl' => $isRtl]) }}
</div>