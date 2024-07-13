@props(['job'])

<div
    class="flex rounded-lg bg-white/10 hover:bg-white/15 border-[2px] border-white/10 hover:border-blue-600 duration-200 transition-all font-mulish group">
    <div class="flex justify-center items-center px-2">
        <x-employer-logo :employer="$job->employer" :type=false />
    </div>
    <div class="w-full flex justify-center items-center flex-col gap-2 font-bold py-8 text-lg md:text-xl">
        <div class="w-full flex justify-between items-center px-4 md:px-6">
            <p class="text-gray-400">{{ $job->employer->name }}</p>
            <div class="flex items-center gap-2">
                <span class="border-[1px] border-gray-500 bg-none rounded-lg px-2 py-1 text-sm">
                    {{$job->schedule}}
                </span>
                <span class="border-[1px] border-gray-500 bg-none rounded-lg px-2 py-1 text-sm">22H</span>
            </div>
        </div>
        <div class="w-full flex justify-start items-center px-4 md:px-6">
            <h3 class=" text-start group-hover:text-blue-600 duration-200 transition-all">{{$job->title}}</h3>
        </div>
        <div class="w-full flex justify-between items-center px-4 md:px-6 mt-auto">
            <span class="text-gray-400 text-sm">{{$job->schedule}} - From {{ $job->salary }}</span>
            <div>
                @foreach ($job->tags as $tag)
                <x-tag size='md' :$tag />
                @endforeach
            </div>
        </div>
    </div>

</div>