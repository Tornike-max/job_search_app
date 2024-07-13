@props(['job'])

<div
    class="flex flex-col justify-center items-center rounded-lg bg-white/10 hover:bg-white/15 border-[2px] border-white/10 hover:border-blue-600 duration-200 transition-all group">
    <div class="w-full px-2 sm:px-4 py-4 text-start text-sm font-semibold">Laracasts</div>
    <div class="flex justify-center items-center flex-col  py-8 text-lg px-2">
        <h3 class="group-hover:text-blue-600 duration-200 transition-all font-bold">{{ $job->title }}</h3>
        <p class="mt-2">{{ $job->schedule }} - From {{$job->salary}}</p>
    </div>
    <div class="w-full flex justify-between items-center px-2 sm:px-4 py-4 mt-auto">
        <div>
            @foreach ($job->tags as $tag)
            <x-tag size='sm' :$tag />
            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer" :type=true />
    </div>
</div>