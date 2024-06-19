@props(['error' => false])

@if ($error)
    <p class="error-komponenta">{{ $error }}</p>
@endif