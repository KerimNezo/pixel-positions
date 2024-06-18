@props(['tag', 'size' => 'base'])

@php
    $class = ''; 
    // ovo je u kursu on koristio da klase u html tagovima mijenja jer koristi tailwind
    // ja sam samo prilagodio svojim klasama koje sam napisao i app.css

    if ($size == 'base') {
        $class = 'veliki-tag';
    }

    if ($size == 'small') {
        $class = 'mali-tag';
    }
@endphp

    <a href="/tags/{{ strtolower($tag->name) }}" class="{{ $class }}" >{{ $tag->name }}</a>
