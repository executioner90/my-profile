<div id="bars" class="grid grid-cols-3 gap-x-10 pb-10">
    @foreach($test as $language => $progress)
        <div>
            <h2 class="text-lg font-semibold">{{ $language }}</h2>
            <div class="relative pt-1" style="width: 100%;">
                <div class="flex mb-2 items-center justify-between">
                <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full {{ $progress >= 50 ? 'bg-orange-500' : 'bg-green-500' }} text-white">
                    {{ $progress }}%
                </span>
                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full bg-gray-200 text-gray-700">
                    {{ $progress >= 50 ? 'Intermediate' : 'Beginner' }}
                </span>
                </div>
                <div class="overflow-hidden h-4 mb-2 text-xs flex rounded bg-gray-200 border border-gray-300">
                    <div style="width:{{ $progress }}%" class="{{ $progress >= 50 ? 'bg-orange-500' : 'bg-green-500' }}"></div>
                    <div style="width:{{ 100 - $progress }}%" class="bg-white"></div>
                </div>
            </div>
        </div>
    @endforeach
</div>
