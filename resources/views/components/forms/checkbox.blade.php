@props(['label', 'name'])

@php
    $defaults = [
        'type' => 'checkbox',
        'id' => $name,
        'name' => $name,
        'value' => old($name)
    ];
@endphp

<x-forms.field :$label :$name>
    <div class="checkbox-komponenta">
        <input {{ $attributes($defaults) }}>
        <span style="padding-left: 0.25rem;">{{ $label }}</span>
    </div>
</x-forms.field>