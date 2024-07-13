<x-layout>
    <div class="space-y-6 mb-10">

        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

            <form action="/search" method="GET" class="mt-4 mb-6">
                <input name="q" type="text"
                    class="py-4 px-5 rounded-lg border-white/20 bg-white/10 max-w-xl w-full focus:border-blue-600 mt-4"
                    placeholder="Web Developer..." />
            </form>
        </section>

        <section>
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-4 mt-6">
                @foreach ($featuredJobs as $job)
                <x-job-card :$job />
                @endforeach
            </div>

        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="space-x-1 mt-6">
                @foreach ($tags as $tag)
                <x-tag size='lg' :$tag />
                @endforeach

            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="space-y-4 mt-6">
                @foreach ($jobs as $job)
                <x-job-card-wide :$job />
                @endforeach
            </div>

            <div class="text-black my-4 ">
                {{$jobs->links()}}
            </div>

        </section>

    </div>
</x-layout>