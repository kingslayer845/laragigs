<x-layout>
    <main>
        <div class="mx-4">
            <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
                <header class="text-center">
                    <h2 class="text-2xl font-bold uppercase mb-1">
                        Edit Gig
                    </h2>
                    <p class="mb-4">Edit: {{ $listing['title'] }}</p>
                </header>

                <form action="/listings/{{ $listing['id'] }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-6">
                        <label for="company" class="inline-block text-lg mb-2">Company Name</label>
                        <input type="text" value="{{ $listing['company'] }}"
                            class="border border-gray-200 rounded p-2 w-full" name="company" value="Acme Corp" />
                    </div>

                    <div class="mb-6">
                        <label for="title" class="inline-block text-lg mb-2">Job Title</label>
                        <input type="text" value="{{ $listing['title'] }}"
                            class="border border-gray-200 rounded p-2 w-full" name="title"
                            placeholder="Example: Senior Laravel Developer" value="Senior Laravel Developer" />
                    </div>

                    <div class="mb-6">
                        <label for="location" class="inline-block text-lg mb-2">Job Location</label>
                        <input type="text"value="{{ $listing['location'] }}"
                            class="border border-gray-200 rounded p-2 w-full" name="location"
                            placeholder="Example: Remote, Boston MA, etc" value="Boston, MA" />
                    </div>

                    <div class="mb-6">
                        <label for="email" class="inline-block text-lg mb-2">Contact Email</label>
                        <input type="text" value="{{ $listing['email'] }}"
                            class="border border-gray-200 rounded p-2 w-full" name="email"
                            value="contact@acmecorp.com" />
                    </div>

                    <div class="mb-6">
                        <label for="website" class="inline-block text-lg mb-2">
                            Website/Application URL
                        </label>
                        <input type="text"value="{{ $listing['website'] }}"
                            class="border border-gray-200 rounded p-2 w-full" name="website"
                            value="https://acmecorp.com" />
                    </div>

                    <div class="mb-6">
                        <label for="tags" class="inline-block text-lg mb-2">
                            Tags (Comma Separated)
                        </label>
                        <input type="text" value="{{ $listing['tags'] }}"
                            class="border border-gray-200 rounded p-2 w-full" name="tags"
                            placeholder="Example: Laravel, Backend, Postgres, etc" value="Laravel, Backend, Postgres" />
                    </div>

                    <div class="mb-6">
                        <label for="logo" class="inline-block text-lg mb-2">
                            Company Logo
                        </label>
                        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
                        <img class="hidden w-48 mr-6 md:block"
                            src="{{ $listing['logo'] ? asset('storage/' . $listing['logo']) : asset('images/no-image.png') }}"
                            alt="" />

                    </div>

                    <div class="mb-6">
                        <label for="description" class="inline-block text-lg mb-2">
                            Job Description
                        </label>
                        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                            placeholder="Include tasks, requirements, salary, etc">{{ $listing['description'] }}</textarea>
                    </div>

                    <div class="mb-6">
                        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black text-lg">
                            Create Gig
                        </button>

                        <a href="dashboard.html" class="text-black ml-4">
                            Back
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </main>


</x-layout>
