@include("partials.header", [$title])
    <div class="flex flex-col ">
        <article id="services" class="py-10 grid grid-cols-1 gap-2">
            <div class="col-span-2">
                <div class="container mx-auto w-10/12 lg:mt-10 mb-16 bg-white shadow-lg rounded">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="bg-cover bg-center hidden lg:block">
                            <img src="{{ asset('img/cover.png'); }}" alt="Company Logo" class="h-100 w-full">
                        </div>
                        <div class="p-8 px-6 lg:px-2 lg:w-100">
                            <h3 class="text-3xl font-extrabold mb-1">Forgot Password</h3>
                            <span class="text-gray-500">Already have an account? </span><a href="/login" class="text-green-800 font-bold hover:underline">Sign in</a>
                            @error('login')
                            <div class="flex items-center mt-4 rounded bg-red-700 text-white text-md font-semibold px-4 py-3" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                </svg>
                                <p class="ml-2"> {{ $message }}.</p>
                            </div>
                            @enderror()

                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>

    @include('partials.footer')