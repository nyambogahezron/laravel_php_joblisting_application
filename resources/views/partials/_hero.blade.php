<section
    class="h-55 align-center relative mb-4 flex flex-col justify-center space-y-4 bg-[#ef3b2d] pb-3 text-center">
    <div class="absolute left-0 top-0 h-full w-full bg-center bg-no-repeat opacity-10"
        style="background-image: url('images/laravel-logo.png')"></div>

    <div class="relative z-10">
        <h1 class="text-6xl font-bold uppercase text-white">
            Lara<span class="text-black">Gigs</span>
        </h1>
        <p class="my-4 text-2xl font-bold text-gray-200">
            Find or Post Jobs, Proposals & Projects
        </p>
        <div class="flex items-center justify-center space-x-3">
            @auth
            @else
                <div>
                    <a href="/register"
                        class="mt-2 inline-block rounded-xl border-2 border-white px-4 py-2 uppercase text-white hover:border-black hover:text-black">Sign
                        Up As Job Seeker
                    </a>
                </div>
                <div>
                    <a href="/register"
                        class="mt-2 inline-block rounded-xl border-2 border-white px-4 py-2 uppercase text-white hover:border-black hover:text-black">Sign
                        Up As Employee
                    </a>
                </div>
            @endauth
        </div>
    </div>
</section>
