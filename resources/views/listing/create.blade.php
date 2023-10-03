<x-layout>
    <x-card class="mx-auto mt-24 max-w-lg p-10">
        <header class="text-center">
            <h2 class="mb-5 text-2xl font-bold uppercase">Create a Job</h2>
        </header>

        <form method="POST" action="/listings" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="company" class="mb-2 inline-block text-lg">Company
                    Name</label>
                <input type="text"
                    class="w-full rounded border border-gray-200 p-2"
                    name="company" value="{{ old('company') }}" />

                @error('company')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="title" class="mb-2 inline-block text-lg">Job
                    Title</label>
                <input type="text"
                    class="w-full rounded border border-gray-200 p-2"
                    name="title" placeholder="Example: Senior Software"
                    value="{{ old('title') }}" />

                @error('title')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="industry" class="input-label">Industry</label>
                <input type="text" class="input" name="industry"
                    placeholder="Example: Computer Science, Business"
                    value="{{ old('industry') }}" />

                @error('industry')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="experience" class="input-label">Experience
                    Level</label>
                <input type="text" class="input" name="experience_level"
                    placeholder="Example: Years of experience, Entry"
                    value="{{ old('experience') }}" />
                @error('experience')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="dateline" class="input-label">Dateline</label>
                <input type="datetime" class="input" name="dateline"
                    placeholder="DD/MM/Year" value="{{ old('dateline') }}" />
                @error('dateline')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="jobType" class="input-label">Job
                    Type</label>
                <input type="text" class="input" name="jobType"
                    placeholder="Example: Job, Internship, Tender"
                    value="{{ old('jobType') }}" />
                @error('jobType')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="mb-2 inline-block text-lg">Job
                    Location</label>
                <input type="text"
                    class="w-full rounded border border-gray-200 p-2"
                    name="location"
                    placeholder="Example: Remote, Boston MA, etc"
                    value="{{ old('location') }}" />

                @error('location')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="mb-2 inline-block text-lg">
                    Contact Email
                </label>
                <input type="text"
                    class="w-full rounded border border-gray-200 p-2"
                    name="email" value="{{ old('email') }}" />

                @error('email')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="website" class="mb-2 inline-block text-lg">
                    Website/Application URL
                </label>
                <input type="text"
                    class="w-full rounded border border-gray-200 p-2"
                    name="website" value="{{ old('website') }}" />

                @error('website')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="tags" class="mb-2 inline-block text-lg">
                    Tags (Comma Separated)
                </label>
                <input type="text"
                    class="w-full rounded border border-gray-200 p-2"
                    name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc"
                    value="{{ old('tags') }}" />

                @error('tags')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="logo" class="mb-2 inline-block text-lg">
                    Company Logo
                </label>
                <input type="file"
                    class="w-full rounded border border-gray-200 p-2 file:mr-4 file:rounded-full file:border-0 file:bg-violet-50 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-violet-700 hover:file:bg-violet-100"
                    name="logo" />

                @error('logo')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="mb-2 inline-block text-lg">
                    Job Description
                </label>
                <textarea class="w-full rounded border border-gray-200 p-2" name="description"
                    rows="10" placeholder="Include tasks, requirements, salary, etc">{{ old('description') }}</textarea>

                @error('description')
                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    class="rounded bg-[#ef3b2d] px-4 py-2 text-white hover:bg-black">
                    Create Job
                </button>

                <a href="/" class="ml-4 text-black"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
