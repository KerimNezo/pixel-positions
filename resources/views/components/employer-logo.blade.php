@props(['employer', 'width' => 90])

<img src="{{ asset($employer->logo) }}" alt="" style="border-radius: 15px;" width="{{ $width }}px" height="{{ $width }}px">
