@props(['job'])

<div class="job-card" style="padding: 15px; background-color:#221d1d; border-radius: 15px; display: flex; flex-direction:column; text-align: center;">
    <div style="text-align: start; font-size: 14px;">Laracasts</div>

    <div style="padding-bottom: 20px; padding-top: 20px; font-weight: bold;">
        <h3> Video editor </h3>
        <p> Full time - From $60,000 </p>
    </div>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto; ">
        <div class="tagovi">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small">Backend</x-tag>
            @endforeach
        </div>

        <x-employer-logo width="42" />
    </div>
</div>