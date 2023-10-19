<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="images/favicon.ico" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

    {{--  add alphine js link   --}}

    @vite('resources/css/app.css')

    <title>JobList -- Find And Post - Jobs</title>
</head>

<body>
    <nav class="mb-4 flex items-center justify-between">
        {{--  <!-- logo -->   --}}
        <div class="">
            <a href="/">
                <img class="logo h-10 w-20" src="images/logo.png"
                    alt="logo" />
            </a>
        </div>
        {{--  nav links   --}}
        <ul class="flex space-x-6 text-lg">
            <li>
                <a href="register.html" class="hover:text-[#ef3b2d]"><i
                        class="fa-solid fa-user-plus"></i> About Us</a>
            </li>
            <li>
                <a href="register.html" class="hover:text-[#ef3b2d]"><i
                        class="fa-solid fa-user-plus"></i> Opportunities</a>
            </li>
            <li>
                <a href="register.html" class="hover:text-[#ef3b2d]"><i
                        class="fa-solid fa-user-plus"></i> Tenders</a>
            </li>
            <li>
                <a href="register.html" class="hover:text-[#ef3b2d]"><i
                        class="fa-solid fa-user-plus"></i> Employers</a>
            </li>
            <li>
                <a href="register.html" class="hover:text-[#ef3b2d]"><i
                        class="fa-solid fa-user-plus"></i> Career</a>
            </li>
        </ul>

        <ul class="mr-6 flex space-x-6 text-lg">
            @auth
                <li>
                    <span class="font-bold uppercase">
                        Welcome {{ auth()->user()->name }}
                    </span>
                </li>
                <li>
                    <a href="/listings/manage" class="hover:text-[#ef3b2d]"><i
                            class="fa-solid fa-gear"></i> Manage Listings</a>
                </li>
                <li>
                    <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit">
                            <i class="fa-solid fa-door-closed"></i> Logout
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="/listings/create"
                        class="border bg-[#ef3b2d] px-2 py-1 font-bold text-white hover:bg-blue-600"><i
                            class="fa-solid fa-arrow-right-to-bracket"></i> POST
                        JOB</a>
                </li>
                <li>
                    <a href="register.html" class="hover:text-[#ef3b2d]"><i
                            class="fa-solid fa-user-plus"></i> Register</a>
                </li>
                <li>
                    <a href="login.html" class="hover:text-[#ef3b2d]"><i
                            class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a>
                </li>

            </ul>
        @endauth
        </ul>
    </nav>
    <main>{{ $slot }}</main>


    {{--  footer   --}}
    <footer
        class="item-center bottom-0 left-0 mt-24 w-full justify-start bg-[#ef3b2d] p-8 text-sm font-bold text-white opacity-90 md:justify-center">
        <div
            class="flex flex-wrap items-start justify-between gap-20 max-lg:flex-col">
            <!-- col 1 start -->
            <div class="flex flex-col items-start">
                <a href="index.html"><img class="logo h-10 w-20"
                        src="images/logo.png" alt="" /></a>
                <div
                    class="text-white- mt-6 text-base capitalize leading-7 sm:max-w-sm">
                    Job-List is a free service, Interview fee is not
                    required<br />
                    You are One step to find you dream Job or candidates.
                </div>

                <div class="">
                    <div class="mt-3 text-slate-800">Social Media Links</div>

                    <div
                        class="mx-2 mt-4 flex items-center justify-center gap-6">
                        <img src="images/facebook.svg" alt="facebook icon"
                            srcset=""
                            class="h-12 w-12 rounded-full bg-white hover:bg-blue-600" />
                        <img src="images/linkedin.svg" alt="linkedin icon"
                            srcset=""
                            class="h-12 w-12 rounded-full bg-white hover:bg-blue-600" />
                        <img src="images/instagram.svg" alt="instagram icon"
                            srcset=""
                            class="h-12 w-12 rounded-full bg-white hover:bg-blue-600" />
                    </div>
                </div>
            </div>
            {{--  <!-- col 1 ends  -->  --}}

            {{--  <!-- col 2 start -->  --}}
            <div class="flex flex-1 flex-wrap justify-between gap-20 lg:gap-10">
                <div>
                    <h4
                        class="font-montserrat mb-6 text-xl font-medium leading-normal text-slate-800">
                        Candidates
                    </h4>
                    <ul>
                        <li
                            class="font-montserrat text-white-400 hover:text-slate-gray mt-3 text-base leading-normal hover:text-slate-800">
                            <a href="#">Job List</a>
                        </li>
                        <li
                            class="font-montserrat text-white-400 hover:text-slate-gray mt-3 text-base leading-normal hover:text-slate-800">
                            <a href="#">Opportunities</a>
                        </li>
                        <li
                            class="font-montserrat text-white-400 hover:text-slate-gray mt-3 text-base leading-normal hover:text-slate-800">
                            <a href="#">Tenders</a>
                        </li>
                    </ul>
                </div>
            </div>
            {{--  <!-- col 2 ends  -->  --}}

            {{--  <!-- col 3 start -->  --}}
            <div class="flex flex-1 flex-wrap justify-between gap-20 lg:gap-10">
                <div>
                    <h4
                        class="font-montserrat mb-6 text-xl font-medium leading-normal text-slate-800">
                        Employers
                    </h4>
                    <ul>
                        <li
                            class="font-montserrat text-white-400 hover:text-slate-gray mt-3 text-base leading-normal hover:text-slate-800">
                            <a href="#">Employee Account</a>
                        </li>
                        <li
                            class="font-montserrat text-white-400 hover:text-slate-gray mt-3 text-base leading-normal hover:text-slate-800">
                            <a href="#">Post A Job</a>
                        </li>
                        <li
                            class="font-montserrat text-white-400 hover:text-slate-gray mt-3 text-base leading-normal hover:text-slate-800">
                            <a href="#">Blogs</a>
                        </li>
                    </ul>
                </div>
            </div>
            {{--  <!-- col 3 ends  -->  --}}

            {{--  <!-- col 4 start -->  --}}
            <div class="flex flex-1 flex-wrap justify-between gap-20 lg:gap-10">
                <div>
                    <h4
                        class="font-montserrat mb-6 text-xl font-medium leading-normal text-slate-800">
                        More
                    </h4>
                    <ul>
                        <li
                            class="font-montserrat text-white-400 hover:text-slate-gray mt-3 text-base leading-normal hover:text-slate-800">
                            <a href="#">Home</a>
                        </li>
                        <li
                            class="font-montserrat text-white-400 hover:text-slate-gray mt-3 text-base leading-normal hover:text-slate-800">
                            <a href="#">About Us</a>
                        </li>
                        <li
                            class="font-montserrat text-white-400 hover:text-slate-gray mt-3 text-base leading-normal hover:text-slate-800">
                            <a href="#">Links</a>
                        </li>
                    </ul>
                </div>
            </div>
            {{--  <!-- col 4 ends  -->  --}}
        </div>

        {{--  <!-- copyright section start -->  --}}
        <div
            class="relative bottom-0 left-0 mt-5 flex w-full items-center justify-center border-t pt-3 font-bold">
            <p class="text-sm">Copyright &copy; 2022, All Rights reserved</p>
        </div>
        {{--  copyright section ends   --}}
    </footer>

    <x-flash-message />
</body>

</html>
