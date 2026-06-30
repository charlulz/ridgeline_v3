@props(['pageKey', 'fallback' => null])

@php
    $image = company_cam($pageKey, $fallback);
@endphp

@if ($image['url'])
    <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" {{ $attributes }}>
@endif
