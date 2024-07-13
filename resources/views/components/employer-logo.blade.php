@props(['employer','type'])


@php
$storagePath = $employer->logo;
@endphp
<img class="{{ $type === false ? 'max-w-[90px]' : 'max-w-[60px]' }} w-full rounded-lg" src="{{ $storagePath }}"
    alt="logo" />