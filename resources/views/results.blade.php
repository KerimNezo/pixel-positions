<x-layout>
    <x-page-heading>Results</x-page-heading>

    @if ($jobs->isEmpty())
        <p>Opps... Looks like there are no jobs matching</p>
    @else
        <div  style="display: flex; flex-direction: column; position: sticky; gap: 15px;">
            @foreach ($jobs as $job)
                <x-job-card-wide :$job/>
            @endforeach
        </div>
    @endif

</x-layout>
