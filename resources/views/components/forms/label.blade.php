@props(['name', 'label'])

<div style="display: inline-flex; align-items: center; column-gap: 0.5rem;">
    <span style="width: 0.5rem; height: 0.5rem; background-color:white; display: inline-block;"></span>
    <label style="font-weight:bold;" for="{{ $name }}">{{ $label }}</label>
</div>