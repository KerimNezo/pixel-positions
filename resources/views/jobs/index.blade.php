<x-layout>
    <div>
        <section style="text-align: center; margin-top: 35px;">
            <h1 style="font-weight: bold;">Let's Find Your Next Job</h1>

            <x-forms.form action="/search">
                <x-forms.input :label="false" name="q" placeholder="Web Developer..." />
            </x-forms.form>
        </section>

        <section style="padding-top: 40px;">
            <x-section-heading>Featured Jobs</x-section-heading>

            <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 32px; margin-top: 24px;">
                @foreach ($featured_jobs as $job)
                    <x-job-card :$job />
                @endforeach
                {{-- ovo cemo morati malo popraviti jer je ovo featured jobs dio --}}
            </div>

        </section>

        <section style="padding-top: 40px;">
            <x-section-heading>Tags</x-section-heading>

            <div class="tagovi" style="display: flex; justify-content:flex-start; margin-top: 15px;">
                @foreach ($tags as $tag)
                    <x-tag :$tag /> {{-- :tag="$tag" je isto kao i :$tag --}}
                @endforeach
            </div>

        </section>

        <section style="padding-top: 40px;">
            <x-section-heading>Recent Jobs</x-section-heading>

            <div  style="display: flex; flex-direction: column; position: sticky; margin-top: 15px; gap: 15px;">
                @foreach ($jobs as $job)
                    <x-job-card-wide :job="$job"/>  {{-- Mozemo isto ovdje staviti :$job --}}
                @endforeach
            </div>

        </section>
    </div>
</x-layout>
