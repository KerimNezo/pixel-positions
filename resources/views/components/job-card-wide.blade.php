@props(['job'])

<div class="job-card" style="padding: 15px; background-color:#221d1d; border-radius: 15px; display: flex; text-align: center; gap: 15px;">
    <div>
        <x-employer-logo />
    </div>  
    
    <div style="flex: 1; text-align: left; display: flex; flex-direction: column; ">
        <a style="font-size: 12px; color:darkgray;">Laracasts</a>

        <h3 style="font-size: 20px; margin: 0px; margin-top: 10px;"> Video editor </h3>
        <p style="margin: 0px; margin-top: auto;"> Full time - From $60,000 </p>
    </div>

    <div class="tagovi" style="display: flex; gap: 5px; margin-top: auto;">
        @foreach ($job->tags as $tag)
            <x-tag :$tag size="small">Backend</x-tag>
        @endforeach
    </div>

</div>