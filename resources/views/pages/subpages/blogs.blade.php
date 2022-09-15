@include("partials.header", [$title = ''.$blogs->title. ' | Vet Clinic and Petcare System'])

    <div class="flex flex-col bg-white">
        <article class="py-10 grid grid-cols-1 gap-2 mb-10 ">
            <div class="col-span-2">
                <div class="container mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="col-span-2">
                            <a href="{{ url()->previous() }}" class="inline-flex mb-5 uppercase items-center p-1 text-black border-b-4 border-white hover:border-b-4 hover:border-green-800 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                                </svg>
                                <span class="text-2xl ml-2">Back</span>
                            </a>
                            <div class="grid grid-cols-1 gap-4 mb-2">
                                <img class="h-64 w-full object-cover md:h-96 md:w-full" src="{{ asset('img/blogs/'.$blogs->image.'')}}" >
                                <div class="p-8 md:p-4">
                                    <div class="uppercase tracking-wide text-3xl text-gray-700 font-bold text-justify">{{ $blogs->title }}</div>
                                    <span class="text-gray-600 text-md">{{ Carbon\Carbon::parse($blogs->created_at)->diffForHumans() }}</span>
                                    <p class="mt-2 text-gray-700 text-justify text-lg" style="text-indent: 25px;">
                                        {{ $blogs->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <x-BlogSidebar></x-BlogSidebar>
                    </div>
                </div>
            </div>
        </article>
    </div>
    @include('partials.footer')