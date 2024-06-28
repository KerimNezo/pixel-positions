@props(['employer', 'width' => 90])

@if ($employer->hasMedia('logos'))
    <img src="{{ asset($employer->getFirstMediaUrl('logos')) }}" alt="Employer Logo" style="border-radius: 15px;" width="{{ $width }}px" height="{{ $width }}px">
@else
    <img src="{{ asset($employer->logo) }}" alt="Default Logo" style="border-radius: 15px;" width="{{ $width }}px" height="{{ $width }}px">
@endif
