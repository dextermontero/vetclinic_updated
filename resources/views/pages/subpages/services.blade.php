@include("partials.header", [$title = ''.$services->title. ' | Vet Clinic and Petcare System'])
    
    <div class="flex flex-col ">
        <article id="services" class="py-10 grid grid-cols-1 gap-2">
            <div class="col-span-2">
                <div class="container mx-auto w-10/12 mb-16">
                    <a href="{{ url()->previous() }}" class="inline-flex mb-5 uppercase items-center p-1 text-black border-b-4 border-gray-200 hover:border-b-4 hover:border-green-800 transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                        <span class="text-2xl ml-2">Back</span>
                    </a>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div class="bg-cover bg-center shadow-lg rounded">
                            <img src="{{ asset('img/services/'.$services->image.'')}}" alt="{{ $services->title}}" class="rounded h-97 w-screen">
                        </div>
                        <div class="">
                            <h3 class="uppercase font-extrabold text-4xl">{{ $services->title }}</h3>
                            <span class="text-2xl font-bold">₱  {{ number_format($services->cost) }}</span>
                            <div class="pt-2 border-2 h-80 overflow-y-auto">
                                <p class="text-gray-500 text-justify">{{ $services->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>

    @include('partials.footer')