@include("partials.header", [$title])
    <div class="flex flex-col ">
        <header class="bg-cover bg-center" id="header">
            <div><img src="https://images.unsplash.com/photo-1622737133809-d95047b9e673?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" class="object-cover h-96 lg:h-100 w-screen"></div>
            <div><img src="https://images.unsplash.com/photo-1497384401032-2182d2687715?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="object-cover h-96 lg:h-100 w-screen"></div>
            <div><img src="https://images.unsplash.com/photo-1609342122563-a43ac8917a3a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="object-cover h-96 lg:h-100 w-screen"></div>
            <div><img src="https://images.unsplash.com/photo-1622547748225-3fc4abd2cca0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" class="object-cover h-96 lg:h-100 w-screen"></div>
            <div><img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1169&q=80" class="object-cover h-96 lg:h-100 w-screen"></div>
            <div><img src="https://images.unsplash.com/photo-1610653216265-74079d187414?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" class="object-cover h-96 lg:h-100 w-screen"></div>
        </header>
        <article id="services" class="bg-white py-10 grid grid-cols-1 gap-2 mb-10">
            <div class="col-span-2">
                <div class="container mx-auto w-10/12 mb-16">
                    <div class="mt-10 mb-10">
                        <h3 class="uppercase font-extrabold text-4xl ">Our Services</h3>
                    </div>
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                        @foreach ($services as $service)
                        <a href="/services/{{ $service->id }}" class="group">
                            <div class="bg-gray-200 rounded-t-lg shadow-lg border-b-4 group-hover:border-b-4 group-hover:border-green-800 transition duration-300">
                                <div class="bg-cover bg-center">
                                    <img src="{{ asset('img/services/'.$service->image.'') }}" class="rounded-t-lg h-56 w-screen">
                                </div>
                                <div class="p-5">
                                    <span class="uppercase tracking-wide font-semibold">
                                        <p class="truncate">{{ $service->title }}</p>
                                    </span>
                                    <p class="text-gray-500 text-justify hidden lg:block">{{ Str::substr($service->description, 0, 100) }}...</p>
                                    <div class="mt-3 lg:mt-5">
                                        <span class="group-hover:bg-green-700 p-2 rounded group-hover:text-white transition duration-300">Read More ...</span>
                                    </div>
                                </div>
                            </div>
                        </a>  
                        @endforeach
                    </div>
                    <a href="/services" class="flex justify-center">
                        <div class="rounded-full text-center mt-20 p-3 border-2 font-semibold border-green-800 hover:bg-green-800 hover:text-white transition duration-300">
                            View More
                        </div>
                    </a>
                </div>
            </div>
        </article>
        <article id="pets" class="bg-gray-200 py-6 h-auto">
            <div class="container mx-auto mb-16 w-10/12">
                <div class="mb-10">
                    <h3 class="uppercase font-extrabold text-4xl">Pets</h3>
                </div>
                <div class="overflow-x-hidden flex items-center justify-start" id="petList">
                    <div class="flex-none bg-white w-96 rounded-t-2xl rounded-l-2xl mr-5 ml-5">
                        <div class="p-0 m-0 bg-cover bg-center">
                            <img src="img/cover.png" class="rounded-t-2xl object-cover h-80 w-full lg:w-full lg:h-80">
                        </div>
                        <div class="p-5 text-center">
                            <h3 class="font-bold text-xl">PET NAME</h3>
                            <span class="text-gray-500">PET BREED</span>
                        </div>
                    </div>
                    <div class="flex-none bg-white w-96 rounded-t-2xl rounded-l-2xl mr-5 ml-5">
                        <div class="p-0 m-0 bg-cover bg-center">
                            <img src="img/cover.png" class="rounded-t-2xl object-cover h-80 w-full lg:w-full lg:h-80">
                        </div>
                        <div class="p-5 text-center">
                            <h3 class="font-bold text-xl">PET NAME</h3>
                            <span class="text-gray-500">PET BREED</span>
                        </div>
                    </div>
                    <div class="flex-none bg-white w-96 rounded-t-2xl rounded-l-2xl mr-5 ml-5">
                        <div class="p-0 m-0 bg-cover bg-center">
                            <img src="img/cover.png" class="rounded-t-2xl object-cover h-80 w-full lg:w-full lg:h-80">
                        </div>
                        <div class="p-5 text-center">
                            <h3 class="font-bold text-xl">PET NAME</h3>
                            <span class="text-gray-500">PET BREED</span>
                        </div>
                    </div>
                    <div class="flex-none bg-white w-96 rounded-t-2xl rounded-l-2xl mr-5 ml-5">
                        <div class="p-0 m-0 bg-cover bg-center">
                            <img src="img/cover.png" class="rounded-t-2xl object-cover h-80 w-full lg:w-full lg:h-80">
                        </div>
                        <div class="p-5 text-center">
                            <h3 class="font-bold text-xl">PET NAME</h3>
                            <span class="text-gray-500">PET BREED</span>
                        </div>
                    </div>
                    <div class="flex-none bg-white w-96 rounded-t-2xl rounded-l-2xl mr-5 ml-5">
                        <div class="p-0 m-0 bg-cover bg-center">
                            <img src="img/cover.png" class="rounded-t-2xl object-cover h-80 w-full lg:w-full lg:h-80">
                        </div>
                        <div class="p-5 text-center">
                            <h3 class="font-bold text-xl">PET NAME</h3>
                            <span class="text-gray-500">PET BREED</span>
                        </div>
                    </div>
                    <div class="flex-none bg-white w-96 rounded-t-2xl rounded-l-2xl mr-5 ml-5">
                        <div class="p-0 m-0 bg-cover bg-center">
                            <img src="img/cover.png" class="rounded-t-2xl object-cover h-80 w-full lg:w-full lg:h-80">
                        </div>
                        <div class="p-5 text-center">
                            <h3 class="font-bold text-xl">PET NAME</h3>
                            <span class="text-gray-500">PET BREED</span>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article id="blogs" class="bg-white py-10 grid grid-cols-1 gap-2">
            <div class="col-span-2">
                <div class="container mx-auto w-10/12 mb-16">
                    <div class="mt-10 mb-10">
                        <h3 class="uppercase font-extrabold text-4xl">Latest Blogs</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-8">
                        @foreach ($blogs as $blog)
                        <a href="/blogs/{{ $blog->id }}" class="group">
                            <div class="bg-gray-100 shadow-md rounded-l-lg rounded-t-lg border-b-4 group-hover:border-b-4 group-hover:border-green-800 transition duration-300">
                                <div class="bg-cover bg-center">
                                    <img src="{{ asset('img/blogs/'.$blog->image.'') }}" alt="{{ $blog->title }}" class="rounded-t-lg w-screen h-64">
                                </div>
                                <div class="p-4">
                                    <div class="uppercase tracking-wide p-1 text-xl text-gray-800 group-hover:text-green-700 font-bold transition duration-300">
                                        <p class="truncate">{{ $blog->title }}</p>
                                    </div>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 mt-1 p-1">
                                        <div class="inline-flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z" />
                                            </svg>
                                            <p class="ml-1">{{ $blog->author }}.</p>
                                        </div>
                                        <div class="inline-flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                            </svg>
                                            <p class="ml-1">{{ $blog->created_at->format('d M, Y')}}</p>
                                        </div>
                                    </div>

                                    <p class="mt-2 text-slate-500 p-1 text-justify">{{ Str::substr($blog->description, 0, 180) }} ...</p>
                                    <div class="mt-6 mb-3 lg:mt-5">
                                        <span class="group-hover:bg-green-700 p-2 rounded group-hover:text-white transition duration-300">Read More</span>
                                    </div>
                                </div>
                            </div>
                        </a>                            
                        @endforeach
                    </div>
                </div>
            </div>
        </article>
    </div>
    @include('partials.footer')