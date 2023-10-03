{{--  singe job list card  --}}

@props(['listing'])

<x-card>

    <div class="flex">
        <img class="mr-4 w-40 md:block"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
            alt="{{ $listing->title }}" />
        <div class="pl-3">
            <!-- title and company name  -->
            <h3 class="text-xl hover:text-blue-700 hover:underline">
                <a href="/listing/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="mb-4 text-xl font-bold">{{ $listing->company }}</div>
            <ul class="flex">
                <x-listing-tags :tagsCsv="$listing->tags" />
            </ul>

            <div class="flex gap-x-3">
                <div class="mt-2 text-lg text-slate-700">
                    <i class="fa-solid fa-location-dot"></i>
                    {{ $listing->location }}
                </div>
                <div class="mt-2 text-lg text-slate-700">
                    <i class="fa-solid fa-location-dot"></i>
                    Dateline: {{ $listing->dateline }}
                </div>
            </div>
            <div class="mt-4 border bg-red-600 text-lg text-white">
                <a href="/listing/{{ $listing->id }}"><i
                        class="fa-solid fa-location-dot">View Job</i> </a>
            </div>
        </div>
    </div>
</x-card>
