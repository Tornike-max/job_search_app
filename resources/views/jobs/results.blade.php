<x-layout>
    <section class="text-center pt-6">
        <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>

        <form action="/search" method="GET" class="mt-4 mb-6">
            <input name="q" type="text"
                class="py-4 px-5 rounded-lg border-white/20 bg-white/10 max-w-xl w-full focus:border-blue-600 mt-4"
                placeholder="Web Developer..." />
        </form>
    </section>
    <div class="space-y-4 mt-6">
        @foreach ($jobs as $job)
        <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>