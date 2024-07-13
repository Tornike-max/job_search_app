@props(['tag','size' => 'sm'])

@php
$classes = 'bg-white/10 hover:bg-white/25 duration-200 transition-all rounded-lg ';

if ($size === 'sm') {
$classes .= 'px-2 py-1 text-sm';
}

if ($size === 'md') {
$classes .= 'px-2 py-2 text-base';
}

if ($size === 'lg') {
$classes .= 'px-3 py-2 text-lg';
}
@endphp

<a href="{{route('tagname',$tag)}}" class="{{ $classes }}">{{ $tag->name }}</a>