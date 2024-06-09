<x-layout>
    <div>
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div style="display: flex; justify-content:space-between; position: sticky; margin-top: 15px;">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
            
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="tagovi" style="display: flex; justify-content:space-between; position: sticky; margin-top: 15px;">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>

        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
           
        </section>
    </div>
</x-layout>