@include("partials.header", [$title])

    <div class="flex flex-col">
        <article class="py-10 grid grid-cols-1 gap-2 mb-10">
            <div class="col-span-2">
                <div class="container mx-auto">
                    <div class="mt-10 mb-10 ml-4 sm:ml-24 md:ml-0 lg:ml-0 xl:ml-14">
                        <h3 class="uppercase font-extrabold text-4xl ">Latest Blogs</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="col-span-2">
                            @foreach ($blogs as $blog)
                            <a href="/blogs/{{ $blog->id }}" class="group">
                                <div class="max-w-md mx-auto bg-white rounded-r-xl shadow-md overflow-hidden border-b-4 group-hover:border-b-4 group-hover:border-green-800 md:max-w-3xl lg:max-w-4xl mb-5 transition duration-300">
                                    <div class="md:flex">
                                        <div class="md:shrink-0 bg-cover bg-center">
                                            <img class="h-48 w-full md:h-80 md:w-96 lg:h-64 lg:w-80" src="img/blogs/{{ $blog->image }}" alt="{{ $blog->title}}">
                                        </div>
                                        <div class="p-8">
                                            <div class="uppercase tracking-wide text-lg text-slate-500 font-semibold">{{ $blog->title}}</div>
                                            <p class="mt-2 text-slate-500 h-24 text-ellipsis">{{ Str::substr($blog->description, 0, 180) }} ...</p>
                                            <div class="mt-6 md:mt-11 lg:mt-11 xl:mt-0">
                                                <span class="p-2 border-b-2 border-green-800 group-hover:bg-green-800 group-hover:text-white group-hover:rounded-t-lg rounded-t-lg transition duration-300">Read Blog</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>  
                            @endforeach
                            <div class="container mx-auto w-10/12">
                                {{ $blogs->links('vendor.pagination.custom')}}
                            </div>
                        </div>
                        <x-BlogSidebar></x-BlogSidebar>
                    </div>
                </div>
            </div>
        </article>
    </div>
    @include('partials.footer')