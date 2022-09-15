@include("partials.header", [$title])
    
    <div class="flex flex-col ">
        <article id="services" class="py-10 grid grid-cols-1 gap-2">
            <div class="col-span-2">
                <div class="container mx-auto w-10/12 mb-16">
                    <div class="mb-10">
                        <h3 class="uppercase font-extrabold text-4xl ">Our Services</h3>
                    </div>
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                        @foreach ($services as $service)
                            <a href="/services/{{ $service->id }}" class="group ">
                                <div class="bg-white rounded-t-lg shadow-lg border-b-4 group-hover:border-b-4 group-hover:border-green-800 transition duration-300">
                                    <div class="bg-cover bg-center">
                                        <img src="{{ asset('img/services/'.$service->image.'')}} " alt="{{ $service->title}}" class="rounded-t-lg h-56 w-screen">
                                    </div>
                                    <div class="p-5">
                                        <span class="uppercase tracking-wide font-semibold">
                                            <p class="truncate">{{ $service->title }}</p>
                                        </span>
                                        <p class="text-gray-500 text-justify hidden lg:block">{{ Str::substr($service->description, 0, 162) }}...</p>
                                        <div class="mt-3 lg:mt-5">
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