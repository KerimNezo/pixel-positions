@props(['job'])

<div class="job-card" style="padding: 15px; background-color:#221d1d; border-radius: 15px; display: flex; flex-direction:column; text-align: center;">
    <div style="text-align: start; font-size: 14px;">{{ $job->employer->name }}</div>

    <div style="padding-bottom: 20px; padding-top: 20px; font-weight: bold;">
        <h3>
            <a href="{{ $job->url }}" style="text-decoration: none; color: white;">
                {{ $job->title}}
            </a>
        </h3>
        <p> {{ $job->schedule }} - From {{ $job->salary }} </p>
    </div>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto; ">
        <div class="tagovi">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <x-employer-logo width="42" />
    </div>
</div>
