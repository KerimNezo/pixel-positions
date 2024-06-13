@props(['size' => 'base'])

@php
    $class = '';

    if ($size == 'base') {
        $class = 'veliki-tag';
    }

    if ($size == 'small') {
        $class = 'mali-tag';
    }
@endphp

    <a href="#" class="{{ $class }}" >{{ $slot }}</a>
