<x-layout>
    @include('partials._hero')
    @include('partials._search')
    <div class="mx-4 gap-4 space-y-4 md:space-y-0 lg:grid lg:grid-cols-2">

        @unless (count($listings) == 0)
            @foreach ($listings as $listing)
                <x-listing-card :listing="$listing" />
            @endforeach
        @else
            <p>No listing found</p>
        @endunless
    </div>

    {{--  pagination  --}}
    <div class="mt-6 p-4">
        {{ $listings->links() }}
    </div>
</x-layout>
